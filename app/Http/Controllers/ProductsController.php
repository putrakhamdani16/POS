<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function baby() {
        return view('Products.baby-kid');
    }
    public function beauty() {
        return view('Products.beauty-health');
    }
    public function food() {
        return view('Products.food-beverage');
    }
    public function homecare() {
        return view('Products.home-care');
    }
}
