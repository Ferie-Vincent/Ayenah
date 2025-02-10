<!-- ==== contact section start ==== -->
<section class="contact" id="contactSection">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-12 col-md-10 col-xl-7">
                <div class="contact__content">
                    <div class="section__content" data-aos="fade-up" data-aos-duration="1000">

                        <h2 class="title-animation">Une Question pour nous ? Ecrivez-nous !
                        </h2>
                    </div>
                    <div class="contact__form cta" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="100">
                        <form action="#" method="post">
                            <div class="input-group">
                                <div class="input-single">
                                    <input type="email" name="contact-email" id="contactEmail"
                                        placeholder="Votre mail ...">
                                    <i class="fa-solid fa-paper-plane"></i>
                                </div>
                                <div class="input-single">
                                    <input type="text" name="contact-number" id="contactNumber"
                                        placeholder="Votre contact">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                            </div>
                            <div class="input-single">
                                <input type="text" name="contact-address" id="contactAddress"
                                    placeholder="Votre région ...">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="input-single alter-input">
                                <textarea name="contact-message" id="contactMessage"
                                    placeholder="Votre question ..."></textarea>
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="form-cta">
                                <button type="submit" aria-label="submit message" title="submit message"
                                    class="btn--primary">Envoi du message<i
                                        class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-bg">
        <img src="{{asset('front/assets/images/cta.png')}}" alt="Image" class="parallax-image">
    </div>
    <div class="shape-left" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
        <img src="{{asset('front/assets/images/cta/shape-left.png')}}" alt="Image" class="base-img">
    </div>
</section>
<!-- ==== / contact section end ==== -->