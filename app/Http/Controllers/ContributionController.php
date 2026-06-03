<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContributionRequest;
use App\Models\Projet;
use App\Models\Contribution;

class ContributionController extends Controller
{
    public function create()
    {
        $projets = Projet::all();
        return view('front.contribution', compact('projets'));
    }

    public function store(StoreContributionRequest $request)
    {
        $validated = $request->validated();

        Contribution::create($validated);

        return redirect()->route('contribution')->with('success', 'Merci, Nous vous contacterons bientôt !');

    }
}
