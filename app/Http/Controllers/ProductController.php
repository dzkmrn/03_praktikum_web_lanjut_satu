<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function p1(){
       return view('product1');
    }
    public function p2(){
        return view('product2');
     }
}
