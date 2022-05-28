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

Route::get('/dashboard/reservation', function () {
    return view('staff-reservation');
})->middleware('auth', 'staff')->name('staffReservation');

Route::get('/dashboard/order', function () {
    return view('staff-order');
})->middleware('auth', 'staff')->name('staffOrder');
// ========================================================================
//   END ::: ADMIN AND STAFF ROUTING
// ========================================================================



// ========================================================================
//   START ::: USER ROUTING
// ========================================================================
Route::get('/reserve', function () {
    return view('user-reserve');
})->middleware('auth')->name('userReserve');

Route::get('/menu', function () {
    return view('user-menu');
})->name('userMenu');
// ========================================================================
//   END ::: USER ROUTING
// ========================================================================

require __DIR__.'/auth.php';
