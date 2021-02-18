<?php

use App\Http\Controllers\AnnonceController;
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



/**
 * Init route / with Layouts.app view
 */
Route::get('/', function () {
    return view('Layouts.app');
});

/**
 * This single route resource create multiple
 * routes for every actions on the controller
 */
Route::resource('annonces', AnnonceController::class);


/**
 * Route redirect from / to /annonces path
 */
Route::redirect('/','/annonces');
