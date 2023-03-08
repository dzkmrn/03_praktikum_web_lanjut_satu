<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function pro1(){
        return view('program1');
     }
     public function pro2(){
         return view('program2');
      } 
}
