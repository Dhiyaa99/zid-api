<?php

namespace App\Services\Zid\Storefront;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\Zid\Shared\BaseZidService;

class CartService extends BaseZidService
{
    protected string $storefrontUrl = 'https://bstlia.zid.store';

    public function __construct(
        protected SessionService $sessionService
    ) {}

    public function getCart(Request $request)
    {
        $response = Http::withHeaders(
            $this->sessionService->storefrontHeaders($request)
        )->get(
            "{$this->storefrontUrl}/api/v1/cart"
        );

        if ($response->failed()) {
            return $this->errorResponse(
                $response->json(),
                'Failed to fetch cart'
            );
        }

        return $this->successResponse(
            $response->json(),
            'Cart fetched successfully'
        );
    }

    public function addItem(
    Request $request,
    array $data
)
{
    $response = Http::withHeaders(
        $this->sessionService
            ->storefrontHeaders($request)
    )->post(
        "{$this->storefrontUrl}/api/v1/cart/items",
        [
            'product_id' => $data['product_id'],
            'quantity' => $data['quantity'],
        ]
    );

    if ($response->failed()) {

        return $this->errorResponse(
            $response->json(),
            'Failed to add item to cart'
        );
    }

    return $this->successResponse(
        $response->json(),
        'Item added to cart successfully'
    );
}

public function updateItem(
    Request $request,
    int $itemId,
    int $quantity
) {
    $response = Http::withHeaders(
        $this->sessionService->storefrontHeaders($request)
    )->asForm()->patch(
        "{$this->storefrontUrl}/api/v1/cart/items/{$itemId}",
        [
            'quantity' => $quantity,
        ]
    );

    if ($response->failed()) {
        return $this->errorResponse(
            $response->json(),
            'Failed to update cart item'
        );
    }

    return $this->successResponse(
        $response->json(),
        'Cart item updated successfully'
    );
}
public function deleteItem(
    Request $request,
    int $itemId
)
{
    $response = Http::withHeaders(
        $this->sessionService
            ->storefrontHeaders($request)
    )->delete(
        "{$this->storefrontUrl}/api/v1/cart/items/{$itemId}"
    );

    if ($response->failed()) {

        return $this->errorResponse(
            $response->json(),
            'Failed to delete cart item'
        );
    }

    return $this->successResponse(
        $response->json(),
        'Cart item deleted successfully'
    );
}
/// Apply Coupon
public function applyCoupon(
    Request $request,
    string $couponCode
)
{
    $response = Http::withHeaders(
        $this->sessionService
            ->storefrontHeaders($request)
    )->post(
        "{$this->storefrontUrl}/api/v1/cart/coupons?coupon_code={$couponCode}"
    );

    if ($response->failed()) {

        return $this->errorResponse(
            $response->json(),
            'Failed to apply coupon'
        );
    }

    return $this->successResponse(
        $response->json(),
        'Coupon applied successfully'
    );
}
}
