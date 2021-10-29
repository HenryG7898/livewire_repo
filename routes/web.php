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
    return view('index');
});

//Route::get('/login',\App\Http\Livewire\Login::class);
Route::view('/dashboard','studentlist');
Route::view('/login','index');
Route::post('/login',[\App\Http\Livewire\Login::class,'log']);

Route::view('/addstudent','newstudent');
Route::view('/addphonenb','addphone');

Route::view('updatestudent', 'updatestudent');
