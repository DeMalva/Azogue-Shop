<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //Retornamos vista welcome
    public function welcome()
    {
        $products = Product::all();
        return view('welcome')->with(compact('products', 'categories', 'product_images'));
    }
}
