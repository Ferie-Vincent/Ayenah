<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['key' => 'contact_email', 'value' => 'infos@ayenah.ci', 'group' => 'contact'],
            ['key' => 'contact_phone', 'value' => '(+225) 27 21 32 27 42', 'group' => 'contact'],
            ['key' => 'contact_phone_2', 'value' => '+(225) 01 02 03 04 05', 'group' => 'contact'],
            ['key' => 'contact_address', 'value' => 'Abidjan, Cocody, 2-plateaux - ENA, près de la Chambre National des Métiers', 'group' => 'contact'],
            ['key' => 'facebook_url', 'value' => 'https://www.facebook.com/', 'group' => 'social'],
            ['key' => 'twitter_url', 'value' => 'https://x.com/', 'group' => 'social'],
            ['key' => 'linkedin_url', 'value' => 'https://www.linkedin.com/', 'group' => 'social'],
            ['key' => 'tawk_widget_id', 'value' => '', 'group' => 'general'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(['key' => $setting['key']], $setting);
        }
    }
}
