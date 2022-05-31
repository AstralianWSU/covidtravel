<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotspotsListController;
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
// })->name('welcome');
Route::get('/', function () {
if (Auth::check()) {
    return view('auth0.user');
}
return view('auth0.guest');
})->middleware(['auth0.authenticate.optional']);

Route::get('/required', function () {
    return view('auth0.user');
})->middleware(['auth0.authenticate']);

Route::get('/reporting', function () {
    if (Auth::check()) {
        return view('auth0.reporting');
    }
    return view('auth0.guest');
})->middleware(['auth0.authenticate'])->name('reporting');

Route::get('/history', function () {
    if (Auth::check()) {
        return view('auth0.history');
    }
    return view('auth0.guest');
})->middleware(['auth0.authenticate'])->name('history');

Route::get('/promohotspots', function () {
    return view('promohotspots');
})->middleware(['auth0.authenticate.optional'])->name('promohotspots');


// Route::get('/hotspots', [HotspotsListController::class, 'index']);
Route::get('/hotspots', 'App\Http\Controllers\HotspotsListController@index')->middleware(['auth0.authenticate'])->name('auth0.hotspots');
// Route::get('/hotspots', [HotspotsListController::class, 'index'])->middleware(['auth0.authenticate'])->name('auth0.hotspots');

Route::post('/saveItemRoute', [HotspotsListController::class, 'saveItem'])->name('saveItem');
Route::get('/login', \Auth0\Laravel\Http\Controller\Stateful\Login::class)->name('login');
Route::get('/logout', \Auth0\Laravel\Http\Controller\Stateful\Logout::class)->name('logout');
Route::get('/auth0/callback', \Auth0\Laravel\Http\Controller\Stateful\Callback::class)->name('auth0.callback');
