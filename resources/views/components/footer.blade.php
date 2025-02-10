
        <!-- ==== footer start ==== -->
        <footer class="footer-three">
            <div class="container">
                <div class="row gutter-30">
                    <div class="col-12 col-lg-3">
                        <div class="footer-three__logo" data-aos="fade-up" data-aos-duration="1000">
                            <a href="{{ route('home') }}">
                                <img src="{{asset('front/assets/images/preloader.png')}}" alt="Image">
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <div class="footer-three__inner" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="300">
                            <div class="social">
                                <a href="https://www.facebook.com/" target="_blank" aria-label="share us on facebook"
                                    title="facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="https://x.com/" target="_blank" aria-label="share us on twitter"
                                    title="twitter">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="https://www.linkedin.com/" target="_blank" aria-label="share us on linkedin"
                                    title="linkedin">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-two__copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-two__copyright-inner text-center">
                                <p>Copyright &copy; <span id="copyrightYear"></span> <a href="https://level-si/com">LEVEL</a>.
                                    All rights
                                    reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ==== / footer end ==== -->

        <!-- ==== custom cursor start ==== -->
        <div class="mouseCursor cursor-outer"></div>
        <div class="mouseCursor cursor-inner"></div>
        <!-- ==== / custom cursor end ==== -->

        <!-- ==== scroll to top start ==== -->
        <button class="progress-wrap" aria-label="scroll indicator" title="back to top">
            <span></span>
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </button>
        <!-- ==== / scroll to top end ==== -->

    </div>

    <!-- ==== js dependencies start ==== -->
    <!-- jquery -->
    <script src="{{ asset ('front/assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- bootstrap five js -->
    <script src="{{ asset ('front/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!-- nice select js -->
    <script src="{{ asset ('front/assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- magnific popup js -->
    <script src="{{ asset ('front/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- swiper slider js -->
    <script src="{{ asset ('front/assets/js/swiper-bundle.min.js') }}"></script>
    <!-- viewport js -->
    <script src="{{ asset ('front/assets/js/viewport.jquery.js') }}"></script>
    <!-- odometer js -->
    <script src="{{ asset ('front/assets/js/odometer.min.js') }}"></script>
    <!-- vanilla tilt js -->
    <script src="{{ asset ('front/assets/js/vanilla-tilt.min.js') }}"></script>
    <!-- aos js -->
    <script src="{{ asset ('front/assets/js/aos.js') }}"></script>

    <!-- splittext js -->
    <script src="{{ asset ('front/assets/js/SplitText.min.js') }}"></script>
    <!-- scrollto js -->
    <script src="{{ asset ('front/assets/js/ScrollToPlugin.min.js') }}"></script>
    <!-- scrolltrigger js -->
    <script src="{{ asset ('front/assets/js/ScrollTrigger.min.js') }}"></script>
    <!-- gsap js -->
    <script src="{{ asset ('front/assets/js/gsap.min.js') }}"></script>
    <!-- ==== / js dependencies end ==== -->
    <!-- template settings js -->
    <script src="{{ asset ('front/assets/js/template-settings.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset ('front/assets/js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script>
    function inscription() {
        const RegisterRoute = "{{ route('register') }}";

        Swal.fire({
            icon: "info",
            title: "Attention...",
            text: "Inscrivez-vous pour soumettre un projet!",
            footer: `<a href="${RegisterRoute}" style="color:red; font-weight:bold"> ⚠️ Cliquez ici pour vous inscrire !</a>`
        });
    }
</script>

</body>

</html>