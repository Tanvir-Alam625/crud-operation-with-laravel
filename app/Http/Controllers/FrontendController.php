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
    public function update($id){
        $message =  Messages::where('id', $id)->get();
        return view('editMessage', compact('message'));
    }
    public function updateData(Request $request){
        $request->validate([
            "*"=> "required"
        ]);
        Messages::where('id', $request->id)->update([
            "name" => $request -> name,
            "email" => $request -> email,
            "message" => $request -> message
        ]);
        return redirect('/messages');
    }
    public function deleteMessage($id){
        Messages::where('id', $id)->delete();
        return back();
    }
}
