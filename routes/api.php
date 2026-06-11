<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZidMerchantController;
use App\Http\Controllers\ZidStorefrontController;
use App\Http\Controllers\CartController;


/*
|--------------------------------------------------------------------------
| Zid Merchant APIs (Admin / Merchant)
|--------------------------------------------------------------------------
*/

Route::prefix('zid/merchant')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Products
    |--------------------------------------------------------------------------
    */

    Route::get('/products', [
        ZidMerchantController::class,
        'products'
    ]);

    Route::get('/products/{id}', [
        ZidMerchantController::class,
        'product'
    ]);

    Route::get('/products/{id}/vouchers', [
        ZidMerchantController::class,
        'productVouchers'
    ]);

    Route::get('/products/{id}/images', [
        ZidMerchantController::class,
        'productImages'
    ]);

    /*
    |--------------------------------------------------------------------------
    | Categories
    |--------------------------------------------------------------------------
    */

    Route::get('/categories', [
        ZidMerchantController::class,
        'categories'
    ]);

    Route::get('/categories/{id}', [
        ZidMerchantController::class,
        'category'
    ]);

    /*
    |--------------------------------------------------------------------------
    | Orders
    |--------------------------------------------------------------------------
    */

    Route::get('/orders', [
        ZidMerchantController::class,
        'orders'
    ]);

    Route::get('/orders/{id}', [
        ZidMerchantController::class,
        'order'
    ]);

    /*
    |--------------------------------------------------------------------------
    | Abandoned Carts
    |--------------------------------------------------------------------------
    */

    Route::get('/carts', [
        ZidMerchantController::class,
        'abandonedCarts'
    ]);

    Route::get('/carts/{id}', [
        ZidMerchantController::class,
        'abandonedCart'
    ]);

    /*
    |--------------------------------------------------------------------------
    | Shipping
    |--------------------------------------------------------------------------
    */

    Route::get('/shipping-methods', [
        ZidMerchantController::class,
        'shippingMethods'
    ]);

    /*
    |--------------------------------------------------------------------------
    | Reviews
    |--------------------------------------------------------------------------
    */

    Route::get('/reviews/{type}', [
        ZidMerchantController::class,
        'reviews'
    ]);

    /*
    |--------------------------------------------------------------------------
    | Badges
    |--------------------------------------------------------------------------
    */

    Route::get('/badges', [
        ZidMerchantController::class,
        'badges'
    ]);

    /*
    |--------------------------------------------------------------------------
    | Attributes
    |--------------------------------------------------------------------------
    */

    Route::get('/attributes', [
        ZidMerchantController::class,
        'attributes'
    ]);

    Route::get('/attributes/{id}', [
        ZidMerchantController::class,
        'attribute'
    ]);

    /*
    |--------------------------------------------------------------------------
    | Customers
    |--------------------------------------------------------------------------
    */

    Route::get('/customers', [
        ZidMerchantController::class,
        'customers'
    ]);

    Route::get('/customers/{id}', [
        ZidMerchantController::class,
        'customer'
    ]);

    Route::post('/customers', [
        ZidMerchantController::class,
        'createCustomer'
    ]);

    Route::put('/customers/{id}', [
        ZidMerchantController::class,
        'updateCustomer'
    ]);

    Route::delete('/customers/{id}', [
        ZidMerchantController::class,
        'deleteCustomer'
    ]);
    /*
    |--------------------------------------------------------------------------
    | Marketing
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/coupons',
        [ZidMerchantController::class, 'coupons']
    );

    Route::get(
        '/coupons/{id}',
        [ZidMerchantController::class, 'coupon']
    );

    Route::get(

    '/bundle-offers',

    [ZidMerchantController::class,
    'bundleOffers']
);
});


/*
|--------------------------------------------------------------------------
| Zid Storefront APIs (Customer App)
|--------------------------------------------------------------------------
*/

Route::prefix('zid/storefront')->group(function () {

    // Cart
    // Checkout
    // Session
    // Scripts


    // Session test
    Route::get(
        '/test-session',
        [ZidStorefrontController::class, 'testSession']
    );

    // Cart
    Route::get(
        '/cart',
        [ZidStorefrontController::class, 'cart']
    );

    Route::post(
    '/cart/items',
    [
        ZidStorefrontController::class,
        'addToCart'
    ]
);

Route::patch(
    '/cart/items/{itemId}',
    [
        ZidStorefrontController::class,
        'updateCartItem'
    ]
);
Route::delete(
    '/cart/items/{itemId}',
    [ZidStorefrontController::class, 'deleteCartItem']
);

Route::post(
    '/cart/coupons',
    [
        ZidStorefrontController::class,
        'applyCoupon'
    ]
);

 Route::get(
        '/checkout/shipping-methods',
        [ZidStorefrontController::class, 'shippingMethods']
    );

    Route::post(
    '/checkout/shipping-methods',
    [ZidStorefrontController::class,
    'selectShippingMethod']
);


Route::get(
    '/checkout/payment-methods',
    [ZidStorefrontController::class,
    'paymentMethods']
);

Route::post(
    '/checkout/verify',
    [ZidStorefrontController::class,
    'verifyCheckout']
);

Route::get(
    '/orders/purchase-event',
    [ZidStorefrontController::class,
    'purchaseEvent']
);

Route::post(
    '/auth/logout',
    [ZidStorefrontController::class, 'logout']
);

Route::get(
    '/scripts',
    [ZidStorefrontController::class, 'scripts']
);
});

/*
|--------------------------------------------------------------------------
| Store Info Branding & Localization
|--------------------------------------------------------------------------
*/
Route::prefix('store')->group(function () {

    Route::get(
        '/branding',
        [ZidMerchantController::class,
        'branding']
    );

    Route::get(
        '/localization',
        [ZidMerchantController::class,
        'localization']
    );
    
});


