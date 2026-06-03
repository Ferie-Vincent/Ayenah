# Spécification Plateforme AYENAH
**Version :** 1.0 — 03 juin 2026  
**Statut :** En cours d'implémentation  
**Branche active :** `feature/admin-projets-dashboard`

---

## 1. Cadre institutionnel (NON NÉGOCIABLE)

### 1.1 Identité du projet

| Champ | Valeur |
|---|---|
| Nom | **Projet AYENAH** |
| Porteur | Direction Générale des Ivoiriens de l'Extérieur (DGIE) |
| Financement | Agence Française de Développement (AFD) |
| Mise en œuvre | Expertise France — programme CRPM II |
| Durée | Fin 2024 → Fin 2026 (2 ans) |
| Contacts | infos@ayenah.ci · +225 27 21 32 27 42 · ayenah.ci |

### 1.2 Mission

> **Mobiliser la Diaspora pour le Développement de la Côte d'Ivoire**

Objectif global : favoriser une contribution active de la diaspora dans le développement socio-économique local de la Côte d'Ivoire.

### 1.3 Deux volets — résultats attendus

| Volet | Description | Cible |
|---|---|---|
| **VOLET 1 — Financement** | Appui technique et financier aux projets de développement local portés par la diaspora | 5 projets financés |
| **VOLET 2 — Expertise** | Mobilisation des compétences techniques de la diaspora sur des missions d'intérêt général | 3 missions réalisées |

**Volet 1 — Conditions de financement :**
- Subvention maximale : **50 000 €**
- Maximum : **70 % du budget total** du projet
- Partenariat **obligatoire** : association de la diaspora + porteur de projet local en CI
- Participation financière des bénéficiaires ≥ 30 %

### 1.4 Organes du projet

```
Comité de Pilotage          → orientation, conseil, validation (3 réunions)
        ↓
Cellule de Coordination     → instruction, pré-sélection, suivi (DGIE)
        ↓
Comité de Sélection         → évaluation et décision finale (note sur 50)
```

**Critères d'évaluation (Comité de Sélection — note sur 50) :**
- Pertinence du projet /10
- Pertinence et cohérence du montage institutionnel /10
- Faisabilité du projet /10
- Crédibilité du porteur /10
- Cohérence du budget /10

### 1.5 Acteurs du projet AYENAH

| Acteur | Rôle | Volet |
|---|---|---|
| **Porteur de projet** | Structure ivoirienne locale (ONG, association, coopérative, GIC, collectivité territoriale). Maître d'ouvrage. Responsable de la formulation, exécution, gestion financière. | Volet 1 |
| **Association de la diaspora** | Partenaire cosignataire de la convention. Apporte appui technique + financement. Personne morale à but non lucratif légalement constituée. | Volet 1 |
| **Expert de la diaspora** | Ivoirien établi à l'étranger proposant ses compétences techniques sur des missions d'intérêt général en CI où les compétences locales font défaut. | Volet 2 |

⚠️ **Pour le formulaire de candidature : le membre diaspora est toujours le PARTENAIRE ou l'EXPERT, jamais le porteur de projet.** Le porteur est une structure locale ivoirienne.

### 1.6 Critères d'éligibilité et de sélection (Manuel §7.3)

#### Critères d'éligibilité OBLIGATOIRES (éliminatoires)

**Du bénéficiaire :**
1. **Statut du requérant** : personne morale ivoirienne (ONG, asso, coopérative, GIC, collectivité territoriale)
2. **Validité du partenariat** : convention signée entre le porteur local ET une association de la diaspora

**Du projet :**
3. **Domaine d'intervention** éligible (agriculture, artisanat, numérique, santé, éducation, environnement)
4. **Montant demandé** < 50 000 €
5. **Cofinancement** ≥ 30 % du budget total (les fonds AFD ne comptent pas)
6. **Intégration au développement local** (cohérence avec plans locaux)
7. **Durée max : 12 mois** (à compter de la signature de la convention)
8. **Dossier complet** conforme au canevas type

#### Critères de sélection (appréciés par le Comité de Sélection)

9. **Pertinence** : amélioration réelle des conditions de vie, projet collectif (pas individuel), novateur/structurant
10. **Organisation du porteur** : instances, AG, comptabilité 3 ans, expérience similaire
11. **Capacité de gestion de fonds** : comptabilité, expérience gestion fonds publics
12. **Niveau de compétence** : expertise avérée dans la thématique
13. **Impact socio-économique** : lutte exode rural, emplois, compétitivité
14. **Pérennité** : viabilité technique, financière, organisationnelle
15. **Propriété collective** et gouvernance transparente
16. **Cohérence de la méthodologie** : plan d'action clair et faisable
17. **Cohérence du budget** : postes réalistes, dépenses éligibles identifiées

#### Processus d'appel à projets (§7.1)

L'appel à projets est lancé par la **Cellule de Coordination** pour une durée de **2 mois**. Le "Mur d'Opportunités" numérique représente ces appels et facilite la mise en relation avec les porteurs locaux identifiés. Les opportunités publiées dans la plateforme correspondent à des besoins de porteurs locaux cherchant un partenaire diaspora.

### 1.7 Critères d'éligibilité obligatoires (résumé)

1. Statut juridique valide du porteur (personne morale ivoirienne)
2. Partenariat diaspora + porteur local formalisé (convention signée)
3. Domaine d'intervention éligible
4. Budget < 50 000 €
5. Cofinancement ≥ 30 % (hors fonds AFD)
6. Durée ≤ 12 mois
7. Dossier administratif et technique complet

---

## 2. État actuel de la plateforme

### 2.1 Fonctionnalités implémentées (branche `feature/admin-projets-dashboard`)

#### Backoffice admin (`/dashboard`, `/projets`, etc.)

| Page | Route | Statut |
|---|---|---|
| Tableau de bord | `/dashboard` | ✅ Refactorisé — stats propres + dernières inscriptions |
| Gestion des projets | `/projets` | ✅ Nouvelle page CRUD dédiée |
| Inscriptions diaspora | `/enregistrements` | ✅ Existant |
| Actualités | `/visit` | ✅ Existant |
| Messages | `/message` | ✅ Existant |
| Pages du site (CMS) | `/pages` | ✅ Existant |
| FAQ | `/admin/faqs` | ✅ FaqController créé |
| Paramètres | `/settings` | ✅ Existant |
| Journal d'activité | `/activity-log` | ✅ Existant |
| Contributeurs | — | ❌ Retiré du sidebar et dashboard |

#### Formulaire d'inscription public (`/enregistrement`)

| Correction | Statut |
|---|---|
| Titre : "Candidature au Projet AYENAH" | ✅ |
| Meta description corrigée | ✅ |
| Étapes processus réel (4 étapes avec Comité de Sélection) | ✅ |
| Encart 2 volets (financement / expertise) | ✅ |
| Champ `volet` (sélection interactive) | ✅ |
| Alerte partenariat obligatoire (Volet 1) | ✅ |
| Budget conditionnel — visible Volet 1 uniquement | ✅ |
| Min 10 000 € supprimé (non documenté officiellement) | ✅ |
| Bouton "Soumettre ma candidature" | ✅ |
| Message flash corrigé | ✅ |

#### Table `projets` (migration `2026_06_03_000001`)

Nouveaux champs ajoutés :
- `description` text nullable
- `statut` enum (en_preparation / en_cours / suspendu / termine / annule)
- `date_debut` date nullable
- `date_fin_prevue` date nullable
- `completude` tinyint (0–100)
- `inscription_active` boolean

#### Table `enregistrements` (migration `2026_06_03_000002`)

Nouveaux champs ajoutés :
- `volet` enum (volet_1_financement / volet_2_expertise)
- `amount` rendu nullable (Volet 2 n'a pas de budget)

### 2.2 Routes actives

```
GET  /enregistrement          → formulaire candidature public
POST /enregistrement          → soumission (throttle 3/min)
GET  /dashboard               → admin tableau de bord
GET  /projets                 → admin gestion projets
GET/POST/PUT/DELETE /projets  → CRUD projets
GET  /enregistrements         → admin liste inscriptions
GET  /admin/faqs              → admin FAQ
```

### 2.3 Emails existants

| Email | Classe | Déclencheur |
|---|---|---|
| Confirmation candidature | `EnregistrementConfirmation` | Soumission formulaire |

---

## 3. Fonctionnalité à implémenter — Mur d'Opportunités

### 3.1 Vue d'ensemble

Le Mur d'Opportunités est la **version numérique de l'appel à projets AYENAH** (§7.1 Manuel). Il permet à la Cellule de Coordination de publier des appels ciblés associés à des porteurs locaux identifiés (ONG, coopératives, collectivités) cherchant un partenaire diaspora, et de notifier les membres diaspora inscrits.

### 3.2 Définitions

**Opportunité** = appel à projets thématique publié par AYENAH, associé à un porteur local ivoirien identifié, ouvert à la mise en relation avec une association de la diaspora.

**Copy admin** : "Créer un appel à projets" (pas "Publier une opportunité")
**Copy front** : "Une opportunité de partenariat vous est proposée dans le cadre du projet AYENAH"

**Table dédiée** : `opportunites` (distincte de `projets`).

### 3.3 Tables à créer (migrations)

#### Table `opportunites`

```sql
CREATE TABLE opportunites (
    id           BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom          VARCHAR(255) NOT NULL,
    type         ENUM('ngo','collectivite','cooperative','entreprise') NOT NULL,
    description  TEXT NULL,
    region       VARCHAR(100) NOT NULL,
    is_active    BOOLEAN NOT NULL DEFAULT FALSE,
    activated_at TIMESTAMP NULL,
    created_at   TIMESTAMP,
    updated_at   TIMESTAMP,
    deleted_at   TIMESTAMP NULL  -- soft delete
);
```

**Règle :** `is_active` ne change que par action admin explicite. Aucune expiration automatique.

#### Colonnes à ajouter à `enregistrements`

```sql
ALTER TABLE enregistrements
    ADD COLUMN statut               ENUM('nouveau','en_attente_opportunite','interest_exprime',
                                         'en_attente_validation_entite','valide','rejete','expire')
                                    NOT NULL DEFAULT 'nouveau',
    ADD COLUMN opportunite_id       BIGINT UNSIGNED NULL,
    ADD COLUMN magic_link_token     VARCHAR(64) NULL UNIQUE,
    ADD COLUMN magic_link_expires_at TIMESTAMP NULL,
    ADD CONSTRAINT fk_enreg_opportunite
        FOREIGN KEY (opportunite_id) REFERENCES opportunites(id) ON DELETE SET NULL;
```

#### Table `entites_suggerees`

```sql
CREATE TABLE entites_suggerees (
    id                 BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    enregistrement_id  BIGINT UNSIGNED NULL,
    nom                VARCHAR(255) NOT NULL,
    type               ENUM('ngo','collectivite','cooperative','entreprise') NOT NULL,
    description        TEXT NULL,
    region             VARCHAR(100) NOT NULL,
    contact_nom        VARCHAR(255) NULL,
    contact_email      VARCHAR(255) NULL,
    contact_phone      VARCHAR(50) NULL,
    raison_rejet       TEXT NULL,
    created_at         TIMESTAMP,
    updated_at         TIMESTAMP,
    FOREIGN KEY (enregistrement_id) REFERENCES enregistrements(id) ON DELETE SET NULL
);
```

#### Table `engagement_tokens`

```sql
CREATE TABLE engagement_tokens (
    id                 BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    enregistrement_id  BIGINT UNSIGNED NOT NULL,
    token              VARCHAR(64) NOT NULL UNIQUE,  -- SHA-256 du token brut
    used_at            TIMESTAMP NULL,
    expires_at         TIMESTAMP NOT NULL,
    created_at         TIMESTAMP,
    FOREIGN KEY (enregistrement_id) REFERENCES enregistrements(id) ON DELETE CASCADE
);
```

### 3.4 Machine à états — `enregistrements.statut`

```
[nouveau]
    │
    │ Admin active opportunité → broadcast
    ▼
[en_attente_opportunite] ──── 7j sans clic ────► [expire]
    │                                                │
    │ Membre clique magic link valide                │ Renouvellement (si opportunité active)
    ▼                                                ▼
[interest_exprime] ◄──────────────────────────────────
    │
    ├── Soumet entité ──► [en_attente_validation_entite]
    │                              ├── Admin valide ──► [valide]
    │                              └── Admin rejette ─► [rejete] ──► admin réouvre ──► [interest_exprime]
    │
    └── Pas d'entité → Admin valide directement ──► [valide]
```

**Transitions :**

| Départ | Arrivée | Déclencheur |
|---|---|---|
| `nouveau` | `en_attente_opportunite` | Admin active une opportunité (broadcast) |
| `en_attente_opportunite` | `interest_exprime` | Clic magic link valide (usage unique) |
| `en_attente_opportunite` | `expire` | `magic_link_expires_at` < now() (job cron) |
| `en_attente_opportunite` | `nouveau` | Admin désactive l'opportunité liée |
| `interest_exprime` | `en_attente_validation_entite` | Membre soumet formulaire entité |
| `interest_exprime` | `valide` | Admin valide sans entité (Scénario A) |
| `en_attente_validation_entite` | `valide` | Admin valide l'entité |
| `en_attente_validation_entite` | `rejete` | Admin rejette + motif obligatoire |
| `rejete` | `interest_exprime` | Admin réouvre |
| `expire` | `en_attente_opportunite` | Renouvellement demandé (si opp. active) |

### 3.5 Règles métier critiques

1. **Broadcast** : quand admin active une opportunité → email envoyé à tous les `enregistrements.statut = 'nouveau'`
2. **Magic link** : token UUID brut envoyé dans l'email, SHA-256 stocké en base. Valide 7 jours, usage unique.
3. **Un enregistrement déjà `en_attente_opportunite`** ne reçoit pas un second broadcast.
4. **Désactivation opportunité** avec membres `en_attente_opportunite` → warning admin → si confirmé : retour à `nouveau`, tokens invalidés.
5. **Opportunités** : aucune expiration automatique. Seul l'admin active/désactive.
6. **Entité suggérée** : 1 seule par enregistrement. Rejet = motif obligatoire transmis au membre.
7. **Enregistrements** : pas d'expiration automatique en V1.

### 3.6 Sécurité du magic link

```php
// Génération
$tokenBrut = bin2hex(random_bytes(32)); // 64 chars
EngagementToken::create([
    'enregistrement_id' => $enregistrement->id,
    'token'      => hash('sha256', $tokenBrut), // stocké hashé
    'expires_at' => now()->addDays(7),
]);
// URL envoyée : https://ayenah.ci/opportunite/repondre/{$tokenBrut}

// Vérification
$record = EngagementToken::where('token', hash('sha256', $token))
    ->where('expires_at', '>', now())
    ->whereNull('used_at')
    ->firstOrFail();
```

### 3.7 Inventaire des emails à créer

| ID | Classe Mailable | Déclencheur | Destinataire |
|---|---|---|---|
| E1 | `EnregistrementConfirmation` | Soumission formulaire | Membre ✅ déjà implémenté |
| E2 | `OpportuniteDisponible` | Admin active opportunité (broadcast) | Membre (statut → `en_attente_opportunite`) |
| E3 | `LienExpireNotification` | Job cron (lien périmé) | Membre (statut → `expire`) |
| E4 | `EntiteSuggereeNotification` | Soumission entité | Admin (adresse `.env`) |
| E5 | `EntiteValideeNotification` | Admin valide entité | Membre (statut → `valide` via B) |
| E6 | `EntiteRejeteeNotification` | Admin rejette entité | Membre (statut → `rejete`) |
| E7 | `DossierValideNotification` | Admin valide sans entité | Membre (statut → `valide` via A) |

**Contenu obligatoire de E2 :**
- Nom, type, région de l'opportunité
- Description courte
- Magic link (CTA bouton principal)
- Date d'expiration en évidence : `Ce lien expire le JJ/MM/AAAA`
- Mention : "Si vous ne souhaitez pas répondre, ignorez cet email."

### 3.8 Écrans front à créer

| # | URL | Description | Statut déclenché |
|---|---|---|---|
| 1 | `/opportunite/repondre/{token}` | Page post-magic-link — bifurcation A/B | `interest_exprime` |
| 2 | `/opportunite/confirmer/{token}` | Scénario A — confirmation intérêt | maintien |
| 3 | `/opportunite/entite/{token}` | Scénario B — formulaire entité suggérée | `en_attente_validation_entite` |
| 4 | `/opportunite/expire` | Lien expiré — demande renouvellement | — |
| 5 | `/opportunite/deja-utilise` | Lien déjà utilisé | — |

### 3.9 Composants backoffice admin à créer

- **Liste des opportunités** : tableau avec is_active, type, région, nb inscrits en attente
- **Création/édition opportunité** : formulaire avec tous les champs
- **Activation** : bouton avec confirmation si membres `en_attente_opportunite` liés
- **Vue des inscrits par opportunité** : filtrable par statut
- **Validation dossiers** : boutons valider/rejeter (motif obligatoire au rejet)
- **Entités suggérées** : liste avec statut, boutons traitement

### 3.10 Job cron nécessaire

```php
// app/Console/Commands/ExpireEngagementTokens.php
// Schedule : daily
// Action : passe à 'expire' les enregistrements dont magic_link_expires_at < now()
// + envoi email E3
```

### 3.11 Cas limites résolus

| # | Situation | Règle |
|---|---|---|
| CL-01 | Double inscription même email | Bloqué par contrainte unique |
| CL-02 | Opportunité désactivée pendant `en_attente_opportunite` | Retour à `nouveau`, tokens invalidés |
| CL-03 | Clic lien + opportunité désactivée | Vérif `is_active` au clic → page info |
| CL-04 | Opportunité désactivée pendant `interest_exprime` | Aucun impact — dossier continue |
| CL-08 | Deux admins activent deux opportunités simultanément | Lock optimiste sur `updated_at` |
| CL-09 | Renouvellement lien expiré | Nouveau token si `is_active = true` |

---

## 4. Règles de copy — Ton et vocabulaire

### 4.1 Vocabulaire obligatoire

| À utiliser | À éviter |
|---|---|
| "le projet AYENAH" | ~~"le réseau AYENAH"~~ |
| "le programme AYENAH" | ~~"la plateforme AYENAH"~~ |
| "Soumettre ma candidature" | ~~"S'inscrire"~~ ~~"Rejoindre"~~ |
| "Comité de Sélection" | ~~"équipe AYENAH"~~ pour la décision finale |
| "Cellule de Coordination (DGIE)" | ~~"notre équipe"~~ pour l'instruction |
| "instruit par la Cellule de Coordination" | ~~"traité automatiquement"~~ |
| "retenu par le Comité de Sélection" | ~~"validé"~~ ~~"accepté"~~ |
| "non retenu à ce stade" | ~~"refusé"~~ ~~"rejeté"~~ |

### 4.2 Processus à toujours mentionner

```
Soumission → Instruction (Cellule Coordination) → Comité de Sélection → Notification
```

Ne jamais laisser entendre que la soumission = acceptation automatique.

### 4.3 Promesses contractuelles

| Promesse | Délai | Canal |
|---|---|---|
| Accusé de réception | Immédiat | Email automatique |
| Alerte nouvelle opportunité (Scénario A) | Dès activation admin | Email automatique |
| Suivi entité déclarée (Scénario B) | Sous 30 jours | Email manuel AYENAH |
| Notification décision Comité | Variable | Email automatique |

### 4.4 Ce que le programme ne promet PAS

- Aucune garantie de sélection
- Aucun matching algorithmique automatique (V1)
- Aucune intégration garantie de l'entité suggérée (Scénario B)

---

## 5. Périmètre V1 — Hors scope

Les éléments suivants sont **explicitement exclus de V1** :

1. Matching algorithmique profil ↔ opportunité
2. Espace membre persistant (stateless — magic link uniquement)
3. Dashboard de suivi des entités suggérées (traitement manuel admin)
4. Liaison entre table `opportunites` et table `projets`
5. Quota de places par opportunité
6. Notifications push / SMS
7. Multilangue (français uniquement)
8. Anonymisation RGPD automatique
9. Expiration automatique des enregistrements

---

## 6. Structure des fichiers à créer (V2 — Mur d'Opportunités)

```
app/
├── Http/Controllers/
│   ├── Admin/
│   │   └── OpportuniteController.php     ← CRUD opportunités + broadcast
│   └── OpportuniteEngagementController.php ← magic link, bifurcation A/B, entité
├── Models/
│   ├── Opportunite.php
│   ├── EngagementToken.php
│   └── EntiteSuggeree.php
├── Mail/
│   ├── OpportuniteDisponible.php          ← E2
│   ├── LienExpireNotification.php         ← E3
│   ├── EntiteSuggereeNotification.php     ← E4
│   ├── EntiteValideeNotification.php      ← E5
│   ├── EntiteRejeteeNotification.php      ← E6
│   └── DossierValideNotification.php      ← E7
├── Jobs/
│   └── BroadcastOpportunite.php           ← job async broadcast
└── Console/Commands/
    └── ExpireEngagementTokens.php         ← cron quotidien

database/migrations/
├── 2026_XX_XX_create_opportunites_table.php
├── 2026_XX_XX_add_statut_to_enregistrements_table.php
├── 2026_XX_XX_create_entites_suggerees_table.php
└── 2026_XX_XX_create_engagement_tokens_table.php

resources/views/
├── front/opportunite/
│   ├── repondre.blade.php      ← bifurcation A/B
│   ├── confirmer.blade.php     ← Scénario A
│   ├── entite.blade.php        ← Scénario B
│   ├── expire.blade.php        ← lien expiré
│   └── deja-utilise.blade.php  ← lien déjà utilisé
├── admin/opportunites/
│   └── index.blade.php         ← CRUD admin
└── emails/
    ├── opportunite-disponible.blade.php
    ├── lien-expire.blade.php
    ├── entite-suggeree.blade.php
    ├── entite-validee.blade.php
    ├── entite-rejetee.blade.php
    └── dossier-valide.blade.php
```

---

## 7. Index des décisions prises

| # | Décision | Justification |
|---|---|---|
| D-01 | Table `opportunites` séparée de `projets` | Cycle de vie différent, évite de polluer la table projets |
| D-02 | Aucune expiration automatique des opportunités | Admin contrôle — décision client |
| D-03 | Aucune expiration des enregistrements en V1 | Décision client — RGPD différé |
| D-04 | Magic link sans OTP en V1 | Réduire friction — token seul suffit pour une pré-inscription sans paiement |
| D-05 | Broadcast global sans matching | V1 : 5–15 opportunités — segmentation V2 |
| D-06 | `volet` enum sur `enregistrements` | Distinguer Volet 1 (financement) et Volet 2 (expertise) |
| D-07 | Budget conditionnel (Volet 1 uniquement) | Volet 2 = expertise, pas de subvention directe |
| D-08 | Min 10 000 € supprimé | Non documenté dans le manuel officiel |
| D-11 | `amount` = contribution de l'association diaspora | Pas le budget total — le porteur est la structure locale ivoirienne |
| D-12 | Durée max 12 mois affichée dans le formulaire | §7.3.2 Critère 9 — critère d'éligibilité obligatoire |
| D-13 | Label project_name = "avec votre partenaire local en CI" | Clarifier que la diaspora est partenaire, pas porteur |
| D-14 | Opportunités = appels à projets AYENAH (§7.1) | Pas des entités indépendantes — c'est la Cellule de Coordination qui lance |
| D-09 | Contributeurs retiré du backoffice | Non pertinent pour le programme actuel |
| D-10 | `is_admin` sur users (déjà implémenté) | Accès backoffice restreint aux admins DGIE |

---

*Document maintenu par l'équipe de développement AYENAH — à mettre à jour à chaque sprint.*
