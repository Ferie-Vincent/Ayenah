@extends('layout/template')

@section('title', $visite->title . ' | AYENAH')

@section('meta_description', Str::limit(strip_tags($visite->description), 160))
@section('og_type', 'article')
@section('og_title', $visite->title . ' | AYENAH')
@section('og_description', Str::limit(strip_tags($visite->description), 200))
@section('og_url', route('event', $visite->id))
@section('og_image', asset('storage/' . $visite->cover_image))

@section('content')

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
        <img src="{{asset('storage/' . $visite->cover_image)}}" alt="AYENAH - Actualité">
    </div>
    <div class="shape">
        <img src="{{asset('front/assets/images/shape.png')}}" alt="AYENAH - Actualité">
    </div>
</section>
<!-- ==== / banner section end ==== -->
<!-- ==== event details section start ==== -->
<div class="cm-details">
    <div class="container">
        <div class="row gutter-60">
            @php
                $shareUrl = urlencode(route('event', $visite->id));
                $shareTitle = urlencode($visite->title);
                $shareDesc = urlencode(Str::limit(strip_tags($visite->description), 150));
                $shareImage = urlencode(asset('storage/' . $visite->cover_image));
            @endphp
            <div class="col-12 col-xl-8">
                <div class="cm-details__content">
                    <div class="cm-details__poster" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <img src="{{asset('storage/' . $visite->cover_image)}}" alt="AYENAH - Actualité" class="shadow" loading="lazy">
                    </div>
                    <div class="cm-details-meta">
                        <p><i class="fa-solid fa-calendar-days"></i>{{ $visite->dateVisited }}</p>
                        <p><i class="fa-solid fa-location-dot"></i>{{ $visite->region }}</p>
                    </div>
                    <div class="cm-group cta">
                        <h3 class="title-animation">
                        {{ $visite->title }}
                        </h3>
                        <div>
                        {!! \Mews\Purifier\Facades\Purifier::clean($visite->description) !!}
                        </div>
                    </div>

                    @php
                        $galleryImages = [];
                        for ($i = 1; $i <= 4; $i++) {
                            if (!empty($visite->{'image' . $i})) {
                                $galleryImages[] = $visite->{'image' . $i};
                            }
                        }
                    @endphp
                    @for ($i = 0; $i < count($galleryImages); $i += 2)
                        <div class="cm-img-group cta">
                            <div class="cm-img-single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                <img src="{{ asset('storage/' . $galleryImages[$i]) }}" alt="AYENAH - Actualité" class="van-tilt" loading="lazy">
                            </div>
                            @if (isset($galleryImages[$i + 1]))
                                <div class="cm-img-single" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                                    <img src="{{ asset('storage/' . $galleryImages[$i + 1]) }}" alt="AYENAH - Actualité" class="van-tilt" loading="lazy">
                                </div>
                            @endif
                        </div>
                    @endfor

                    <div class="blog__single-cta mt-5">
                        <a href="{{route('events')}}" aria-label="retour aux actualités" title="retour aux actualités">
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
                                    <a href="{{route('event', $visite->id)}}">
                                        <img src="{{asset('storage/' . $visite->cover_image)}}" alt="AYENAH - Actualité" loading="lazy">
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
                            <img src="{{asset('front/assets/images/sponsor/afd.png')}}" alt="AYENAH - Actualité" loading="lazy">
                        </div>
                        <div class="cm-content">
                            <h4 class="title-animation ">
                                <span style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Les Promesses tenues de l' A F D</span>
                            </h4>
                        </div>
                        <div class="cm-cta">
                            <a href="https://www.afd.fr/fr" aria-label="Agence Française de Développement"
                                title="Agence Française de Développement" class="btn--primary text-white"> Tout savoir <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                        <img src="{{asset('front/assets/images/afd.jpg')}}"
                            alt="AYENAH - Actualité"
                            class="parallax-image
                            gray"
                            loading="lazy">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==== / event details section end ==== -->

<!-- Boutons de partage flottants (côté gauche, desktop uniquement) -->
<div class="social-share-float d-none d-xl-flex is-hidden" id="shareFloat">
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}" target="_blank" rel="noopener noreferrer" class="social-share-float__btn social-share-float__btn--facebook" title="Partager sur Facebook">
        <i class="fa-brands fa-facebook-f"></i>
    </a>
    <a href="https://twitter.com/intent/tweet?url={{ $shareUrl }}&text={{ $shareTitle }}" target="_blank" rel="noopener noreferrer" class="social-share-float__btn social-share-float__btn--twitter" title="Partager sur X (Twitter)">
        <i class="fa-brands fa-x-twitter"></i>
    </a>
    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ $shareUrl }}&title={{ $shareTitle }}&summary={{ $shareDesc }}" target="_blank" rel="noopener noreferrer" class="social-share-float__btn social-share-float__btn--linkedin" title="Partager sur LinkedIn">
        <i class="fa-brands fa-linkedin-in"></i>
    </a>
    <a href="https://api.whatsapp.com/send?text={{ $shareTitle }}%20{{ $shareUrl }}" target="_blank" rel="noopener noreferrer" class="social-share-float__btn social-share-float__btn--whatsapp" title="Partager sur WhatsApp">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var shareFloat = document.getElementById('shareFloat');
    var cmDetails = document.querySelector('.cm-details');
    if (!shareFloat || !cmDetails) return;

    window.addEventListener('scroll', function() {
        var rect = cmDetails.getBoundingClientRect();
        if (rect.top < 200 && rect.bottom > 300) {
            shareFloat.classList.remove('is-hidden');
        } else {
            shareFloat.classList.add('is-hidden');
        }
    });
});
</script>

@endsection