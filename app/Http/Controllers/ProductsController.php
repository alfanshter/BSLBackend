<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products1() {
        return view('products.hal1');
    }
    public function products2() {
        return view('products.hal2');
    }
    public function products3() {
        return view('products.hal3');
    }
    public function products4() {
        return view('products.hal4');
    }
    public function products5() {
        return view('products.hal5');
    }
    public function products6() {
        return view('products.hal6');
    }
    public function products7() {
        return view('products.hal7');
    }
    public function products8() {
        return view('products.hal8');
    }
    public function demo() {
        return view('products.demo');
    }
}
