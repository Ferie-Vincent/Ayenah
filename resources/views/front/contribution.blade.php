@extends('layout/template')

@section('title', 'AYENAH | Enregistrement - Mobiliser la diaspora pour le développement de la Côte d\'Ivoire')

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
        <img src="{{asset('front/assets/images/contribution.png')}}" alt="Image">
    </div>
    <div class="shape">
        <img src="{{asset('front/assets/images/shape.png')}}" alt="Image">
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
                        <img src="{{asset('front/assets/images/idea.jpg')}}" alt="Image">
                    </div>
                    <div class="donate-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="cm-group">
                            <h3 class="title-animation">Un Projet Innovant ? N'hésitez pas à vous inscrire !</h3>
                            <p class="text-justify">
                                Présentez vous, et enregistrez-vous sur le site. Nous rentrerons en contact avec vous afin de mieux pouvoir vous assistez ! <br>
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
                                                <input type="text" name="lastname" id="lastName" placeholder="Nom" required>
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                            <div class="input-single">
                                                <input type="text" name="firstname" id="firstName" placeholder="Prénoms" required>
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-single">
                                                <input type="email" name="email" id="email" placeholder="Email" required>
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                            <div class="input-single">
                                                <input type="text" name="phone" id="phone" placeholder="Numéro de Téléphone" required>
                                                <i class="fa-solid fa-phone"></i>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-single">
                                                <input type="text" name="profession" id="profession" placeholder="Profession" required>
                                                <i class="fa-solid fa-briefcase"></i>
                                            </div>
                                            <div class="input-single">
                                                <input type="text" name="location" id="location" placeholder="Lieu d'habitation" required>
                                                <i class="fa-solid fa-location-dot"></i>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-single">
                                                <input type="text" name="project_name" id="project_name" placeholder="Nom du projet" required>
                                            </div>
                                            <div class="input-single">
                                                <input type="number" name="amount" id="amount" placeholder="Montant de départ" required>
                                                <i class="fa-solid fa-coins"></i>
                                            </div>
                                        </div>
                                        <div class="input-single">
                                            <input type="text" name="thematique" id="thematique" placeholder="Thématique du projet" required>
                                            <i class="fa-solid fa-credit-card"></i>
                                        </div>

                                        <!-- <div class="input-single">
                                            <label>Projet d'intérêt :</label>
                                            <select name="projet_id" id="project_id">
                                            @isset($projets)
                                                @foreach ($projets as $projet)
                                                <option value="{{ $projet->id }}">{{ $projet->intitule_projet }}</option>
                                            @endforeach
                                            @else
                                                <option value="">Chargement des projets...</option>
                                            @endisset
                                            </select>
                                            <i class="fa-solid fa-project-diagram"></i>
                                        </div> -->
                                        <div class="input-single alter-input">
                                            <textarea name="message" id="message" placeholder="Vos motivations"></textarea>
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <div class="form-cta">
                                            <button type="submit" class="btn--primary">Soumettre</button>
                                        </div>
                                    </form>
                                    <div class="text-center mt-5">
                                        <p class="text-danger">
                                            ⚠️ Nous rentrerons en contact avec vous pour vous assistez, pour la suite!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--
            <div class="col-12 col-xl-4">
                <div class="cm-details__sidebar">
                    <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <div class="intro">
                            <h5>Liste des Projets</h5>
                        </div>
                        <div class="cm-sidebar-post">
                            @isset($projets)
                                @foreach ($projets as $projet)
                                    <div class="single-item">
                                        <div class="thumb">
                                            <a href="">
                                                <img src="http://placehold.co/85" alt="Image">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <p> <i class="fa fa-user" aria-hidden="true"></i> <span>{{ $projet->intitule_projet }}</span>
                                            </p>
                                            <p><a href="">{{ $projet->intitule_projet }}</a>
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            @endisset
                            <div class="cm-cta text-center mt-4">
                                <a href="" aria-label="contact us" title="contact us"
                                    class="btn--primary"> Tous les projets<i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cm-sidebar-overview" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <div class="cm-logo">
                            <img src="https://placehold.co/70" alt="Image" class="shadow rounded">
                        </div>
                        <div class="cm-content">
                            <p>Lorem ipsum dolor sit.</p>
                            <h4>
                                Lorem ipsum dolor sit amet consectetur.
                            </h4>
                        </div>
                        <img src="https://placehold.co/388x516" alt="Image" class="parallax-image">
                    </div>
                </div>
            </div>
            -->
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
