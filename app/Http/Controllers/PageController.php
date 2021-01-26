<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function dashboard(){
        return view('pages/dashboard');
    }

    public function indexStock(){
        return view('pages/dashboard');
    }
    public function storeStock(){
        return view('pages/dashboard');
    }
}
