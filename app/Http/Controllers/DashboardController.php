<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Service;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->role_id == 1) {
            $data['user'] = User::count();
            $data['product'] = Product::count();
            $data['transaction_waiting'] = Transaction::where('status', 'waiting-for-approval')->count();
            $data['project_ongoing'] = Transaction::where('status', 'progress')->count();
        }
        return view('dashboard/index');
    }
}
