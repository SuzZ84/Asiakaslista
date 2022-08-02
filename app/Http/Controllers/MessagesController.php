<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;


use App\Http\Requests;

class MessagesController extends Controller
{
    public function submit(Request $request){
       $this->validate($request, [
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required',
        'address' => 'required',
        'city' => 'required',
        'zip' => 'required',
        'phone' => 'required'
       ]); 

      // luodaan viesti
       $message = new Message;
       $message->firstname = $request->input('firstname');
       $message->lastname = $request->input('lastname');
       $message->phone = $request->input('phone');
       $message->address = $request->input('address');
       $message->city = $request->input('city');
       $message->zip = $request->input('zip');
       $message->email = $request->input('email');
       $message->message = $request->input('message');
      // tallennetaan viesti 
      $message->save();

      // rederect

      return redirect('/')->with('success', 'Message Sent');

    }

    public function getMessages(){

        $messages = Message::all();

        return view('messages')->with('messages', $messages);
    }
}
