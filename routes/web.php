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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/civil', function () {
    return view('civil');
});
Route::get('/doctors', function () {
    return view('doctors');
});
Route::get('/appointment', function () {
    return view('appointment');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/appointments', function () {
    return view('appointments');
});
Route::get('/contactus', function () {
    return view('contactus');
});
