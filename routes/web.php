<?php

use App\Http\Controllers\AdminMenuController;
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
Route::group(['prefix' => 'dashboard'], function () {
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
    
    Route::get('/reservation', [ReservationController::class, "staffIndex"])
                ->middleware('auth', 'staff')->name('staffReservation');
    Route::post('/reservation/complete', [ReservationController::class, "completeReservation"])
                ->middleware('auth', 'staff')->name('staffCompleteReservation');
    
    Route::get('/order', function () {
        return view('staff-order');
    })->middleware('auth', 'staff')->name('staffOrder');
});
// ========================================================================
//   END ::: ADMIN AND STAFF ROUTING
// ========================================================================



// ========================================================================
//   START ::: USER ROUTING
// ========================================================================
Route::get('/reservation', [ReservationController::class, "create"])
            ->middleware('auth')->name('userReservation');
Route::post('/reservation', [ReservationController::class, "store"])
            ->middleware('auth')->name('userReservationStore');

Route::get('/menu', function () {
    return view('user-menu');
})->name('userMenu');
// ========================================================================
//   END ::: USER ROUTING
// ========================================================================

require __DIR__.'/auth.php';
