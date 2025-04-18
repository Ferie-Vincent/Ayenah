@extends('layout/template')

@section('title', 'AYENAH | Les Projets AYENAH - Mobiliser la diaspora pour le développement de la Côte d\'Ivoire')

@section('content')

<!-- ==== banner section start ==== -->
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">
                <h2 class="title-animation">Liste des projets</h2>
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
<!-- ==== cause slider section start ==== -->
<section class="cause cause-three-alt">
    <div class="container">
        <div class="row gutter-30">
            @foreach ($projects as $project)
            <div class="col-12 col-md-6 col-xl-4 col-xxl-4">
                <div class="cause__slider-inner" data-aos="fade-up" data-aos-duration="1000">
                    <div class="cause__slider-single van-tilt">
                        <div class="thumb">
                            <a>
                                <img src="{{asset('storage/' . $project->photo_logo)}}" alt="Image">
                            </a>
                            <div class="tag">
                                <a>{{ $project->thematique_projet }}</a>
                            </div>
                        </div>
                        <div class="content">
                            <h6><a>{{ $project->intitule_projet }}</a></h6>
                            <!-- <p>Lorem ipsum dolor sit amet, consete
                                sadipscing elitr, sed diam nonum
                            </p> -->
                        </div>
                        <div class="cause__slider-cta">
                            <div class="cause__progress progress-bar-single">
                                <div class="cause-progress__intro">
                                    <p>
                                        <span>Montant demandé</span>
                                    </p>
                                </div>
                                <div class="cause-progress__goal">
                                    <span class="goal">{{ $project->cout_total }} Fr CFA</span></p>
                                </div>
                                <hr>
                                <div class="cause-progress__bar">
                                    <p>
                                        <span>Porteur : </span> {{ $project->structure_porteuse }}
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ==== / cause slider section end ==== -->

<x-form-inscription></x-form-inscription>

@endsection