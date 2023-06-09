<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::where('pin', 'yes')->get();
        return view('frontend/index', compact('services'));
    }

    public function indexService()
    {
        $services = Service::all();
        return view('frontend/service/index', compact('services'));
    }
}