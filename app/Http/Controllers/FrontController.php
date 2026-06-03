<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Projet;
use App\Models\Visite;
use App\Models\PageContent;

class FrontController extends Controller
{
    public function index()
    {
        $visites = Visite::latest()->take(6)->get();
        return view('front.index', compact('visites'));
    }

    public function about()
    {
        $contents = PageContent::getPage('about');
        return view('front.about', compact('contents'));
    }

    public function events()
    {
        $visites = Visite::latest()->paginate(12);
        return view('front.events', compact('visites'));
    }

    public function event($id)
    {
        $visite = Visite::findOrFail($id);
        $visites = Visite::where('id', '!=', $id)->latest()->take(5)->get();
        return view('front.event', compact('visite', 'visites'));
    }

    public function projects()
    {
        $projects = Projet::latest()->paginate(12);
        return view('front.projects', compact('projects'));
    }

    public function faqs()
    {
        $faqs = Faq::active()->ordered()->get();
        return view('front.faqs', compact('faqs'));
    }

    public function contribution()
    {
        $projets = Projet::all();
        return view('front.contribution', compact('projets'));
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function programme()
    {
        $contents = PageContent::getPage('programme');
        return view('front.programme', compact('contents'));
    }

    public function piliers()
    {
        $contents = PageContent::getPage('piliers');
        return view('front.piliers', compact('contents'));
    }

    public function eligibilite()
    {
        $contents = PageContent::getPage('eligibilite');
        return view('front.eligibilite', compact('contents'));
    }

    public function soumettreProjet()
    {
        $contents = PageContent::getPage('soumettre-projet');
        return view('front.soumettre-projet', compact('contents'));
    }

    public function financement()
    {
        $contents = PageContent::getPage('financement');
        return view('front.financement', compact('contents'));
    }
}
