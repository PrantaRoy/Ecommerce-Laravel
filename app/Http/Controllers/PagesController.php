<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function products(){
        $products = Product::orderBy('id' ,'desc')->get();
        return view('pages.product.index',compact('products'));
    }
}
