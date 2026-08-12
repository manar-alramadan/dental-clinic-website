<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\GalleryImageController;
use App\Http\Controllers\DentalCaseController;

/*
|--------------------------------------------------------------------------
| Website
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');


/*
|--------------------------------------------------------------------------
| Before & After
|--------------------------------------------------------------------------
*/

Route::get('/before-after', [DentalCaseController::class, 'index'])
    ->name('before-after');


/*
|--------------------------------------------------------------------------
| Appointment
|--------------------------------------------------------------------------
|
| Appointment requests are sent directly to WhatsApp.
| No appointment data is stored in the database.
|
*/

Route::view('/appointments/create', 'appointments.create')
    ->name('appointments.create');

/*
|--------------------------------------------------------------------------
| Admin Authentication
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])
    ->name('admin.login');

Route::post('/admin/login', [AdminAuthController::class, 'login'])
    ->name('admin.login.submit');

Route::post('/admin/logout', [AdminAuthController::class, 'logout'])
    ->name('admin.logout');


/*
|--------------------------------------------------------------------------
| Protected Admin Panel
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Admin Panel
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', function () {
        return redirect()->route('admin.gallery.index');
    })->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | Gallery
    |--------------------------------------------------------------------------
    */

    Route::get('/gallery', [GalleryImageController::class, 'index'])
        ->name('gallery.index');

    Route::get('/gallery/create', [GalleryImageController::class, 'create'])
        ->name('gallery.create');

    Route::post('/gallery', [GalleryImageController::class, 'store'])
        ->name('gallery.store');

    Route::delete('/gallery/{galleryImage}', [GalleryImageController::class, 'destroy'])
        ->name('gallery.destroy');

});

