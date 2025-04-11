@extends('layout/template')

@section('title', 'AYENAH | Activités - Mobiliser la diaspora pour le développement de la Côte d\'Ivoire')

@section('content')

<!-- ==== banner section start ==== -->
<!-- ==== banner section start ==== -->
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">
                <h2 class="title-animation">{{ $visite->title }}</h2>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src="{{asset('storage/' . $visite->cover_image)}}" alt="Image">
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
                        <img src="{{asset('storage/' . $visite->cover_image)}}" alt="Image" class="shadow">
                    </div>
                    <div class="cm-details-meta">
                        <p><i class="fa-solid fa-calendar-days"></i>{{ $visite->dateVisited }}</p>
                        <p><i class="fa-solid fa-location-dot"></i>{{ $visite->region }}</p>
                    </div>
                    <div class="cm-group cta">
                        <h3 class="title-animation">
                        {{ $visite->title }}
                        </h3>
                        <p>
                        {!! $visite->description !!}
                        </p>
                    </div>
                    @for ($i = 1; $i <= 4; $i++)
                        @if (!empty($visite->{'image' . $i}))
                            @if ($i == 1 || $i == 3)
                                <div class="cm-img-group cta">
                            @endif
                                <div class="cm-img-single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                    <img src="{{ asset('storage/' . $visite->{'image' . $i}) }}" alt="Image {{ $i }}" class="van-tilt">
                                </div>
                            @if ($i == 2 || $i == 4)
                                </div>
                            @endif
                        @endif
                    @endfor

                    <div class="blog__single-cta mt-5">
                        <a href="{{route('events')}}" aria-label="blog details" title="retour aux actualités">
                            <i class="fa-solid fa-circle-arrow-left"></i>
                            Retourner aux actualités
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="cm-details__sidebar">
                    <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="intro">
                            <h5>Actualités</h5>
                        </div>
                        <div class="cm-sidebar-post">
                            @foreach ($visites as $visite)
                            <div class="single-item">
                                <div class="thumb">
                                    <a href="">
                                        <img src="{{asset('storage/' . $visite->cover_image)}}" alt="Image">
                                    </a>
                                </div>
                                <div class="content">
                                    <p><i class="fa-solid fa-calendar-days"></i> <span>{{ $visite->dateVisited }}</span>
                                    </p>
                                    <p><a href="{{route('event', $visite->id)}}">{{ $visite->title }}</a>
                                    </p>
                                </div>
                            </div>
                            @endforeach
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
                            <a href="https://www.afd.fr/fr" aria-label="contact us"
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