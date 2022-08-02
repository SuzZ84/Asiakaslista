<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getHome(){
        return view('home');

    }

    public function getAbout(){
        return view('about');

    }

    public function getContact(){
        return view('contact');

    }

    public function getMessages(){
        return view('messages');

    }

}
