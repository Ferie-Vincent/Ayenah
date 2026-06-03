<?php

namespace App\Http\Controllers;

use App\Models\Enregistrement;
use Illuminate\Http\Request;

class DemandeFinancementController extends Controller
{
    public function show(Request $request)
    {
        $token = $request->query('token');

        if (!$token) {
            abort(403, 'Lien invalide. Veuillez utiliser le lien reçu par email.');
        }

        $enregistrement = Enregistrement::where('validation_token', $token)
            ->whereNotNull('validated_at')
            ->firstOrFail();

        // Token expiré après 30 jours
        if ($enregistrement->validated_at->diffInDays(now()) > 30) {
            abort(403, 'Ce lien a expiré. Contactez l\'équipe AYENAH à infos@ayenah.ci.');
        }

        return view('front.demande-financement', compact('enregistrement'));
    }
}
