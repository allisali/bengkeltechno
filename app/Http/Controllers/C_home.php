<?php

namespace App\Http\Controllers;

use App\Models\tb_barangs;
use App\Models\tb_kategoris;
use Illuminate\Http\Request;

class C_home extends Controller
{
    // Start Methode Index
    public function productDetails()
    {
        return view('modules.user.product-details');
    }

    public function index()
    {
        $content = tb_barangs::all();
        $category = tb_kategoris::all();

        return view('modules.user.home.index', compact('category', 'content'));
    }

    public function shop()
    {
        $content = tb_barangs::all();
        $category = tb_kategoris::all();
        return view('modules.user.shop.shop', compact('content', 'category'));
    }

    public function contact()
    {
        return view('modules.user.contact.contact-us');
    }

    public function checkout()
    {
        return view('modules.user.checkout.checkout');
    }

    public function cart()
    {
        return view('modules.user.cart.cart');
    }
    public function login()
    {
        return view('modules.user.auth.login');
    }

    // End Methode Index

    // Start Methode Post
    public function PostproductDetails()
    {
        return view('content.product-details');
    }

    public function Postindex()
    {
        return view('content.index');
    }

    public function Postshop()
    {
        return view('content.shop');
    }


    public function Postcontact()
    {
        return view('content.contact-us');
    }
}
