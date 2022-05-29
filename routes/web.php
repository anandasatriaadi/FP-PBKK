<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

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
Route::get('/dashboard/menu-list', function () {
    return view('admin-menu-list');
})->middleware('auth', 'admin')->name('adminMenuList');

Route::get('/dashboard/add-menu', function () {
    return view('admin-add-menu');
})->middleware('auth', 'admin')->name('adminAddMenu');

Route::get('/dashboard/reservation', [ReservationController::class, "staffIndex"])->middleware('auth', 'staff')->name('staffReservation');
Route::post('/dashboard/reservation/complete', [ReservationController::class, "completeReservation"])->middleware('auth', 'staff')->name('completeReservation');

Route::get('/dashboard/order', function () {
    return view('staff-order');
})->middleware('auth', 'staff')->name('staffOrder');
// ========================================================================
//   END ::: ADMIN AND STAFF ROUTING
// ========================================================================



// ========================================================================
//   START ::: USER ROUTING
// ========================================================================
Route::get('/reservation', [ReservationController::class, "userIndex"])->middleware('auth')->name('userReservation');
Route::post('/reservation', [ReservationController::class, "store"])->name('userReservationStore');

Route::get('/menu', function () {
    return view('user-menu');
})->name('userMenu');
// ========================================================================
//   END ::: USER ROUTING
// ========================================================================

require __DIR__.'/auth.php';
