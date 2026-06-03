@extends('layout/template')

@section('title', 'AYENAH | FAQ - Questions Fréquentes sur le programme')

@section('meta_description', 'Questions fréquentes sur le programme AYENAH : éligibilité, cofinancement, processus de soumission, délais et types de projets financés.')

@section('content')

<!-- ==== banner section start ==== -->
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">
                <h2 class="title-animation">Questions Fréquentes</h2>
                <p class="text-white">Tout ce que vous devez savoir sur le programme AYENAH</p>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src="{{asset('front/assets/images/faqs.jpg')}}" alt="FAQ AYENAH">
    </div>
    <div class="shape">
        <img src="{{asset('front/assets/images/shape.png')}}" alt="AYENAH">
    </div>
</section>
<!-- ==== / banner section end ==== -->

<!-- ==== faq section start ==== -->
<section class="faq" id="faqSection">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-12 col-lg-8 col-xl-7">
                <div class="faq__content">
                    <div class="faq__content-inner cta" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="accordion" id="accordion">

                            @foreach($faqs as $index => $faq)
                            <div class="accordion-item">
                                <h6 class="accordion-header" id="heading{{ $index }}">
                                    <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                                        <i class="fa fa-question-circle colorVert me-2"></i>
                                        {{ $faq->question }}
                                    </button>
                                </h6>
                                <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                    aria-labelledby="heading{{ $index }}" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <div class="text-dark mb-0">{!! \Mews\Purifier\Facades\Purifier::clean($faq->answer) !!}</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 col-xl-5">
                <div class="faq__thumb d-none d-lg-block">
                    <div class="faq__thumb-inner">
                        <div class="thumb-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <img src="{{asset('front/assets/images/faq.png')}}" alt="FAQ AYENAH" loading="lazy">
                        </div>
                    </div>
                </div>

                <!-- Contact Box -->
                <div class="mt-5 p-4" style="background: linear-gradient(135deg, rgba(106, 151, 85, 0.1) 0%, rgba(139, 179, 105, 0.05) 100%); border-radius: 12px; border: 2px solid #6a9755;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <h5 class="colorVert"><i class="fa fa-envelope"></i> Vous avez d'autres questions ?</h5>
                    <p class="text-dark">
                        Notre équipe est disponible pour vous accompagner dans votre démarche.
                    </p>
                    <p class="text-dark mb-3">
                        <i class="fa fa-envelope colorVert"></i> <a href="mailto:{{ App\Models\Setting::get('contact_email', 'infos@ayenah.ci') }}" class="colorVert"><strong>{{ App\Models\Setting::get('contact_email', 'infos@ayenah.ci') }}</strong></a><br>
                        <i class="fa fa-phone colorVert"></i> <strong>{{ App\Models\Setting::get('contact_phone', '(+225) 27 21 32 27 42') }}</strong>
                    </p>
                    <a href="{{ route('contact') }}" class="btn--primary btn-sm">Nous contacter <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="shape d-none d-lg-block">
        <img src="{{asset('front/assets/images/faq/shape.png')}}" alt="Image" loading="lazy">
    </div>
</section>
<!-- ==== / faq section end ==== -->

@push('structured-data')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        @foreach($faqs as $index => $faq)
        {
            "@type": "Question",
            "name": @json($faq->question),
            "acceptedAnswer": {
                "@type": "Answer",
                "text": @json($faq->answer)
            }
        }@if(!$loop->last),@endif
        @endforeach
    ]
}
</script>
@endpush

@endsection
