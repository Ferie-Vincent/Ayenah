<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;
use App\Models\Visite;
use Intervention\Image\Facades\Image;

class FrontController extends Controller
{
    public function index()
    {
        $visites = Visite::all();
        return view('front.index', compact('visites'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function events(){
        $visites = Visite::all();
        return view('front.events', compact('visites'));
    }

    public function event($id){
        $visites = Visite::all()->random(1);
        $visite = Visite::findOrFail($id);
        return view('front.event', compact('visite', 'visites'));
    }

    public function projects(){
        $projects = Projet::all();
        return view('front.projects', compact('projects'));
    }

    public function faqs(){
        return view('front.faqs');
    }

    public function contribution(){
        $projets = Projet::all();
        return view('front.contribution', compact('projets'));
    }

    public function contact(){
        return view('front.contact');
    }
}
