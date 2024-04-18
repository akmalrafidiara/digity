<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\Project;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [];
        if (auth()->user()->role_id == 1) {
            $data['user'] = User::count();
            $data['product'] = Product::count();
            $data['service'] = Service::where('status', 'available')->count();
            $data['transaction_waiting'] = Transaction::where('status', 'waiting-for-approval')->count();
            $data['project'] = [
                'done' => Project::where('status', 'done')->count(),
                'on-progress' => Project::where('status', 'on-progress')->count(),
                'percent' => Project::where('status', 'done')->count() / (Project::count() + 1) * 100
            ];
        }
        return view('dashboard/index', compact('data'));
    }
}
