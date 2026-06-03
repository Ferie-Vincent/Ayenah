<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageContent;
use App\Traits\LogsActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mews\Purifier\Facades\Purifier;

class PageContentController extends Controller
{
    use LogsActivity;
    private array $pages = [
        'about' => ['label' => 'À propos', 'icon' => 'info'],
        'programme' => ['label' => 'Programme', 'icon' => 'book-open'],
        'piliers' => ['label' => 'Piliers', 'icon' => 'columns'],
        'eligibilite' => ['label' => 'Éligibilité', 'icon' => 'check-circle'],
        'financement' => ['label' => 'Financement', 'icon' => 'wallet'],
        'soumettre-projet' => ['label' => 'Soumettre un projet', 'icon' => 'send'],
    ];

    private array $allowedSections = [
        'about' => ['presentation', 'objectifs_os1', 'objectifs_os2', 'axe1', 'axe2', 'financement', 'criteres', 'expertise'],
        'programme' => ['definition', 'promesse', 'constat', 'obstacles', 'reponse'],
        'piliers' => ['pilier1_intro', 'pilier1_domaines', 'pilier2_intro', 'pilier2_profils', 'pilier3_intro', 'pilier3_activites'],
        'eligibilite' => ['partenariat_diaspora', 'partenariat_local', 'conditions_projet', 'expertise_conditions', 'criteres_notation'],
        'financement' => ['montants', 'depenses_eligibles', 'versement', 'exemple', 'note_importante'],
        'soumettre-projet' => ['etape1', 'etape2', 'etape3', 'etape4', 'processus_selection', 'accompagnement'],
    ];

    public function index()
    {
        $pages = [];
        foreach ($this->pages as $slug => $meta) {
            $pages[$slug] = [
                'label' => $meta['label'],
                'icon' => $meta['icon'],
                'sections_count' => PageContent::where('page', $slug)->count(),
            ];
        }

        return view('admin.pages.index', compact('pages'));
    }

    public function edit(string $page)
    {
        abort_unless(array_key_exists($page, $this->pages), 404);

        $meta = $this->pages[$page];
        $contents = PageContent::where('page', $page)->get();

        return view('admin.pages.edit', compact('page', 'meta', 'contents'));
    }

    public function update(Request $request, string $page)
    {
        abort_unless(array_key_exists($page, $this->pages), 404);

        $allowed = $this->allowedSections[$page] ?? [];

        DB::transaction(function () use ($request, $page, $allowed) {
            foreach ($request->except('_token', '_method') as $section => $content) {
                if (!in_array($section, $allowed)) {
                    continue;
                }

                PageContent::updateOrCreate(
                    ['page' => $page, 'section' => $section],
                    ['content' => Purifier::clean($content), 'type' => 'textarea']
                );
            }
        });

        $this->logAction('update', null, 'Mise à jour du contenu de la page : ' . $this->pages[$page]['label']);

        return back()->with('success', 'Contenu de la page "' . $this->pages[$page]['label'] . '" mis à jour.');
    }
}
