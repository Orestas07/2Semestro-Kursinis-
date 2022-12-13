<?php

use App\Http\Controllers\GoalController;
use App\Http\Controllers\GoalsController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/budget', function () {
    return view('budget');
});

Route::get('/dashboard', function () {
    return view('Dashboard1');
});

Route::get('/goals', function () {
    return view('Goals');
});

Route::get('/profile', function () {
    return view('Profile');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/dashboard', [WalletController::class, 'index'])->name('dashboard');
    // Route::get('')
    
    Route::get('/goals', [GoalController::class, 'index'])->name('goals');
    Route::get('/goals/create', [GoalController::class, 'createForm']);
    Route::post('/goals/create', [GoalController::class, 'create']);
    Route::get('/goal/{goal}/edit', [GoalController::class, 'editForm']);
    Route::post('/goal/{goal}/edit', [GoalController::class, 'edit']);
    Route::get('/goal/{goal}/delete', [GoalController::class, 'deleteForm']);
    Route::post('/goal/{goal}/delete', [GoalController::class, 'delete']);

    Route::post('/wallet/edit', [WalletController::class, 'edit']);

    Route::get('/budget', [TransactionController::class, 'index'])->name('budget');

    Route::get('/transactions/create', [TransactionController::class, 'createForm']);
    Route::post('/transactions/create', [TransactionController::class, 'create']);
    Route::get('/transaction/{transaction}/edit', [TransactionController::class, 'editForm']);
    Route::post('/transaction/{transaction}/edit', [TransactionController::class, 'edit']);
    Route::get('/transaction/{transaction}/remove', [TransactionController::class, 'removeForm']);
    Route::post('/transaction/{transaction}/remove', [TransactionController::class, 'remove']);



    Route::get('/profile', function () {
        $wallet = Auth::user()->wallet;

        return view('Profile', compact('wallet'));
    })->name('profile');
});
