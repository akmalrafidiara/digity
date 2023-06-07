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
    Route::get('/', function () {
        return view('frontend/product/index');
    });
    Route::get('/detail', function () {
        return view('frontend/product/detail');
    });
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
        Route::get('/', function () {
            return view('dashboard/project/index');
        });
        Route::get('/detail', function () {
            return view('dashboard/project/detail');
        });
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
            Route::get('/', function () {
                return view('dashboard/service/index');
            });
            Route::get('/create', function () {
                return view('dashboard/service/create');
            });
        });

        //product menu
        Route::prefix('product')->group(function () {
            Route::get('/', function () {
                return view('dashboard/product/index');
            });
            Route::get('/create', function () {
                return view('dashboard/product/create');
            });
        });

        //additional my project menu
        Route::prefix('project')->group(function () {
            Route::get('/create-plan', function () {
                return view('dashboard/project/createPlan');
            });
            Route::get('/upload-file', function () {
                return view('dashboard/project/uploadFile');
            });
        });

        //history menu
        Route::prefix('history')->group(function () {
            Route::get('/', function () {
                return view('dashboard/history/index');
            });
            Route::get('/detail', function () {
                return view('dashboard/history/detail');
            });
        });
    });

    // Admin Route only
    Route::middleware(['role:1'])->group(function () {
        //transaction menu
        Route::prefix('transaction')->group(function () {
            Route::get('/', function () {
                return view('dashboard/transaction/index');
            });
            Route::get('/detail', function () {
                return view('dashboard/transaction/detail');
            });
        });

        //user menu
        Route::prefix('user')->group(function () {
            Route::get('/', [UserController::class, 'index']);
            Route::get('/create', function () {
                return view('dashboard/user/create');
            });
            Route::post('/create', [UserController::class, 'createUser'])->name('createUser');
            Route::get('/edit/{id}', [UserController::class, 'editUser'])->name('editUser');
            Route::put('/edit', [UserController::class, 'updateUser'])->name('updateUser');
            Route::delete('/delete/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');
        });

        //additional my project menu
        Route::prefix('project')->group(function () {
            Route::get('/create', function () {
                return view('dashboard/project/createPlan');
            });
        });
    });


    //Client Route only
    Route::middleware(['role:3'])->group(function () {
        //invoice menu
        Route::prefix('invoice')->group(function () {
            Route::get('/', function () {
                return view('dashboard/invoice/index');
            });
            Route::get('/detail', function () {
                return view('dashboard/invoice/detail');
            });
        });

        //wishlist menu
        Route::prefix('wishlist')->group(function () {
            Route::get('/', function () {
                return view('dashboard/wishlist/index');
            });
            Route::get('/detail', function () {
                return view('dashboard/wishlist/detail');
            });
        });

        //history menu
        Route::prefix('history')->group(function () {
            Route::get('/', function () {
                return view('dashboard/history/index');
            });
            Route::get('/detail', function () {
                return view('dashboard/history/detail');
            });
        });
    });
});
