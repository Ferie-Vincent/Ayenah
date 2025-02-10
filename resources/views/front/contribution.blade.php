@extends('layout/template')

@section('title', 'AYENAH | Contribution - Mobiliser la diaspora pour le développement de la Côte d\'Ivoire')

@section('content')

<!-- ==== banner section start ==== -->
<section class="common-banner">
    <div class="container">
        <div class="row">
            <div class="common-banner__content text-center">
                <h2 class="title-animation">Ma contribution</h2>
            </div>
        </div>
    </div>
    <div class="banner-bg">
        <img src="https://placehold.co/1920x476" alt="Image">
    </div>
    <div class="shape">
        <img src="assets/images/shape.png" alt="Image">
    </div>
</section>
<!-- ==== / banner section end ==== -->

<!-- ==== donate us section start ==== -->
<div class="cm-details donate-us community checkout faq">
    <div class="container">
        <div class="row gutter-60">
            <div class="col-12 col-xl-8">
                <div class="cm-details__content">
                    <div class="cm-details__poster" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <img src="https://placehold.co/973x475" alt="Image">
                    </div>
                    <div class="donate-inner" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="cm-group">
                            <h3 class="title-animation">Lorem, ipsum dolor.</h3>
                            <p>Lorem Ipsum is simply dummy a of the printing and type setting industry Loreaim
                                Ipsum has been the industry's standard dummy
                            </p>
                        </div>
                        <div class="cta">
                            <div class="community-donation">
                                <div class="checkout__form">
                                    <div class="intro">
                                        <h5>Détails de vos Informations</h5>
                                    </div>
                                    <form action="https://wowtheme7.com/tf/charifund/charifund/index.html"
                                        method="post">
                                        <div class="input-group">
                                            <div class="input-single">
                                                <input type="text" name="c-name" id="cName"
                                                    placeholder="Nom" required>
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                            <div class="input-single">
                                                <input type="text" name="c-lastname" id="clastName"
                                                    placeholder="Prénoms" required>
                                                <i class="fa-solid fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-single">
                                                <input type="email" name="c-email" id="cEmail"
                                                    placeholder="Email" required>
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                            <div class="input-single">
                                                <input type="text" name="c-phone" id="cPhone"
                                                    placeholder="Numéro de Téléphone" required>
                                                <i class="fa-solid fa-phone"></i>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <div class="input-single">
                                                <input type="text" name="c-email" id="cEmail"
                                                    placeholder="Profession" required>
                                                <i class="fa-solid fa-briefcase"></i>
                                            </div>
                                            <div class="input-single">
                                                <input type="text" name="c-address-two" id="cAddressTwo"
                                                    placeholder="Lieu d'habitation" required>
                                                <i class="fa-solid fa-location-dot"></i>
                                            </div>
                                        </div>
                                        <div class="input-single">
                                            <input type="number" name="c-address" id="cAddress"
                                                placeholder="Proposition de contribution en €" required>
                                            <i class="fa-solid fa-coins"></i>
                                        </div>
                                        <div class="input-single">
                                            <!-- insère ici un input de type select ici-->
                                            <label for="">Le projet d'intérêt : </label>
                                            <select id="interest" name="interest">
                                                <option value="1">Lorem ipsum dolor sit amet consectetur.</option>
                                                <option value="2">Lorem ipsum dolor sit amet consectetur adipisicing.</option>
                                                <option value="3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</option>
                                                <option value="4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, sint.</option>
                                            </select>
                                            <!-- icône de projet -->
                                            <i class="fa-solid fa-project-diagram"></i>
                                        </div>
                                        <div class="input-single alter-input">
                                            <textarea name="contact-message" id="contactMessage"
                                                placeholder="Vos raisons"></textarea>
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                        <div class="form-cta">
                                            <button type="submit" aria-label="submit message"
                                                title="submit message" class="btn--primary">Soumettre<i
                                                    class="fa-solid fa-arrow-right"></i></button>
                                        </div>
                                    </form>
                                    <div class="text-center mt-5">
                                        <p>
                                            Nous rentrerons en contact avec vous pour vous assistez, pour la suite!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="award">
                            <div class="container">
                                <div class="row gutter-24">
                                    <div class="col-12 col-lg-8">
                                        <div class="award__single" data-aos="fade-up" data-aos-duration="1000">
                                            <div class="thumb">
                                                <a href="event-details.html">
                                                    <img src="assets/images/award/one.png" alt="Image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div class="award__single" data-aos="fade-up" data-aos-duration="1000"
                                            data-aos-delay="200">
                                            <div class="thumb">
                                                <a href="event-details.html">
                                                    <img src="assets/images/award/four.png" alt="Image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-5">
                                        <div class="award__single" data-aos="fade-up" data-aos-duration="1000"
                                            data-aos-delay="100">
                                            <div class="thumb">
                                                <a href="event-details.html">
                                                    <img src="assets/images/award/two.png" alt="Image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-7">
                                        <div class="award__single" data-aos="fade-up" data-aos-duration="1000"
                                            data-aos-delay="300">
                                            <div class="thumb">
                                                <a href="event-details.html">
                                                    <img src="assets/images/award/three.png" alt="Image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                <!-- <div class="faq__content-inner" data-aos="fade-up" data-aos-duration="1000"
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
                            </div>
                        </div> -->
            </div>
            <div class="col-12 col-xl-4">
                <div class="cm-details__sidebar">
                    <div class="cm-sidebar-widget" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <div class="intro">
                            <h5>Listes des Projets</h5>
                        </div>
                        <div class="cm-sidebar-post">
                            <div class="single-item">
                                <div class="thumb">
                                    <a href="">
                                        <img src="http://placehold.co/85" alt="Image">
                                    </a>
                                </div>
                                <div class="content">
                                    <p> <i class="fa fa-user" aria-hidden="true"></i> <span>DIABATÉ OMIGNAN</span>
                                    </p>
                                    <p><a href="">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                                    </p>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="thumb">
                                    <a href="">
                                        <img src="http://placehold.co/85" alt="Image">
                                    </a>
                                </div>
                                <div class="content">
                                    <p> <i class="fa fa-user" aria-hidden="true"></i> <span>DIABATÉ OMIGNAN</span>
                                    </p>
                                    <p><a href="">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                                    </p>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="thumb">
                                    <a href="">
                                        <img src="http://placehold.co/85" alt="Image">
                                    </a>
                                </div>
                                <div class="content">
                                    <p> <i class="fa fa-user" aria-hidden="true"></i> <span>DIABATÉ OMIGNAN</span>
                                    </p>
                                    <p><a href="">Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                                    </p>
                                </div>
                            </div>
                            <div class="cm-cta text-center mt-4">
                                <a href="" aria-label="contact us" title="contact us"
                                    class="btn--primary"> Tous les projets<i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cm-sidebar-overview" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <div class="cm-logo">
                            <img src="https://placehold.co/70" alt="Image" class="shadow rounded">
                        </div>
                        <div class="cm-content">
                            <p>Lorem ipsum dolor sit.</p>
                            <h4>
                                Lorem ipsum dolor sit amet consectetur.
                            </h4>
                        </div>
                        <img src="https://placehold.co/388x516" alt="Image" class="parallax-image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ==== / donate us section end ==== -->

@endsection