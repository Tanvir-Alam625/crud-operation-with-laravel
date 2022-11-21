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
        return view('contact');
    }
    public function home(Request $request){
        return view('home');
    }
    public function messages(Request $request){
        return view('messages');
    }
}
