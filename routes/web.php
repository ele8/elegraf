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

Route::redirect('/', '/home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/servizi', function () {
    return view('servizi');
});

Route::get('/pacchetti', function () {
    return view('pacchetti');
});

Route::get('/i-nostri-blog', function () {
    return view('inostriblog');
});

Route::get('/conosciamoci', 'ContactMessageController@create');

Route::post('/conosciamoci/invio', 'ContactMessageController@store')->name('conosciamoci.store');

