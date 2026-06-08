<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Zid\Merchant\ProductService;
use App\Services\Zid\Merchant\CategoryService;
use App\Services\Zid\Merchant\OrderService;
use App\Services\Zid\Merchant\ShippingService;
use App\Services\Zid\Merchant\CustomerService;
use App\Services\Zid\Marketing\MarketingService;
use App\Services\Zid\Merchant\StoreService;

class ZidMerchantController extends Controller
{
    // 🟢 Products
    public function products(Request $request, ProductService $service)
    {
        return response()->json(
            $service->listProducts($request->all())
        );
    }

    public function product($id, ProductService $service)
    {
        return $service->viewProduct($id);
    }

    // 🔴 Categories
    public function categories(CategoryService $service)
    {
        return response()->json($service->listCategories());
    }

    public function category($id, CategoryService $service)
    {
        return response()->json(
            $service->viewCategory($id)
        );
    }

    public function productVouchers($id, ProductService $service)
    {
        return response()->json(
            $service->listProductVouchers($id)
        );
    }

    public function badges(ProductService $service)
    {
        return response()->json(
            $service->listBadges()
        );
    }

    public function attributes(ProductService $service)
    {
        return response()->json(
            $service->listAttributes()
        );
    }

    public function attribute($id, ProductService $service)
    {
        return response()->json(
            $service->viewAttribute($id)
        );
    }

    public function productImages(
        $id,
        Request $request,
        ProductService $service
    )
    {
        return response()->json(
            $service->listProductImages(
                $id,
                $request->all()
        )
     );
    }

    public function reviews($type, Request $request, ProductService $service)
    {
        return response()->json(
            $service->listReviews(
                $type,
                $request->all()
            )
        );
    }

    public function order($id, OrderService $service)
    {
        return response()->json(
            $service->viewOrder($id)
        );
    }

    public function orders(Request $request, OrderService $service)
    {
        return response()->json(
            $service->listOrders($request->all())
        );
    }


    public function abandonedCarts(Request $request, OrderService $service)
    {
        return response()->json(
            $service->listAbandonedCarts($request->all())
        );
    }

    public function abandonedCart($id, OrderService $service)
    {
        return response()->json(
            $service->viewAbandonedCart($id)
        );
    }

    public function shippingMethods(Request $request, ShippingService $service)
    {
        return response()->json(
            $service->listShippingMethods(
                $request->payload_type ?? 'default'
                )
        );
    }

    // 👤 Customers

public function customers(
    Request $request,
    CustomerService $service
)
{
    return response()->json(
        $service->listCustomers(
            $request->all()
        )
    );
}

public function customer(
    $id,
    CustomerService $service
)
{
    return response()->json(
        $service->getCustomer($id)
    );
}

public function createCustomer(
    Request $request,
    CustomerService $service
)
{
    return response()->json(
        $service->createCustomer(
            $request->all()
        )
    );
}

public function updateCustomer(
    $id,
    Request $request,
    CustomerService $service
)
{
    return response()->json(
        $service->updateCustomer(
            $id,
            $request->all()
        )
    );
}

public function deleteCustomer(
    $id,
    CustomerService $service
)
{
    return response()->json(
        $service->deleteCustomer($id)
    );
}

public function coupons(
    Request $request,
    MarketingService $service
)
{
    return response()->json(
        $service->listCoupons(
            $request->all()
        )
    );
}

public function coupon(
    $id,
    MarketingService $service
)
{
    return response()->json(
        $service->viewCoupon($id)
    );
}

public function bundleOffers(
    Request $request,
    MarketingService $service
)
{
    return response()->json(

        $service->listBundleOffers(

            $request->except('currency'),

            $request->currency ?? 'SAR'
        )
    );
}

public function branding(
    StoreService $service
)
{
    return response()->json(

        $service->branding()
    );
}

public function localization(
    StoreService $service
)
{
    return response()->json(

        $service->localization()
    );
}
}
