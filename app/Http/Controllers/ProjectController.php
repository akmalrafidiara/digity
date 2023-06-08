<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projects extends Controller
{
    public function index()
    {
        return view('dashboard/project/index');
    }

    public function createPlan()
    {
        return view('dashboard/project/create');
    }

    public function uploadFile()
    {
        return view('dashboard/project/upload');
    }
}
