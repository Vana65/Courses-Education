<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;


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
Route::controller(ThemeController::class)->name('theme.')->group(function () {
    Route::get('/', 'index')->name('index');
        Route::get('/courses', 'courses')->name('courses');
        Route::get('/about', 'about')->name('about');
        Route::get('/contact', 'contact')->name('contact');
    Route::middleware('auth')->group(function () {
        Route::get('/blog', 'blog')->name('blog');
        Route::get('/blog/{id}', 'blogsByCategory')->name('blogsByCategory');
        Route::get('/blog_details/{id}', 'blog_details')->name('blog_details');
    });
});


Route::middleware('auth')->resource('blogs', BlogController::class);
Route::get('/my_blogs', [BlogController::class, 'myBlogs'])->middleware('auth')->name('blogs.my-blogs');


Route::post('/subscriber/store', [SubscriberController::class, 'store'])->name('subscriber.store');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');



Route::get('/dashboard', function () {
    return to_route('theme.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';