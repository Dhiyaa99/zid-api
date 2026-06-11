<?php

namespace App\Services\Zid\Storefront;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\Zid\Shared\BaseZidService;

class AuthService extends BaseZidService
{
    protected SessionService $sessionService;
    protected string $storefrontUrl;

    public function __construct(SessionService $sessionService)
    {
        $this->sessionService = $sessionService;
        $this->storefrontUrl = config('services.zid.storefront_url');
    }

    public function logout(Request $request): array
    {
        $response = Http::withHeaders(
            $this->sessionService->storefrontHeaders($request)
        )->post(
            "{$this->storefrontUrl}/auth/logout"
        );

        return [
            'success' => $response->successful(),
            'message' => $response->successful()
                ? 'Logged out successfully'
                : 'Failed to logout',
            'data' => $response->json(),
        ];
    }
}