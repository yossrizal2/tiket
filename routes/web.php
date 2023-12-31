<?php

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

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware('traffic');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';

Route::get('/', [App\Http\Controllers\PortalController::class, 'index']);

Route::group(['prefix' => 'portal'], function () {

    // Route::get('/buy-ticket', function () {
    //     return view('portal/buy_ticket');
    // });

    Route::get('/', [App\Http\Controllers\PortalController::class, 'index']);

    Route::post('buy-ticket/store', [App\Http\Controllers\PortalController::class, 'ticket_store']);


});


Route::group(['prefix' => 'main','middleware' => 'auth'], function () {
    
    Route::get('/', [App\Http\Controllers\MainController::class, 'dashboard']);

    Route::group(['prefix' => 'admin'], function () {
        Route::get('ticket', [App\Http\Controllers\AdminController::class, 'ticket']);
        // Route::get('ticket/add', [App\Http\Controllers\AdminController::class, 'ticket_add']);
        // Route::post('ticket/store', [App\Http\Controllers\AdminController::class, 'ticket_store']);
        Route::get('ticket/edit/{id}', [App\Http\Controllers\AdminController::class, 'ticket_edit']);
        Route::post('ticket/update', [App\Http\Controllers\AdminController::class, 'ticket_update']);
        Route::get('ticket/delete/{id}', [App\Http\Controllers\AdminController::class, 'ticket_delete']);

    });

    Route::group(['prefix' => 'check-in'], function () {
        Route::get('/', [App\Http\Controllers\CheckController::class, 'check']);
        Route::post('check-ticket', [App\Http\Controllers\CheckController::class, 'check_ticket']);
    });

    Route::group(['prefix' => 'report'], function () {
        Route::get('/', [App\Http\Controllers\ReportController::class, 'report']);
    });    

    Route::get('change-password', [App\Http\Controllers\MainController::class, 'change_password']);
    Route::post('change-password-submit', [App\Http\Controllers\MainController::class, 'change_password_update']);
    
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\PortfolioController::class, 'portfolio'])->name('home');
