<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function insert(Request $request){
        $name = $request-> insert;
        return view('insert', compact('name'));
    }
    public function contact(Request $request){
        // $name = $request-> insert;
        return view('contact');
    }
}
