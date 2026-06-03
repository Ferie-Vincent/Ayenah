@extends('layout/template')

@section('title', 'AYENAH | Candidature — Contribuer au développement de la Côte d\'Ivoire')

@section('meta_description', 'Soumettez votre candidature au projet AYENAH. Votre dossier sera instruit par la Cellule de Coordination de la DGIE et soumis au Comité de Sélection.')

@section('content')

<!-- ==== banner section start ==== -->
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">
                <h2 class="title-animation">Candidature au Projet AYENAH</h2>
                <p class="text-white">Première étape du processus de sélection</p>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src="{{asset('front/assets/images/contribution.png')}}" alt="Candidature AYENAH">
    </div>
    <div class="shape">
        <img src="{{asset('front/assets/images/shape.png')}}" alt="AYENAH">
    </div>
</section>
<!-- ==== / banner section end ==== -->

<!-- ==== Formulaire de candidature ==== -->
<section class="section-padding african-pattern-bg">
    <div class="container">
        <div class="row justify-content-center">

            <!-- Panneau latéral informatif -->
            <div class="col-lg-4 mb-4 mb-lg-0 order-lg-2">
                <div class="form-sidebar" data-aos="fade-left" data-aos-duration="1000">

                    <div class="form-sidebar__card form-sidebar__card--green">
                        <div class="form-sidebar__icon">
                            <i class="fa fa-shield-alt"></i>
                        </div>
                        <h6 class="form-sidebar__title">Candidature sécurisée</h6>
                        <p class="form-sidebar__text">Vos données sont protégées et traitées uniquement dans le cadre du projet AYENAH — DGIE.</p>
                    </div>

                    <div class="form-sidebar__card form-sidebar__card--orange">
                        <div class="form-sidebar__icon form-sidebar__icon--orange">
                            <i class="fa fa-clock"></i>
                        </div>
                        <h6 class="form-sidebar__title">5 min chrono</h6>
                        <p class="form-sidebar__text">Remplissez ce formulaire. Vous recevrez un accusé de réception par email avec les documents du dossier.</p>
                    </div>

                    <div class="form-sidebar__card form-sidebar__card--green">
                        <div class="form-sidebar__icon">
                            <i class="fa fa-headset"></i>
                        </div>
                        <h6 class="form-sidebar__title">Besoin d'aide ?</h6>
                        <p class="form-sidebar__text">La Cellule de Coordination est disponible pour vous accompagner dans la constitution de votre dossier.</p>
                        <a href="{{ route('contact') }}" class="form-sidebar__link">
                            <i class="fa fa-arrow-right"></i> Nous contacter
                        </a>
                    </div>

                    <div class="form-sidebar__steps">
                        <h6 class="form-sidebar__steps-title">Processus de sélection</h6>
                        <div class="form-sidebar__step">
                            <span class="form-sidebar__step-num">1</span>
                            <span>Soumission de votre candidature</span>
                        </div>
                        <div class="form-sidebar__step">
                            <span class="form-sidebar__step-num">2</span>
                            <span>Instruction par la Cellule de Coordination (DGIE)</span>
                        </div>
                        <div class="form-sidebar__step">
                            <span class="form-sidebar__step-num">3</span>
                            <span>Évaluation et décision du Comité de Sélection</span>
                        </div>
                        <div class="form-sidebar__step">
                            <span class="form-sidebar__step-num">4</span>
                            <span>Notification et mise en œuvre si retenu(e)</span>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Formulaire -->
            <div class="col-lg-8 order-lg-1">

                @if($errors->any())
                    <div class="alert alert-danger mb-4" style="border-radius: 12px; border: none; background: #fff5f5; color: #c53030; padding: 18px 22px;">
                        <ul class="mb-0" style="padding-left: 18px;">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="form-box" data-aos="fade-right" data-aos-duration="1000">

                    <!-- En-tête du formulaire -->
                    <div class="form-box__header">
                        <div class="form-box__header-icon">
                            <i class="fa fa-file-alt"></i>
                        </div>
                        <div>
                            <h3 class="form-box__header-title">Formulaire de candidature</h3>
                            <p class="form-box__header-text">Soumettez votre dossier au projet AYENAH. Votre candidature sera instruite par la Cellule de Coordination de la DGIE, puis soumise au Comité de Sélection.</p>
                        </div>
                    </div>

                    <!-- Encart volet actif -->
                    <div class="mb-4 p-3 rounded" style="background:#f0fdf4;border:1px solid #bbf7d0;">
                        <h6 style="color:#166534;font-weight:700;margin-bottom:8px;">
                            <i class="fa fa-info-circle me-1"></i> Volet ouvert à la candidature
                        </h6>
                        <div style="background:#fff;border-radius:8px;padding:12px;border:1px solid #d1fae5;">
                            <strong style="color:#059669;">VOLET 1 — Financement</strong>
                            <p style="font-size:13px;color:#374151;margin:4px 0 0;">Subvention jusqu'à <strong>50 000 €</strong> (max. 70 % du budget total) pour un projet porté en <strong>partenariat</strong> entre une association de la diaspora et un porteur local en Côte d'Ivoire.</p>
                        </div>
                        <p style="font-size:12px;color:#6b7280;margin:8px 0 0;">
                            <i class="fa fa-exclamation-circle" style="color:#d97706;"></i>
                            Ce formulaire est la <strong>première étape</strong> d'un processus d'instruction. La sélection finale relève du <strong>Comité de Sélection</strong> du projet AYENAH.
                        </p>
                    </div>

                    <form action="{{ route('enregistrement.store') }}" method="POST" class="simple-form" id="form-candidature">
                    @csrf

                    <!-- Indicateur d'étapes -->
                    <div class="simple-form__steps">
                        <div class="simple-form__step-indicator simple-form__step-indicator--active" data-step="1">
                            <span class="simple-form__step-num">1</span>
                            <span class="simple-form__step-label">Informations personnelles</span>
                        </div>
                        <div class="simple-form__step-divider"></div>
                        <div class="simple-form__step-indicator" data-step="2">
                            <span class="simple-form__step-num">2</span>
                            <span class="simple-form__step-label">Votre contribution</span>
                        </div>
                    </div>

                    <!-- ═══ SECTION 1 : Informations personnelles ═══ -->
                    <h4 class="simple-form__section-title">
                        <i class="fa fa-user colorVert"></i> Informations personnelles
                    </h4>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="simple-form__group">
                                <label for="lastname">Nom <span>*</span></label>
                                <div class="simple-form__input-wrap">
                                    <i class="fa fa-user simple-form__input-icon"></i>
                                    <input type="text" name="lastname" id="lastname" placeholder="Votre nom" required value="{{ old('lastname') }}" class="simple-form__input--icon">
                                </div>
                                @error('lastname')<p class="simple-form__error">{{ $message }}</p>@enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="simple-form__group">
                                <label for="firstname">Prénoms <span>*</span></label>
                                <div class="simple-form__input-wrap">
                                    <i class="fa fa-user simple-form__input-icon"></i>
                                    <input type="text" name="firstname" id="firstname" placeholder="Vos prénoms" required value="{{ old('firstname') }}" class="simple-form__input--icon">
                                </div>
                                @error('firstname')<p class="simple-form__error">{{ $message }}</p>@enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="simple-form__group">
                                <label for="email">Email <span>*</span></label>
                                <div class="simple-form__input-wrap">
                                    <i class="fa fa-envelope simple-form__input-icon"></i>
                                    <input type="email" name="email" id="email" placeholder="votre.email@exemple.com" required value="{{ old('email') }}" class="simple-form__input--icon">
                                </div>
                                @error('email')<p class="simple-form__error">{{ $message }}</p>@enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="simple-form__group">
                                <label for="phone">Téléphone <span>*</span></label>
                                <div class="simple-form__input-wrap">
                                    <i class="fa fa-phone simple-form__input-icon"></i>
                                    <input type="text" name="phone" id="phone" placeholder="+33 6 12 34 56 78" required value="{{ old('phone') }}" class="simple-form__input--icon">
                                </div>
                                @error('phone')<p class="simple-form__error">{{ $message }}</p>@enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="simple-form__group">
                                <label for="profession">Profession <span>*</span></label>
                                <div class="simple-form__input-wrap">
                                    <i class="fa fa-briefcase simple-form__input-icon"></i>
                                    <input type="text" name="profession" id="profession" placeholder="Votre métier actuel" required value="{{ old('profession') }}" class="simple-form__input--icon">
                                </div>
                                @error('profession')<p class="simple-form__error">{{ $message }}</p>@enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="simple-form__group">
                                <label for="location">Pays de résidence <span>*</span></label>
                                <div class="simple-form__input-wrap">
                                    <i class="fa fa-globe-americas simple-form__input-icon"></i>
                                    <input type="text" name="location" id="location" placeholder="Ex : France, Belgique, Canada..." required value="{{ old('location') }}" class="simple-form__input--icon">
                                </div>
                                @error('location')<p class="simple-form__error">{{ $message }}</p>@enderror
                            </div>
                        </div>
                    </div>

                    <!-- ═══ SECTION 2 : Votre contribution ═══ -->
                    <h4 class="simple-form__section-title">
                        <i class="fa fa-lightbulb colorOrange"></i> Votre contribution
                    </h4>

                    <!-- Volet sélectionné (Volet 1 uniquement — Volet 2 désactivé) -->
                    <input type="hidden" name="volet" value="volet_1_financement">
                    <div class="simple-form__group">
                        <label>Type de contribution</label>
                        <div class="row g-3 mt-1">
                            {{-- Volet 1 : actif --}}
                            <div class="col-md-6">
                                <div style="display:block;padding:14px;border-radius:10px;border:2px solid #059669;background:#f0fdf4;">
                                    <strong style="color:#059669;display:block;margin-bottom:4px;"><i class="fa fa-hand-holding-usd me-1"></i> VOLET 1 — Financement</strong>
                                    <span style="font-size:12px;color:#6b7280;">Votre association de la diaspora cofinance un projet porté par une structure locale ivoirienne (ONG, coopérative, collectivité). Subvention jusqu'à 50 000 € — durée max 12 mois.</span>
                                    <span class="badge ms-1" style="background:#dcfce7;color:#16a34a;font-size:10px;">Ouvert</span>
                                </div>
                            </div>
                            {{-- Volet 2 : désactivé (à réactiver ultérieurement) --}}
                            <div class="col-md-6">
                                <div style="display:block;padding:14px;border-radius:10px;border:2px solid #e5e7eb;background:#f9fafb;opacity:.55;pointer-events:none;user-select:none;">
                                    <strong style="color:#9ca3af;display:block;margin-bottom:4px;"><i class="fa fa-graduation-cap me-1"></i> VOLET 2 — Expertise</strong>
                                    <span style="font-size:12px;color:#9ca3af;">Mission d'expertise technique au profit d'acteurs ivoiriens.</span>
                                    <span class="badge ms-1" style="background:#f3f4f6;color:#6b7280;font-size:10px;">Bientôt disponible</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Alerte partenariat Volet 1 -->
                    <div id="alerte-partenariat" style="margin-bottom:16px;">
                        <div style="background:#fefce8;border:1px solid #fde68a;border-radius:8px;padding:12px 14px;">
                            <p style="font-size:13px;color:#92400e;margin:0;">
                                <i class="fa fa-exclamation-triangle me-1" style="color:#d97706;"></i>
                                <strong>Volet 1 — Critère obligatoire :</strong> Ce volet requiert un <strong>partenariat effectif</strong> entre votre association de la diaspora et un <strong>porteur de projet local en Côte d'Ivoire</strong>. Votre dossier ne sera pas éligible sans ce partenariat.
                            </p>
                        </div>
                    </div>

                    <!-- Intitulé projet / mission -->
                    <div class="simple-form__group">
                        <label for="project_name" id="label-project-name">Intitulé du projet avec votre partenaire local en Côte d'Ivoire <span>*</span></label>
                        <div class="simple-form__input-wrap">
                            <i class="fa fa-project-diagram simple-form__input-icon"></i>
                            <input type="text" name="project_name" id="project_name"
                                placeholder="Ex : Transformation de manioc à Bouaké"
                                required value="{{ old('project_name') }}" class="simple-form__input--icon">
                        </div>
                        <p class="simple-form__hint" id="hint-project-name" style="font-size:12px;color:#6b7280;">
                            <i class="fa fa-info-circle"></i>
                            Le projet est porté par une structure locale ivoirienne (ONG, association, coopérative, collectivité territoriale). Votre association de la diaspora en est le partenaire cosignataire.
                        </p>
                        @error('project_name')<p class="simple-form__error">{{ $message }}</p>@enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="simple-form__group">
                                <label for="thematique">Thématique <span>*</span></label>
                                <select name="thematique" id="thematique" required class="no-nice-select-mobile">
                                    <option value="">-- Sélectionnez --</option>
                                    <option value="Agriculture et développement rural" {{ old('thematique') == 'Agriculture et développement rural' ? 'selected' : '' }}>Agriculture et développement rural</option>
                                    <option value="Transformation de produits agricoles" {{ old('thematique') == 'Transformation de produits agricoles' ? 'selected' : '' }}>Transformation de produits agricoles</option>
                                    <option value="Artisanat et production locale" {{ old('thematique') == 'Artisanat et production locale' ? 'selected' : '' }}>Artisanat et production locale</option>
                                    <option value="Numérique et nouvelles technologies" {{ old('thematique') == 'Numérique et nouvelles technologies' ? 'selected' : '' }}>Numérique et nouvelles technologies</option>
                                    <option value="Santé" {{ old('thematique') == 'Santé' ? 'selected' : '' }}>Santé</option>
                                    <option value="Éducation et formation" {{ old('thematique') == 'Éducation et formation' ? 'selected' : '' }}>Éducation et formation</option>
                                    <option value="Environnement et énergies renouvelables" {{ old('thematique') == 'Environnement et énergies renouvelables' ? 'selected' : '' }}>Environnement et énergies renouvelables</option>
                                    <option value="Autre" {{ old('thematique') == 'Autre' ? 'selected' : '' }}>Autre</option>
                                </select>
                                @error('thematique')<p class="simple-form__error">{{ $message }}</p>@enderror
                            </div>
                        </div>

                        <!-- Budget — visible seulement Volet 1 -->
                        <div class="col-md-6" id="champ-budget" style="{{ old('volet') === 'volet_2_expertise' ? 'display:none;' : '' }}">
                            <div class="simple-form__group">
                                <label for="amount">Contribution financière de votre association (€) <span>*</span></label>
                                <div class="simple-form__input-wrap">
                                    <i class="fa fa-euro-sign simple-form__input-icon"></i>
                                    <input type="number" name="amount" id="amount"
                                        placeholder="Ex : 15 000"
                                        max="50000"
                                        value="{{ old('amount') }}"
                                        class="simple-form__input--icon">
                                </div>
                                <p class="simple-form__hint">
                                    <i class="fa fa-info-circle"></i>
                                    Votre association doit assurer <strong>min. 30 % du budget total</strong> du projet (cofinancement obligatoire). La subvention AYENAH couvre max. 50 000 € et max. 70 % du budget.
                                </p>
                                @error('amount')<p class="simple-form__error">{{ $message }}</p>@enderror
                            </div>
                        </div>
                    </div>

                    <div class="simple-form__group">
                        <label for="message">Description <small class="text-muted" style="text-transform: none; font-weight: 400;">(facultatif)</small></label>
                        <textarea name="message" id="message"
                            placeholder="Décrivez brièvement votre projet ou votre offre d'expertise, vos motivations, les résultats attendus..."
                            rows="5">{{ old('message') }}</textarea>
                        @error('message')<p class="simple-form__error">{{ $message }}</p>@enderror
                    </div>

                    <div class="simple-form__submit">
                        <button type="submit">
                            <i class="fa fa-paper-plane"></i> Soumettre ma candidature
                        </button>
                        <p class="simple-form__submit-note">
                            <i class="fa fa-lock"></i> Vos informations restent confidentielles — traitées uniquement par la DGIE dans le cadre du projet AYENAH
                        </p>
                    </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    var volet1 = document.getElementById('volet_1');
    var volet2 = document.getElementById('volet_2');
    var cards  = document.querySelectorAll('.volet-card');
    var champBudget = document.getElementById('champ-budget');
    var inputAmount = document.getElementById('amount');
    var alertePartenariat = document.getElementById('alerte-partenariat');
    var labelProject = document.getElementById('label-project-name');

    function updateVolet(selected) {
        cards.forEach(function (card) {
            card.style.border = '2px solid #e5e7eb';
            card.style.background = '#fff';
        });
        var selectedCard = selected.closest('.volet-card');
        if (selectedCard) {
            selectedCard.style.border = '2px solid #059669';
            selectedCard.style.background = '#f0fdf4';
        }

        var hintV1 = document.getElementById('hint-volet1');
        var hintV2 = document.getElementById('hint-volet2');

        if (selected.value === 'volet_1_financement') {
            champBudget.style.display = '';
            inputAmount.setAttribute('required', 'required');
            alertePartenariat.style.display = '';
            labelProject.innerHTML = 'Intitulé du projet avec votre partenaire local en Côte d\'Ivoire <span>*</span>';
            document.getElementById('project_name').placeholder = 'Ex : Transformation de manioc à Bouaké';
            if (hintV1) hintV1.style.display = '';
            if (hintV2) hintV2.style.display = 'none';
        } else {
            champBudget.style.display = 'none';
            inputAmount.removeAttribute('required');
            inputAmount.value = '';
            alertePartenariat.style.display = 'none';
            labelProject.innerHTML = 'Intitulé de la mission d\'expertise <span>*</span>';
            document.getElementById('project_name').placeholder = 'Ex : Consultant en agronomie / Expert en santé publique';
            if (hintV1) hintV1.style.display = 'none';
            if (hintV2) hintV2.style.display = '';
        }
    }

    [volet1, volet2].forEach(function (radio) {
        radio.addEventListener('change', function () { updateVolet(this); });
        radio.closest('.volet-card').addEventListener('click', function () {
            radio.checked = true;
            updateVolet(radio);
        });
    });

    // Init
    var checked = document.querySelector('input[name="volet"]:checked');
    if (checked) updateVolet(checked);

    // NiceSelect mobile
    if (window.innerWidth < 768) {
        var niceSelect = document.querySelector('#thematique + .nice-select');
        var nativeSelect = document.getElementById('thematique');
        if (niceSelect && nativeSelect) {
            niceSelect.style.display = 'none';
            nativeSelect.style.display = 'block';
        }
    }

    // Step indicators
    var step1 = document.querySelector('[data-step="1"]');
    var step2 = document.querySelector('[data-step="2"]');
    var projetSection = document.querySelectorAll('.simple-form__section-title')[1];
    if (step1 && step2 && projetSection) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    step1.classList.remove('simple-form__step-indicator--active');
                    step2.classList.add('simple-form__step-indicator--active');
                } else {
                    step1.classList.add('simple-form__step-indicator--active');
                    step2.classList.remove('simple-form__step-indicator--active');
                }
            });
        }, { threshold: 0.5 });
        observer.observe(projetSection);
    }
});
</script>

@if(session('success'))
<script>
    Swal.fire({
        title: "Candidature soumise !",
        text: "{{ session('success') }}",
        icon: "success",
        confirmButtonColor: "#009E60"
    });
</script>
@endif

@if(session('warning'))
<script>
    Swal.fire({
        title: "Attention",
        text: "{{ session('warning') }}",
        icon: "warning",
        confirmButtonColor: "#ff7f00"
    });
</script>
@endif

@if(session('info'))
<script>
    Swal.fire({
        title: "Information",
        text: "{{ session('info') }}",
        icon: "info",
        confirmButtonColor: "#009E60"
    });
</script>
@endif

@endsection
