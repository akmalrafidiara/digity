<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectPlanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\InvoiceController;
use App\Models\Transaction;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
// login google
Route::get('/login/google', [UserController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/auth/google/callback', [UserController::class, 'handleGoogleCallback'])->name('login.google.callback');

//home
Route::get('/', [FrontendController::class, 'index'])->name('home');

//product page
Route::prefix('/products')->group(function () {
    Route::get('/', [FrontendController::class, 'indexProduct'])->name('frontend.product');
    Route::get('/{slug}', [FrontendController::class, 'detailProduct'])->name('frontend.product.detail');
    Route::post('/add-to-wishlist', [WishlistController::class, 'store'])->name('frontend.product.add-to-wishlist');
});

//service page
Route::prefix('/services')->group(function () {
    Route::get('/', [FrontendController::class, 'indexService'])->name('frontend.service');
    Route::get('/{slug}', [FrontendController::class, 'detailService'])->name('frontend.service.detail');

    //make order
    Route::middleware(['auth'])->group(function () {
        Route::prefix('/order')->group(function () {
            Route::post('/{id}', [InvoiceController::class, 'makeInvoice'])->name('frontend.service.makeinvoice');
        });
    });
});



// | ROUTE DASHBOARD |

// General Route
Route::middleware(['auth'])->prefix('/dashboard')->group(function () {
    //dashboard menu
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    //my project menu
    Route::prefix('project')->group(function () {
        Route::get('/', [ProjectController::class, 'index'])->name('project');
        Route::get('/detail/{id}', [ProjectController::class, 'detail'])->name('project.detail');
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
            Route::get('/', [ServiceController::class, 'index'])->name('service');
            Route::get('/create', [ServiceController::class, 'create'])->name('service.create');
            Route::post('/create', [ServiceController::class, 'store'])->name('service.store');
            Route::put('/{slug}', [ServiceController::class, 'update'])->name('service.update');
            Route::get('/{slug}', [ServiceController::class, 'edit'])->name('service.edit');
            Route::delete('/{slug}', [ServiceController::class, 'destroy'])->name('service.destroy');
        });

        //product menu
        Route::prefix('product')->group(function () {
            Route::get('/', [ProductController::class, 'index'])->name('product');
            Route::get('/create', [ProductController::class, 'create'])->name('product.create');
            Route::post('/create', [ProductController::class, 'store'])->name('product.store');
            Route::put('/{slug}', [ProductController::class, 'update'])->name('product.update');
            Route::get('/{slug}', [ProductController::class, 'edit'])->name('product.edit');
            Route::delete('/{slug}', [ProductController::class, 'destroy'])->name('product.destroy');
        });

        //additional my project menu
        Route::prefix('project')->group(function () {
            Route::get('/detail/{id}/edit-plan', [ProjectPlanController::class, 'editPlan'])->name('project.edit-plan');
            Route::put('/detail/edit-plan', [ProjectPlanController::class, 'updatePlan'])->name('project.update-plan');
            Route::get('detail/{id}/create-plan', [ProjectPlanController::class, 'createPlan'])->name('project.create-plan');
            Route::post('detail/create-plan', [ProjectPlanController::class, 'storePlan'])->name('project.store-plan');
            Route::delete('detail/{id}/delete-plan', [ProjectPlanController::class, 'deletePlan'])->name('project.delete-plan');
            Route::get('/{id}/upload-file', [ProjectController::class, 'uploadFile'])->name('project.uploadFile');
            Route::post('/upload-file', [ProjectController::class, 'storeFile'])->name('project.storeFile');
            Route::delete('/delete-file/{id}', [ProjectController::class, 'deleteFile'])->name('project.deleteFile');
        });
    });

    // Admin Route only
    Route::middleware(['role:1'])->group(function () {
        //transaction menu
        Route::prefix('transaction')->group(function () {
            Route::get('/', [TransactionController::class, 'index'])->name('transaction');
            Route::get('/detail', [TransactionController::class, 'detail'])->name('transaction.detail');
            Route::put('/accept/{id}', [TransactionController::class, 'acceptPayment'])->name('transaction.accept');
            Route::put('/reject/{id}', [TransactionController::class, 'rejectPayment'])->name('transaction.reject');
            Route::delete('/{id}', [TransactionController::class, 'destroy'])->name('transaction.destroy');
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
        Route::get('/create', [ProjectController::class, 'createProject'])->name('project.create');
        Route::post('/create', [ProjectController::class, 'storeProject'])->name('project.store');
        Route::get('/edit/{id}', [ProjectController::class, 'editProject'])->name('project.edit');
        Route::put('/edit', [ProjectController::class, 'updateProject'])->name('project.update');
        Route::delete('/delete/{id}', [ProjectController::class, 'deleteProject'])->name('project.delete');
    });
    //Client Route only
    Route::middleware(['role:3'])->group(function () {
        //invoice menu
        Route::prefix('invoice')->group(function () {
            Route::get('/', [InvoiceController::class, 'index'])->name('invoice');
            Route::post('/proof/{id}', [InvoiceController::class, 'proofUpload'])->name('invoice.proof.upload');
            Route::get('/proof/{id}', [InvoiceController::class, 'proof'])->name('invoice.proof');
            Route::delete('/{id}', [InvoiceController::class, 'destroy'])->name('invoice.destroy');
        });

        //wishlist menu
        Route::prefix('wishlist')->group(function () {
            Route::get('/', [WishlistController::class, 'index'])->name('wishlist');
            Route::get('/detail', [WishlistController::class, 'detail'])->name('wishlist.detail');
        });

        //history menu
        Route::prefix('history')->group(function () {
            Route::get('/', [TransactionController::class, 'history'])->name('history');
            Route::get('/detail', [TransactionController::class, 'history_detail'])->name('history.detail');
        });
    });
});
