<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_home extends Controller
{
    public function productDetails()
    {
        return view('product-details');
    }

    public function index()
    {
        return view('index');
    }

    public function shop()
    {
        return view('shop');
    }


    public function contact()
    {
        return view('contact-us');
    }
}
