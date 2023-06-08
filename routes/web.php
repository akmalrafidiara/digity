<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\InvoiceController;
use App\Models\Transaction;

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

/*
| ----------------------------------
| Role Menu Assist Documentation
| ----------------------------------
| For Admin id : 1
| For Staff id : 2
| For Client id : 3
*/

// | ROUTE FRONTEND |
//auth
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login');

//home
Route::get('/', function () {
    return view('frontend/index');
})->name('home');

//product page
Route::prefix('/products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products');
    Route::get('/detail', [ProductController::class, 'detail'])->name('product.detail');
});

//service page
Route::prefix('/services')->group(function () {
    Route::get('/', function () {
        return view('frontend/service/index');
    });
    Route::get('/detail', function () {
        return view('frontend/service/detail');
    });
});

// | ROUTE DASHBOARD |

// General Route
Route::middleware(['auth'])->prefix('/dashboard')->group(function () {
    //dashboard menu
    Route::get('/', function () {
        return view('dashboard/index');
    });

    //my project menu
    Route::prefix('project')->group(function () {
        Route::get('/', [ProjectController::class, 'index'])->name('project');
        Route::get('/detail', [ProjectController::class, 'detail'])->name('project.detail');
    });

    //setting menu
    Route::get('/setting', function () {
        return view('dashboard/setting/index');
    });

    //logout menu
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');

    // Staff Route with Admin access
    Route::middleware(['role:1,2'])->group(function () {
        //service menu
        Route::prefix('service')->group(function () {
            Route::get('/', [DesignController::class, 'index'])->name('service');
            Route::get('/create', [DesignController::class, 'create'])->name('service.create');
        });

        //product menu
        Route::prefix('product')->group(function () {
            Route::get('/', [ProductController::class, 'index'])->name('product');
            Route::get('/create', [ProductController::class, 'create'])->name('product.create');
        });

        //additional my project menu
        Route::prefix('project')->group(function () {
            Route::get('/create-plan', [ProjectController::class, 'createPlan'])->name('project.createPlan');
            Route::get('/upload-file', [ProjectController::class, 'uploadFile'])->name('project.uploadFile');
        });

        //history menu
        Route::prefix('history')->group(function () {
            Route::get('/', [TransactionController::class, 'history'])->name('history');
            Route::get('/detail', [TransactionController::class, 'history_detail'])->name('history.detail');
        });
    });

    // Admin Route only
    Route::middleware(['role:1'])->group(function () {
        //transaction menu
        Route::prefix('transaction')->group(function () {
            Route::get('/', [TransactionController::class, 'index'])->name('transaction');
            Route::get('/detail', [TransactionController::class, 'detail'])->name('transaction.detail');
            });
        });

        //user menu
        Route::prefix('user')->group(function () {
            Route::get('/', [UserController::class, 'index']);
        Route::get('/create', [UserController::class, 'create'])->name('createUser');
            Route::post('/create', [UserController::class, 'createUser'])->name('storeUser');
            Route::get('/edit/{id}', [UserController::class, 'editUser'])->name('editUser');
            Route::put('/edit', [UserController::class, 'updateUser'])->name('updateUser');
            Route::delete('/delete/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');
        });

        //additional my project menu
        Route::prefix('project')->group(function () {
            Route::get('/create', [ProjectController::class, 'create'])->name('project.create');
        });
    });


    //Client Route only
    Route::middleware(['role:3'])->group(function () {
        //invoice menu
        Route::prefix('invoice')->group(function () {
            Route::get('/', [InvoiceController::class, 'index'])->name('invoice');
            Route::get('/detail', [InvoiceController::class, 'detail'])->name('invoice.detail');
        });

        //wishlist menu
        Route::prefix('wishlist')->group(function () {
            Route::get('/', [WishlistController::class, 'index'])->name('wishlist');
            Route::get('/detail', [WishlistController::class, 'detail'])->name('wishlist.detail' );
        });

        //history menu
        Route::prefix('history')->group(function () {
            Route::get('/', [TransactionController::class, 'history'])->name('history');
            Route::get('/detail', [TransactionController::class, 'history_detail'])->name('history.detail');
        });
});

