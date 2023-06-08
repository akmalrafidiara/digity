<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('dashboard/service/index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard/service/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name' => 'required|max:55|unique:services',
            'pin' => 'required',
            'price_min' => 'required',
            'status' => 'required',
        ]);

        $slug = str()->slug($request->name);
        $filename = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = 'service.' . $slug . '.' . time() . '.' . $extension;
            $file->move('assets/img/', $filename);
        }

        $service = Service::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'slug' => $slug,
            'caption' => $request->caption,
            'image' => $filename,
            'pin' => $request->pin,
            'price_min' => $request->price_min,
            'price_max' => $request->price_max,
            'status' => $request->status,
        ]);

        $service->save();

        return redirect('/dashboard/service')->with('status', 'Service berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
