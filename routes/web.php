<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingPage\LandingPageController;

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

Route::get('/', [LandingPageController::class, 'beranda']);
Route::get('about', [LandingPageController::class, 'about']);
Route::get('paketW', [LandingPageController::class, 'paketW']);
Route::get('pemesanan', [LandingPageController::class, 'pemesanan']);
Route::get('galery', [LandingPageController::class, 'galery']);
    

    Route::get('halLogin', function () {
        return view('pages.landing.login');
    });
