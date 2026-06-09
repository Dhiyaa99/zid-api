<?php

namespace App\Services\Zid\Storefront;

use App\Services\Zid\ZidService;

class CheckoutService extends ZidService
{
    public function __construct(
    protected SessionService $sessionService
) {}

   public function getShippingMethods(
    Request $request
) {
    $response = Http::withHeaders(
        $this->sessionService->storefrontHeaders($request)
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
}