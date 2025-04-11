<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Contribution;
use Illuminate\Http\Request;

class ContributionController extends Controller
{
    public function create()
    {
        $projets = Projet::all();
        return view('front.contribution', compact('projets'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'profession' => 'required|string',
            'location' => 'required|string',
            'amount' => 'required|numeric',
            'projet_id' => 'required|integer',
            'message' => 'nullable|string',
        ]);

        Contribution::create($validated);

        return redirect()->route('contribution')->with('success', 'Merci, Nous vous contacterons bientôt !');

    }
}
