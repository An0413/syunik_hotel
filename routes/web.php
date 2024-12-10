<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\BookController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\admin\RoomsController;
use App\Http\Controllers\admin\QuestionsController;
use App\Http\Controllers\admin\RoomsGalleryController;
use App\Http\Controllers\site;
use App\Http\Controllers\site\AboutController;
use App\Http\Controllers\site\BlogController;
use App\Http\Controllers\site\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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


Route::get('/', [MainController::class, 'main'])->name('site');

Route::post('/send-message', [ChatController::class, 'sendMessage']);
Route::get('/messages', [ChatController::class, 'getMessages']);

Route::get('book/{id}', [BookController::class, 'book'])->where('id', '[0-9]+')->name('book');
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::get('register', [AuthController::class, 'showRegister'])->middleware('auth')->name('register');

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register'])->middleware('auth');
Route::post('logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/blog_details/{id}', [BlogController::class, 'blog_details'])->where('id', '[0-9]+')->name('blog_details');
Route::post('/comment/{id}', [BlogController::class, 'comment'])->where('id', '[0-9]+')->name('comment');
Route::post('/room_comment/{id}', [site\RoomsController::class, 'room_comment'])->where('id', '[0-9]+')->name('room_comment');

//Route::get('/about', [AboutController::class, 'about'])->name('site_about');

Route::get('/rooms', [site\RoomsController::class, 'rooms'])->name('site_rooms');

Route::get('rooms_details/{id}', [site\RoomsController::class, 'rooms_details'])->name('site_rooms_details');

//Route::get('/blog', [BlogController::class, 'blog'])->name('site_blog');

Route::get('/services', [site\ServicesController::class, 'services'])->name('site_services');

Route::get('/contact', [site\ContactController::class, 'contact'])->name('site_contact');

Route::post('/contact_message', [site\ContactController::class, 'contact_message'])->name('site_contact_data');

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['am', 'ru', 'en'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('switchLang');

Route::middleware('auth')->prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::get('/', [RoomsController::class, 'show'])->name('rooms_show');
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


    Route::get('/blog/show', [admin\BlogController::class, 'show'])->name('blog_show');
    Route::get('/blog/create', [admin\BlogController::class, 'create'])->name('blog_create');
    Route::post('/blog/store', [admin\BlogController::class, 'store'])->name('blog_store');
    Route::get('/blog/edit/{id}', [admin\BlogController::class, 'edit'])->where('id', '[0-9]+')->name('blog_edit');
    Route::post('/blog/update/{id}', [admin\BlogController::class, 'update'])->where('id', '[0-9]+')->name('blog_update');
    Route::delete('/blog/delete/{id}', [admin\BlogController::class, 'destroy'])->where('id', '[0-9]+')->name('blog_delete');

    Route::get('/blog/comments/show/{id}', [admin\BlogController::class, 'show_comments'])->where('id', '[0-9]+')->name('blog_comments_show');
    Route::delete('/blog/comments/delete/{id}', [admin\BlogController::class, 'destroy_comment'])->where('id', '[0-9]+')->name('blog_comment_delete');




    Route::get('/about/show', [admin\AboutController::class, 'show'])->name('about_show');
    Route::get('/about/create', [admin\AboutController::class, 'create'])->name('about_create');
    Route::post('/about/store', [admin\AboutController::class, 'store'])->name('about_store');
    Route::get('/about/edit/{id}', [admin\AboutController::class, 'edit'])->where('id', '[0-9]+')->name('about_edit');
    Route::post('/about/update/{id}', [admin\AboutController::class, 'update'])->where('id', '[0-9]+')->name('about_update');
    Route::delete('/about/delete/{id}', [admin\AboutController::class, 'destroy'])->where('id', '[0-9]+')->name('about_delete');

    Route::get('/about/details/create', [admin\AboutController::class, 'create_details'])->name('about_details_create');
    Route::post('/about/details/store', [admin\AboutController::class, 'store_details'])->name('about_details_store');
    Route::get('/about/details/edit/{id}', [admin\AboutController::class, 'edit_details'])->where('id', '[0-9]+')->name('about_details_edit');
    Route::post('/about/details/update/{id}', [admin\AboutController::class, 'update_details'])->where('id', '[0-9]+')->name('about_details_update');
    Route::delete('/about/details/delete/{id}', [admin\AboutController::class, 'destroy_details'])->where('id', '[0-9]+')->name('about_details_delete');

    Route::get('/about/images/create', [admin\AboutController::class, 'create_images'])->name('about_images_create');
    Route::post('/about/images/store', [admin\AboutController::class, 'store_images'])->name('about_images_store');
    Route::get('/about/images/edit/{id}', [admin\AboutController::class, 'edit_images'])->where('id', '[0-9]+')->name('about_images_edit');
    Route::post('/about/images/update/{id}', [admin\AboutController::class, 'update_images'])->where('id', '[0-9]+')->name('about_images_update');
    Route::delete('/about/images/delete/{id}', [admin\AboutController::class, 'destroy_images'])->where('id', '[0-9]+')->name('about_images_delete');



    Route::get('/services/show', [admin\ServicesController::class, 'show'])->name('services_show');
    Route::get('/services/create', [admin\ServicesController::class, 'create'])->name('services_create');
    Route::post('/services/store', [admin\ServicesController::class, 'store'])->name('services_store');
    Route::get('/services/edit/{id}', [admin\ServicesController::class, 'edit'])->where('id', '[0-9]+')->name('services_edit');
    Route::post('/services/update/{id}', [admin\ServicesController::class, 'update'])->where('id', '[0-9]+')->name('services_update');
    Route::delete('/services/delete/{id}', [admin\ServicesController::class, 'destroy'])->where('id', '[0-9]+')->name('services_delete');

    Route::get('/profile/show', [admin\ProfileController::class, 'show'])->name('profile');
    Route::get('/profile/edit/{id}', [admin\ProfileController::class, 'edit'])->where('id', '[0-9]+')->name('profile_edit');
    Route::post('/profile/update/{id}', [admin\ProfileController::class, 'update'])->where('id', '[0-9]+')->name('profile_update');

    Route::get('/questions/show', [admin\QuestionsController::class, 'show'])->name('questions_show');
    Route::get('/questions/create', [admin\QuestionsController::class, 'create'])->name('questions_create');
    Route::post('/questions/store', [admin\QuestionsController::class, 'store'])->name('questions_store');
    Route::get('/questions/edit/{id}', [admin\QuestionsController::class, 'edit'])->where('id', '[0-9]+')->name('questions_edit');
    Route::post('/questions/update/{id}', [admin\QuestionsController::class, 'update'])->where('id', '[0-9]+')->name('questions_update');
    Route::delete('/questions/delete/{id}', [admin\QuestionsController::class, 'destroy'])->where('id', '[0-9]+')->name('questions_delete');

    Route::get('/contact/show', [admin\ContactController::class, 'show'])->name('contact_show');
    Route::get('/contact/edit/{id}', [admin\ContactController::class, 'edit'])->where('id', '[0-9]+')->name('contact_edit');
    Route::post('/contact/update/{id}', [admin\ContactController::class, 'update'])->where('id', '[0-9]+')->name('contact_update');
});
