<?php

namespace Database\Seeders;

use App\Models\PageContent;
use Illuminate\Database\Seeder;

class PageContentSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            'about' => [
                'presentation' => "Le Projet AYENAH (qui signifie \"lumière\" en langue Baoulé) est un dispositif d'appui aux initiatives économiques portées par la diaspora ivoirienne en lien avec des acteurs locaux en Côte d'Ivoire.",
                'objectifs_os1' => "Soutenir les projets économiques portés par la diaspora en partenariat avec des acteurs locaux, en proposant un accompagnement technique et un cofinancement pouvant aller jusqu'à 25 000 € par projet.",
                'objectifs_os2' => "Mobiliser et valoriser l'expertise de la diaspora ivoirienne qualifiée à travers des missions de courte durée au profit des entreprises, institutions et collectivités locales en Côte d'Ivoire.",
                'axe1' => "Financement et accompagnement de projets collectifs portés par des associations de la diaspora en partenariat avec des structures locales, dans les domaines productifs : agriculture, artisanat, transformation, etc.",
                'axe2' => "Mobilisation de l'expertise de la diaspora qualifiée pour des missions d'appui technique au profit d'entreprises, d'institutions ou de collectivités en Côte d'Ivoire.",
                'financement' => "Le projet AYENAH est cofinancé par l'Agence Française de Développement (AFD) et mis en œuvre par Expertise France, en partenariat avec la Direction Générale des Ivoiriens de l'Extérieur (DGIE).",
                'criteres' => "Les projets doivent être portés par au moins une association de la diaspora ivoirienne légalement constituée, en partenariat avec une structure locale en Côte d'Ivoire. Le cofinancement minimum par les porteurs est de 30%.",
                'expertise' => "Les experts de la diaspora peuvent proposer leurs compétences pour des missions de courte durée (2 à 4 semaines) au profit de structures ivoiriennes. Les frais de mission sont pris en charge par AYENAH.",
            ],
            'programme' => [
                'definition' => "AYENAH est un programme innovant qui mobilise les compétences et les ressources de la diaspora ivoirienne pour contribuer au développement économique de la Côte d'Ivoire.",
                'promesse' => "Transformer l'engagement de la diaspora en impact concret sur le terrain, en finançant des projets productifs et en mobilisant l'expertise des Ivoiriens de l'extérieur.",
                'constat' => "La diaspora ivoirienne, estimée à plus de 1,5 million de personnes, représente un potentiel considérable en termes de transferts financiers, de compétences et de réseaux professionnels encore insuffisamment mobilisé.",
                'obstacles' => "Accès limité aux financements, manque d'accompagnement technique, difficultés à identifier des partenaires locaux fiables, méconnaissance des opportunités d'investissement.",
                'reponse' => "AYENAH apporte une réponse intégrée : cofinancement de projets (jusqu'à 25 000€), accompagnement technique personnalisé, mise en réseau avec des partenaires locaux, et mobilisation de l'expertise de la diaspora.",
            ],
            'piliers' => [
                'pilier1_intro' => "Le premier pilier vise à financer et accompagner des projets économiques collectifs portés par la diaspora ivoirienne en partenariat avec des acteurs locaux.",
                'pilier1_domaines' => "Agriculture et développement rural, transformation et valorisation de produits locaux, artisanat, projets portés par des femmes (prioritaires).",
                'pilier2_intro' => "Le deuxième pilier mobilise les compétences professionnelles de la diaspora qualifiée pour des missions d'appui technique en Côte d'Ivoire.",
                'pilier2_profils' => "Ingénieurs, médecins, enseignants-chercheurs, experts en gestion, consultants, informaticiens, et tout professionnel qualifié de la diaspora ivoirienne.",
                'pilier3_intro' => "Le troisième pilier renforce les capacités des acteurs locaux et de la diaspora à travers des formations et des événements de mise en réseau.",
                'pilier3_activites' => "Formations en montage de projets, ateliers de renforcement des capacités, forums diaspora-développement, événements de networking.",
            ],
            'eligibilite' => [
                'partenariat_diaspora' => "Au moins une association de la diaspora ivoirienne, légalement constituée dans son pays de résidence, doit être porteuse ou co-porteuse du projet.",
                'partenariat_local' => "Un partenaire local en Côte d'Ivoire (association, coopérative, PME, collectivité) doit être identifié et impliqué dans la mise en œuvre du projet.",
                'conditions_projet' => "Le projet doit être collectif (pas individuel), avoir un impact économique mesurable, une durée maximale de 12 mois, et les porteurs doivent apporter un cofinancement d'au moins 30%.",
                'expertise_conditions' => "Pour les missions d'expertise, le candidat doit être un professionnel qualifié de la diaspora ivoirienne, avec au moins 3 ans d'expérience dans son domaine.",
                'criteres_notation' => "Les projets sont évalués selon : la qualité du partenariat (20%), la pertinence du projet (25%), la viabilité économique (25%), l'impact social (20%), la qualité du dossier (10%).",
            ],
            'financement' => [
                'montants' => "Le financement AYENAH peut atteindre jusqu'à 70% du coût total du projet, avec un plafond de 25 000€. Le cofinancement des porteurs (diaspora + partenaire local) doit représenter au minimum 30%.",
                'depenses_eligibles' => "Équipements productifs, matières premières, formations, études de faisabilité, frais de fonctionnement liés au projet (max 20%), déplacements liés au projet.",
                'versement' => "Le financement est versé en 2 à 3 tranches selon l'avancement du projet. Chaque tranche suivante est conditionnée à la justification d'au moins 80% de la tranche précédente.",
                'exemple' => "Pour un projet de 20 000€ : AYENAH finance jusqu'à 14 000€ (70%), les porteurs apportent 6 000€ (30%). Versement en 3 tranches : 40% au démarrage, 30% à mi-parcours, 30% à la clôture.",
                'note_importante' => "Les fonds provenant d'autres financements de l'AFD ne peuvent pas être utilisés comme cofinancement. Les contributions en nature (terrain, locaux, équipements) peuvent être valorisées.",
            ],
            'soumettre-projet' => [
                'etape1' => "Préparez votre partenariat : identifiez et formalisez votre partenariat avec un acteur local en Côte d'Ivoire. Définissez les rôles et responsabilités de chaque partenaire.",
                'etape2' => "Définissez votre projet : objectifs, activités, calendrier de mise en œuvre (max 12 mois), budget détaillé, plan de cofinancement.",
                'etape3' => "Constituez votre dossier : formulaire de candidature complété, statuts de l'association, convention de partenariat, budget détaillé, chronogramme.",
                'etape4' => "Inscrivez-vous sur ayenah.ci et soumettez votre dossier. Après vérification de la recevabilité, votre projet sera évalué par le comité de sélection.",
                'processus_selection' => "Les projets sont examinés lors de sessions de sélection périodiques. Le processus comprend : vérification de recevabilité, évaluation technique, présentation devant le comité, notification des résultats.",
                'accompagnement' => "Les projets retenus bénéficient d'un accompagnement technique personnalisé : appui au montage du projet, suivi de la mise en œuvre, conseil en gestion, mise en réseau.",
            ],
        ];

        foreach ($pages as $page => $sections) {
            foreach ($sections as $section => $content) {
                PageContent::updateOrCreate(
                    ['page' => $page, 'section' => $section],
                    ['content' => $content, 'type' => 'textarea']
                );
            }
        }
    }
}
