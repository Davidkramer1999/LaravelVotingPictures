<?php

use App\Http\Controllers\AuthController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoListController;
use App\Http\Controllers\saveItemConttroler;
use App\Http\Controllers\votePictureConttroler;
use App\Http\Controllers\RegistrationController;


//Home
Route::get('/home', function () {
    return view('home');
});


//Sign in
Route::get('/sign', function () {
    return view('sign');
});

//Register
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/register', function () {
    return view('register');
});

//Vote on pictures
Route::get('/votePictures', function () {
    return view('votePictures');
});
Route::get('votePictures/{id}', [votePictureConttroler::class, 'index'])->name('index');

//upload picture
Route::post('/saveItem', [saveItemConttroler::class, 'saveItem'])->name('saveItem');

Route::get('/savePicture', function () {
    return view('upload');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
