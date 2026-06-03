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
            return redirect()->route('enregistrement')
                ->with('info', 'Ce lien est réservé aux candidats validés par l\'équipe AYENAH. Inscrivez-vous pour démarrer votre candidature.');
        }

        $enregistrement = Enregistrement::where('validation_token', $token)
            ->whereNotNull('validated_at')
            ->first();

        if (!$enregistrement) {
            return redirect()->route('contact')
                ->with('info', 'Ce lien est invalide ou votre candidature n\'a pas encore été validée. Contactez l\'équipe AYENAH.');
        }

        if ($enregistrement->validated_at->diffInDays(now()) > 30) {
            return redirect()->route('contact')
                ->with('info', 'Ce lien a expiré (valide 30 jours). Contactez l\'équipe AYENAH à infos@ayenah.ci.');
        }

        return view('front.demande-financement', compact('enregistrement'));
    }
}
