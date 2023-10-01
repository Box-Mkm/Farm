<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// english site
Route::get('/en', function () {
    return view('en/index');
});
Route::get('/about', function () {
    return view('en/aboutEN');
});
Route::get('/contact', function () {
    return view('en/contactEN');
});
Route::get('/services', function () {
    return view('en/servicesEN');
});
Route::get('/shop', function () {
    return view('en/shopEN');
});
//arabic site
Route::get('/ar', function () {
    return view('ar/indexAR');
});
Route::get('/aboutAR', function () {
    return view('ar/aboutAR');
});
Route::get('/contactAR', function () {
    return view('ar/contactAR');
});
Route::get('/servicesAR', function () {
    return view('ar/servicesAR');
});
Route::get('/shopAR', function () {
    return view('ar/shopAR');
});