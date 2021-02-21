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

Route::get('/detail', function () {
    
    return view('detail');
    
});

Route::get('/gambar', function () {
    
    return view('gambar');
    
});

Route::get('/try', function () {
    
    return view('try');
    
});

Route::get('/view', function () {
    return view('view',[

    'carwork'=>App\Carwork::latest()->get()
    ]);
});

//Route::get('/carwork/{car}','CarworksController@show');

Route::get('/addcsv/view','CarworksController@addCsvView');
Route::post('/addcsv/action', ['as' => 'carwork.add.csv', 'uses' => 'CarworksController@addCsv']);



//Route::match(['GET', 'POST'], '/service/create', 'ServicesController@create')->name('service.create');
Route::post('/service/view1', ['as' => 'service.create' ,'uses'=>'ServicesController@view']);
Route::get('/service/main', ['as' => 'viewMain', 'uses' => 'ServicesController@index']);

Route::post('/carwork/{id}', ['as' => 'carwork.detail', 'uses' => 'CarworksController@show']);


//Route::match(['POST'], '/service/view', 'ServicesController@create')->name('service.create');

//Route::get('/service/{service}', 'ServicesController@show');