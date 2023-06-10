<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Service;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('dashboard/product/index', compact('products'));
    }

    public function frontend()
    {
        $products = Product::all();
        return view('frontend/product/index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $services = Service::all();
        return view('dashboard/product/create', compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:55|unique:products',
            'pin' => 'required',
            'service_id' => 'required',
            'status' => 'required',
        ]);

        $slug = str()->slug($request->name);
        $filename = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = 'product.' . $slug . '.' . time() . '.' . $extension;
            $file->move('assets/img/', $filename);
        }

        $product = Product::create([
            'name' => $request->name,
            'slug' => $slug,
            'description' => $request->description,
            'service_id' => $request->service_id,
            'caption' => $request->caption,
            'date' => $request->date,
            'image' => $filename,
            'pin' => $request->pin,
            'status' => $request->status,
        ]);

        return redirect()->route('product')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}