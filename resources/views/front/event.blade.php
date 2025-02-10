@extends('layout/template')

@section('title', 'AYENAH | Activités - Mobiliser la diaspora pour le développement de la Côte d\'Ivoire')

@section('content')

<!-- ==== banner section start ==== -->
<!-- ==== banner section start ==== -->
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">
                <h2 class="title-animation">Visite de la wèh</h2>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src="https://placehold.co/1920x476" alt="Image">
    </div>
    <div class="shape">
        <img src="{{asset('front/assets/images/shape.png')}}" alt="Image">
    </div>
</section>
<!-- ==== / banner section end ==== -->
<!-- ==== event details section start ==== -->
<div class="cm-details">
    <div class="container">
        <div class="row gutter-60">
            <div class="col-12 col-xl-8">
                <div class="cm-details__content">
                    <div class="cm-details__poster" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <img src="https://placehold.co/1920x980" alt="Image">
                    </div>
                    <div class="cm-details-meta">
                        <p><i class="fa-solid fa-calendar-days"></i>02 Avril 2025</p>
                        <p><i class="fa-solid fa-location-dot"></i>Région de la wèh</p>
                    </div>
                    <div class="cm-group cta">
                        <h3 class="title-animation">Summary</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis eaque aliquid amet natus consequuntur rem dolorum, sed quas minus nemo repudiandae, eius cum adipisci a deserunt autem ad architecto. Facere.</p>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim doloribus aliquid asperiores a? Temporibus delectus, sapiente deserunt aperiam sit illo nulla, numquam earum recusandae dolore distinctio eligendi rem, et accusamus.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et quas nam, molestias facilis aliquam corrupti quam iure illum ullam atque saepe explicabo, temporibus unde laborum dolorem. Quibusdam harum ipsum unde!
                        </p>
                    </div>
                    <div class="cm-img-group cta">
                        <div class="cm-img-single">
                        <img src="https://placehold.co/413x252" alt="Image">
                        </div>
                        <div class="cm-img-single">
                            <img src="https://placehold.co/413x252" alt="Image">
                        </div>
                    </div>
                    <div class="cm-img-group cta">
                        <div class="cm-img-single">
                        <img src="https://placehold.co/413x252" alt="Image">
                        </div>
                        <div class="cm-img-single">
                            <img src="https://placehold.co/413x252" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="cm-details__sidebar">
                    <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="intro">
                            <h5>Nos autres visites</h5>
                        </div>
                        <div class="cm-sidebar-post">
                            <div class="single-item">
                                <div class="thumb">
                                    <a href="{{route('event')}}">
                                        <img src="https://placehold.co/80" alt="Image">
                                    </a>
                                </div>
                                <div class="content">
                                    <p><i class="fa-solid fa-calendar-days"></i> <span>19 Novembre 2024</span>
                                    </p>
                                    <p><a href="{{route('event')}}">Visite à l'agneby Tiassa</a>
                                    </p>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="thumb">
                                    <a href="{{route('event')}}">
                                        <img src="https://placehold.co/80" alt="Image">
                                    </a>
                                </div>
                                <div class="content">
                                    <p><i class="fa-solid fa-calendar-days"></i> <span>19 Novembre 2024</span>
                                    </p>
                                    <p><a href="{{route('event')}}">Visite au Tchologo</a>
                                    </p>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="thumb">
                                    <a href="{{route('event')}}">
                                        <img src="https://placehold.co/80" alt="Image">
                                    </a>
                                </div>
                                <div class="content">
                                    <p><i class="fa-solid fa-calendar-days"></i> <span>19 Novembre 2024</span>
                                    </p>
                                    <p><a href="{{route('event')}}">Visite à la région des lacs</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cm-sidebar-overview" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="cm-logo">
                            <img src="{{asset('front/assets/images/sponsor/afd.png')}}" alt="Image">
                        </div>
                        <div class="cm-content">
                            <h4 class="title-animation">
                                Les Promesses tenues de l' A F D
                            </h4>
                        </div>
                        <div class="cm-cta">
                            <a href="contact-us.html" aria-label="contact us"
                                title="contact us" class="btn--primary text-white"> Tout savoir <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                        <img src="https://placehold.co/150x90" 
                            alt="Image" 
                            class="parallax-image" 
                            style="filter: grayscale(200%); transition: filter 0.3s ease;">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==== / event details section end ==== -->

@endsection