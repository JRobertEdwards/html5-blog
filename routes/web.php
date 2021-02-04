<?php

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

Route::get('/', array('uses' => 'HomeController@showLogin'));


Route::post('/', array('uses' => 'HomeController@doLogin'));

// Photoname handled in the controller for this view
Route::get(
    'about', function () {
        return view('about');
    }
);

Route::get(
    'work', function () {
        return view('work');
    }
);

Route::get(
    'contact', function () {
        return view('contact');
    }
);

Route::post('contact', [
    'uses' =>'ContactController@saveContact',
    'as' => 'contact.store'
    ]
);

Route::get(
    'elements', function () {
        return view('elements');
    }
);
