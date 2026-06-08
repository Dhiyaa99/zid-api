<?php

namespace App\Services\Zid\Marketing;

use Illuminate\Support\Facades\Http;
use App\Services\Zid\Shared\BaseZidService;

class MarketingService extends BaseZidService
{
    /**
     * List Coupons
     */
    public function listCoupons(array $filters = [])
    {
        $response = Http::withHeaders(
            $this->managerHeaders()
        )->get(
            "{$this->baseUrl}/managers/store/coupons",
            $filters
        );

        if ($response->failed()) {
            return $this->errorResponse(
                $response->json(),
                'Failed to fetch coupons'
            );
        }

        return $this->successResponse(
            $response->json(),
            'Coupons fetched successfully'
        );
    }

    /**
     * View Coupon
     */
    public function viewCoupon($couponId)
    {
        $response = Http::withHeaders(
            $this->managerHeaders()
        )->get(
            "{$this->baseUrl}/managers/store/coupons/{$couponId}/view"
        );

        if ($response->failed()) {
            return $this->errorResponse(
                $response->json(),
                'Failed to fetch coupon'
            );
        }

        return $this->successResponse(
            $response->json(),
            'Coupon fetched successfully'
        );
    }

        /**
        * List Bundle Offers
        */

    public function listBundleOffers(
    array $params = [],
    string $currency = 'SAR'
)
{
    $response = Http::withHeaders([
        ...$this->managerHeaders(),

        'Currency' => $currency,
    ])->get(
        "{$this->baseUrl}/managers/store/discounts/bundle-offers",
        $params
    );

    if ($response->failed()) {

        return $this->errorResponse(
            $response->json(),
            'Failed to fetch bundle offers'
        );
    }

    return $this->successResponse(
        $response->json(),
        'Bundle offers fetched successfully'
    );
}
}