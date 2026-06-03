<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Traits\LogsActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mews\Purifier\Facades\Purifier;

class FaqController extends Controller
{
    use LogsActivity;
    public function index()
    {
        $faqs = Faq::ordered()->get();
        return view('admin.faqs', compact('faqs'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:1000',
            'answer' => 'required|string|max:5000',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['order'] = $validated['order'] ?? 0;
        $validated['answer'] = Purifier::clean($validated['answer']);

        $faq = Faq::create($validated);
        $this->logAction('create', $faq, 'Création FAQ : ' . Str::limit($faq->question, 50));

        return back()->with('success', 'FAQ ajoutée avec succès.');
    }

    public function update(Request $request, Faq $faq)
    {
        $validated = $request->validate([
            'question' => 'required|string|max:1000',
            'answer' => 'required|string|max:5000',
            'order' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['answer'] = Purifier::clean($validated['answer']);

        $faq->update($validated);
        $this->logAction('update', $faq, 'Modification FAQ : ' . Str::limit($faq->question, 50));

        return back()->with('success', 'FAQ modifiée avec succès.');
    }

    public function destroy(Faq $faq)
    {
        $this->logAction('delete', $faq, 'Suppression FAQ : ' . Str::limit($faq->question, 50));
        $faq->delete();
        return back()->with('success', 'FAQ supprimée avec succès.');
    }
}
