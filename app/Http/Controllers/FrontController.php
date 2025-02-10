<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function about()
    {
        return view('front.about');
    }

    public function events(){
        return view('front.events');
    }

    public function event(){
        return view('front.event');
    }

    public function projects(){
        return view('front.projects');
    }

    public function contribution(){
        return view('front.contribution');
    }

    public function contact(){
        return view('front.contact');
    }
}
