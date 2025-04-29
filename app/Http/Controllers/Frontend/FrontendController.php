<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view ('frontend.index');
    }

    public function ProductDetails()
    {
        return view ('frontend.product-details');
    }

    public function ViewProduct()
    {
        return view('frontend.view-products');
    }

    public function CheckOut()
    {
        return view('frontend.checkout');
    }
}
