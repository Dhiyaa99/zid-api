<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Zid\Storefront\CartService;
use App\Services\Zid\Storefront\SessionService;
use App\Services\Zid\Storefront\CheckoutService;
use App\Services\Zid\Storefront\ScriptsService;
use App\Services\Zid\Storefront\AuthService;


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

    //constructor
    public function __construct(
    protected AuthService $authService,
    protected CartService $cartService,
    protected ScriptsService $scriptsService,
    protected PurchaseEventService $purchaseEventService,
) {}


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

public function paymentMethods(
    Request $request,
    CheckoutService $service
) {
    return response()->json(
        $service->getPaymentMethods(
            $request
        )
    );
}

public function verifyCheckout(
    Request $request,
    CheckoutService $service
) {
    return response()->json(
        $service->verifyCheckout(
            $request
        )
    );
}

/**
 * Purchase Event
 */
public function purchaseEvent(
    Request $request,
    CheckoutService $service
) {
    return response()->json(
        $service->purchaseEvent(
            $request
        )
    );
}


public function scripts(
    Request $request,
    ScriptsService $service
)
{
    return response()->json(
        $service->scripts($request)
    );
}

/**
 * Logout user from Zid session.
 */
public function logout(Request $request)
{
    return response()->json(
        $this->authService->logout($request)
    );
}
}