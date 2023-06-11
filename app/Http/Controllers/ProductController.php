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

        return redirect()->route('product')->with('status', 'Product created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $slug)
    {
        $services = Service::all();
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('dashboard/product/edit', compact('product', 'services'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $slug)
    {
        $oldProduct = Product::where('slug', $slug)->firstOrFail();
        $validatedData = $request->validate([
            'name' => 'required|max:55',
            'pin' => 'required',
            'service_id' => 'required',
            'status' => 'required',
        ]);

        if ($request->slug != $oldProduct->slug) {
            $validatedData = $request->validate([
                'name' => 'required|max:55|unique:services',
            ]);
            $slug = str()->slug($request->name);
        }

        // dd($request->all());

        $slug = str()->slug($request->name);
        $filename = $oldProduct->image;
        if ($request->hasFile('image')) {
            if ($oldProduct->image) {
                $image_path = 'assets/img/' . $oldProduct->image;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = 'service.' . $slug . '.' . time() . '.' . $extension;
            $file->move('assets/img/', $filename);
        }

        $product = Product::findOrFail($oldProduct->id);
        $product->update([
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


        return redirect()->route('product')->with('status', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        if ($product->image) {
            $image_path = 'assets/img/' . $product->image;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        $product->delete();

        return redirect('/dashboard/product')->with('status', 'The product has been successfully deleted!');
    }
}
