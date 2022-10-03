<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('main');
    }
    public function p2(){
        return view('p2');
    }
    public function p3(){
        return view('p3');
    }
    public function p4(){
        return view('p4');
    }
    public function p5(){
        return view('p5');
    }
}
