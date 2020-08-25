<?php

use Illuminate\Support\Facades\Route;
use App\PcSpecsController;
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
    return view('index', ['photoName' => env('PHOTO_NAME_HOME')]);
});

// Photoname handled in the controller for this view
Route::get('about', 'PcSpecsController@getPcSpecs', function () {
});


Route::get('work', function () {
    return view('work', ['photoName' => env('PHOTO_NAME_WORK')]);
});

Route::get('contact', function () {
    return view('contact', ['photoName' => env('PHOTO_NAME_CONTACT')]);
});

Route::get('elements', function () {
    return view('elements', ['photoName' => env('PHOTO_NAME_ABOUT')]);
});