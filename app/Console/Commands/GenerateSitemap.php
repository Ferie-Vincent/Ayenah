<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator; // N'oubliez pas d'importer la classe

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate'; // Changé pour une convention plus standard

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap.xml file for the website';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting sitemap generation...');

        try {
            SitemapGenerator::create(config('app.url')) // Utilisez la config au lieu d'une URL en dur
                ->writeToFile(public_path('sitemap.xml'));

            $this->info('Sitemap generated successfully at '.public_path('sitemap.xml'));
        } catch (\Exception $e) {
            $this->error('Sitemap generation failed: '.$e->getMessage());
        }
    }
}