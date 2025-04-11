@extends('layout/template')

@section('title', 'AYENAH | Le Projet Ayenah - Mobiliser la diaspora pour le développement de la Côte d\'Ivoire')

@section('content')

<!-- ==== banner section start ==== -->
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">
                <h2 class="title-animation">Foires aux Questions</h2>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src="{{asset('front/assets/images/faqs.jpg')}}" alt="Image">
    </div>
    <div class="shape">
        <img src="{{asset('front/assets/images/shape.png')}}" alt="Image">
    </div>
</section>
<!-- ==== / banner section end ==== -->

         <!-- ==== faq section start ==== -->
         <section class="faq">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-12 col-lg-8 col-xl-6">
                     <div class="faq__content">
                        <div class="faq__content-inner cta"  data-aos="fade-up" data-aos-duration="1000"
                           data-aos-delay="100">
                           <div class="accordion" id="accordion">
                              <div class="accordion-item">
                                 <h6 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapseOne" aria-expanded="true"
                                       aria-controls="collapseOne">
                                    What kind of recipes can I find on your website?
                                    </button>
                                 </h6>
                                 <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                       <p>
                                          It is a long established fact that a reader will be distracted by
                                          the readable the a content of a page when looking at its layout.
                                          Many desktop publishing packages and web page editors.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h6 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                       aria-expanded="false" aria-controls="collapseTwo">
                                    Are the recipes suitable for beginners?
                                    </button>
                                 </h6>
                                 <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                       <p>
                                          It is a long established fact that a reader will be distracted by
                                          the readable the a content of a page when looking at its layout.
                                          Many desktop publishing packages and web page editors.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h6 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                       aria-expanded="false" aria-controls="collapseThree">
                                    Do you offer cooking tips and techniques?
                                    </button>
                                 </h6>
                                 <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                       <p>
                                          It is a long established fact that a reader will be distracted by
                                          the readable the a content of a page when looking at its layout.
                                          Many desktop publishing packages and web page editors.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h6 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                       aria-expanded="false" aria-controls="collapseFour">
                                    How frequently do you update your recipe collection?
                                    </button>
                                 </h6>
                                 <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                       <p>
                                          It is a long established fact that a reader will be distracted by
                                          the readable the a content of a page when looking at its layout.
                                          Many desktop publishing packages and web page editors.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h6 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                       aria-expanded="false" aria-controls="collapseFive">
                                    How frequently do you update your recipe collection?
                                    </button>
                                 </h6>
                                 <div id="collapseFive" class="accordion-collapse collapse"
                                    aria-labelledby="headingFive" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                       <p>
                                          It is a long established fact that a reader will be distracted by
                                          the readable the a content of a page when looking at its layout.
                                          Many desktop publishing packages and web page editors.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h6 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                       aria-expanded="false" aria-controls="collapseSix">
                                    How frequently do you update your recipe collection?
                                    </button>
                                 </h6>
                                 <div id="collapseSix" class="accordion-collapse collapse"
                                    aria-labelledby="headingSix" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                       <p>
                                          It is a long established fact that a reader will be distracted by
                                          the readable the a content of a page when looking at its layout.
                                          Many desktop publishing packages and web page editors.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h6 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#collapseSeven"
                                       aria-expanded="false" aria-controls="collapseSeven">
                                    How frequently do you update your recipe collection?
                                    </button>
                                 </h6>
                                 <div id="collapseSeven" class="accordion-collapse collapse"
                                    aria-labelledby="headingSeven" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                       <p>
                                          It is a long established fact that a reader will be distracted by
                                          the readable the a content of a page when looking at its layout.
                                          Many desktop publishing packages and web page editors.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h6 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#collapseEight"
                                       aria-expanded="false" aria-controls="collapseEight">
                                    How frequently do you update your recipe collection?
                                    </button>
                                 </h6>
                                 <div id="collapseEight" class="accordion-collapse collapse"
                                    aria-labelledby="headingEight" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                       <p>
                                          It is a long established fact that a reader will be distracted by
                                          the readable the a content of a page when looking at its layout.
                                          Many desktop publishing packages and web page editors.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h6 class="accordion-header" id="headingNine">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#collapseNine"
                                       aria-expanded="false" aria-controls="collapseNine">
                                    How frequently do you update your recipe collection?
                                    </button>
                                 </h6>
                                 <div id="collapseNine" class="accordion-collapse collapse"
                                    aria-labelledby="headingNine" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                       <p>
                                          It is a long established fact that a reader will be distracted by
                                          the readable the a content of a page when looking at its layout.
                                          Many desktop publishing packages and web page editors.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h6 class="accordion-header" id="headingTen">
                                    <button class="accordion-button collapsed" type="button"
                                       data-bs-toggle="collapse" data-bs-target="#collapseTen"
                                       aria-expanded="false" aria-controls="collapseTen">
                                    How frequently do you update your recipe collection?
                                    </button>
                                 </h6>
                                 <div id="collapseTen" class="accordion-collapse collapse"
                                    aria-labelledby="headingTen" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                       <p>
                                          It is a long established fact that a reader will be distracted by
                                          the readable the a content of a page when looking at its layout.
                                          Many desktop publishing packages and web page editors.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-4 col-xl-5 offset-xl-1">
                <div class="faq__thumb d-none d-lg-block">
                    <div class="faq__thumb-inner">
                        <div class="thumb-lg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                            <img src="{{asset('front/assets/images/faq.png')}}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
               </div>
            </div>
            <div class="shape d-none d-lg-block">
               <img src="{{asset('front/assets/images/faq/shape.png')}}" alt="Image">
            </div>
         </section>
         <!-- ==== / faq section end ==== -->

@endsection