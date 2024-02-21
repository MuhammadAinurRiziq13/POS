<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('product');
    }

    public function foodBeverage() {
        return view('category',[
            'title' => 'Food beverage',
            'product' => 'Food beverage'
        ]);
    }
    public function beautyHealth() {
        return view('category',[
            'title' => 'Beauty health',
            'product' => 'cosmetic'
        ]);
    }
    public function homeCare() {
        return view('category',[
            'title' => 'home care',
            'product' => 'home care tools'
        ]);
    }
    public function babyKid() {
        return view('category',[
            'title' => 'Baby Kid',
            'product' => 'children toys'
        ]);
    }
    
}
