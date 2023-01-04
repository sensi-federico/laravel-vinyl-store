<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VinylController;
use App\Models\Vinyl;

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

    $vinyls = Vinyl::all();
    return view('welcome', compact('vinyls'));
})->name('home');



Route::get('admin', function () {

    $vinyls = Vinyl::all();
    return view('admin.vinyls.index', compact('vinyls'));
})->name('admin');


Route::resource('admin/vinyls', VinylController::class);
