<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('dashboard/dashboard');
});

Route::get('/dashboard/service', function () {
    return view('dashboard/admin/service');
});

Route::get('/dashboard/transaction', function () {
    return view('dashboard/admin/transaction');
});

Route::get('/dashboard/user', function () {
    return view('dashboard/admin/user');
});

Route::get('/dashboard/order', function () {
    return view('dashboard/admin/order');
});

Route::get('/dashboard/project', function () {
    return view('dashboard/admin/project');
});

Route::get('/dashboard/invoice', function () {
    return view('dashboard/admin/invoice');
});