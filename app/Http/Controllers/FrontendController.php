<?php

namespace App\Http\Controllers;

use App\Models\Messages;
use Carbon\Carbon;
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
    public function storeMessage(Request $request){
        $request->validate([
            "name"=>"required",
            "email"=>"required | email",
            "message"=>"required"
        ]);
        Messages::insert([
            "name"=> $request-> name,
            "email"=> $request-> email,
            "message"=> $request-> message,
            "created_at"=> Carbon::now()
        ]);
        return redirect('/messages')-> withSuccess('Data Inserted');
    }
    public function home(Request $request){
        return view('home');
    }
    public function messages(Request $request){
        $messages = Messages::latest()->get();
        return view('messages', compact('messages'));
    }
}
