<?php

namespace App\Services\Zid\Merchant;

use Illuminate\Support\Facades\Http;
use App\Models\ZidStore;
use App\Services\Zid\Shared\BaseZidService;


class ProductService extends BaseZidService
{
    // List Products
    public function listProducts($params = [], $role = 'Manager')
    {
        $response = Http::withHeaders(
            $this->storeHeaders($role)
        )->get(
            "{$this->baseUrl}/products",
            $params
        );

        if ($response->failed()) {
            return $this->errorResponse(
                'Failed to fetch products',
                $response->json()
            );
        }

        return $this->successResponse(
            $response->json()
        );
    }

    // View Product by ID
    public function viewProduct($id, $role = 'Customer')
    {
        //Customer
        if ($role === 'Customer') {

            return Http::withHeaders(
                $this->customerHeaders()
            )->get (
                "{$this->baseUrl}/products/{$id}"
            )->json();
        }

        // Manager
        return Http::withHeaders(
            $this->managerHeaders('all')
        )->get (
            "{$this->baseUrl}/products/{$id}"
        )->json();
    }

    public function listProductVouchers($productId, $role = 'Manager')
    {
        $response = Http::withHeaders(
            $this->voucherHeaders($role)
        )->get(
            "{$this->baseUrl}/products/{$productId}/vouchers/"
        );

        if ($response->failed()) {
            return $this->errorResponse(
                'Failed to fetch product vouchers',
                $response->json()
            );
        }

        return $this->successResponse(
            $response->json()
        );  
    }

    public function listBadges($role = 'Manager')
    {
        $response = Http::withHeaders(
            $this->voucherHeaders($role)
        )->get (
            "{$this->baseUrl}/badges/"
        );

        if ($response->failed()) {
            return $this->errorResponse(
                'Failed to fetch badges',
                $response->json()
            );
        }

        return $this->successResponse(
            $response->json()
        );
    }

    public function listAttributes($role = 'Manager')
    {
        $response = Http::withHeaders(
            $this->storeHeaders($role)
        )->get (
            "{$this->baseUrl}/attributes/"
        );

        if ($response->failed()) {
            return $this->errorResponse(
                'Failed to fetch attributes',
                $response->json()
            );
        }

        return $this->successResponse(
            $response->json()
        );
    }

    public function viewAttribute($attributeId)
    {
        $response = Http::withHeaders(
            $this->managerHeaders()
        )->get (
            "{$this->baseUrl}/attributes/{$attributeId}"
        );

        if ($response->failed()) {
            return $this->errorResponse(
                'Failed to fetch attribute',
                $response->json()
            );
        }

        return $this->successResponse(
            $response->json()
        );
    }

    public function listProductImages($productId, $params = [])
    {
        $store = $this->store();

        $response = Http::withHeaders([
            'X-Manager-Token' => $store->access_token,
            'Store-Id' => env('ZID_STORE_ID'),
            'Accept-Language' => 'en',
        ])->get (
            "{$this->baseUrl}/products/{$productId}/images",
            $params
        );

        if ($response->failed()) {
            return $this->errorResponse(
                'Failed to fetch product images',
                $response->json()
            );
        }

        return $this->successResponse(
            $response->json()
        );
    }

    public function listReviews($type, $params = [])
    {
        $response = Http::withHeaders([
            ...$this->managerHeaders(),
            'Accept' => 'application/json',
        ])->get (
            "{$this->baseUrl}/managers/store/reviews/{$type}",
            $params
        );
         
        if ($response->failed()) {
            return $this->errorResponse(
                'Failed to fetch reviews',
                $response->json()
            );
        }

        return $this->successResponse(
            $response->json()
        );
    }
}