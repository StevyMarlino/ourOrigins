<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
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

Route::prefix(LaravelLocalization::setLocale())
    ->middleware(['localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])
    ->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('/about', [HomeController::class, 'about'])->name('about');
        Route::get('/contact', [ContactController::class, 'index'])->name('contact');
        Route::get('/blog-details/{slug}', [HomeController::class, 'details'])->name('details');

        Route::post('contact-us',[ContactController::class, 'contact'])->name('contact');
    });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
