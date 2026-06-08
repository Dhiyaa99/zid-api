<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Models\ZidStore;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/connect-zid', function () {
    $url = 'https://oauth.zid.sa/oauth/authorize?' . http_build_query([
        'client_id' => env('ZID_CLIENT_ID'),
        'redirect_uri' => env('ZID_REDIRECT_URI'),
        'response_type' => 'code',
    ]);
    return redirect($url);
});

Route::get('/callback', function () {
    $code = request('code');

    if (!$code) {
        return response()->json([
            'status' => 'error',
            'message' => 'No code received from Zid'
        ], 400);
    }
    
    $response = Http::asForm()->post('https://oauth.zid.sa/oauth/token', [
            'grant_type' => 'authorization_code',
            'client_id' => env('ZID_CLIENT_ID'),
            'client_secret' => env('ZID_CLIENT_SECRET'),
            'redirect_uri' => env('ZID_REDIRECT_URI'),
            'code' => $code,
        ]);

        $data = $response->json();

        if (!$response->successful()) {
            return response()->json([
                'status' => 'error',
                'zid_response' => $data,
            ], 400);
        }

        ZidStore::create([
            'access_token' => $data['access_token'] ?? null,
            'refresh_token' => $data['refresh_token'] ?? null,
            'expires_at' => now()->addSeconds($data['expires_in'] ?? 3600),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Zid connected successfully',
            'data' => $data,
        ]);
});

Route::get('/check-store', function () {
    return \App\Models\ZidStore::latest()->first();
});


