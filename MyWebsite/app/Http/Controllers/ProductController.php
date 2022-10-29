<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        //select data from product

        $products = Product::all();

        return view('welcome', compact('products'));
    }
}
