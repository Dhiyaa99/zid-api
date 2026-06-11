<?php

namespace App\Services\Zid\Storefront;

use Illuminate\Http\Request;
use App\Services\Zid\Shared\BaseZidService;

class SessionService extends BaseZidService
{
    public function getSessionCookie(Request $request): ?string
    {
        return $request->header('Zid-Session-Cookie')
            ?? $request->header('Cookie');
    }

    public function getCsrfToken(Request $request): ?string
    {
        return $request->header('X-CSRFToken');
    }

 public function storefrontHeaders(Request $request): array
{
    $headers = [
        'Accept' => 'application/json',
        'Accept-Language' => $request->header('locale', 'ar-sa'),
        'Zid-Client-Platform' => 'browser',
    ];

    if ($cookie = $this->getSessionCookie($request)) {
        $headers['Cookie'] = $cookie;

        if ($locale = $request->header('locale')) {
            $headers['Cookie'] .= "; locale={$locale}";
        }

        if ($visitorId = $request->header('visitor_id')) {
            $headers['Cookie'] .= "; visitor_id={$visitorId}";
        }
    }

    if ($csrf = $this->getCsrfToken($request)) {
        $headers['X-CSRFToken'] = $csrf;
    }

    return $headers;
}
}