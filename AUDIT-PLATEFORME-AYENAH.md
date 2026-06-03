# AUDIT COMPLET DE LA PLATEFORME AYENAH

**Date :** 15 mars 2026
**Méthode :** BMAD Party Mode — Audit multi-agents
**Agents participants :** Mary, Winston, Sally, Amelia, John, Bob, Quinn, Paige, Barry

---

## Table des matières

1. [Audit Stratégique — Mary (Business Analyst)](#-mary-business-analyst--audit-stratégique--positionnement)
2. [Audit Architecture — Winston (Architect)](#️-winston-architect--audit-architecture--infrastructure)
3. [Audit UX — Sally (UX Designer)](#-sally-ux-designer--audit-expérience-utilisateur)
4. [Audit Code — Amelia (Developer)](#-amelia-developer--audit-code--qualité)
5. [Audit Produit — John (Product Manager)](#-john-product-manager--audit-produit--fonctionnalités)
6. [Audit Process — Bob (Scrum Master)](#-bob-scrum-master--audit-process--organisation)
7. [Audit QA — Quinn (QA Engineer)](#-quinn-qa-engineer--audit-qualité--tests)
8. [Audit Documentation — Paige (Technical Writer)](#-paige-technical-writer--audit-documentation)
9. [Quick Wins — Barry (Quick Flow Solo Dev)](#-barry-quick-flow-solo-dev--audit-performance--quick-wins)

---

## 📊 Mary (Business Analyst) — Audit Stratégique & Positionnement

### Forces identifiées

- Proposition de valeur claire : le programme connecte diaspora ivoirienne et développement local
- Parcours utilisateur bien défini : Programme → Éligibilité → Soumettre → S'inscrire
- 7 thématiques de projet couvrant les secteurs clés (agriculture, numérique, santé...)
- Formulaire d'enregistrement avec fourchette budgétaire (10K-50K EUR) bien calibrée
- SEO solide : meta descriptions, JSON-LD sur les FAQs, Open Graph, sitemap XML

### Points d'attention

1. **Pas de tableau de bord côté utilisateur** — une fois inscrit, l'utilisateur n'a aucune visibilité sur le statut de son dossier. Le suivi se fait uniquement par email
2. **Pas de KPIs visibles** — nombre de projets financés, montant total distribué, taux de sélection. Ces chiffres crédibiliseraient le programme
3. **Page "Projets soutenus"** existe dans les routes (`/projets-soutenus`) mais n'est pas dans le menu de navigation — opportunité manquée de social proof
4. **Pas de témoignages** de bénéficiaires sur la homepage ou la page programme
5. **Contribution financière** (`/contribution`) : la page existe mais n'est pas dans la navigation — est-ce intentionnel ?
6. **Aucun mécanisme de newsletter** pour garder le lien avec les visiteurs non encore prêts

---

## 🏗️ Winston (Architect) — Audit Architecture & Infrastructure

### Architecture actuelle

- Laravel 11.31, PHP 8.2+, MySQL (MAMP, port 8889)
- Session/Cache/Queue en base de données
- Laravel Breeze pour l'auth
- Sentry pour le monitoring

### Problèmes identifiés

1. **Migration incomplète** — Seule la table `enregistrements` a une migration explicite. Les tables `projets`, `contributions`, `visites`, `messages` et `users` n'ont pas de migrations traçables. Risque majeur en déploiement/collaboration
2. **Pas de Form Request** pour la validation — la validation est inline dans les contrôleurs (`EnregistrementController`, `ContributionController`, `MessageController`). Devrait être extraite dans des `FormRequest` classes dédiées
3. **Stockage fichiers** — les fichiers projets/visites sont stockés dans `storage/app/public/` ce qui est correct, mais aucune politique de nettoyage des fichiers orphelins
4. **Mail en synchrone** — l'envoi d'email dans `EnregistrementController@store` est bloquant. En cas de problème SMTP, l'utilisateur attend. Utiliser `Mail::queue()` avec le driver queue database déjà configuré
5. **Pas de rate limiting global** — seules 3 routes POST ont un throttle (3-5/min). Les routes GET ne sont pas protégées contre le scraping
6. **`.env` contient des credentials Mailtrap en clair** — acceptable en dev, mais à sécuriser avant production
7. **APP_NAME reste "Laravel"** dans `.env` — devrait être "Ayenah"
8. **APP_LOCALE = "en"** dans `.env` alors que le site est en français et `config/app.php` a `fr`

---

## 🎨 Sally (UX Designer) — Audit Expérience Utilisateur

### Points positifs

- Design cohérent avec palette vert/orange rappelant la Côte d'Ivoire
- Animations AOS qui guident l'œil de manière progressive
- Formulaire d'inscription avec sidebar rassurante ("5 min chrono", "Inscription sécurisée")
- Icônes cohérentes (Font Awesome) et hiérarchie visuelle claire
- Process flow visuel sur la page soumettre-projet

### Problèmes UX

1. **Parcours utilisateur fragmenté** — L'utilisateur doit naviguer entre 4-5 pages (Programme → Piliers → Éligibilité → Soumettre → Enregistrement) avant de comprendre s'il est éligible et pouvoir agir. Un **questionnaire d'éligibilité interactif** serait plus efficace
2. **Formulaire d'enregistrement** — Le champ "Thématique" utilise NiceSelect qui, bien que stylisé, cache les options au scroll mobile. Un select natif serait plus fiable sur mobile
3. **Pas de feedback visuel progressif** — Aucun indicateur d'étape (1/2, 2/2) dans le formulaire. L'utilisateur ne sait pas combien de temps il lui reste
4. **CTA inconsistants** — Certaines pages ont 2 boutons CTA en bas, d'autres un seul. Le bouton principal devrait toujours être "S'inscrire"
5. **Page Contact** — Les labels sont en `visually-hidden` (bien pour l'accessibilité) mais les placeholders disparaissent au clic, laissant l'utilisateur sans repère
6. **Pas de page de confirmation** après inscription — un redirect avec SweetAlert est bien, mais une page dédiée avec les prochaines étapes serait plus rassurante
7. **Carte Google Maps** sur la page contact — utile mais la hauteur est forcée à 300px sur mobile, ce qui prend beaucoup de place

---

## 💻 Amelia (Developer) — Audit Code & Qualité

### Issues critiques

1. **`FrontController`** — méthodes sans typage de retour (`return view(...)` sans `: View`). 14 méthodes dans un seul contrôleur → devrait être splitté
2. **`EnregistrementController@store`** — validation inline avec 10 règles. Extraire vers `StoreEnregistrementRequest`
3. **Validation phone** — `min:10|max:20` valide la **longueur de string**, pas le format. Utiliser `regex:/^\+?[0-9\s\-]{10,20}$/`
4. **`ContributionController@store`** — `amount` validé comme `numeric|min:1|max:999999.99` mais pas de vérification que le `projet_id` est actif
5. **`MessageController`** — mélange logique admin (index, update, destroy) et logique publique (store) dans le même contrôleur
6. **Pas de tests** — le dossier `tests/` existe mais aucun test fonctionnel n'est écrit pour les formulaires ou les contrôleurs
7. **`custom.js`** — fichier minifié sans source map. Impossible à débugger en production
8. **Modèles sans relations complètes** — `Enregistrement` n'a aucune relation définie, `User` non plus. Pas de lien entre un enregistrement et un utilisateur futur
9. **Pas de soft deletes** — la suppression de projets/visites/messages est définitive. Risque de perte de données

---

## 📋 John (Product Manager) — Audit Produit & Fonctionnalités

### Fonctionnalités manquantes prioritaires

| Priorité | Fonctionnalité | Impact |
|----------|---------------|--------|
| P0 | Espace utilisateur avec suivi de dossier | Réduirait les emails de relance de 60%+ |
| P0 | Page "Projets soutenus" visible dans la navigation | Social proof = + de candidatures |
| P1 | Notifications email automatiques (statut dossier) | Transparence du processus |
| P1 | Upload de documents dans le formulaire | Actuellement les docs sont envoyés par email séparé |
| P2 | Dashboard statistiques public (montants, projets) | Crédibilité institutionnelle |
| P2 | Multi-langue (FR/EN) | La diaspora parle aussi anglais |
| P3 | Newsletter / Blog intégré | Engagement communautaire |

### Routes orphelines à clarifier

- `/contribution` — présente dans les routes mais absente du menu
- `/a-propos` — route définie mais page peu mise en avant
- `/projets-soutenus` — route active, contenu existant, mais invisible dans la navigation

---

## 🏃 Bob (Scrum Master) — Audit Process & Organisation

### État du projet

- [x] Git repository initialisé
- [x] CLAUDE.md avec instructions projet
- [ ] ~~Migrations complètes~~ — 1 seule migration sur 6 tables
- [ ] ~~Tests automatisés~~ — 0 test écrit
- [ ] ~~CI/CD pipeline~~ — aucun workflow GitHub Actions
- [ ] ~~Documentation API~~ — pas de doc pour les routes admin
- [ ] ~~Environnement de staging~~ — uniquement local (MAMP)

### Commits récents

```
9f043b0 update files
345654f update files
a36d956 update files
c31d6f6 update files
96880b1 update files
```

→ Messages non descriptifs. Aucune convention de commit. **Recommandation :** adopter les Conventional Commits (`feat:`, `fix:`, `docs:`, `refactor:`).

### Fichiers non trackés à traiter

- `CLAUDE.md` — devrait être committé
- `_bmad/` — framework BMAD, à committer
- `app/Mail/` — mails, à committer
- Plusieurs nouvelles pages blade non committées

---

## 🧪 Quinn (QA Engineer) — Audit Qualité & Tests

### Tests critiques manquants

1. **Formulaire d'enregistrement** — soumettre avec données valides, invalides, email dupliqué, phone dupliqué
2. **Formulaire de contact** — validation des champs, rate limiting (5/min)
3. **Formulaire de contribution** — projet_id inexistant, montant hors limites
4. **Throttling** — vérifier que les limites 3/min et 5/min fonctionnent
5. **Upload fichiers admin** — tester les types MIME autorisés, taille max (5-10MB)
6. **Sécurité XSS** — les `{{ }}` Blade échappent par défaut, mais vérifier les `{!! !!}` s'il y en a
7. **CSRF** — tester les soumissions sans token
8. **Email** — vérifier que le mail de confirmation part avec les 2 pièces jointes

### Vulnérabilités potentielles

- Phone validation par longueur de string uniquement (pas de regex)
- Pas de validation MIME côté serveur visible pour les uploads
- `MessageController@update` accepte un status sans vérification de valeur (0, 1, 2 seulement ?)

---

## 📚 Paige (Technical Writer) — Audit Documentation

### État de la documentation

1. **README.md** — existe mais contenu probablement le readme Laravel par défaut
2. **Pas de CONTRIBUTING.md** — aucune instruction pour les contributeurs
3. **Pas de documentation API** — les routes admin ne sont pas documentées
4. **WARP.md** — guide de développement présent (bon point)
5. **Commentaires dans le code** — quasi absents dans les contrôleurs et modèles
6. **Pas de changelog** — aucun suivi des versions
7. **Email templates** — bien structurés mais pas documentés (quand sont-ils envoyés ?)

### Recommandations

- Créer un README.md spécifique au projet avec instructions d'installation
- Documenter les routes API admin
- Ajouter un CHANGELOG.md
- Documenter le flux d'envoi des emails (triggers, contenu, pièces jointes)

---

## 🚀 Barry (Quick Flow Solo Dev) — Audit Performance & Quick Wins

### Quick wins (< 1h chacun)

1. **APP_NAME** dans `.env` : `Laravel` → `Ayenah`
2. **APP_LOCALE** dans `.env` : `en` → `fr`
3. **Ajouter "Projets soutenus"** dans le menu navigation du header
4. **`Mail::queue()`** au lieu de `Mail::send()` dans EnregistrementController
5. **Ajouter `loading="lazy"`** sur toutes les images restantes
6. **Phone validation regex** : remplacer `min:10|max:20` par `regex:/^\+?[\d\s\-()]{10,20}$/`
7. **Commit messages** : adopter conventional commits (`feat:`, `fix:`, `docs:`)
8. **Ajouter `soft deletes`** sur les modèles Projet, Visite, Message

### Performance

- 14 fichiers CSS + 15 fichiers JS chargés → considérer le bundling via Vite
- Images non optimisées (103 fichiers, certains probablement > 500KB)
- Animations GSAP + AOS + Vanilla Tilt + Swiper simultanées → impact sur mobile bas de gamme
- jQuery 3.7.1 chargé alors que Bootstrap 5 n'en a pas besoin

### Stack technique actuelle

| Composant | Technologie | Version |
|-----------|------------|---------|
| Backend | Laravel | 11.31 |
| PHP | PHP | 8.2+ |
| Base de données | MySQL | MAMP |
| Auth | Laravel Breeze | 2.3 |
| Frontend | Bootstrap | 5.3.3 |
| Build | Vite | 6.0 |
| Animations | GSAP, AOS, Vanilla Tilt | - |
| Monitoring | Sentry | 4.13 |
| SEO | spatie/laravel-sitemap | 7.3 |
| Sécurité | spatie/laravel-csp | 3.13 |
| Tests | Pest PHP | 3.7 |

---

## Résumé des priorités

### Critique (P0)

- [ ] Compléter les migrations pour toutes les tables
- [ ] Ajouter "Projets soutenus" dans la navigation
- [ ] Corriger APP_NAME et APP_LOCALE dans `.env`
- [ ] Corriger la validation du téléphone (regex au lieu de min/max)

### Important (P1)

- [ ] Extraire les validations dans des FormRequest
- [ ] Passer l'envoi d'email en queue (`Mail::queue()`)
- [ ] Écrire les tests pour les 3 formulaires publics
- [ ] Ajouter soft deletes sur les modèles principaux
- [ ] Séparer MessageController (admin vs public)

### Souhaitable (P2)

- [ ] Créer un espace utilisateur avec suivi de dossier
- [ ] Ajouter un dashboard statistiques public
- [ ] Optimiser les assets (bundling CSS/JS via Vite)
- [ ] Ajouter upload de documents dans le formulaire d'inscription
- [ ] Mettre en place CI/CD (GitHub Actions)

### Nice to have (P3)

- [ ] Support multi-langue (FR/EN)
- [ ] Newsletter
- [ ] Témoignages de bénéficiaires
- [ ] Questionnaire d'éligibilité interactif
- [ ] Documentation API complète
