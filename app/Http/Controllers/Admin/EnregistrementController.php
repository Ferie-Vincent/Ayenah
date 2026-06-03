<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ValidationEnregistrement;
use App\Models\Enregistrement;
use App\Traits\LogsActivity;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class EnregistrementController extends Controller
{
    use LogsActivity;

    public function index()
    {
        $enregistrements = Enregistrement::orderBy('created_at', 'desc')->get();
        return view('admin.enregistrements', compact('enregistrements'));
    }

    public function validate($id)
    {
        $enregistrement = Enregistrement::findOrFail($id);

        if ($enregistrement->isValidated()) {
            return back()->with('warning', 'Cet enregistrement est déjà validé.');
        }

        $enregistrement->update([
            'validation_token' => Str::uuid()->toString(),
            'validated_at'     => now(),
        ]);

        try {
            Mail::to($enregistrement->email)
                ->queue(new ValidationEnregistrement($enregistrement));

            $enregistrement->update(['validation_sent_at' => now()]);

            $this->logAction('validate', $enregistrement,
                'Validation + envoi lien demande financement : ' . $enregistrement->firstname . ' ' . $enregistrement->lastname
            );

            return back()->with('success', 'Candidature validée. Email envoyé à ' . $enregistrement->email);
        } catch (\Exception $e) {
            Log::error('Erreur envoi email validation : ' . $e->getMessage());
            return back()->with('warning', 'Validé en base, mais l\'email n\'a pas pu être envoyé. Vérifiez la configuration mail.');
        }
    }

    public function destroy($id)
    {
        $enregistrement = Enregistrement::findOrFail($id);
        $this->logAction('delete', $enregistrement,
            'Suppression inscription : ' . $enregistrement->firstname . ' ' . $enregistrement->lastname
        );
        $enregistrement->delete();
        return back()->with('success', 'Inscription supprimée avec succès.');
    }
}
