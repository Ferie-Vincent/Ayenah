<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnregistrementRequest;
use App\Mail\EnregistrementConfirmation;
use App\Models\Enregistrement;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreEnregistrementRequest $request)
    {
        $validated = $request->validated();

        // Création de l'enregistrement
        $enregistrement = Enregistrement::create($validated);

        // Envoi de l'email de confirmation avec les pièces jointes
        try {
            Mail::to($validated['email'])->queue(new EnregistrementConfirmation($enregistrement));
        } catch (\Exception $e) {
            Log::error('Erreur lors de l\'envoi de l\'email de confirmation: '.$e->getMessage());

            return redirect()->route('enregistrement')
                ->with('warning', 'Votre candidature au projet AYENAH a bien été enregistrée, mais l\'email de confirmation n\'a pas pu être envoyé. Veuillez contacter infos@ayenah.ci.');
        }

        return redirect()->route('enregistrement')
            ->with('success', 'Votre candidature au projet AYENAH a bien été reçue. Un accusé de réception vous a été envoyé par email. Votre dossier sera instruit par la Cellule de Coordination de la DGIE.');

    }
}
