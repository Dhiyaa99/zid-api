<?php

namespace App\Services\Zid\Shared;

use App\Models\ZidStore;
use Illuminate\Support\Facades\Http;

class BaseZidService
{
    protected string $baseUrl = 'https://api.zid.sa/v1';

    protected function store()
    {
        return ZidStore::latest()->first();
    }

    protected function storeHeaders(string $role = 'Manager', string $language = 'en'): array
    {
        $store = $this->store();

        return [
            'Access-Token' => $store->access_token,
            'Store-Id' => env('ZID_STORE_ID'),
            'Accept-Language' => $language,
            'Role' => $role,
        ];
    }

    protected function managerHeaders(string $language = 'en'): array
    {
        $store = $this->store();

        return [
            'Authorization' => 'Bearer ' . env('ZID_AUTHORIZATION_TOKEN'),
            'X-Manager-Token' => $store->access_token,
            'Store-Id' => env('ZID_STORE_ID'),
            'Accept-Language' => $language,
            'Role' => 'Manager',
            'currency' => 'SAR', //should be dynamic based on store settings
        ];
    }

    protected function customerHeaders(string $language = 'en'): array
    {
        return [
            'Store-Id' => env('ZID_STORE_ID'),
            'Accept-Language' => $language,
            'Role' => 'Customer',
        ];
    }

    protected function successResponse($data, $message = null): array
    {
        return [
            'success' => true,
            'message' => $message,
            'data' => $data,
        ];
    }

    protected function errorResponse($message, $errors = null): array
    {
        return [
            'success' => false,
            'message' => $message,
            'errors' => $errors,
        ];
    }

    public function voucherHeaders(string $role = 'Manager', string $language = 'en')
    {
        $store = $this->store();

        return [
            'Authorization' => 'Bearer ' . env('ZID_AUTHORIZATION_TOKEN'),
            'X-Manager-Token' => $store->access_token,
            'Store-Id' => env('ZID_STORE_ID'),
            'Accept-Language' => $language,
            'Role' => $role,

        ];
        
    }

    public function cartHeaders(string $language = 'en')
    {
        $store = $this->store();

        return [
            'Authorization' => 'Bearer ' . env('ZID_AUTHORIZATION_TOKEN'),
            'X-Manager-Token' => $store->access_token,
            'Accept-Language' => $language,
        ];
    }
}