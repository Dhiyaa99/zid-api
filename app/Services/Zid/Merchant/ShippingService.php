<?php 

namespace App\Services\Zid\Merchant;
use Illuminate\Support\Facades\Http;
use App\Models\ZidStore;
use App\Services\Zid\Shared\BaseZidService;

class ShippingService extends BaseZidService
{
    public function listShippingMethods($payloadType = 'default')
    {
        $response = Http::withHeaders(
            $this->managerHeaders()
        )->get (
            "{$this->baseUrl}/managers/store/delivery-options",
            [
                'payload_type' => $payloadType
            ]
            );

            if ($response->failed()) {
                return $this->errorResponse(
                    'Failed to fetch shipping methods',
                    $response->json()
                );
            }

            return $this->successResponse(
                $response->json(),
                'Shipping methods fetched successfully',           
            );
    }
}