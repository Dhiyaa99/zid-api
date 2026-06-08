<?php

namespace App\Services\Zid\Merchant;

use Illuminate\Support\Facades\Http;
use App\Services\Zid\Shared\BaseZidService;

class StoreService extends BaseZidService
{
    /**
     * Get Store Branding
     */
    public function branding()
    {
        $response = Http::withHeaders(
            $this->storeHeaders()
        )->get(
            "{$this->baseUrl}/managers/account/store/branding"
        );

        if ($response->failed()) {

            return $this->errorResponse(
                $response->json(),
                'Failed to fetch store branding'
            );
        }

        return $this->successResponse(
            $response->json(),
            'Store branding fetched successfully'
        );
    }

    /**
     * Get Store Localization
     */
    public function localization()
    {
        $response = Http::withHeaders(
            $this->storeHeaders()
        )->get(
            "{$this->baseUrl}/managers/account/store/localization"
        );

        if ($response->failed()) {

            return $this->errorResponse(
                $response->json(),
                'Failed to fetch store localization'
            );
        }

        return $this->successResponse(
            $response->json(),
            'Store localization fetched successfully'
        );
    }
}