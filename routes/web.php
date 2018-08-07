<?php

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

Route::view('/', 'login');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/application/anomalie', function (){
    return view('app-anomalie');
});

Route::get('/applications', function (){
    return view('home');
});

Route::get('/anomalies/all',function(){
    return view('liste-anomalies');
});

Route::get('/anomalies/details',function(){
    return view('details');
});


Route::get('/boots/off',function(){
    return view('anomalie-traitée');
});




/* ROUTES DES DECLARATIONS D'ANOMALIES */

Route::get('/declarations',function(){
    return view('declaration');
});



/* ROUTES DE PARAMETRAGE */
Route::prefix('parametrage')->group(function(){
    Route::get('/', function (){
        return view('parametrage.home');
    });

    Route::get('/utilisateurs', 'UserController@index');

    Route::get('/applications', function (){
        return view('parametrage.applications');
    });

    Route::get('/Typeanomalies', function (){
        return view('parametrage.Type-anomalie');
    });
});


