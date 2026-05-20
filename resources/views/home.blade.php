@php($title = 'Dr. Rahul B Varma | Physician & Diabetologist in Navi Mumbai')
@section('meta_desc')
Consult Dr. Rahul B Varma, MBBS, FCPS, Fellowship in Critical Care & Diabetes. Expert physician, diabetologist &
intensivist in Navi Mumbai.
@endsection


@extends('layouts.default')

@section('content')
<div class="banner-section-outer ">
    <!-- SOCIAL ICONS -->
    <div class="left_icons float-left d-table" data-aos="fade-down">
        <div class="icon_content d-table-cell align-middle">
            <ul class="list-unstyled p-0 m-0">
                <li>
                    <a href="tel:+919967257207"><i class="fa-solid fa-phone" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="https://wa.me/919967257207" target="_blank"><i class="fa-brands fa-whatsapp"
                            aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" title="Contact Us" class="left_icons_img_link">
                        <img src="https://img.icons8.com/?size=96&id=QiOwElTl_HmC&format=png&color=FFFFFF" alt="Book Appointment" class="left_icons_img" width="48" height="48">
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- BANNER SECTION -->

    <section class="banner-section">
        <div id="customBannerCarousel" class="carousel slide custom-banner-carousel" data-ride="carousel">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="banner-card-wrapper">
                        <div class="banner-hero-card banner-slide-1">
                            <div class="container">
                                <div class="banner-section-content" data-aos="fade-up" data-aos-duration="900">
                                    <h1 class="banner-heading" style="color: #000;">Control Your Sugar, Live Your Life.</h1>
                                    <p>Expert Care for Diabetes, Insulin Guidance, Sugar Monitoring, Diabetic Foot & Gestational Diabetes.</p>
                                    <div class="btn_wrapper d-flex justify-content-start">
                                        <a class="text-decoration-none getstarted_btn" href="{{route('contact')}}">Take Charge Today – Contact Us!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="banner-card-wrapper">
                        <div class="banner-hero-card banner-slide-2">
                            <div class="container">
                                <div class="banner-section-content">
                                    <h1 class="banner-heading" style="color: #000;">Balance Your Hormones, Feel Energized.</h1>
                                    <p>Comprehensive Thyroid Treatment, PCOS Care & Lifestyle Disease Management for a Healthier You.</p>
                                    <div class="btn_wrapper d-flex justify-content-start">
                                        <a class="text-decoration-none getstarted_btn" href="{{route('contact')}}">Start Your Journey – Contact Us!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="banner-card-wrapper">
                        <div class="banner-hero-card banner-slide-3">
                            <div class="container">
                                <div class="banner-section-content">
                                    <h1 class="banner-heading" style="color: #000;">Protect Your Heart, Manage Your Pressure.</h1>
                                    <p>Blood Pressure Care, Cholesterol Management & Lifestyle Guidance to Reduce Risks.</p>
                                    <div class="btn_wrapper d-flex justify-content-start">
                                        <a class="text-decoration-none getstarted_btn" href="{{route('contact')}}">Don’t Risk Your Health – Contact Us!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="carousel-item">
                    <div class="banner-card-wrapper">
                        <div class="banner-hero-card banner-slide-4">
                            <div class="container">
                                <div class="banner-section-content">
                                    <h1 class="banner-heading" style="color: #000;">Healthy Habits, Long Life.</h1>
                                    <p>Weight Management, Fever & Infection Care and Complete Lifestyle Disease Support.</p>
                                    <div class="btn_wrapper d-flex justify-content-start">
                                        <a class="text-decoration-none getstarted_btn" href="{{route('contact')}}">Book Your Consultation Today!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#customBannerCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#customBannerCarousel" data-slide-to="1"></li>
                <li data-target="#customBannerCarousel" data-slide-to="2"></li>
                <li data-target="#customBannerCarousel" data-slide-to="3"></li>
            </ol>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const carousel = document.getElementById('customBannerCarousel');
                    const items = carousel.querySelectorAll('.carousel-item');

                    items.forEach(item => {
                        item.addEventListener('click', function(e) {
                            // If clicked on a button or link, don't slide
                            if (e.target.closest('a') || e.target.closest('button')) {
                                return;
                            }
                            // Otherwise, go to next slide
                            $(carousel).carousel('next');
                        });
                    });
                });
            </script>
        </div>
    </section>




    <!-- ABOUT US SECTION -->
    <section class="aboutus_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="aboutus_image">
                        <figure class="mb-0"><img src="{{ asset('resources/assets/images/dr-rahul-varma.png') }}"
                                alt="Dr. Rahul B Varma" class="img-fluid"></figure>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" data-aos="fade-right">
                    <div class="aboutus_content">
                        <h5>About </h5>
                        <h2>Dr. Rahul B. Varma</h2>
                        <span class="education-badge">MBBS, FCPS (Medicine)</span>
                        <span class="education-badge">Fellowship in Critical Care Medicine & Diabetes</span>
                        <span class="education-badge">Consultant Physician, Intensivist and Diabetologist</span>
                        <p>Dr. Rahul B Varma is a renowned Consultant Physician, Intensivist, and Diabetologist practicing in Ulwe, Navi Mumbai. He completed his MBBS from Krishna Institute of Medical Sciences, Karad, Maharashtra, and pursued his FCPS in Medicine from MGM Medical College & Hospital, Aurangabad. With a strong passion for advanced medical care, he further specialized through Fellowships in Critical Care Medicine and Diabetes from Apollo Hospital, Navi Mumbai.</p>
                        <div class="btn_wrapper">
                            <a href="{{ route('about') }}" class="text-decoration-none get_started_btn">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- OUR SERVICES SECTION -->
    <section class="services_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="our_specialties_heading_content">
                        <h5>Areas of Expertise</h5>
                        <h2>Services We Offer</h2>
                    </div>
                </div>
            </div>
            <div class="row home_services_cards_row" data-aos="fade-up">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                    <a href="{{ route('diabetes') }}" class="services_card_link text-decoration-none">
                        <div class="services_box_content services_card">
                            <div class="services_box_upper_portion">
                                <figure class="mb-0"><img src="{{ asset('resources/assets/images/diabaties-care-s.png') }}" alt="Diabetes" class="img-fluid"></figure>
                            </div>
                            <div class="services_box_lower_portion" data-title="Diabetes">
                                <h3>Diabetes </h3>
                                <p>Complete diabetes care with regular monitoring.</p>
                                <span class="services_service_icon" aria-hidden="true"><i class="bi bi-activity"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                    <a href="{{ route('thyroid') }}" class="services_card_link text-decoration-none">
                        <div class="services_box_content services_card">
                            <div class="services_box_upper_portion">
                                <figure class="mb-0"><img src="{{ asset('resources/assets/images/thyroid.png') }}" alt="Thyroid Treatment" class="img-fluid"></figure>
                            </div>
                            <div class="services_box_lower_portion" data-title="Thyroid Treatment">
                                <h3>Thyroid </h3>
                                <p>Comprehensive management for hypothyroidism, hyperthyroidism, and hormone balance.</p>
                                <span class="services_service_icon" aria-hidden="true"><i class="bi bi-heart"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                    <a href="{{ route('blood.pressure') }}" class="services_card_link text-decoration-none">
                        <div class="services_box_content services_card">
                            <div class="services_box_upper_portion">
                                <figure class="mb-0"><img src="{{ asset('resources/assets/images/hypertension.png') }}" alt="Hypertension" class="img-fluid"></figure>
                            </div>
                            <div class="services_box_lower_portion" data-title="Hypertension">
                                <h3> Hypertension </h3>
                                <p>Focused blood pressure and heart-risk care with regular monitoring.</p>
                                <span class="services_service_icon" aria-hidden="true"><i class="bi bi-lightning-charge"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                    <a href="{{ route('cardiac.disorder') }}" class="services_card_link text-decoration-none">
                        <div class="services_box_content services_card">
                            <div class="services_box_upper_portion">
                                <figure class="mb-0"><img src="{{ asset('resources/assets/images/heart-disease.png') }}" alt="Cardiac Disorder" class="img-fluid"></figure>
                            </div>
                            <div class="services_box_lower_portion" data-title="Cardiac Disorder">
                                <h3> Cardiac Disorder </h3>
                                <p>Comprehensive care for heart conditions and risk management.</p>
                                <span class="services_service_icon" aria-hidden="true"><i class="bi bi-heart-pulse"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row home_services_cards_row" data-aos="fade-up">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                    <a href="{{ route('fever.infections') }}" class="services_card_link text-decoration-none">
                        <div class="services_box_content services_card">
                            <div class="services_box_upper_portion">
                                <figure class="mb-0"><img src="{{ asset('resources/assets/images/fever.png') }}" alt="Fever & Infection" class="img-fluid"></figure>
                            </div>
                            <div class="services_box_lower_portion" data-title="Fever & Infection">
                                <h3>Fever & Infection </h3>
                                <p>Fast diagnosis and treatment for fever, infections, and routine medical concerns.</p>
                                <span class="services_service_icon" aria-hidden="true"><i class="bi bi-thermometer-half"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                    <a href="{{ route('lung.disorder') }}" class="services_card_link text-decoration-none">
                        <div class="services_box_content services_card">
                            <div class="services_box_upper_portion">
                                <figure class="mb-0"><img src="{{ asset('resources/assets/images/lung-dis.png') }}" alt="Lung disorder" class="img-fluid"></figure>
                            </div>
                            <div class="services_box_lower_portion" data-title="Lung disorder">
                                <h3> Lung disorder </h3>
                                <p>Comprehensive care for asthma, COPD, and respiratory conditions.</p>
                                <span class="services_service_icon" aria-hidden="true"><i class="bi bi-droplet"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                    <a href="{{ route('kidney.disease') }}" class="services_card_link text-decoration-none">
                        <div class="services_box_content services_card">
                            <div class="services_box_upper_portion">
                                <figure class="mb-0"><img src="{{ asset('resources/assets/images/kidney-care.png') }}" alt="kidney diseases" class="img-fluid"></figure>
                            </div>
                            <div class="services_box_lower_portion" data-title="kidney diseases">
                                <h3> kidney diseases </h3>
                                <p>Comprehensive care for kidney disorders and function preservation.</p>
                                <span class="services_service_icon" aria-hidden="true"><i class="bi bi-hospital"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 mb-4">
                    <a href="{{ route('stroke') }}" class="services_card_link text-decoration-none">
                        <div class="services_box_content services_card">
                            <div class="services_box_upper_portion">
                                <figure class="mb-0"><img src="{{ asset('resources/assets/images/stroke.png') }}" alt="Stroke" class="img-fluid"></figure>
                            </div>
                            <div class="services_box_lower_portion" data-title="Stroke">
                                <h3> Stroke </h3>
                                <p>Rehabilitation and physical therapy for stroke recovery.</p>
                                <span class="services_service_icon" aria-hidden="true"><i class="bi bi-person-walking"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mt-lg-4">
                <div class="col-12 text-center">
                    <a href="{{ route('services') }}" class="btn btn-view-more text-decoration-none">View More</a>
                </div>
            </div>
        </div>
    </section>


    <!-- OUR SPECIALTIES SECTION -->
    <section class="our_specialties_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="our_specialties_heading_content">
                        {{-- <h5>Our Specialties</h5> --}}
                        <h2>When to Seek Medical Attention</h2>
                        <p>Early consultation can prevent complications and save lives.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="fade-right">
                    <div class="specialties_content_wrapper">
                        <div class="specialties_content s1">
                            <h3 class="specialties_name">Diabetes Control</h3>
                            <p class="specialties_paragraph">High sugar levels need medical control</p>
                        </div>
                        <div class="specialties_content s2">
                            <h4 class="specialties_name">Blood Pressure</h4>
                            <p class="specialties_paragraph">Uncontrolled BP damages vital organs</p>
                        </div>
                        <div class="specialties_content s3">
                            <h4 class="specialties_name">Heart Risk</h4>
                            <p class="specialties_paragraph">Chest symptoms may indicate heart disease</p>
                        </div>
                        <div class="specialties_content s4">
                            <h4 class="specialties_name">Stroke Signs</h4>
                            <p class="specialties_paragraph">Sudden weakness needs immediate care</p>
                        </div>
                        <figure class="specialties_left_line mb-0">
                            <img src="{{ asset('resources/assets/images/specialties_left_line.png') }}" alt=""
                                class="img-fluid">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 d-md-block d-none">
                    <figure class="specialties_image mb-0">
                        <img src="{{ asset('resources/assets/images/specialties_image.png') }}" alt=""
                            class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" data-aos="fade-right">
                    <div class="specialties_content_wrapper">
                        <div class="specialties_content specialties_content2 s5">
                            <h4 class="specialties_name">Lung Health</h4>
                            <p class="specialties_paragraph">Breathing problems require medical evaluation</p>
                        </div>
                        <div class="specialties_content specialties_content2 s6">
                            <h4 class="specialties_name">Infection Care</h4>
                            <p class="specialties_paragraph">High fever may signal serious infection</p>
                        </div>
                        <div class="specialties_content specialties_content2 s7">
                            <h4 class="specialties_name">Critical Illness</h4>
                            <p class="specialties_paragraph">Severe conditions need continuous monitoring</p>
                        </div>
                        <div class="specialties_content specialties_content2 s8">
                            <h4 class="specialties_name">Emergency Care</h4>
                            <p class="specialties_paragraph">Life-threatening symptoms need urgent treatment</p>
                        </div>
                        <figure class="specialties_right_line mb-0">
                            <img src="{{ asset('resources/assets/images/specialties_right_line.png') }}" alt=""
                                class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
            <figure class="our_specialties_right_shape right_shape mb-0">
                <img src="{{ asset('resources/assets/images/our_specialties_right_shape.png') }}" alt=""
                    class="img-fluid">
            </figure>
        </div>
    </section>

    <!-- WHY CHOOSE DR. RAHUL VARMA SECTION -->
    <section class="get_in_touch_section why_choose_redesign">
        <div class="container">
            <div class="why_choose_shell" data-aos="fade-up">
                <div class="row align-items-center why_choose_row">
                    <div class="col-lg-7 col-md-12">
                        <div class="why_choose_intro">
                            <span class="why_choose_label">Why Patients Choose</span>
                            <h2>Dr. Rahul Varma</h2>
                            <p>Comprehensive physician-led care with ICU-level clinical judgment, transparent treatment decisions, and close monitoring from consultation to recovery.</p>
                        </div>

                        <ul class="why_choose_card_list list-unstyled mb-0">
                            <li>
                                <span class="why_choose_card_icon" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
                                <span>Fellowship-Trained in Critical Care & Diabetes</span>
                            </li>
                            <li>
                                <span class="why_choose_card_icon" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
                                <span>Strong ICU & Emergency Experience</span>
                            </li>
                            <li>
                                <span class="why_choose_card_icon" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
                                <span>Patient-First Treatment Approach</span>
                            </li>
                            <li>
                                <span class="why_choose_card_icon" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
                                <span>Ethical & Transparent Medical Care</span>
                            </li>
                            <li>
                                <span class="why_choose_card_icon" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
                                <span>Trusted by Families Across Navi Mumbai</span>
                            </li>
                            <li>
                                <span class="why_choose_card_icon" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
                                <span>Direct Involvement in Patient Treatment and Monitoring</span>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="why_choose_media_wrap">
                            <figure class="why_choose_media mb-0">
                                <img src="{{ asset('resources/assets/images/get_in_touch_image.png') }}" alt="Dr. Rahul Varma - Care" class="img-fluid">
                            </figure>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- EDUCATIONAL VIDEOS SECTION -->
    <section class="educational_videos_section educational_videos_section-home_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="educational_videos_content">
                        <h5>Watch & Learn</h5>
                        <h2>Educational Videos</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4 justify-content-center" data-aos="fade-up">
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="educational_video_box">
                        <div class="video_wrapper">
                            <iframe src="https://www.youtube.com/embed/nf_aolphmzA" title="Educational Video 1"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="educational_video_box">
                        <div class="video_wrapper">
                            <iframe src="https://www.youtube.com/embed/cxX3IRIGgpo" title="Educational Video 2"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12 text-center pb-2" data-aos="fade-up">
                    <a href="{{ route('educational.videos') }}" class="btn btn-view-more text-decoration-none">View
                        More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- HOME GALLERY SECTION -->
    <section class="home_gallery_section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="home_testimonial_heading_content">
                        {{-- <h5>Hospital Images</h5> --}}
                        <h2>Gallery </h2>
                    </div>
                </div>
            </div>
            <div class="row gallery_grid justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 gallery_col" data-aos="fade-up">
                    <a href="{{ asset('resources/assets/images/gallery2.jpeg') }}" class="gallery_item magnific-popup-link">
                        <figure class="mb-0">
                            <img src="{{ asset('resources/assets/images/gallery2.jpeg') }}" alt="Gallery Image 1" class="img-fluid">
                        </figure>
                        <span class="gallery_item_overlay"><i class="fa-solid fa-search-plus" aria-hidden="true"></i></span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 gallery_col" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ asset('resources/assets/images/gallery3.jpeg') }}" class="gallery_item magnific-popup-link">
                        <figure class="mb-0">
                            <img src="{{ asset('resources/assets/images/gallery3.jpeg') }}" alt="Gallery Image 2" class="img-fluid">
                        </figure>
                        <span class="gallery_item_overlay"><i class="fa-solid fa-search-plus" aria-hidden="true"></i></span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 gallery_col" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{ asset('resources/assets/images/gallery7.jpg') }}" class="gallery_item magnific-popup-link">
                        <figure class="mb-0">
                            <img src="{{ asset('resources/assets/images/gallery7.jpg') }}" alt="Gallery Image 3" class="img-fluid">
                        </figure>
                        <span class="gallery_item_overlay"><i class="fa-solid fa-search-plus" aria-hidden="true"></i></span>
                    </a>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-12 text-center pb-2" data-aos="fade-up">
                    <a href="{{ route('gallery') }}" class="btn btn-view-more text-decoration-none">View
                        More</a>
                </div>
            </div>
        </div>
    </section>



    <!-- TESTIMONIAL SECTION -->
    <section class="testimonial_section home_testimonial_split">
        <div class="container">
            <div class="home_testimonial_split_wrap" data-aos="fade-up">
                <div class="row align-items-stretch">
                    <div class="col-lg-6 col-md-12">
                        <figure class="home_testimonial_media mb-0">
                            <img src="{{ asset('resources/assets/images/testimonial.png') }}" alt="Diabetes consultation and blood glucose check" class="img-fluid">
                        </figure>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="home_testimonial_side">
                            <div class="home_testimonial_heading_content">
                                <h5>Testimonials</h5>
                                <h2>What Our Patients Say</h2>
                            </div>

                            <div id="homeTestimonialCarousel" class="carousel slide testimonial-carousel-wrapper" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <article class="testimonial_card_new home_testimonial_card_square">
                                            <div class="testimonial_card_new_accent"></div>
                                            <div class="testimonial_card_new_body">
                                                <i class="fa-solid fa-quote-left testimonial_card_new_quote" aria-hidden="true"></i>
                                                <div class="testimonial_card_new_header">
                                                    <figure class="mb-0"><img src="{{ asset('resources/assets/images/google-icon.png') }}" alt="Google Review" class="google-icon"></figure>
                                                    <div class="testimonial_card_new_meta">
                                                        <p class="testimonial_person_name mb-0">Rahul Badwaik</p>
                                                        <img src="{{ asset('resources/assets/images/star.png') }}" alt="5 Stars" class="star-icon">
                                                    </div>
                                                </div>
                                                <p class="testimonial_card_new_text">Dr Rahul Varma is very friendly, polite, and helpful. He clearly explains the treatment and makes patients feel comfortable.</p>
                                            </div>
                                        </article>
                                    </div>

                                    <div class="carousel-item">
                                        <article class="testimonial_card_new home_testimonial_card_square">
                                            <div class="testimonial_card_new_accent"></div>
                                            <div class="testimonial_card_new_body">
                                                <i class="fa-solid fa-quote-left testimonial_card_new_quote" aria-hidden="true"></i>
                                                <div class="testimonial_card_new_header">
                                                    <figure class="mb-0"><img src="{{ asset('resources/assets/images/google-icon.png') }}" alt="Google Review" class="google-icon"></figure>
                                                    <div class="testimonial_card_new_meta">
                                                        <p class="testimonial_person_name mb-0">Preeti Dhillon</p>
                                                        <img src="{{ asset('resources/assets/images/star.png') }}" alt="5 Stars" class="star-icon">
                                                    </div>
                                                </div>
                                                <p class="testimonial_card_new_text">I have visited Dr. Rahul Varma several times for myself and my family. He is caring, friendly, and very approachable. His diagnosis is accurate, and the treatment has always been effective. I highly recommend Dr. Rahul Varma and Bharti Hospital, Ulwe, for quality healthcare.</p>
                                            </div>
                                        </article>
                                    </div>

                                    <div class="carousel-item">
                                        <article class="testimonial_card_new home_testimonial_card_square">
                                            <div class="testimonial_card_new_accent"></div>
                                            <div class="testimonial_card_new_body">
                                                <i class="fa-solid fa-quote-left testimonial_card_new_quote" aria-hidden="true"></i>
                                                <div class="testimonial_card_new_header">
                                                    <figure class="mb-0"><img src="{{ asset('resources/assets/images/google-icon.png') }}" alt="Google Review" class="google-icon"></figure>
                                                    <div class="testimonial_card_new_meta">
                                                        <p class="testimonial_person_name mb-0">Reena Choudhury</p>
                                                        <img src="{{ asset('resources/assets/images/star.png') }}" alt="5 Stars" class="star-icon">
                                                    </div>
                                                </div>
                                                <p class="testimonial_card_new_text">The doctor is very kind and professional. He listened patiently and explained everything clearly. Very satisfied with the consultation. Thank you, Dr. Rahul Varma.</p>
                                            </div>
                                        </article>
                                    </div>
                                </div>

                                <div class="home_testimonial_controls">
                                    <button class="carousel-control-prev" type="button" data-target="#homeTestimonialCarousel" data-slide="prev" aria-label="Previous testimonial">
                                        <i class="fa-solid fa-arrow-left-long" aria-hidden="true"></i>
                                        <span class="sr-only">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-target="#homeTestimonialCarousel" data-slide="next" aria-label="Next testimonial">
                                        <i class="fa-solid fa-arrow-right-long" aria-hidden="true"></i>
                                        <span class="sr-only">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HOME BOOK APPOINTMENT SECTION -->
    <section class="home-appointment-cta" id="contact">
        <div class="container">
            <div class="home-appointment-card text-center" data-aos="fade-up">
                <h2>Your health deserves expert attention and timely care.</h2>
                <p>
                    Consult Dr. Rahul B. Varma for personalized diabetes care and expert guidance.
                    Schedule your appointment now and start your journey toward better health.
                </p>
                <a href="{{ route('contact') }}" class="text-decoration-none">
                    <button type="button" name="btnsubmit" id="home_submitbutton">Book Appointment</button>
                </a>
            </div>
        </div>
    </section>
</div>

@endsection