<?php

namespace App\Services\Zid\Merchant;

use Illuminate\Support\Facades\Http;
use App\Models\ZidStore;
use App\Services\Zid\Shared\BaseZidService;

class CategoryService extends BaseZidService
{
    /// Get all categories
    public function listCategories()
    {
        $response = Http::withHeaders(
            $this->managerHeaders()
        )->get (
            "{$this->baseUrl}/managers/store/categories"
        );

        if ($response->failed()) {
            return $this->errorResponse(
                'Failed to fetch categories',
                $response->json()
            );
        }

        return $this->successResponse(
            $response->json()
        );
    }

    public function viewCategory($categoryId)
    {
        $response = Http::withHeaders(
            $this->managerHeaders()
        )->get (
            "{$this->baseUrl}/managers/store/categories/{$categoryId}/view"
        );

        if ($response->failed()) {
            return $this->errorResponse(
                'Failed to fetch category',
                $response->json()
            );
        }

        return $this->successResponse(
            $response->json()
        );
    }
}