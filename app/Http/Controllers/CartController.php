<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Zid\CartService;

class CartController extends Controller
{
    public function index(Request $request, CartService $service)
    {
        return response()->json(
            $service->getCart(1)
        );
    }

    public function store(Request $request, CartService $service)
    {
        return response()->json(
            $service->addToCart(1, $request->all())
            );
    }

    public function destroy($id, Request $request, CartService $service, $productId)
    {
        return response()->json(
            $service->removeFromCart(
                $request->user()->id,
                $id
            )
        );
    }

    public function clear(Request $request, CartService $service)
    {
        return response()->json(
            $service->clearCart(
                $request->user()->id
            )
        );
    }
}
