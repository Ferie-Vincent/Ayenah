<?php

namespace App\Http\Controllers;

use App\Models\Enregistrement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EnregistrementController extends Controller
{
    /**
     * Affiche le formulaire d'enregistrement
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('front.enregistrement');
    }

    /**
     * Traite la soumission du formulaire
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:enregistrements,email',
            'phone' => 'required|string|max:20|unique:enregistrements,phone',
            'profession' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'project_name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'thematique' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        Enregistrement::create($validated);

        return redirect()->route('enregistrement')->with('success', 'Merci, Nous vous contacterons bientôt !');

    }
}