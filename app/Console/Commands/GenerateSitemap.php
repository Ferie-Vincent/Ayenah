<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

class GenerateSitemap extends Command
{
    protected $signature = 'sitemap:generate';
    protected $description = 'Generate the sitemap.xml file';

    public function handle()
    {
        $this->info('Starting sitemap generation...');
        Log::info('Sitemap generation started'); // Debug

        $sitemap = Sitemap::create();

        try {
            $routes = Route::getRoutes()->getRoutes();
            $this->info('Found ' . count($routes) . ' routes'); // Debug

            foreach ($routes as $route) {
                if (
                    in_array('GET', $route->methods()) &&
                    !str_starts_with($route->uri(), 'api/') &&
                    !str_starts_with($route->uri(), 'admin/')
                ) {
                    $url = url($route->uri());
                    $sitemap->add(Url::create($url));
                    $this->line('Added: ' . $url); // Debug
                }
            }

            $sitemap->writeToFile(public_path('sitemap.xml'));
            $this->info('Sitemap generated successfully!');
            Log::info('Sitemap generated'); // Debug

        } catch (\Exception $e) {
            $this->error('Error: ' . $e->getMessage());
            Log::error('Sitemap error: ' . $e->getMessage()); // Debug
        }
    }
}