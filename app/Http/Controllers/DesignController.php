<?php

namespace App\Http\Controllers;

use App\Models\design;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend/design/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend/design/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(design $design)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(design $design)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, design $design)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(design $design)
    {
        //
    }
}
