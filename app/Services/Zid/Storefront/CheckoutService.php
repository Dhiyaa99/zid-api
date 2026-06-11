<?php

namespace App\Services\Zid\Storefront;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\Zid\Shared\BaseZidService;

class CheckoutService extends BaseZidService
{
    protected string $storefrontUrl =
        'https://bstlia.zid.store';

    public function __construct(
        protected SessionService $sessionService
    ) {}

    public function getShippingMethods(
        Request $request
    ) {
        $response = Http::withHeaders(
            $this->sessionService
                ->storefrontHeaders($request)
        )->get(
            "{$this->storefrontUrl}/api/v1/cart/checkout/shipping-methods",
            [
                'method' => 'delivery',
                'set_default' => true,
            ]
        );

        if ($response->failed()) {

            return $this->errorResponse(
                $response->json(),
                'Failed to fetch shipping methods'
            );
        }

        return $this->successResponse(
            $response->json(),
            'Shipping methods fetched successfully'
        );
    }


    public function selectShippingMethod(
    Request $request,
    int $shippingMethodId
) {
    $response = Http::withHeaders(
        $this->sessionService
            ->storefrontHeaders($request)
    )->post(
        "{$this->storefrontUrl}/api/v1/cart/checkout/shipping-methods?method=delivery",
        [
            'shipping_method_id' => $shippingMethodId,
        ]
    );

    if ($response->failed()) {

        return $this->errorResponse(
            $response->json(),
            'Failed to select shipping method'
        );
    }

    return $this->successResponse(
        $response->json(),
        'Shipping method selected successfully'
    );
}

public function getPaymentMethods(
    Request $request
) {
    $response = Http::withHeaders(
        $this->sessionService
            ->storefrontHeaders($request)
    )->get(
        "{$this->storefrontUrl}/api/v1/cart/checkout/payment-methods",
        [
            'exclude' => 'samsung_pay',
        ]
    );

    if ($response->failed()) {

        return $this->errorResponse(
            $response->json(),
            'Failed to fetch payment methods'
        );
    }

    return $this->successResponse(
        $response->json(),
        'Payment methods fetched successfully'
    );
}

public function verifyCheckout(
    Request $request
) {
    $response = Http::withHeaders(
        $this->sessionService
            ->storefrontHeaders($request)
    )->post(
        "{$this->storefrontUrl}/api/v1/cart/checkout/verify"
    );

    if ($response->failed()) {

        return $this->errorResponse(
            $response->json(),
            'Checkout verification failed'
        );
    }

    return $this->successResponse(
        $response->json(),
        'Checkout verified successfully'
    );
}

public function purchaseEvent(Request $request)
{
    $response = Http::withHeaders(
        $this->sessionService
            ->storefrontHeaders($request)
    )->get(
        "{$this->storefrontUrl}/api/v1/orders/purchase-event/"
    );

    if ($response->failed()) {
        return $this->errorResponse(
            $response->json(),
            'Failed to fetch purchase event'
        );
    }

    return $this->successResponse(
        $response->json(),
        'Purchase event fetched successfully'
    );
}
}