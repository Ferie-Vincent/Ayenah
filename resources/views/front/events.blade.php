@extends('layout/template')

@section('title', 'AYENAH | Évènements - Mobiliser la diaspora pour le développement de la Côte d\'Ivoire')

@section('content')

<!-- ==== banner section start ==== -->
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">
                <h2 class="title-animation">Nos Actualités</h2>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src="{{asset('front/assets/images/actualities.png')}}" alt="Image">
    </div>
    <div class="shape">
        <img src="{{asset('front/assets/images/shape.png')}}" alt="Image">
    </div>
</section>
<!-- ==== / banner section end ==== -->

<!-- ==== blog section start ==== -->
<section class="blog-main blog cm-details">
    <div class="container">
        <div class="row gutter-60">
            <div class="col-12 col-xl-12">
                <div class="row gutter-30">
                    @foreach ($visites as $visite)
                    <div class="col-12 col-lg-4">
                        <div class="blog__single-wrapper" data-aos="fade-up" data-aos-duration="1000">
                            <div class="blog__single van-tilt">
                                <div class="blog__single-thumb">
                                    <a href="{{route('event', $visite->id)}}">
                                        <img src="{{asset('storage/' . $visite->cover_image)}}" alt="Image">
                                    </a>
                                </div>
                                <div class="blog__single-inner">
                                    <div class="blog__single-meta">
                                        <p> <i class="fa fa-calendar" aria-hidden="true"></i> {{ $visite->dateVisited }}</p>
                                        <p> <i class="fa fa-map-marker" aria-hidden="true"></i> {{ $visite->region }}</p>
                                    </div>
                                    <div class="blog__single-content">
                                        <h5>
                                            <a href="{{route('event', $visite->id)}}">
                                                {{ $visite->title }}
                                            </a>
                                        </h5>
                                    </div>
                                    <div class="blog__single-cta">
                                        <a href="{{route('event', $visite->id)}}" aria-label="blog details"
                                            title="blog details">Lire Plus<i
                                                class="fa-solid fa-circle-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==== / blog section end ==== -->

@endsection