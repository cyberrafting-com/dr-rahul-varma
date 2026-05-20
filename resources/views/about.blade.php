@php($title = 'About Dr. Rahul B. Varma | Physician, Intensivist & Diabetologist - Navi Mumbai')
@section('meta_desc')
Dr. Rahul B. Varma - Consultant Physician, Intensivist & Diabetologist. Owner of Bharti Multispeciality Hospital, Ulwe. MBBS, FCPS, Fellowship in Critical Care & Diabetes.
@endsection


@extends('layouts.default')

@section('content')
<div class="sub-banner-section">
    <!-- SOCIAL ICONS -->
    <div class="left_icons float-left d-table" data-aos="fade-down">
        <div class="icon_content d-table-cell align-middle">
            <ul class="list-unstyled p-0 m-0">
                <li>
                    <a href="tel:+919967257207"><i class="fa-solid fa-phone" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="https://wa.me/919967257207" target="_blank"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="{{ route('contact') }}" title="Contact Us" class="left_icons_img_link">
                        <img src="https://img.icons8.com/?size=96&id=QiOwElTl_HmC&format=png&color=FFFFFF" alt="Book Appointment" class="left_icons_img" width="48" height="48">
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- SUB BANNER -->
    <section class="sub-banner-inner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="banner-section-content">
                        <h1 data-aos="fade-up">About Us</h1>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

<!-- ABOUT DR. RAHUL B. VARMA -->
<section class="aboutus_section aboutpage_aboutus_section" style="background: linear-gradient(to bottom, #ffffff, #F9F4F5);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="aboutus_image">
                    <figure class="mb-0"><img src="{{ asset('resources/assets/images/dr-rahul-varma-abt.png') }}" alt="Dr. Rahul B Varma" class="img-fluid"></figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-right">
                <div class="aboutus_content">
                    <h5>About</h5>
                    <h2>Dr. Rahul B. Varma</h2>
                    <span class="education-badge">MBBS, FCPS (Medicine)</span>
                    <span class="education-badge">Fellowship in Critical Care Medicine & Diabetes</span>
                    <span class="education-badge">Consultant Physician, Intensivist and Diabetologist</span>
                    <p>Dr. Rahul B Varma is a renowned Consultant Physician, Intensivist, and Diabetologist practicing in Ulwe, Navi Mumbai. He completed his MBBS from Krishna Institute of Medical Sciences, Karad, Maharashtra, and pursued his FCPS in Medicine from MGM Medical College & Hospital, Aurangabad. With a strong passion for advanced medical care, he further specialized through Fellowships in Critical Care Medicine and Diabetes from Apollo Hospital, Navi Mumbai.</p>
                    <p>Dr. Varma currently serves as the Owner and Director of Bharti Multispeciality Hospital, where he leads the General Medicine Department. He is also associated as a Senior Consultant with various hospitals across Mumbai and Navi Mumbai. His expertise includes the management of uncontrolled diabetes, hypertension, cardiac disorders, stroke, paralysis, kidney diseases, lung disorders, infections, and critical illnesses.</p>
                </div>
            </div>
        </div>
        <div class="row mt-3" data-aos="fade-up">
            <div class="col-12">
                <div class="aboutus_content">
                    <p>During the COVID-19 pandemic, Dr. Rahul B Varma played a vital role in managing critically ill patients at multiple COVID care centers in Aurangabad. His compassionate patient care, evidence-based treatment approach, and commitment to medical excellence have earned him the trust of numerous patients and families across Navi Mumbai.</p>
                    <div class="btn_wrapper d-flex justify-content-center">
                        <a href="{{ route('contact') }}" class="text-decoration-none get_started_btn">Book Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- EDUCATION SECTION -->
<section class="education_section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="services_content education_heading">
                    <h5>Qualifications</h5>
                    <h2>Education</h2>
                </div>
            </div>
        </div>
        <div class="row education_cards_row">
            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up">
                <div class="education_card">
                    <div class="education_card_icon">
                        <i class="fa-solid fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                    <span class="education_card_label">Under Graduate</span>
                    <h4>M.B.B.S</h4>
                    <p>Krishna Institute of Medical Science, Karad, Maharashtra.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="100">
                <div class="education_card">
                    <div class="education_card_icon">
                        <i class="fa-solid fa-user-doctor" aria-hidden="true"></i>
                    </div>
                    <span class="education_card_label">Post Graduate</span>
                    <h4>F.C.P.S (Medicine)</h4>
                    <p>MGM Medical College & Hospital, Aurangabad, Maharashtra.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200">
                <div class="education_card">
                    <div class="education_card_icon">
                        <i class="fa-solid fa-award" aria-hidden="true"></i>
                    </div>
                    <span class="education_card_label">Fellowship</span>
                    <h4>Fellowship in Critical Care Medicine & Fellowship in Diabetes</h4>
                    <p>Apollo Hospital, Navi Mumbai.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- EXPERIENCE SECTION -->
<section class="experience_section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="experience_heading_content">
                    <h5>Career</h5>
                    <h2>Experience</h2>
                </div>
            </div>
        </div>

        <div class="row experience_row">
            <div class="col-12" data-aos="fade-right">
                <div class="experience_card experience_current">
                    <div class="experience_card_header">
                        <span class="experience_badge">At Present</span>
                    </div>
                    <h4>Owner & Director of Bharti Multispeciality Hospital</h4>
                    <p class="experience_meta">Ulwe, Navi Mumbai.</p>
                    <hr class="experience_divider">
                    <h4>Senior Consultant Physician</h4>
                    <p class="experience_meta">At Bharti Multispeciality Hospital, Ulwe, Navi Mumbai & various hospitals in Mumbai & Navi Mumbai</p>
                </div>
            </div>

            <div class="col-12" data-aos="fade-right" data-aos-delay="50">
                <div class="experience_card">
                    <div class="experience_card_header">
                        <span class="experience_period">2019 - 2020</span>
                        <span class="experience_role">Consultant</span>
                    </div>
                    <h4>MGM Hospital</h4>
                    <p class="experience_meta">Aurangabad, Maharashtra.</p>
                </div>
            </div>

            <div class="col-12" data-aos="fade-right" data-aos-delay="100">
                <div class="experience_card">
                    <div class="experience_card_header">
                        <span class="experience_period">2020 - 2021 (June)</span>
                        <span class="experience_role">In COVID-19</span>
                    </div>
                    <h4>LIFE Multispeciality Hospital</h4>
                    <p class="experience_meta">Aurangabad, Maharashtra.</p>
                </div>
            </div>

            <div class="col-12" data-aos="fade-right" data-aos-delay="150">
                <div class="experience_card">
                    <div class="experience_card_header">
                        <span class="experience_period">2020 - 2021 (June)</span>
                        <span class="experience_role">In COVID-19</span>
                    </div>
                    <h4>AJANTA Hospital</h4>
                    <p class="experience_meta">Aurangabad, Maharashtra.</p>
                </div>
            </div>

            <div class="col-12 experience_card_last" data-aos="fade-right" data-aos-delay="200">
                <div class="experience_card">
                    <div class="experience_card_header">
                        <span class="experience_period">2020 - 2021 (June)</span>
                        <span class="experience_role">CARE COVID PLUS Centre</span>
                    </div>
                    <h4>CARE COVID PLUS Centre</h4>
                    <p class="experience_meta">Aurangabad, Maharashtra.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- OUR EXPERTISE SECTION -->
<section class="expertise_section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="expertise_heading_content">
                    <h5>What We Offer</h5>
                    <h2>Our Expertise</h2>
                </div>
            </div>
        </div>
        <div class="row expertise_row align-items-center">
            <div class="col-lg-6 col-12 expertise_col_image" data-aos="fade-right">
                <div class="expertise_image_wrap">
                    <figure class="mb-0"><img src="{{ asset('resources/assets/images/whychooseus.png') }}" alt="Our Expertise" class="img-fluid"></figure>
                </div>
            </div>
            <div class="col-lg-6 col-12 expertise_col_content" data-aos="fade-left">
                <div class="expertise_list">
                    <div class="expertise_row_item">
                        <div class="expertise_row_icon"><i class="fa-solid fa-heart-pulse" aria-hidden="true"></i></div>
                        <div class="expertise_row_content">
                            <h4>Critical Care</h4>
                            <p>Expert ICU management and life support</p>
                        </div>
                    </div>
                    <div class="expertise_row_item">
                        <div class="expertise_row_icon"><i class="fa-solid fa-syringe" aria-hidden="true"></i></div>
                        <div class="expertise_row_content">
                            <h4>Diabetes Care</h4>
                            <p>Personalized diabetes management plans</p>
                        </div>
                    </div>
                    <div class="expertise_row_item">
                        <div class="expertise_row_icon"><i class="fa-solid fa-stethoscope" aria-hidden="true"></i></div>
                        <div class="expertise_row_content">
                            <h4>Hypertension</h4>
                            <p>Comprehensive cardiovascular care</p>
                        </div>
                    </div>
                    <div class="expertise_row_item">
                        <div class="expertise_row_icon"><i class="fa-solid fa-brain" aria-hidden="true"></i></div>
                        <div class="expertise_row_content">
                            <h4>Stroke Care</h4>
                            <p>Advanced stroke treatment and prevention</p>
                        </div>
                    </div>
                    <div class="expertise_row_item">
                        <div class="expertise_row_icon"><i class="fa-solid fa-bed-pulse" aria-hidden="true"></i></div>
                        <div class="expertise_row_content">
                            <h4>ICU Services</h4>
                            <p>24/7 intensive care unit management</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BOOK APPOINTMENT SECTION -->
<section class="subscribe_section" id="contact">
    <div class="container">
        <div class="subscribe_background_image">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" data-aos="fade-right">
                    <div class="subscribe_content text-center">
                        {{-- <h5>Book an Appointment</h5> --}}
                        <h2>Your health deserves expert attention and timely care.</h2>
                        <p>Consult Dr. Rahul B. Varma for personalized diabetes care and expert guidance. Schedule your appointment now and start your journey toward better health.
                        <p>

                        <div class="form-row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <button type="submit" name="btnsubmit" id="submitbutton">Book Appointment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection