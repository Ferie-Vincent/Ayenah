<?php

namespace Database\Seeders;

use App\Models\Visite;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class VisiteSeeder extends Seeder
{
    public function run(): void
    {
        // Images existantes dans storage/app/public/visites/
        $images = [
            'visites/1ERCi8jalAaGNZrcDflpYC3bCNCKw2tdtInYjMeW.jpg',
            'visites/6PwtXnp7poZPUvrtfIPFtWQVJoa7ms5zYvjgVtqn.jpg',
            'visites/CaCLxNyIHWjWbzDFjqpFSbv7ldJw5PuEHlrp7uiq.jpg',
            'visites/Doe0YXblnHVygArbzE9Pkm4Xq5j5QJDZ1dovKO4Z.jpg',
            'visites/FxG384Gs97HCN4kGXGO97pdWO6lOoSUBR0WHcCVh.jpg',
            'visites/PWASzdUXI9GVPVnvWIl5Hj8aAdqDEs3xqNOe7ORo.jpg',
            'visites/qm00eljUM4Wl2wnDLK3j49B68Cp8IjRUoshh1S7R.jpg',
            'visites/tT8B5SsNzLCulAMsbEQjiZKH506RfCoiVUnK9U0W.jpg',
            'visites/uda7ca99bbiSRXHX1QfxNz5mJqWz7T8x7NaqLCBm.jpg',
            'visites/wL5neVptSIZ45CzJMHoxBBHVeeCFeW62RemvIvg8.jpg',
        ];

        $visites = [
            [
                'title' => 'Mission de prospection dans la région du Gontougo',
                'region' => 'Gontougo (Bondoukou)',
                'dateVisited' => '15/01/2026',
                'description' => 'La cellule de coordination du projet AYENAH a effectué une mission de prospection dans la région du Gontougo afin d\'identifier les acteurs locaux et les opportunités de développement. Cette visite a permis de rencontrer les autorités locales, les coopératives agricoles et les associations de jeunes engagés dans le développement de leur communauté. Plusieurs projets potentiels ont été identifiés dans les domaines de l\'agriculture durable et de la transformation de produits locaux. Les échanges ont été riches et prometteurs pour la suite du programme.',
                'cover_image' => $images[0],
                'image1' => $images[1],
                'image2' => $images[2],
                'image3' => '',
                'image4' => '',
            ],
            [
                'title' => 'Atelier de sensibilisation de la diaspora à Paris',
                'region' => 'Paris (France)',
                'dateVisited' => '22/02/2026',
                'description' => 'Un atelier de sensibilisation et d\'information a été organisé à Paris à l\'intention de la diaspora ivoirienne résidant en France. L\'événement a rassemblé plus de 150 participants, incluant des représentants d\'associations, des entrepreneurs et des experts de divers domaines. Les équipes AYENAH ont présenté le programme, les critères d\'éligibilité et le processus de soumission de projets. Des témoignages de porteurs de projets ayant déjà bénéficié de financements similaires ont permis d\'illustrer concrètement les opportunités offertes par le dispositif.',
                'cover_image' => $images[3],
                'image1' => $images[4],
                'image2' => $images[5],
                'image3' => $images[6],
                'image4' => '',
            ],
            [
                'title' => 'Visite de terrain dans la région du Poro',
                'region' => 'Poro (Korhogo)',
                'dateVisited' => '10/03/2026',
                'description' => 'L\'équipe AYENAH s\'est rendue dans la région du Poro pour évaluer les besoins locaux et rencontrer les structures partenaires potentielles. La mission a permis de visiter plusieurs coopératives agricoles spécialisées dans la culture du coton, de l\'anacarde et du karité. Les discussions avec les acteurs locaux ont mis en lumière le potentiel important de la région en matière de transformation agroalimentaire. Plusieurs pistes de collaboration entre la diaspora et les acteurs locaux ont été identifiées.',
                'cover_image' => $images[7],
                'image1' => $images[8],
                'image2' => $images[9],
                'image3' => $images[0],
                'image4' => $images[1],
            ],
            [
                'title' => 'Forum diaspora-développement à Abidjan',
                'region' => 'Abidjan (Cocody)',
                'dateVisited' => '05/04/2026',
                'description' => 'Le premier Forum diaspora-développement organisé par la DGIE dans le cadre du projet AYENAH a réuni à Abidjan des représentants de la diaspora venus de France, de Belgique, du Canada et des États-Unis. Cet événement de deux jours a permis de présenter les résultats des missions de prospection régionale, de faciliter les échanges entre porteurs de projets et partenaires locaux, et de lancer officiellement le premier appel à projets du programme. Plus de 200 participants ont pris part aux différentes sessions et ateliers thématiques.',
                'cover_image' => $images[2],
                'image1' => $images[3],
                'image2' => $images[4],
                'image3' => $images[5],
                'image4' => $images[6],
            ],
            [
                'title' => 'Mission d\'évaluation dans la région de la Mé',
                'region' => 'Mé (Adzopé)',
                'dateVisited' => '18/05/2026',
                'description' => 'Une mission d\'évaluation a été conduite dans la région de la Mé pour analyser la faisabilité de projets agricoles proposés par des associations de la diaspora. L\'équipe a visité des plantations de cacao, des unités de transformation de manioc et des centres de formation professionnelle. Les rencontres avec les autorités préfectorales et les chefs traditionnels ont confirmé l\'adhésion des communautés locales au programme AYENAH. Trois projets pilotes ont été présélectionnés pour un accompagnement renforcé.',
                'cover_image' => $images[7],
                'image1' => $images[8],
                'image2' => $images[9],
                'image3' => '',
                'image4' => '',
            ],
            [
                'title' => 'Rencontre avec la diaspora ivoirienne de Bruxelles',
                'region' => 'Bruxelles (Belgique)',
                'dateVisited' => '02/06/2026',
                'description' => 'La Direction Générale des Ivoiriens de l\'Extérieur, en partenariat avec l\'Ambassade de Côte d\'Ivoire en Belgique, a organisé une rencontre d\'information avec la diaspora ivoirienne de Bruxelles. L\'objectif était de présenter les opportunités offertes par le projet AYENAH et de recueillir les attentes des compatriotes de l\'extérieur. Près de 80 participants ont assisté à cette rencontre, au cours de laquelle plusieurs experts de la diaspora ont manifesté leur intérêt pour le pilier 2 du programme consacré à la mobilisation des compétences.',
                'cover_image' => $images[0],
                'image1' => $images[3],
                'image2' => $images[6],
                'image3' => $images[9],
                'image4' => '',
            ],
        ];

        foreach ($visites as $visite) {
            Visite::create($visite);
        }
    }
}
