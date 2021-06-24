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



Route::get('/', function () {
    return view('home');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/personnel',function(){
    return view('personnel');
});

Route::get('vehicule', function () {
    return view('vehicule');

});

Route::get('/test',function(){
    return view('test');
});

Route::get('/sinistre',function(){
    return view('sinistre');
});

Route::get('/reservation',function(){
    return view('reservation');
});

Route::get('/suivi',function(){
    return view('suivi');
});
