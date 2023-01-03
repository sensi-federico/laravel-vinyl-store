<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VinylController;

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

Route::get('/', function () {

    $vinyls = config('vinyl-db.vinyls');

    return view('welcome', compact('vinyls'));
})->name('home');

Route::resource('admin/vinyls', VinylController::class);
