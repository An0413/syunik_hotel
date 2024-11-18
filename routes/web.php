<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\admin\RoomsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::get('/rooms/show', [RoomsController::class, 'show'])->name('rooms_show');
    Route::get('/rooms/create', [RoomsController::class, 'create'])->name('rooms_create');
    Route::post('/rooms/store', [RoomsController::class, 'store'])->name('rooms_store');
    Route::get('/rooms/edit/{id}', [RoomsController::class, 'edit'])->where('id', '[0-9]+')->name('rooms_edit');
    Route::post('/rooms/update/{id}', [RoomsController::class, 'update'])->where('id', '[0-9]+')->name('rooms_update');
    Route::delete('/rooms/delete/{id}', [RoomsController::class, 'destroy'])->where('id', '[0-9]+')->name('rooms_delete');
});
