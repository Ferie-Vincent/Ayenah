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
                        <form action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <div class="input-group">
                                <div class="input-single">
                                    <label for="contactNom" class="visually-hidden">Votre nom</label>
                                    <input type="text" name="nom" id="contactNom"
                                        placeholder="Votre nom ..." required>
                                    <i class="fa-solid fa-user"></i>
                                </div>
                                <div class="input-single">
                                    <label for="contactEmail" class="visually-hidden">Votre email</label>
                                    <input type="email" name="email" id="contactEmail"
                                        placeholder="Votre mail ..." required>
                                    <i class="fa-solid fa-paper-plane"></i>
                                </div>
                            </div>
                            <div class="input-single">
                                <label for="contactTelephone" class="visually-hidden">Votre téléphone</label>
                                <input type="text" name="telephone" id="contactTelephone"
                                    placeholder="Votre contact ..." required>
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="input-single alter-input">
                                <label for="contactMessage" class="visually-hidden">Votre message</label>
                                <textarea name="message" id="contactMessage"
                                    placeholder="Votre question ..." required></textarea>
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="form-cta">
                                <button type="submit" aria-label="envoyer le message" title="envoyer le message"
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
        <img src="{{asset('front/assets/images/cta.png')}}" alt="Image" class="parallax-image" loading="lazy">
    </div>
    <div class="shape-left" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="300">
        <img src="{{asset('front/assets/images/cta/shape-left.png')}}" alt="Image" class="base-img" loading="lazy">
    </div>
</section>
<!-- ==== / contact section end ==== -->