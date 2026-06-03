<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Traits\LogsActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    use LogsActivity;
    private const ALLOWED_KEYS = [
        'contact_email',
        'contact_phone',
        'contact_phone_2',
        'contact_address',
        'contact_map_url',
        'facebook_url',
        'twitter_url',
        'linkedin_url',
        'tawk_widget_id',
    ];

    public function index()
    {
        $grouped = Setting::all()->groupBy('group');
        $settings = collect(['contact', 'social', 'general'])
            ->mapWithKeys(fn($g) => [$g => $grouped->get($g, collect())]);
        return view('admin.settings', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'contact_email' => 'nullable|email|max:255',
            'contact_phone' => 'nullable|string|max:50',
            'contact_phone_2' => 'nullable|string|max:50',
            'contact_address' => 'nullable|string|max:500',
            'contact_map_url' => 'nullable|url|starts_with:https|max:1000',
            'facebook_url' => 'nullable|url|starts_with:https|max:500',
            'twitter_url' => 'nullable|url|starts_with:https|max:500',
            'linkedin_url' => 'nullable|url|starts_with:https|max:500',
            'tawk_widget_id' => 'nullable|string|max:100',
        ]);

        DB::transaction(function () use ($validated) {
            foreach ($validated as $key => $value) {
                if (in_array($key, self::ALLOWED_KEYS)) {
                    Setting::set($key, $value ?? '');
                }
            }
        });

        $this->logAction('update', null, 'Mise à jour des paramètres', array_keys($validated));

        return back()->with('success', 'Paramètres enregistrés avec succès.');
    }
}
