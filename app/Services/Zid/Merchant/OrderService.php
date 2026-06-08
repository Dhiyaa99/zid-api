<?php

namespace App\Services\Zid\Merchant;

use Illuminate\Support\Facades\Http;
use App\Models\ZidStore;
use App\Services\Zid\Shared\BaseZidService;

class OrderService extends BaseZidService
{
    public function viewOrder($orderId)
    {
        $response = Http::withHeaders(
            $this->managerHeaders()
        )->get (
            "{$this->baseUrl}/managers/store/orders/{$orderId}/view"
        );
        
        if ($response->failed()) {
            return $this->errorResponse(
                'Failed to fetch order',
                $response->json()
            );
        }

        return $this->successResponse(
            'Order fetched successfully',
            $response->json()
        );
    }

    public function listOrders($params = [])
    {
        // default payload
        $params = array_merge([
            'payload_type' => 'default',
        ], $params);

        $response = Http::withHeaders(
            $this->managerHeaders()
        )->get (
            "{$this->baseUrl}/managers/store/orders",
            $params
        );

        if ($response->failed()) {
            return $this->errorResponse(
                'Failed to fetch orders',
                $response->json()
            );
        }

        return $this->successResponse(
            'Orders fetched successfully',
            $response->json()
        );
    }  
    
    

    // cart 

    public function listAbandonedCarts($params = [])
    {
        $response = Http::withHeaders(
            $this->cartHeaders()
        )->get (
            "{$this->baseUrl}/managers/store/abandoned-carts",
            $params
        );

        if ($response->failed()) {
            return $this->errorResponse(
                'Failed to fetch abandoned carts',
                $response->json()
            );
        }

        return $this->successResponse(
            $response->json(),
                 'Abandoned carts fetched successfully',
            
        );
    }

    public function viewAbandonedCart($cartId)
    {
        $response = Http::withHeaders(
            $this->cartHeaders()
        )-> get (
            "{$this->baseUrl}/managers/store/abandoned-carts/{$cartId}"
        );

        if ($response->failed()) {
            return $this->errorResponse(
                'Failed to fetch abandoned cart',
                $response->json()
            );
        }

        return $this->successResponse(
            'Abandoned cart fetched successfully',
            $response->json()
        );
    }
}