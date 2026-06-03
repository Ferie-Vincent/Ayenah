<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\Enregistrement;
use App\Models\Message;
use App\Models\Projet;
use App\Models\Visite;

class AdminController extends Controller
{
    public function dashboard()
    {
        $total_projets         = Projet::count();
        $total_projets_actifs  = Projet::where('inscription_active', true)->count();
        $total_candidatures    = Enregistrement::count();
        $total_en_attente      = Enregistrement::whereNull('validated_at')->count();
        $total_validees        = Enregistrement::whereNotNull('validated_at')->count();
        $total_messages        = Message::where('status', 0)->count();
        $recent_candidatures   = Enregistrement::orderBy('created_at', 'desc')->limit(5)->get();

        return view('admin.dashboard', compact(
            'total_projets', 'total_projets_actifs',
            'total_candidatures', 'total_en_attente', 'total_validees',
            'total_messages', 'recent_candidatures'
        ));
    }

    public function visit()
    {
        $visites = Visite::orderBy('created_at', 'desc')->get();
        return view('admin.visit', compact('visites'));
    }

    public function message()
    {
        $messages = Message::orderBy('created_at', 'desc')->get();
        return view('admin.message', compact('messages'));
    }

    public function activityLog()
    {
        $logs = ActivityLog::with('user')->orderBy('created_at', 'desc')->get();
        return view('admin.activity-log', compact('logs'));
    }
}
