<!-- FOOTER SECTION -->
<section class="footer-section" id="footer_section">
    <div class="container">
        <div class="middle-portion">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer_logo">
                        <a href="{{ route('home') }}" class="text-decoration-none footer_brand_link">
                            <div class="logo-text-container logo-text-white mb-3">
                                <span class="logo-text-name">Dr. Rahul Varma</span>
                                <div class="logo-text-divider"></div>
                                <span class="logo-text-subtitle">Consultant Physician,<br>Intensivist & Diabetologist</span>
                            </div>
                        </a>
                        <div class="footer_brand_cta">
                            <p class="footer_tagline mb-0">Expert care for diabetes and overall wellness, focused on your health at every step.</p>
                        </div>

                        <!-- <ul class="list-unstyled d-flex social-icons-footer mb-0">
                          
                            <li class="icons"><a href="#"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a></li>
                            <li class="icons"><a href="#"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                            <li class="icons"><a href="#"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="contact_col">
                        <h4>Contact Us</h4>
                        <ul class="list-unstyled footer_contact_list" style="font-size: 18px;">
                            <li class="mb-2 contact_icons">
                                <i class="fa-solid fa-location-dot"></i>
                                <a href="https://maps.app.goo.gl/7tMaGWhgt7TaCs5dA" target="_blank"
                                    rel="noopener noreferrer" class="text-decoration-none footer-address-link">
                                    <h3 class="hosptial-name"style="font-weight:500">Bharti Multispecialty Hospital</h3>
                                    <span class="d-block footer-address-text">
                                        <span class="address-line">1st Floor, Anmol Sankalp Apartment, </span>
                                        <span class="address-line">Plot No - 59, Sector No - 5, </span>
                                        <span class="address-line">Ulwe (West), Navi Mumbai, </span>
                                        <span class="address-line">Maharashtra 410206</span>
                                    </span>
                                </a>
                            </li>
                            <li class="mb-2 contact_icons">
                                <i class="fa-solid fa-phone"></i>
                                <a href="tel:+919967257207" class="text-decoration-none mt-2">+91 99672 57207</a>
                            </li>
                            <li class="mb-0 contact_icons">
                                <i class="fa-sharp fa-solid fa-envelope"></i>
                                <a href="mailto:rahulvarma704@gmail.com"
                                    class="text-decoration-none mt-2">rahulvarma704@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="map_col">
                        <h4>Location</h4>
                        <div class="footer_map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.8924103654695!2d73.0225431119464!3d18.98035838213033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c3b7e93c4947%3A0x6564fb70c7c716ab!2sDR%20RAHUL%20VARMA%20-%20Diabetes%20Specialist%2C%20Thyroid%20Doctor%20Ulwe%2C%20General%20Physician%20in%20Ulwe%2C%20Best%20Diabetologist%20in%20Navi%20Mumbai!5e0!3m2!1sen!2sin!4v1772081684913!5m2!1sen!2sin"
                                width="100%" height="260" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                title="Dr. Rahul B. Varma - Bharti Hospital, Ulwe"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-portion">
        <div class="copyright col-xl-12 text-center">
            <p>&copy; Copyright {{ date('Y') }}, Dr. Rahul B. Varma. All Rights Reserved.</p>
        </div>
    </div>
</section>

<!-- Fixed Mobile Contact Buttons (Call & WhatsApp) -->
<div class="mobile-fixed-buttons">
    <a href="tel:+919967257207" class="mobile-fixed-btn call-btn" aria-label="Call Us" title="Call Us">
        <i class="fa-solid fa-phone" aria-hidden="true"></i>
    </a>
    <a href="https://wa.me/919967257207" target="_blank" class="mobile-fixed-btn whatsapp-btn" aria-label="WhatsApp"
        title="Chat on WhatsApp">
        <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
    </a>
</div>

<!-- Fixed Back to Top (Up Arrow) -->
<a href="#top" class="back-to-top" id="backToTop" aria-label="Back to top" title="Back to top">
    <i class="fa-solid fa-arrow-up" aria-hidden="true"></i>
</a>

<!-- jQuery -->
<script src="{{ asset('resources/assets/js/jquery-3.6.0.min.js') }}"></script>

<!-- Popper.js -->
<script src="{{ asset('resources/assets/js/popper.min.js') }}"></script>

<!-- Video Popup JS (load before Bootstrap) -->
<script src="{{ asset('resources/assets/js/video-popup.js') }}"></script>

<!-- Bootstrap JS -->
<script src="{{ asset('resources/assets/js/bootstrap.min.js') }}"></script>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- GSAP (Optional) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

<!-- Magnific Popup JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

<!-- iTyped JS -->
<script src="https://unpkg.com/ityped@0.0.10"></script>

<!-- Custom JS Files -->
<script src="{{ asset('resources/assets/js/video-section.js') }}"></script>
<script src="{{ asset('resources/assets/js/animation.js') }}"></script>
<script src="{{ asset('resources/assets/js/type.js') }}"></script>
<script src="{{ asset('resources/assets/js/script.js') }}"></script>
