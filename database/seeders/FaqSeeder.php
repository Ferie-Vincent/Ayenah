<?php

namespace Database\Seeders;

use App\Models\Faq;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'question' => "Je vis à l'étranger mais je n'ai pas d'association. Puis-je quand même bénéficier d'AYENAH ?",
                'answer' => "Non, le pilier 1 (financement de projets) exige que vous soyez membre d'une association de la diaspora légalement constituée. Cependant, vous pouvez rejoindre une association existante ou en créer une. Pour le pilier 2 (expertise), vous pouvez proposer individuellement vos compétences sans être membre d'une association.",
                'order' => 1,
            ],
            [
                'question' => "Je n'ai pas de partenaire local en Côte d'Ivoire. Comment en trouver un ?",
                'answer' => "La Cellule de Coordination peut vous aider à identifier des partenaires locaux potentiels en fonction de votre domaine d'intervention et de la zone géographique ciblée. Les missions de prospection régionale d'AYENAH permettent également de recenser des structures locales porteuses de projets. N'hésitez pas à nous contacter à infos@ayenah.ci",
                'order' => 2,
            ],
            [
                'question' => "Mon projet concerne la construction d'une école. Est-il éligible ?",
                'answer' => "AYENAH se concentre sur les projets productifs (agriculture, artisanat, transformation). Les projets sociaux purs (écoles, dispensaires) sans dimension économique ne sont pas éligibles. Cependant, si votre projet combine une dimension sociale ET une dimension productive (par exemple, un centre de formation professionnelle agricole), il pourrait être éligible.",
                'order' => 3,
            ],
            [
                'question' => "Je n'ai pas les 30% de cofinancement demandés. Que faire ?",
                'answer' => "Le cofinancement de 30% peut être apporté conjointement par l'association de la diaspora ET le partenaire local. Il peut également inclure des contributions en nature (terrain, locaux, équipements existants) valorisées à leur juste valeur. Attention : Les fonds provenant d'autres financements de l'AFD ne sont pas acceptés comme cofinancement.",
                'order' => 4,
            ],
            [
                'question' => "Combien de temps faut-il pour avoir une réponse après le dépôt du dossier ?",
                'answer' => "Le délai varie selon les sessions de sélection. En général, comptez 2 à 3 mois entre le dépôt de votre dossier et la notification de la décision. Vous serez informé par email à chaque étape du processus (réception du dossier, recevabilité, résultat de la sélection).",
                'order' => 5,
            ],
            [
                'question' => "Puis-je soumettre plusieurs projets en même temps ?",
                'answer' => "Il est recommandé de se concentrer sur un seul projet pour maximiser vos chances de succès et votre capacité de mise en œuvre. Si vous avez plusieurs idées de projets, priorisez celui qui répond le mieux aux critères d'éligibilité et pour lequel vous avez le partenariat le plus solide.",
                'order' => 6,
            ],
            [
                'question' => "Je suis expert dans mon domaine. Comment proposer mes services ?",
                'answer' => "Rendez-vous sur le formulaire d'inscription pour vous enregistrer dans la base de données des experts de la diaspora. Renseignez votre profil, vos compétences et vos disponibilités. La Cellule de Coordination vous contactera lorsqu'une mission correspondant à votre profil sera identifiée.",
                'order' => 7,
            ],
            [
                'question' => "Quels types de projets sont financés par AYENAH ?",
                'answer' => "AYENAH finance des projets dans les secteurs productifs, notamment : développement rural et agriculture, valorisation des produits agricoles (transformation, conditionnement), artisanat et production locale, projets portés par des femmes (priorité). Les projets doivent être collectifs (pas individuels) et avoir une durée maximale de 12 mois.",
                'order' => 8,
            ],
            [
                'question' => "Comment soumettre un projet à AYENAH ?",
                'answer' => "Le processus de soumission se fait en 4 étapes : 1) Préparez votre partenariat avec un acteur local en Côte d'Ivoire, 2) Définissez votre projet (objectifs, activités, budget, calendrier), 3) Constituez votre dossier (formulaire, statuts, convention, budget), 4) Inscrivez-vous sur ayenah.ci. Après inscription, vous recevrez par email la documentation nécessaire pour compléter votre dossier.",
                'order' => 9,
            ],
            [
                'question' => "Comment est versé le financement AYENAH ?",
                'answer' => "Le financement est versé en 2 ou 3 tranches selon l'avancement du projet. Avant chaque versement, vous devez justifier l'utilisation d'au moins 80% de la tranche précédente. Conditions préalables : convention signée, compte bancaire dédié ouvert, et contribution des bénéficiaires (30% minimum) déposée sur le compte.",
                'order' => 10,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::updateOrCreate(
                ['question' => $faq['question']],
                $faq
            );
        }
    }
}
