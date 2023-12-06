<?php

use App\Mail\SendingMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


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
    return Redirect('/home');
});
Route::controller(PageController::class)->group(function () {
    //english
    Route::get('/home', 'index');
    Route::get('/about', 'about');
    Route::get('/contact', 'contact');
    Route::get('/facilities', 'facilities');
    Route::get('/shop', 'shop');
    Route::get('/blog', 'blog');;
    //arabic
    Route::get('/home/ar', 'indexArabic');
    Route::get('/about/ar', 'aboutArabic');
    Route::get('/contact/ar', 'contactArabic');
    Route::get('/facilities/ar', 'facilitiesArabic');
    Route::get('/shop/ar', 'shopArabic');
    Route::get('/blog/ar', 'blogArabic');
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
    Mail::to('Info@abdeldayemcompany.com')->send($mail);
    return back()->with('success', 'Form submitted successfully!');
});