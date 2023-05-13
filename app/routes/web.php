<?php

use App\Http\Livewire\DashboardC;
use App\Http\Livewire\Geolocation;
use App\Http\Livewire\LandingPageC;
use App\Http\Livewire\LoginController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', LandingPageC::class);
Route::get('/geo', Geolocation::class);

Route::get('/dashboard', DashboardC::class)->name('dashboard');

Route::group(['middleware' => 'checkUserLoggedIn'], function () {
    Route::get('/login', LoginController::class)->name('login');
});
