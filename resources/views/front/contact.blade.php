@extends('layout/template')

@section('title', 'AYENAH | Contact - Mobiliser la diaspora pour le développement de la Côte d\'Ivoire')

@section('content')

<!-- ==== banner section start ==== -->
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">
                <h2 class="title-animation">Nous Contactez</h2>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src="{{asset('front/assets/images/contact/contact-bg.png')}}" alt="Image">
    </div>
    <div class="shape">
        <img src="{{asset('front/assets/images/shape.png')}}" alt="Image">
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
                                        Abidjan, Cocody, <br> 2-plateaux - ENA, près de la Chambre National des Métiers
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
                                <p><a href="tel:2305-587-3407">(+225) 27 21 32 27 42</a></p>
                                <p><a href="tel:2305-587-3407">+(225) 01 02 03 04 05</a></p>
                            </div>
                        </div>
                        <div class="contact-main__single">
                            <div class="thumb">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="content">
                                <h6>Email</h6>
                                <p><a href="mailto:infos@ayenah.ci">infos@ayenah.ci</a></p>
                            </div>
                        </div>
                        <div class="contact-main__single">
                            <div class="thumb">
                                <i class="fa-solid fa-share-nodes"></i>
                            </div>
                            <div class="content">
                                <h6>Social</h6>
                                <div class="social">
                                    <a href="https://www.facebook.com/" target="_blank"
                                        aria-label="share us on facebook" title="facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="https://x.com/" target="_blank" aria-label="share us on twitter"
                                        title="twitter">
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/" target="_blank"
                                        aria-label="share us on linkedin" title="linkedin">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-main__thumb cta">
                        <img src="{{asset('front/assets/images/2.png')}}" alt="Image" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="contact__form volunteer__form checkout__form shadow" data-aos="fade-up"
                    data-aos-duration="1000" data-aos-delay="100">
                    <div class="volunteer__form-content">
                        <h4 class="title-animation">Écrivez-nous, pour tous besoins !</h4>
                        <p>Votre mail ne sera pas diffusé publiquemen. Tous les marqués de "<span style="color:red">*</span>" sont obligatoires</p>
                    </div>
                    <form action="{{ route('contact.store') }}" method="post" class="cta">
                        @csrf
                        <div class="input-single">
                            <input type="text" name="nom" id="fullName" placeholder="Entrez votre nom*" required>
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="input-single">
                            <input type="email" name="email" id="cEmail" placeholder="Entrez votre email*" required>
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="input-single">
                            <input type="text" name="telephone" id="phoneNumber" placeholder="Numéro de téléphone *" required>
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="input-single alter-input">
                            <textarea name="message" id="contactMessage" placeholder="Saississez votre message"></textarea>
                            <i class="fa-solid fa-comments"></i>
                        </div>
                        <div class="form-cta">
                            <button type="submit" aria-label="submit message" title="submit message" class="btn--primary">
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
            <iframe class="rounded shadow" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1152.717239161406!2d-3.998393907643332!3d5.358218478860687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb003e053339%3A0x76542d19f9855e1f!2sDirection%20G%C3%A9n%C3%A9rale%20des%20Ivoiriens%20de%20l&#39;Ext%C3%A8rieur%20(DGIE)!5e0!3m2!1sfr!2sci!4v1739058308094!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    
</section>
<!-- ==== / contact section end ==== -->

@endsection