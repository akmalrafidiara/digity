<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Wishlist;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::where('pin', 'yes')->limit(4)->orderBy('id', 'desc')->get();
        $products = Product::where('pin', 'yes')->where('status', 'active')->limit(5)->orderBy('id', 'desc')->get();
        return view('frontend/index', compact('services', 'products'));
    }

    public function indexProduct()
    {
        $getProducts = Product::all();
        $wishlist = new Wishlist();
        // $getWishlists = ;

        if (auth()->user()) {
            $products = [];
            foreach ($getProducts as $getProduct) {
                $products[] = [
                    'id'        => $getProduct->id,
                    'name'      => $getProduct->name,
                    'slug'      => $getProduct->slug,
                    'image'     => $getProduct->image,
                    'caption'   => $getProduct->caption,
                    'service'   => $getProduct->service,
                    'date'      => $getProduct->date,
                    'wishlisted' => $wishlist->checkUserWishlist($getProduct->id),
                ];
            }
        } else {

            $products = $getProducts;
        }

        return view('frontend/product/index', compact('products'));
    }

    public function detailProduct(String $slug)
    {
        $product = Product::where('slug', $slug)->first();
        $products = Product::where('service_id', $product->service_id)->where('slug', '!=', $slug)->inRandomOrder()->limit(3)->get();
        return view('frontend/product/detail', compact('product', 'products'));
    }

    public function indexService()
    {
        $services = Service::all();
        return view('frontend/service/index', compact('services'));
    }
    public function detailService(String $slug)
    {
        $service = Service::where('slug', $slug)->first();
        $services = Service::where('pin', 'yes')->limit(4)->orderBy('id', 'desc')->get();
        return view('frontend/service/detail', compact('service', 'services'));
    }
}
