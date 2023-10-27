<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }

    public function facilities()
    {
        return view('facilities');
    }
    public function shop()
    {
        return view('shop');
    }

    public function blog()
    {
        return view('blog');
    }
    //arabic
    public function indexArabic()
    {
        return view('indexAR');
    }

    public function aboutArabic()
    {
        return view('aboutAR');
    }
    public function contactArabic()
    {
        return view('contactAR');
    }

    public function facilitiesArabic()
    {
        return view('facilitiesAR');
    }
    public function shopArabic()
    {
        return view('shopAR');
    }

    public function blogArabic()
    {
        return view('blogAR');
    }
}
