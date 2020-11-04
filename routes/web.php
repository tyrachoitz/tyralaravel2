<?php

use App\Workshop;
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

Route::get('/', function () {
    return view('welcome');//view page(apa yg kita nk paparkn "get")
});

Route::get('/about', function () {
    
    return view('about');
    
});

Route::get('/view', function () {
    return view('view',[

    'workshop'=>App\Workshop::latest()->get()
    ]);
});

Route::get('/workshop/{work}','WorkshopController@show');