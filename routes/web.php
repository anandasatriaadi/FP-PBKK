<?php

use App\Http\Controllers\AdminMenuController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserMenuController;

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
})->name('home');



// ========================================================================
//   START ::: ADMIN AND STAFF ROUTING
// ========================================================================
Route::group(['prefix' => 'dashboard'], function () {
    // ======== START ::: Menu Routing ========
    Route::get('/menu-list', [AdminMenuController::class, "index"])
                ->middleware('auth', 'admin')->name('adminMenuList');
    Route::get('/add-menu', [AdminMenuController::class, "create"])
                ->middleware('auth', 'admin')->name('adminAddMenu');
    Route::post('/add-menu', [AdminMenuController::class, "store"])
                ->middleware('auth', 'admin')->name('adminAddMenuStore');
    Route::get('/edit-menu/{id}', [AdminMenuController::class, "edit"])
                ->middleware('auth', 'admin')->name('adminEditMenu');
    Route::put('/edit-menu/{id}', [AdminMenuController::class, "update"])
                ->middleware('auth', 'admin')->name('adminEditMenuUpdate');
    Route::delete('/delete-menu/{id}', [AdminMenuController::class, "destroy"])
                ->middleware('auth', 'admin')->name('adminDeleteMenu');
    // ======== END ::: Menu Routing ========
    
    // ======== START ::: Reservation Routing ========
    Route::get('/reservation', [ReservationController::class, "staffIndex"])
                ->middleware('auth', 'staff')->name('staffReservation');
    Route::post('/reservation/complete', [ReservationController::class, "completeReservation"])
                ->middleware('auth', 'staff')->name('staffCompleteReservation');
    // ======== END ::: Reservation Routing ========
    
    // ======== START ::: Order/Cart Routing ========
    Route::get('/order', [OrderController::class, "index"])->middleware('auth', 'staff')->name('staffOrder');
    // ======== END ::: Order/Cart Routing ========
});
// ========================================================================
//   END ::: ADMIN AND STAFF ROUTING
// ========================================================================



// ========================================================================
//   START ::: USER ROUTING
// ========================================================================
    // ======== START ::: Menu Routing ========
    Route::get('/menu', [UserMenuController::class, "index"])->name('userMenu');
    // ======== END ::: Menu Routing ========


    // ======== START ::: Reservation Routing ========
    Route::get('/reservation', [ReservationController::class, "create"])
                ->middleware('auth')->name('userReservation');
    Route::post('/reservation', [ReservationController::class, "store"])
    ->middleware('auth')->name('userReservationStore');
    // ======== END ::: Reservation Routing ========

    // ======== START ::: Order/Cart Routing ========
    Route::get('/cart', [CartController::class, "index"])
                ->middleware('auth')->name('userCart');
    Route::get('/add-to-cart/{id}', [CartController::class, "store"])
                ->middleware('auth')->name('userAddToCart');
                
                
    Route::get('/store-order', [OrderController::class, "store"])
                ->middleware('auth')->name('userOrderStore');
    // ======== END ::: Order/Cart Routing ========
// ========================================================================
//   END ::: USER ROUTING
// ========================================================================

require __DIR__.'/auth.php';
