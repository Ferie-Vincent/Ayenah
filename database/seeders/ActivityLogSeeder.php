<?php

namespace Database\Seeders;

use App\Models\ActivityLog;
use Illuminate\Database\Seeder;

class ActivityLogSeeder extends Seeder
{
    public function run(): void
    {
        $userId = \App\Models\User::first()?->id ?? 1;

        $logs = [
            [
                'action' => 'create',
                'model_type' => 'App\\Models\\Projet',
                'model_id' => 1,
                'description' => 'Création du projet : Programme d\'appui aux coopératives agricoles',
                'ip_address' => '192.168.1.10',
                'created_at' => now()->subDays(14),
            ],
            [
                'action' => 'create',
                'model_type' => 'App\\Models\\Visite',
                'model_id' => 1,
                'description' => 'Création de l\'actualité : Visite de terrain à Bouaké',
                'ip_address' => '192.168.1.10',
                'created_at' => now()->subDays(12),
            ],
            [
                'action' => 'update',
                'model_type' => 'App\\Models\\Projet',
                'model_id' => 1,
                'description' => 'Modification du projet : Programme d\'appui aux coopératives agricoles',
                'ip_address' => '192.168.1.10',
                'created_at' => now()->subDays(10),
            ],
            [
                'action' => 'create',
                'model_type' => 'App\\Models\\Faq',
                'model_id' => 1,
                'description' => 'Création de la FAQ : Qu\'est-ce que AYENAH ?',
                'ip_address' => '192.168.1.15',
                'created_at' => now()->subDays(9),
            ],
            [
                'action' => 'update',
                'model_type' => 'App\\Models\\Message',
                'model_id' => 1,
                'description' => 'Changement de statut du message de : Jean Kouassi',
                'ip_address' => '192.168.1.10',
                'created_at' => now()->subDays(8),
            ],
            [
                'action' => 'create',
                'model_type' => 'App\\Models\\Visite',
                'model_id' => 2,
                'description' => 'Création de l\'actualité : Atelier de formation à Yamoussoukro',
                'ip_address' => '192.168.1.10',
                'created_at' => now()->subDays(7),
            ],
            [
                'action' => 'update',
                'model_type' => 'App\\Models\\Setting',
                'model_id' => null,
                'description' => 'Mise à jour des paramètres du site',
                'ip_address' => '192.168.1.15',
                'created_at' => now()->subDays(6),
            ],
            [
                'action' => 'update',
                'model_type' => 'App\\Models\\PageContent',
                'model_id' => null,
                'description' => 'Modification du contenu de la page : À propos',
                'ip_address' => '192.168.1.10',
                'created_at' => now()->subDays(5),
            ],
            [
                'action' => 'delete',
                'model_type' => 'App\\Models\\Faq',
                'model_id' => 3,
                'description' => 'Suppression de la FAQ : Comment postuler ?',
                'ip_address' => '192.168.1.10',
                'created_at' => now()->subDays(4),
            ],
            [
                'action' => 'create',
                'model_type' => 'App\\Models\\Projet',
                'model_id' => 2,
                'description' => 'Création du projet : Centre de formation numérique de Korhogo',
                'ip_address' => '192.168.1.15',
                'created_at' => now()->subDays(3),
            ],
            [
                'action' => 'update',
                'model_type' => 'App\\Models\\Visite',
                'model_id' => 1,
                'description' => 'Modification de l\'actualité : Visite de terrain à Bouaké',
                'ip_address' => '192.168.1.10',
                'created_at' => now()->subDays(2),
            ],
            [
                'action' => 'delete',
                'model_type' => 'App\\Models\\Enregistrement',
                'model_id' => 5,
                'description' => 'Suppression inscription : Amara Diallo',
                'ip_address' => '192.168.1.10',
                'created_at' => now()->subDays(1),
            ],
            [
                'action' => 'update',
                'model_type' => 'App\\Models\\Faq',
                'model_id' => 2,
                'description' => 'Modification de la FAQ : Quels sont les critères d\'éligibilité ?',
                'ip_address' => '192.168.1.15',
                'created_at' => now()->subHours(6),
            ],
            [
                'action' => 'create',
                'model_type' => 'App\\Models\\Visite',
                'model_id' => 3,
                'description' => 'Création de l\'actualité : Conférence AYENAH à Abidjan',
                'ip_address' => '192.168.1.10',
                'created_at' => now()->subHours(2),
            ],
            [
                'action' => 'update',
                'model_type' => 'App\\Models\\Message',
                'model_id' => 3,
                'description' => 'Changement de statut du message de : Marie Koné',
                'ip_address' => '192.168.1.10',
                'created_at' => now()->subMinutes(30),
            ],
        ];

        foreach ($logs as $log) {
            ActivityLog::create(array_merge($log, [
                'user_id' => $userId,
                'updated_at' => $log['created_at'],
            ]));
        }
    }
}
