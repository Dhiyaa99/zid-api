<?php

namespace App\Services\Zid\Merchant;

use App\Services\Zid\Shared\BaseZidService;
use App\Models\ZidStore;
use Illuminate\Support\Facades\Http;


class CustomerService extends BaseZidService
{
    /**
     * List Customers
     */
    public function listCustomers($params = [])
    {
        $response = Http::withHeaders(
            $this->managerHeaders()
        )->get(
            "{$this->baseUrl}/managers/store/customers",
            $params
        );

        if ($response->failed()) {
            return $this->errorResponse(
                'Failed to fetch customers',
                $response->json()
            );
        }

        return $this->successResponse(
            'Customers fetched successfully',
            $response->json()
        );
    }

    /**
     * View Customer
     */
    public function getCustomer($id)
    {
        $response = Http::withHeaders(
            $this->managerHeaders()
        )->get(
            "{$this->baseUrl}/managers/store/customers/{$id}"
        );

        if ($response->failed()) {
            return $this->errorResponse(
                'Failed to fetch customer',
                $response->json()
            );
        }

        return $this->successResponse(
            'Customer fetched successfully',
            $response->json()
        );
    }

    /**
     * Create Customer
     */
    public function createCustomer($data)
    {
        $response = Http::withHeaders(
            $this->managerHeaders()
        )->post(
            "{$this->baseUrl}/managers/store/customers",
            $data
        );

        if ($response->failed()) {
            return $this->errorResponse(
                'Failed to create customer',
                $response->json()
            );
        }

        return $this->successResponse(
            'Customer created successfully',
            $response->json()
        );
    }

    /**
     * Update Customer
     */
    public function updateCustomer($id, $data)
    {
        $response = Http::withHeaders(
            $this->managerHeaders()
        )->put(
            "{$this->baseUrl}/managers/store/customers/{$id}",
            $data
        );

        if ($response->failed()) {
            return $this->errorResponse(
                'Failed to update customer',
                $response->json()
            );
        }

        return $this->successResponse(
            'Customer updated successfully',
            $response->json()
        );
    }

    /**
     * Delete Customer
     */
    public function deleteCustomer($id)
    {
        $response = Http::withHeaders(
            $this->managerHeaders()
        )->delete(
            "{$this->baseUrl}/managers/store/customers/{$id}"
        );

        if ($response->failed()) {
            return $this->errorResponse(
                'Failed to delete customer',
                $response->json()
            );
        }

        return $this->successResponse(
            'Customer deleted successfully',
            $response->json()
        );
    }
}