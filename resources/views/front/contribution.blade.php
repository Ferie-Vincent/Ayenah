@extends('layout/template')

@section('title', 'AYENAH | Contribution - Soutenez un projet de développement en Côte d\'Ivoire')

@section('content')

<!-- ==== banner section start ==== -->
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">
                <h2 class="title-animation">Enregistrement</h2>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src="{{asset('front/assets/images/contribution.png')}}" alt="AYENAH">
    </div>
    <div class="shape">
        <img src="{{asset('front/assets/images/shape.png')}}" alt="AYENAH">
    </div>
</section>
<!-- ==== / banner section end ==== -->

<!-- ==== donate us section start ==== -->
<div class="cm-details donate-us community checkout faq">
    <div class="container">
        <div class="row gutter-60">
            <div class="col-12 col-xl-12">
                <div class="cm-details__content">
                    <div class="cm-details__poster" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <img src="{{asset('front/assets/images/idea.jpg')}}" alt="Inscription au programme AYENAH" loading="lazy">
                    </div>
                    <div class="donate-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="cm-group">
                            <h3 class="title-animation">Un Projet Innovant ? N'hésitez pas à vous inscrire !</h3>
                            <p class="text-justify">
                                Présentez vous, et enregistrez-vous sur le site. Nous rentrerons en contact avec vous afin de mieux pouvoir vous assister ! <br>
                                Nous vous assurons que vos données seront traitées avec la plus grande confidentialité.
                            </p>
                        </div>
                        <div class="cta">
                            <div class="community-donation">
                                <div class="checkout__form">
                                    <div class="intro">
                                        <h5>Détails de vos Informations</h5>
                                    </div>
                                    <form action="{{ route('enregistrement.store') }}" method="POST">
                                        @csrf
                                        <div class="input-group">
                                            <div class="input-single">
                                                <label for="lastName" class="visually-hidden">Nom</label>
                                                <input type="text" name="lastname" id="lastName" placeholder="Nom" required
                                                    value="{{ old('lastname') }}">
                                                <i class="fa-solid fa-user"></i>
                                                @error('lastname')
                                                    <span class="error-message">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-single">
                                                <label for="firstName" class="visually-hidden">Prénoms</label>
                                                <input type="text" name="firstname" id="firstName" placeholder="Prénoms" required
                                                    value="{{ old('firstname') }}">
                                                <i class="fa-solid fa-user"></i>
                                                @error('firstname')
                                                    <span class="error-message">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-single">
                                                <label for="email" class="visually-hidden">Email</label>
                                                <input type="email" name="email" id="email" placeholder="Email" required
                                                    value="{{ old('email') }}">
                                                <i class="fa-solid fa-envelope"></i>
                                                @error('email')
                                                    <span class="error-message">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-single">
                                                <label for="phone" class="visually-hidden">Numéro de Téléphone</label>
                                                <input type="text" name="phone" id="phone" placeholder="Numéro de Téléphone" required
                                                    value="{{ old('phone') }}">
                                                <i class="fa-solid fa-phone"></i>
                                                @error('phone')
                                                    <span class="error-message">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-single">
                                                <label for="profession" class="visually-hidden">Profession</label>
                                                <input type="text" name="profession" id="profession" placeholder="Profession" required
                                                    value="{{ old('profession') }}">
                                                <i class="fa-solid fa-briefcase"></i>
                                                @error('profession')
                                                    <span class="error-message">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-single">
                                                <label for="location" class="visually-hidden">Lieu d'habitation</label>
                                                <input type="text" name="location" id="location" placeholder="Lieu d'habitation" required
                                                    value="{{ old('location') }}">
                                                <i class="fa-solid fa-location-dot"></i>
                                                @error('location')
                                                    <span class="error-message">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-single">
                                                <label for="project_name" class="visually-hidden">Nom du projet</label>
                                                <input type="text" name="project_name" id="project_name" placeholder="Nom du projet" required
                                                    value="{{ old('project_name') }}">
                                                @error('project_name')
                                                    <span class="error-message">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="input-single">
                                                <label for="amount" class="visually-hidden">Montant de départ</label>
                                                <input type="number" name="amount" id="amount" placeholder="Montant de départ" required
                                                    value="{{ old('amount') }}">
                                                <i class="fa-solid fa-coins"></i>
                                                @error('amount')
                                                    <span class="error-message">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="input-single">
                                            <label for="thematique" class="visually-hidden">Thématique du projet</label>
                                            <input type="text" name="thematique" id="thematique" placeholder="Thématique du projet" required
                                                value="{{ old('thematique') }}">
                                            <i class="fa-solid fa-credit-card"></i>
                                            @error('thematique')
                                                <span class="error-message">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="input-single alter-input">
                                            <label for="message" class="visually-hidden">Vos motivations</label>
                                            <textarea name="message" id="message" placeholder="Vos motivations">{{ old('message') }}</textarea>
                                            <i class="fa-solid fa-envelope"></i>
                                            @error('message')
                                                <span class="error-message">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-cta">
                                            <button type="submit" class="btn--primary">Soumettre</button>
                                        </div>
                                    </form>
                                    <div class="text-center mt-5">
                                        <p class="text-danger">
                                            ⚠️ Nous rentrerons en contact avec vous pour vous assister, pour la suite !
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==== / donate us section end ==== -->


@if(session('success'))
<script>
    Swal.fire({
        title: "🎉 Succès",
        text: "{{ session('success') }}",
        icon: "success"
    });
</script>
@endif


@endsection
