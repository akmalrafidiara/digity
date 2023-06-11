<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wishlists = Wishlist::where('user_id', auth()->user()->id)->get();
        return view(
            'dashboard/wishlist/index',
            compact('wishlists')
        );
    }

    public function detail()
    {
        return view('dashboard/wishlist/detail');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
        ]);

        $product_id = Product::where('id', $request->product_id)->first();

        // check if product already in wishlist
        $wishlist = Wishlist::where('user_id', auth()->user()->id)->where('product_id', $product_id->id)->first();
        if ($wishlist) {
            // return redirect()->back()->with('error', 'Product already in wishlist');
            Wishlist::where('user_id', auth()->user()->id)->where('product_id', $product_id->id)->delete();
            return response()->json([
                'isWishlist' => false,
                'productId' => $product_id->id,
            ]);
        } else {
            Wishlist::create([
                'user_id' => auth()->user()->id,
                'product_id' => $product_id->id,
                'date' => now(),
            ]);
            return response()->json([
                'isWishlist' => true,
                'productId' => $product_id->id,
            ]);
        }

        // return redirect()->back()->with('success', 'Product added to wishlist');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wishlist $wishlist)
    {
        //
    }
}
