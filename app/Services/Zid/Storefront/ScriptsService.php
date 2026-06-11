<?php

namespace App\Services\Zid\Storefront;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Services\Zid\Shared\BaseZidService;

class ScriptsService extends BaseZidService
{
    protected string $storefrontUrl = 'https://bstlia.zid.store';

    public function __construct(
        protected SessionService $sessionService
    ) {}

    public function scripts(Request $request)
    {
        $response = Http::withHeaders(
            $this->sessionService->storefrontHeaders($request)
        )->get(
            "{$this->storefrontUrl}/api/v1/scripts"
        );

        if ($response->failed()) {
            return $this->errorResponse(
                $response->json(),
                'Failed to fetch scripts'
            );
        }

        return $this->successResponse(
            $response->json(),
            'Scripts fetched successfully'
        );
    }
}