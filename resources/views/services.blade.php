@php($title = 'Medical Services by Dr. Rahul B Varma, Physician & Diabetologist Navi Mumbai')
@section('meta_desc')
Dr. Rahul B. Varma, expert Physician & Diabetologist Navi Mumbai offers diabetes care, hypertension management, stroke & paralysis care, fever & infections treatment.
@endsection


@extends('layouts.default')

@section('content')
<div class="sub-banner-section">
    <div class="left_icons float-left d-table" data-aos="fade-down">
        <div class="icon_content d-table-cell align-middle">
            <ul class="list-unstyled p-0 m-0">
                <li><a href="tel:+919967257207"><i class="fa-solid fa-phone" aria-hidden="true"></i></a></li>
                <li><a href="https://wa.me/919967257207" target="_blank"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i></a></li>
                <li>
                    <a href="{{ route('contact') }}" title="Contact Us" class="left_icons_img_link">
                        <img src="https://img.icons8.com/?size=96&id=QiOwElTl_HmC&format=png&color=FFFFFF" alt="Book Appointment" class="left_icons_img" width="48" height="48">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <section class="sub-banner-inner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="banner-section-content">
                        <h1 data-aos="fade-up">Our Services</h1>
                        {{-- <p data-aos="fade-right">Comprehensive care for diabetes, heart, stroke & general medicine</p> --}}
                        <!-- <div class="btn_wrapper" data-aos="fade-up">
                            <a class="text-decoration-none" href="{{ route('home') }}"><span class="sub_home_span">Home</span><i class="fa-solid fa-arrow-right"></i><span class="sub_span">Services</span></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- SERVICES SECTION -->
<section class="services_page_section services_grid_section" id="services-list">
    <div class="container">
        <!-- <header class="services_section_header">
            <span class="services_section_label">Areas of Expertise</span>
            <h2 class="services_section_heading">Services We Offer</h2>
            <div class="services_section_underline"></div>
            <p class="services_section_intro">Dr. Rahul B. Varma provides evidence-based care across diabetes, cardiovascular, respiratory, and general medicine. Choose a service below to learn more or book an appointment.</p>
        </header> -->

        <div class="row services_page_row align-items-start">
            <!-- Services grid -->
            <div class="col-12 services_content_col">
                <div class="row services_grid_row">
                    <!-- Diabetes -->
                    <div class="col-12 services_grid_col" data-aos="fade-up">
                        <div class="services_treatment_card" id="diabetes">
                            <div class="services_treatment_img_wrap">
                                <figure class="mb-0">
                                    <img src="{{ asset('resources/assets/images/diabaties-care-s.png') }}" alt="Diabetes" class="img-fluid">
                                </figure>
                            </div>
                            <div class="services_treatment_body">
                                <h3>Diabetes</h3>
                                <p>Complete diabetes care, insulin management, blood sugar monitoring, and prevention of complications.</p>
                                <a href="{{ route('diabetes') }}" class="btn services_know_more_btn text-decoration-none">Read more</a>
                            </div>
                        </div>
                    </div>

                    <!-- Thyroid -->
                    <div class="col-12 services_grid_col" data-aos="fade-up">
                        <div class="services_treatment_card" id="thyroid">
                            <div class="services_treatment_img_wrap">
                                <figure class="mb-0">
                                    <img src="{{ asset('resources/assets/images/thyroid.png') }}" alt="Thyroid" class="img-fluid">
                                </figure>
                            </div>
                            <div class="services_treatment_body">
                                <h3>Thyroid</h3>
                                <p>Comprehensive management for hypothyroidism, hyperthyroidism, goiter, and hormone balance.</p>
                                <a href="{{ route('thyroid') }}" class="btn services_know_more_btn text-decoration-none">Read more</a>
                            </div>
                        </div>
                    </div>

                    <!-- Hypertension -->
                    <div class="col-12 services_grid_col" data-aos="fade-up">
                        <div class="services_treatment_card" id="hypertension">
                            <div class="services_treatment_img_wrap">
                                <figure class="mb-0">
                                    <img src="{{ asset('resources/assets/images/hypertension.png') }}" alt="Hypertension" class="img-fluid">
                                </figure>
                            </div>
                            <div class="services_treatment_body">
                                <h3>Hypertension</h3>
                                <p>Expert care for high blood pressure management and prevention of heart or kidney complications.</p>
                                <a href="{{ route('blood.pressure') }}" class="btn services_know_more_btn text-decoration-none">Read more</a>
                            </div>
                        </div>
                    </div>

                    <!-- Cardiac Disorder -->
                    <div class="col-12 services_grid_col" data-aos="fade-up">
                        <div class="services_treatment_card" id="cardiac-disorder">
                            <div class="services_treatment_img_wrap">
                                <figure class="mb-0">
                                    <img src="{{ asset('resources/assets/images/heart-disease.png') }}" alt="Cardiac Disorder" class="img-fluid">
                                </figure>
                            </div>
                            <div class="services_treatment_body">
                                <h3>Cardiac Disorder</h3>
                                <p>Comprehensive care for heart conditions, cholesterol management, and cardiovascular risk reduction.</p>
                                <a href="{{ route('cardiac.disorder') }}" class="btn services_know_more_btn text-decoration-none">Read more</a>
                            </div>
                        </div>
                    </div>

                    <!-- Fever & Infection -->
                    <div class="col-12 services_grid_col" data-aos="fade-up">
                        <div class="services_treatment_card" id="fever-infection">
                            <div class="services_treatment_img_wrap">
                                <figure class="mb-0">
                                    <img src="{{ asset('resources/assets/images/fever.png') }}" alt="Fever & Infection" class="img-fluid">
                                </figure>
                            </div>
                            <div class="services_treatment_body">
                                <h3>Fever & Infection</h3>
                                <p>Accurate diagnosis and treatment for acute fevers, bacterial/viral infections, and general illnesses.</p>
                                <a href="{{ route('fever.infections') }}" class="btn services_know_more_btn text-decoration-none">Read more</a>
                            </div>
                        </div>
                    </div>

                    <!-- Lung disorder -->
                    <div class="col-12 services_grid_col" data-aos="fade-up">
                        <div class="services_treatment_card" id="lung-disorder">
                            <div class="services_treatment_img_wrap">
                                <figure class="mb-0">
                                    <img src="{{ asset('resources/assets/images/lung-dis.png') }}" alt="Lung disorder" class="img-fluid">
                                </figure>
                            </div>
                            <div class="services_treatment_body">
                                <h3>Lung disorder</h3>
                                <p>Comprehensive care for asthma, COPD, chronic cough, and other respiratory disorders.</p>
                                <a href="{{ route('lung.disorder') }}" class="btn services_know_more_btn text-decoration-none">Read more</a>
                            </div>
                        </div>
                    </div>

                    <!-- kidney diseases -->
                    <div class="col-12 services_grid_col" data-aos="fade-up">
                        <div class="services_treatment_card" id="kidney-diseases">
                            <div class="services_treatment_img_wrap">
                                <figure class="mb-0">
                                    <img src="{{ asset('resources/assets/images/kidney-care.png') }}" alt="kidney diseases" class="img-fluid">
                                </figure>
                            </div>
                            <div class="services_treatment_body">
                                <h3>kidney diseases</h3>
                                <p>Chronic kidney disease (CKD) management, kidney function monitoring, and prevention of complications.</p>
                                <a href="{{ route('kidney.disease') }}" class="btn services_know_more_btn text-decoration-none">Read more</a>
                            </div>
                        </div>
                    </div>

                    <!-- Stroke -->
                    <div class="col-12 services_grid_col" data-aos="fade-up">
                        <div class="services_treatment_card" id="stroke">
                            <div class="services_treatment_img_wrap">
                                <figure class="mb-0">
                                    <img src="{{ asset('resources/assets/images/stroke.png') }}" alt="Stroke" class="img-fluid">
                                </figure>
                            </div>
                            <div class="services_treatment_body">
                                <h3>Stroke</h3>
                                <p>Acute stroke care, post-stroke management, and rehabilitation support to regain function.</p>
                                <a href="{{ route('stroke') }}" class="btn services_know_more_btn text-decoration-none">Read more</a>
                            </div>
                        </div>
                    </div>

                    <!-- Critical Illness -->
                    <div class="col-12 services_grid_col" data-aos="fade-up">
                        <div class="services_treatment_card" id="critical-illness">
                            <div class="services_treatment_img_wrap">
                                <figure class="mb-0">
                                    <img src="{{ asset('resources/assets/images/critical-care-s.png') }}" alt="Critical Illness" class="img-fluid">
                                </figure>
                            </div>
                            <div class="services_treatment_body">
                                <h3>Critical Illness</h3>
                                <p>ICU-level clinical care and continuous monitoring for severe, life-threatening medical emergencies.</p>
                                <a href="{{ route('critical.illness') }}" class="btn services_know_more_btn text-decoration-none">Read more</a>
                            </div>
                        </div>
                    </div>

                    <!-- preventive health care -->
                    <div class="col-12 services_grid_col" data-aos="fade-up">
                        <div class="services_treatment_card" id="preventive-health">
                            <div class="services_treatment_img_wrap">
                                <figure class="mb-0">
                                    <img src="{{ asset('resources/assets/images/preventive-health-care.png') }}" alt="preventive health care" class="img-fluid">
                                </figure>
                            </div>
                            <div class="services_treatment_body">
                                <h3 class="text-capitalize">preventive health care</h3>
                                <p>Personalized preventive health checks, vaccinations, health screenings, and early risk detection.</p>
                                <a href="{{ route('preventive.health') }}" class="btn services_know_more_btn text-decoration-none">Read more</a>
                            </div>
                        </div>
                    </div>

                    <!-- wellness and lifestyle management -->
                    <div class="col-12 services_grid_col" data-aos="fade-up">
                        <div class="services_treatment_card" id="wellness-lifestyle">
                            <div class="services_treatment_img_wrap">
                                <figure class="mb-0">
                                    <img src="{{ asset('resources/assets/images/wellness-and-lifestyle.png') }}" alt="wellness and lifestyle management" class="img-fluid">
                                </figure>
                            </div>
                            <div class="services_treatment_body">
                                <h3 class="text-capitalize">wellness and lifestyle management</h3>
                                <p>Personalized plans for nutrition, physical activity, weight management, and stress reduction.</p>
                                <a href="{{ route('wellness.lifestyle.management') }}" class="btn services_know_more_btn text-decoration-none">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BOOK APPOINTMENT -->
<section class="subscribe_section" id="contact">
    <div class="container">
        <div class="subscribe_background_image">
            <div class="row">
                <div class="col-12" data-aos="fade-right">
                    <div class="subscribe_content text-center">
                        <h2>Your health deserves expert attention and timely care.</h2>
                        <p>Consult Dr. Rahul B. Varma for personalized care. Schedule your appointment now.</p>
                        <a href="{{ route('contact') }}" class="text-decoration-none"><button type="button" name="btnsubmit" id="submitbutton">Book Appointment</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection