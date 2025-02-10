<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projet;
use App\Models\Visite;
use App\Models\Message;

class AdminController extends Controller
{

    public function dashboard()
    {
        $projets = Projet::orderBy('created_at', 'desc')->get();
        $total_projets = Projet::count();
        $total_messages = Message::where('status', 0)->count();
        return view('admin.dashboard', compact('projets', 'total_projets', 'total_messages'));
    }

    public function visit(){
        $visites = Visite::all();
        $total_messages = Message::where('status', 0)->count();
        return view('admin.visit', compact('visites', 'total_messages'));
    }

    public function contributors(){
        return view('admin.contributors');
    }

    public function message(){
        $messages = Message::all();
        $total_messages = Message::where('status', 0)->count();
        return view('admin.message', compact('messages', 'total_messages'));
    }

}
