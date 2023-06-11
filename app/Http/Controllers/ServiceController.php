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

        return redirect('/dashboard/service')->with('status', 'The service has been successfully added!');
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
    public function edit(string $slug)
    {
        // $service = Service::findOrFail($id);
        $service = Service::where('slug', $slug)->firstOrFail();
        return view('dashboard/service/edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $oldService = Service::where('slug', $slug)->firstOrFail();
        $validatedData = $request->validate([
            'name' => 'required|max:55',
            'pin' => 'required',
            'price_min' => 'required',
            'status' => 'required',
        ]);

        if ($request->slug != $oldService->slug) {
            $validatedData = $request->validate([
                'name' => 'required|max:55|unique:services',
            ]);
            $slug = str()->slug($request->name);
        }

        $filename = $oldService->image;
        if ($request->hasFile('image')) {
            if ($oldService->image) {
                $image_path = 'assets/img/' . $oldService->image;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = 'service.' . $slug . '.' . time() . '.' . $extension;
            $file->move('assets/img/', $filename);
        }

        $service = Service::findOrFail($oldService->id);
        $service->update([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $slug,
            'caption' => $request->caption,
            'image' => $filename,
            'pin' => $request->pin,
            'price_min' => $request->price_min,
            'price_max' => $request->price_max,
            'status' => $request->status,
        ]);

        return redirect('/dashboard/service')->with('status', 'The service has been successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();
        if ($service->image) {
            $image_path = 'assets/img/' . $service->image;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        $service->delete();

        return redirect('/dashboard/service')->with('status', 'The service has been successfully deleted!');
    }
}
