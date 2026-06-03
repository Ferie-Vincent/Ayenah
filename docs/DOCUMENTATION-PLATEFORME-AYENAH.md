# Documentation plateforme AYENAH

**Version :** 1.0  
**Date :** 04 juin 2026  
**Statut :** Documentation V1 opérationnelle  
**Projet :** AYENAH - Direction Générale des Ivoiriens de l'Extérieur

---

## 1. Objet

Cette documentation décrit l'état V1 de la plateforme AYENAH : parcours public, fonctionnement administratif, règles de sécurité en production, commandes utiles et points prévus pour la V2.

La V1 n'est pas un dépôt complet de dossier en ligne. Elle sert à :

- informer les candidats sur le dispositif AYENAH ;
- collecter les inscriptions initiales ;
- permettre un premier tri administratif ;
- envoyer les documents officiels aux candidats retenus pour continuer le traitement manuellement.

---

## 2. Parcours V1 retenu

### 2.1 Parcours candidat

1. Le candidat consulte les pages publiques : programme, piliers, financement, éligibilité, soumission.
2. Il s'inscrit via `/enregistrement`.
3. Il renseigne les informations de préqualification :
   - identité ;
   - email ;
   - téléphone ;
   - profession ;
   - localisation ;
   - volet choisi ;
   - nom du projet ou offre d'expertise ;
   - thématique ;
   - montant estimé pour le volet financement ;
   - description facultative.
4. La plateforme envoie un email de confirmation.
5. L'administration examine l'inscription.
6. Si l'inscription est jugée pertinente, l'administration valide le candidat.
7. Le candidat reçoit par email les documents AYENAH à remplir.
8. Le dossier complet est ensuite traité manuellement.

### 2.2 Positionnement du formulaire complet

La page `/demande-financement` existe déjà, mais elle est volontairement en attente pour la V2.

En V1, cette page ne doit pas être considérée comme une anomalie. Elle prépare l'évolution vers un dépôt numérique complet.

### 2.3 Dépôt des annexes

En V1, aucun upload public complet n'est prévu pour :

- formulaire de requête rempli ;
- convention de partenariat ;
- statuts ;
- RIB ;
- budget détaillé ;
- cadre logique ;
- chronogramme ;
- plan de financement ;
- justificatifs.

Ces pièces sont gérées manuellement après le tri initial.

---

## 3. Pages publiques principales

| Page | Route | Rôle |
|---|---|---|
| Accueil | `/` | Présentation générale du projet |
| Programme | `/programme` | Cadre AYENAH |
| Piliers | `/piliers` | Volet financement et volet expertise |
| Éligibilité | `/eligibilite` | Conditions de candidature |
| Financement | `/financement` | Montants, cofinancement, décaissement |
| Soumettre un projet | `/soumettre-projet` | Explication du parcours |
| Inscription | `/enregistrement` | Préqualification V1 |
| Demande de financement | `/demande-financement?token=...` | Réservé V2 / lien post-validation |
| FAQ | `/foire-aux-questions` | Questions fréquentes |
| Contact | `/contact` | Formulaire de contact |

---

## 4. Backoffice administrateur

### 4.1 Accès

L'administration passe par `/login`.

Les routes admin sont protégées par :

- authentification Laravel ;
- middleware `admin`.

### 4.2 Modules disponibles

| Module | Route | Fonction |
|---|---|---|
| Tableau de bord | `/dashboard` | Vue synthétique |
| Inscriptions | `/enregistrements` | Liste et validation des candidats |
| Projets soutenus | `/projets` | CRUD des projets affichés |
| Actualités / visites | `/visites` | Gestion des contenus d'actualité |
| Messages | `/messages` | Gestion des messages reçus |
| FAQ | `/admin/faqs` | Gestion des questions fréquentes |
| Pages CMS | `/pages` | Édition de contenus publics |
| Paramètres | `/settings` | Contacts et réseaux sociaux |
| Journal | `/activity-log` | Historique des actions |

### 4.3 Validation d'une inscription

Lorsqu'un administrateur valide une inscription :

1. un `validation_token` est généré ;
2. la date `validated_at` est enregistrée ;
3. un email de validation est envoyé au candidat ;
4. le candidat reçoit un lien personnel ;
5. le lien expire après 30 jours.

Ce mécanisme permet de distinguer les candidatures brutes des candidats retenus pour la suite du processus.

---

## 5. Authentification et inscription Laravel

La route Laravel générique `/register` est désactivée en production.

Objectif :

- empêcher la création publique de comptes utilisateurs admin ;
- réserver l'inscription publique au parcours métier AYENAH ;
- forcer les candidats à passer par `/enregistrement`.

Conséquence :

- ne jamais utiliser `route('register')` dans les vues publiques ;
- utiliser `route('enregistrement')` pour les appels à candidature ;
- créer les comptes administrateurs de manière contrôlée.

---

## 6. Sécurité production

### 6.1 Règles déjà présentes

La plateforme applique plusieurs protections :

- limitation de débit sur les routes publiques ;
- limitation renforcée sur les formulaires POST ;
- headers de sécurité via middleware ;
- routes admin protégées ;
- inscription Laravel désactivée en production ;
- validation stricte des formulaires via `FormRequest` ;
- nettoyage HTML des contenus FAQ ;
- journalisation de plusieurs actions admin.

### 6.2 Points à vérifier avant production

Avant mise en ligne, contrôler :

- `APP_ENV=production` ;
- `APP_DEBUG=false` ;
- `APP_URL=https://ayenah.ci` ;
- `SESSION_SECURE_COOKIE=true` si HTTPS actif ;
- configuration mail opérationnelle ;
- base de données migrée ;
- caches Laravel reconstruits ;
- permissions d'écriture sur `storage/` et `bootstrap/cache/` ;
- sauvegardes base de données activées ;
- accès `/register` indisponible en production ;
- aucun contenu placeholder visible en base.

### 6.3 Commandes utiles

```bash
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate --force
```

Pour vider uniquement les vues compilées :

```bash
php artisan view:clear
```

---

## 7. Installation locale

### 7.1 Prérequis

- PHP compatible Laravel ;
- Composer ;
- Node.js / npm ;
- MySQL ou MariaDB ;
- MAMP si l'environnement local l'utilise.

### 7.2 Installation

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
```

### 7.3 Lancement local

```bash
php artisan serve --host=127.0.0.1 --port=8000 --no-reload
```

Si le port est occupé :

```bash
php artisan serve --host=127.0.0.1 --port=8010 --no-reload
```

Pour les assets :

```bash
npm run dev
```

ou, pour produire les fichiers de build :

```bash
npm run build
```

---

## 8. Dépannage

### 8.1 `server.php on line 21`

Message possible :

```text
Notice: file_put_contents(): Write of 60 bytes failed with errno=32 Broken pipe
```

Interprétation :

- ce n'est pas une erreur applicative AYENAH ;
- le serveur PHP intégré essaie d'écrire le log de requête dans `stdout` ;
- le flux console a été fermé ou interrompu ;
- la ligne 21 de `server.php` appartient au framework Laravel.

Action recommandée :

```bash
php artisan serve --host=127.0.0.1 --port=8000 --no-reload
```

Ne pas modifier :

```text
vendor/laravel/framework/src/Illuminate/Foundation/resources/server.php
```

### 8.2 `Route [register] not defined`

Cause :

- une vue appelle `route('register')` ;
- en production, `/register` est désactivé.

Correction :

- remplacer par `route('enregistrement')` pour le parcours public ;
- garder `/register` hors production.

### 8.3 `Vite manifest not found`

Cause :

- les assets Vite n'ont pas été construits ;
- le fichier `public/build/manifest.json` est absent.

Correction :

```bash
npm install
npm run build
```

### 8.4 Connexion MySQL refusée

Cause fréquente :

- MAMP n'est pas lancé ;
- port MySQL incorrect ;
- identifiants `.env` incorrects.

Vérifier dans `.env` :

```dotenv
DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=db_ayenah
DB_USERNAME=root
DB_PASSWORD=root
```

---

## 9. Conformité documentaire V1

La V1 est conforme à un parcours de préqualification.

Elle ne couvre pas encore :

- dépôt numérique complet du formulaire de requête ;
- upload complet des annexes ;
- notation `/50` en backoffice ;
- suivi des tranches ;
- rapports techniques et financiers ;
- audit et capitalisation.

Ces points sont assumés comme périmètre V2.

---

## 10. Backlog V2

Priorités recommandées :

1. Formulaire complet de requête de financement en ligne.
2. Upload sécurisé des pièces annexes.
3. Statuts de dossier : reçu, recevable, en instruction, ajourné, validé, rejeté.
4. Grille d'instruction administrative et technique.
5. Notation selon les critères AYENAH.
6. Espace de suivi du candidat.
7. Gestion convention, tranches, rapports et justificatifs.
8. Workflow dédié au volet expertise.
9. Export PDF ou Excel des dossiers.
10. Tableau de bord de pilotage.

---

## 11. Références internes

- Spécification principale : `docs/SPEC-PLATEFORME.md`
- Routes web : `routes/web.php`
- Routes auth : `routes/auth.php`
- Formulaire inscription : `resources/views/front/enregistrement.blade.php`
- Contrôleur inscription : `app/Http/Controllers/EnregistrementController.php`
- Validation inscription : `app/Http/Requests/StoreEnregistrementRequest.php`
- Validation admin : `app/Http/Controllers/Admin/EnregistrementController.php`
- Page demande financement V2 : `resources/views/front/demande-financement.blade.php`
- Footer public : `resources/views/components/footer.blade.php`

