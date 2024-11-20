<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\admin\RoomsController;
use App\Http\Controllers\admin\RoomsGalleryController;
use App\Http\Controllers\site;
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
Route::get('/about', [AboutController::class, 'about'])->name('site_about');

Route::get('/rooms', [site\RoomsController::class, 'rooms'])->name('site_rooms');

Route::get('rooms_details/{id}', [site\RoomsController::class, 'rooms_details'])->name('site_rooms_details');

Route::get('/blog', [BlogController::class, 'blog'])->name('site_blog');

Route::get('/services', [site\ServicesController::class, 'services'])->name('site_services');

Route::get('/contact', [site\ContactController::class, 'contact'])->name('site_contact');

Route::post('/contact_message', [site\ContactController::class, 'contact_message'])->name('site_contact_data');


Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::get('/rooms/show', [RoomsController::class, 'show'])->name('rooms_show');
    Route::get('/rooms/create', [RoomsController::class, 'create'])->name('rooms_create');
    Route::post('/rooms/store', [RoomsController::class, 'store'])->name('rooms_store');
    Route::get('/rooms/edit/{id}', [RoomsController::class, 'edit'])->where('id', '[0-9]+')->name('rooms_edit');
    Route::post('/rooms/update/{id}', [RoomsController::class, 'update'])->where('id', '[0-9]+')->name('rooms_update');
    Route::delete('/rooms/delete/{id}', [RoomsController::class, 'destroy'])->where('id', '[0-9]+')->name('rooms_delete');
    Route::get('/rooms/images/show/{id}', [RoomsGalleryController::class, 'show'])->where('id', '[0-9]+')->name('rooms_images_show');
    Route::get('/rooms/images/create/{id}', [RoomsGalleryController::class, 'create'])->where('id', '[0-9]+')->name('rooms_images_create');
    Route::post('/rooms/images/store{id}', [RoomsGalleryController::class, 'store'])->where('id', '[0-9]+')->name('rooms_images_store');
    Route::get('/rooms/images/edit/{id}', [RoomsGalleryController::class, 'edit'])->where('id', '[0-9]+')->name('rooms_images_edit');
    Route::post('/rooms/images/update/{id}', [RoomsGalleryController::class, 'update'])->where('id', '[0-9]+')->name('rooms_images_update');
    Route::delete('/rooms/images/delete/{id}', [RoomsGalleryController::class, 'destroy'])->where('id', '[0-9]+')->name('rooms_images_delete');
});
