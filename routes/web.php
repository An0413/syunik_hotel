<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\admin\RoomsController;
use App\Http\Controllers\site\AboutController;
use App\Http\Controllers\site\BlogController;
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
Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/blog_details', [BlogController::class, 'blog_details'])->name('blog_details');
Route::post('/comment', [BlogController::class, 'comment'])->name('comment');

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::get('/rooms/show', [RoomsController::class, 'show'])->name('rooms_show');
    Route::get('/rooms/create', [RoomsController::class, 'create'])->name('rooms_create');
    Route::post('/rooms/store', [RoomsController::class, 'store'])->name('rooms_store');
});
