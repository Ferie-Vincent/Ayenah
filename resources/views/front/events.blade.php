@extends('layout/template')

@section('title', 'AYENAH | Actualités - Les activités du programme')

@section('meta_description', 'Suivez les actualités du programme AYENAH : missions de terrain, forums diaspora, ateliers de sensibilisation et événements en Côte d\'Ivoire et à l\'étranger.')

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
        <img src="{{asset('front/assets/images/actualities.png')}}" alt="Actualités AYENAH">
    </div>
    <div class="shape">
        <img src="{{asset('front/assets/images/shape.png')}}" alt="AYENAH">
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
                                        <img src="{{asset('storage/' . $visite->cover_image)}}" alt="{{ $visite->title }}" loading="lazy">
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
                                        <a href="{{route('event', $visite->id)}}" aria-label="lire l'article"
                                            title="lire l'article">Lire Plus<i
                                                class="fa-solid fa-circle-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @if ($visites->hasPages())
                <div class="row mt-4">
                    <div class="col-12 d-flex justify-content-center">
                        {{ $visites->links() }}
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- ==== / blog section end ==== -->

@endsection