<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function submit(Request $request){
        // print_r($request->input());
        $request->session()->flash('data','Data is submitted');
        return redirect('/');
    }
}
