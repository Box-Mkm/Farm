<?php

use App\Mail\SendingMail;
use Illuminate\Support\Facades\Mail;
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


// english site
Route::get('/', function () {
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
Route::get('/blog', function () {
    return view('en/blogEN');
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
Route::get('/blogAR', function () {
    return view('ar/blogAR');
});

Route::post('mail/', function (Illuminate\Http\Request $request) {
    request()->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255', // Changed 'mail' to 'email'
        'phone' => 'required|string|max:255', // Changed 'number' to 'string'
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);
    $formData = $request->all();
    $mail = new SendingMail($formData);
    Mail::to('name@example.com')->send($mail);
    return back()->with('success', 'Form submitted successfully!');
});