<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class Youtube extends Controller
{
    public function index(){
        if (view()->exists('user'))
        {
            return view('user',['name'=>'Peter']);
        }
        // return view('user',['name'=>'Peter']);
    }
}
