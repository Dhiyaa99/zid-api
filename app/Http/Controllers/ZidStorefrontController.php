<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Zid\Storefront\CartService;
use App\Services\Zid\Storefront\SessionService;
use App\Services\Zid\Storefront\CheckoutService;


class ZidStorefrontController extends Controller
{
    /**
     * Test Session
     */
    public function testSession(
        Request $request,
        SessionService $service
    ) {
        return response()->json([
            'headers' => $service->storefrontHeaders($request),
            'webview_headers' => $service->webviewHeaders($request),
        ]);
    }

    /**
     * Get Cart
     */
    
    public function cart(
        Request $request,
        CartService $service
    ) {
        return response()->json(
            $service->getCart($request)
        );
    }

///     /**
//      * Add to Cart
//      */
    public function addToCart(
    Request $request,
    CartService $service
)
{
    $validated = $request->validate([

        'product_id' => 'required|string',

        'quantity' => 'required|integer|min:1',

    ]);

    return response()->json(

        $service->addItem(
            $request,
            $validated
        )
    );
}

public function updateCartItem(
    Request $request,
    int $itemId,
    CartService $service
)
{
    $validated = $request->validate([

        'quantity' => [
            'required',
            'integer',
            'min:1',
        ]

    ]);

    return response()->json(

        $service->updateItem(
            $request,
            $itemId,
            $validated['quantity']
        )
    );
}
public function deleteCartItem(
    Request $request,
    int $itemId,
    CartService $service
)
{
    return response()->json(
        $service->deleteItem(
            $request,
            $itemId
        )
    );
}

// 
public function applyCoupon(
    Request $request,
    CartService $service
)
{
    $request->validate([
        'coupon_code' => 'required|string'
    ]);

    return response()->json(
        $service->applyCoupon(
            $request,
            $request->query('coupon_code')
        )
    );
}

public function shippingMethods(
    Request $request,
    CheckoutService $service
) {
    return response()->json(
        $service->getShippingMethods($request)
    );
}

public function selectShippingMethod(
    Request $request,
    CheckoutService $service
)
{
    $validated = $request->validate([
        'shipping_method_id' => 'required|integer'
    ]);

    return response()->json(
        $service->selectShippingMethod(
            $request,
            $validated['shipping_method_id']
        )
    );
}
}