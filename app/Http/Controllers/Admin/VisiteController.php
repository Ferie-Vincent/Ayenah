<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class VisiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visites = Visite::orderBy('created_at', 'desc');
        return view('admin.visit', compact('visites'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'dateVisited' => 'required|string',
            'description' => 'required|string',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg',
            'image1' => 'required|image|mimes:jpeg,png,jpg',
            'image2' => 'required|image|mimes:jpeg,png,jpg',
            'image3' => 'required|image|mimes:jpeg,png,jpg',
            'image4' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        // Traitement des images
        $imageFields = ['cover_image', 'image1', 'image2', 'image3', 'image4'];
        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                $validated[$field] = $request->file($field)->store('visites', 'public');
            }
        }


        // Création de la visite
        Visite::create($validated);
        session()->flash('success', 'Visite ajoutée avec succès !');
        // Redirection avec message de succès
        return redirect()->route('visit');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $visite = Visite::findOrFail($id);
        return view('front.visit', compact('visite'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $visite = Visite::findOrFail($id);
        return view('visit', compact('visite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Récupération de la visite
        $visite = Visite::findOrFail($id);

        // Validation des données
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'dateVisited' => 'required|string',
            'description' => 'required|string',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg',
            'image4' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        // Traitement des images
        $imageFields = ['cover_image', 'image1', 'image2', 'image3', 'image4'];
        foreach ($imageFields as $field) {
            if ($request->hasFile($field)) {
                // Suppression de l'ancienne image si elle existe
                if ($visite->$field && Storage::disk('public')->exists($visite->$field)) {
                    Storage::disk('public')->delete($visite->$field);
                }
                $validated[$field] = $request->file($field)->store('visites', 'public');
            }
        }

        // Mise à jour de la visite
        $visite->update($validated);
        session()->flash('success', 'Visite mise à jour avec succès !');
        // Redirection avec message de succès
        return redirect()->route('visit')->with('success', 'Visite mise à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Récupération de la visite
            $visite = Visite::findOrFail($id);

            // Suppression des fichiers associés
            $imageFields = ['cover_image', 'image1', 'image2', 'image3', 'image4'];
            foreach ($imageFields as $field) {
                if ($visite->$field && Storage::disk('public')->exists($visite->$field)) {
                    Storage::disk('public')->delete($visite->$field);
                }
            }

            // Suppression de la visite
            $visite->delete();

            session()->flash('error', 'Actualité supprimée avec succès !');
            return redirect()->route('visit');
        } catch (\Exception $e) {
            session()->flash('error', 'Erreur lors de la suppression de l\'actualité !');
            return redirect()->back();
        }
    }
}