<?php

namespace App\Console\Commands;

use App\Models\Projet;
use App\Models\Visite;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class CleanOrphanFiles extends Command
{
    protected $signature = 'storage:clean-orphans
                            {--dry-run : Lister les fichiers orphelins sans les supprimer}
                            {--force : Supprimer sans demander confirmation}';

    protected $description = 'Supprime les fichiers orphelins du storage (non référencés en base de données)';

    public function handle(): int
    {
        $dryRun = $this->option('dry-run');
        $orphans = [];

        $this->info('Analyse des fichiers orphelins...');
        $this->newLine();

        // Collecter les fichiers référencés en BDD (incluant les soft-deleted)
        $referencedFiles = $this->getReferencedFiles();

        // Scanner les dossiers de stockage par disque.
        $directoriesByDisk = [
            'public' => ['visites', 'projets/images', 'projets/documents'],
            'local' => ['projets/documents'],
        ];

        foreach ($directoriesByDisk as $diskName => $directories) {
            $disk = Storage::disk($diskName);

            foreach ($directories as $directory) {
                if (!$disk->exists($directory)) {
                    continue;
                }

                $files = $disk->files($directory);

                foreach ($files as $file) {
                    if (basename($file) === '.gitignore') {
                        continue;
                    }

                    if (!in_array($file, $referencedFiles)) {
                        $size = $disk->size($file);
                        $lastModified = date('Y-m-d H:i:s', $disk->lastModified($file));
                        $orphans[] = [
                            'disk' => $diskName,
                            'path' => $file,
                            'size' => $this->formatSize($size),
                            'last_modified' => $lastModified,
                        ];
                    }
                }
            }
        }

        if (empty($orphans)) {
            $this->info('Aucun fichier orphelin trouvé. Le storage est propre.');
            return self::SUCCESS;
        }

        // Afficher les fichiers orphelins
        $this->warn(count($orphans) . ' fichier(s) orphelin(s) trouvé(s) :');
        $this->newLine();
        $this->table(
            ['Disque', 'Fichier', 'Taille', 'Dernière modification'],
            $orphans
        );

        if ($dryRun) {
            $this->info('[Mode dry-run] Aucun fichier supprimé.');
            return self::SUCCESS;
        }

        // Confirmation
        if (!$this->option('force') && !$this->confirm('Voulez-vous supprimer ces fichiers ?')) {
            $this->info('Opération annulée.');
            return self::SUCCESS;
        }

        // Suppression
        $deleted = 0;
        foreach ($orphans as $orphan) {
            if (Storage::disk($orphan['disk'])->delete($orphan['path'])) {
                $deleted++;
                $this->line("  <fg=red>✗</> Supprimé : {$orphan['disk']}:{$orphan['path']}");
            } else {
                $this->error("  Échec de suppression : {$orphan['disk']}:{$orphan['path']}");
            }
        }

        $this->newLine();
        $this->info("{$deleted}/{$this->count($orphans)} fichier(s) supprimé(s).");

        return self::SUCCESS;
    }

    private function count(array $items): int
    {
        return count($items);
    }

    private function getReferencedFiles(): array
    {
        $files = [];

        // Fichiers des projets (incluant soft-deleted pour éviter de supprimer leurs fichiers)
        Projet::withTrashed()->get()->each(function ($projet) use (&$files) {
            foreach (['fichier_presentation', 'photo_logo'] as $column) {
                if (!empty($projet->$column)) {
                    $files[] = $projet->$column;
                }
            }
        });

        // Fichiers des visites (incluant soft-deleted)
        Visite::withTrashed()->get()->each(function ($visite) use (&$files) {
            foreach (['cover_image', 'image1', 'image2', 'image3', 'image4'] as $column) {
                if (!empty($visite->$column)) {
                    $files[] = $visite->$column;
                }
            }
        });

        return $files;
    }

    private function formatSize(int $bytes): string
    {
        $units = ['o', 'Ko', 'Mo', 'Go'];
        $power = $bytes > 0 ? floor(log($bytes, 1024)) : 0;
        return round($bytes / pow(1024, $power), 2) . ' ' . $units[$power];
    }
}
