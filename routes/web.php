<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('frontend/index');
});

Route::get('/dashboard', function () {
    return view('dashboard/index');
});

Route::get('/dashboard/service', function () {
    return view('dashboard/service/index');
});
Route::get('/dashboard/service/create', function () {
    return view('dashboard/service/create');
});

Route::get('/dashboard/transaction', function () {
    return view('dashboard/transaction/index');
});

Route::get('/dashboard/user', function () {
    return view('dashboard/user/index');
});
Route::get('/dashboard/user/create', function () {
    return view('dashboard/user/create');
});

Route::get('/dashboard/order', function () {
    return view('dashboard/order/index');
});

Route::get('/dashboard/project', function () {
    return view('dashboard/project/index');
});
Route::get('/dashboard/project/create', function () {
    return view('dashboard/project/create');
});
Route::get('/dashboard/project/detail', function () {
    return view('dashboard/project/detail');
});

Route::get('/dashboard/invoice', function () {
    return view('dashboard/invoice/index');
});

Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
