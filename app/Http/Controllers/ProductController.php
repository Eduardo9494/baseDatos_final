<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('sold', 'ASC');
        $products =  $products->orderBy('name', 'ASC')->get();

        return view('pages.products', compact('products'));
    }
}
