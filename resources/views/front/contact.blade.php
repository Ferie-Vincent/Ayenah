@extends('layout/template')

@section('title', 'AYENAH | Contact - Mobiliser la diaspora pour le développement de la Côte d\'Ivoire')

@section('meta_description', 'Contactez l\'équipe AYENAH à Abidjan. Téléphone, email et formulaire de contact pour toute question sur le programme de mobilisation de la diaspora.')

@section('content')

<!-- ==== banner section start ==== -->
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">
                <h2 class="title-animation">Nous Contacter</h2>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src="{{asset('front/assets/images/contact/contact-bg.png')}}" alt="AYENAH">
    </div>
    <div class="shape">
        <img src="{{asset('front/assets/images/shape.png')}}" alt="AYENAH">
    </div>
</section>
<!-- ==== / banner section end ==== -->

<!-- ==== contact section start ==== -->
<section class="contact-main volunteer" style="margin-bottom:-6% !important">

    <div class="container mb-5">
        <div class="row gutter-40">
            <div class="col-12 col-xl-6">
                <div class="contact__content">
                    <div class="section__content" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="title-animation">Nos Contacts</h2>
                        <p>
                        Nous sommes entièrement disponibles pour vous accompagner à chaque étape de votre processus. N'hésitez pas à nous poser vos questions afin que nous puissions répondre au mieux à vos attentes et à vos besoins.
                        </p>
                    </div>
                    <div class="contact-main__inner cta">
                        <div class="contact-main__single">
                            <div class="thumb">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="content">
                                <h6>Localisation</h6>
                                <p><a href="https://maps.app.goo.gl/Kw8yJBQC28xGXQ7J9" target="_blank">
                                        {{ App\Models\Setting::get('contact_address', 'Abidjan, Cocody, 2-plateaux - ENA, près de la Chambre National des Métiers') }}
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="contact-main__single">
                            <div class="thumb">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="content">
                                <h6>Téléphone</h6>
                                <p><a href="tel:+22527213227242">{{ App\Models\Setting::get('contact_phone', '(+225) 27 21 32 27 42') }}</a></p>
                                <p><a href="tel:+2250102030405">{{ App\Models\Setting::get('contact_phone_2', '+(225) 01 02 03 04 05') }}</a></p>
                            </div>
                        </div>
                        <div class="contact-main__single">
                            <div class="thumb">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="content">
                                <h6>Email</h6>
                                <p><a href="mailto:{{ App\Models\Setting::get('contact_email', 'infos@ayenah.ci') }}">{{ App\Models\Setting::get('contact_email', 'infos@ayenah.ci') }}</a></p>
                            </div>
                        </div>
                        <div class="contact-main__single">
                            <div class="thumb">
                                <i class="fa-solid fa-share-nodes"></i>
                            </div>
                            <div class="content">
                                <h6>Social</h6>
                                <div class="social">
                                    <a href="{{ App\Models\Setting::get('facebook_url', 'https://www.facebook.com/') }}" target="_blank"
                                        aria-label="suivez-nous sur Facebook" title="Facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="{{ App\Models\Setting::get('twitter_url', 'https://x.com/') }}" target="_blank" aria-label="suivez-nous sur Twitter"
                                        title="Twitter">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="{{ App\Models\Setting::get('linkedin_url', 'https://www.linkedin.com/') }}" target="_blank"
                                        aria-label="suivez-nous sur LinkedIn" title="LinkedIn">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-main__thumb cta">
                        <img src="{{asset('front/assets/images/2.png')}}" alt="Contact AYENAH - DGIE" class="img-fluid rounded shadow" loading="lazy">
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="contact__form volunteer__form checkout__form shadow" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-delay="100">
                    <div class="volunteer__form-content">
                        <h4 class="title-animation">Écrivez-nous, pour tous besoins !</h4>
                        <p>Votre mail ne sera pas diffusé publiquement. Tous les champs marqués d'un "<span style="color:red">*</span>" sont obligatoires</p>
                    </div>
                    <form action="{{ route('contact.store') }}" method="post" class="cta">
                        @csrf
                        <div class="input-single">
                            <label for="fullName" style="display: block; font-size: 14px; font-weight: 600; color: #4a5568; margin-bottom: 6px;">Votre nom <span style="color: red;">*</span></label>
                            <input type="text" name="nom" id="fullName" placeholder="Entrez votre nom" required>
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="input-single">
                            <label for="cEmail" style="display: block; font-size: 14px; font-weight: 600; color: #4a5568; margin-bottom: 6px;">Votre email <span style="color: red;">*</span></label>
                            <input type="email" name="email" id="cEmail" placeholder="Entrez votre email" required>
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="input-single">
                            <label for="phoneNumber" style="display: block; font-size: 14px; font-weight: 600; color: #4a5568; margin-bottom: 6px;">Téléphone <span style="color: red;">*</span></label>
                            <input type="text" name="telephone" id="phoneNumber" placeholder="Numéro de téléphone" required>
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="input-single alter-input">
                            <label for="contactMessage" style="display: block; font-size: 14px; font-weight: 600; color: #4a5568; margin-bottom: 6px;">Votre message</label>
                            <textarea name="message" id="contactMessage" placeholder="Saisissez votre message"></textarea>
                            <i class="fa-solid fa-comments"></i>
                        </div>
                        <div class="form-cta">
                            <button type="submit" aria-label="envoyer le message" title="envoyer le message" class="btn--primary">
                                Envoyez mon message<i class="fa-solid fa-arrow-right"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 container">
        <div class="row">
            <iframe class="rounded shadow" src="https://maps.google.com/maps?q=Direction+G%C3%A9n%C3%A9rale+des+Ivoiriens+de+l%27Ext%C3%A9rieur+DGIE+Abidjan&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

</section>
<!-- ==== / contact section end ==== -->

@if(session('success'))
<script>
    Swal.fire({
        title: "🎉 Succès",
        text: "{{ session('success') }}",
        icon: "success"
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