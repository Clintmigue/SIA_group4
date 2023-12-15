<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\Admin\DashboardController;
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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', function () {
    return redirect('/login');
});

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/logout', 'logout')->name('logout');
});

Route::prefix('dashboard')->middleware(['auth'])->group(function(){
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('dashboard');
});

Route::prefix('boardings')->middleware(['auth'])->group(function(){
    Route::get('/', [App\Http\Controllers\Admin\BoardingsController::class, 'default'])->name('boardings.default');
    Route::get('/create', [App\Http\Controllers\Admin\BoardingsController::class, 'create'])->name('boardings.create');
    Route::post('/save', [App\Http\Controllers\Admin\BoardingsController::class, 'save'])->name('boardings.save');
    Route::get('/view/{id}', [App\Http\Controllers\Admin\BoardingsController::class, 'view'])->name('boardings.view');
    Route::get('/delete/{id}', [App\Http\Controllers\Admin\BoardingsController::class, 'delete'])->name('boardings.delete');
    
    Route::get('/edit/{id}', [App\Http\Controllers\Admin\BoardingsController::class, 'edit'])->name('boardings.edit');
  Route::post('/update', [App\Http\Controllers\Admin\BoardingsController::class, 'update'])->name('boardings.update');

});
Route::prefix('rooms')->middleware(['auth'])->group(function(){
    Route::get('/', [App\Http\Controllers\Admin\RoomsController::class, 'default'])->name('rooms.default');
    Route::get('/create', [App\Http\Controllers\Admin\RoomsController::class, 'create'])->name('rooms.create');
    Route::post('boardings/save', [App\Http\Controllers\Admin\RoomsController::class, 'save'])->name('rooms.save');
     Route::get('/view/{id}', [App\Http\Controllers\Admin\RoomsController::class, 'view'])->name('rooms.view');
      Route::get('/delete/{id}', [App\Http\Controllers\Admin\RoomsController::class, 'delete'])->name('rooms.delete');
    
    Route::get('/edit/{id}', [App\Http\Controllers\Admin\RoomsController::class, 'edit'])->name('rooms.edit');
  Route::post('/update', [App\Http\Controllers\Admin\RoomsController::class, 'update'])->name('rooms.update');
});