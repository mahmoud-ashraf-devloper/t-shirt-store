<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('store.views.index');
    }
    public function shop()
    {
        return view('store.views.shop');
    }
    public function product()
    {
        return view('store.views.product-details');
    }
    public function cart()
    {
        return view('store.views.cart');
    }
}
