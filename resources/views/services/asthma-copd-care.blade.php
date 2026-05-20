@php($title = 'Asthma & COPD Care | Dr. Rahul B Varma | Physician & Diabetologist - Navi Mumbai')
@section('meta_desc')
Dr. Rahul B. Varma offers expert management of asthma and COPD in Navi Mumbai. Inhaler optimization, exacerbation prevention, and pulmonary rehabilitation for better breathing and quality of life.
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
                        <h1 data-aos="fade-up">Asthma & COPD Care</h1>
                        {{-- <p data-aos="fade-right">Expert respiratory care for better breathing</p> --}}
                        <!-- <div class="btn_wrapper" data-aos="fade-up">
                            <a class="text-decoration-none" href="{{ route('home') }}"><span class="sub_home_span">Home</span><i class="fa-solid fa-arrow-right"></i><span class="sub_span">Asthma & COPD Care</span></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="services_page_section services_grid_section service-single-section asthma-copd-care-section">
    <div class="container">
        <div class="row services_page_row align-items-start">
            <div class="col-lg-8 col-md-12 order-1 order-lg-1 services_content_col">
                <div class="service-single-content service-single-stacked">
                    <header class="service-single-header" data-aos="fade-up">
                        {{-- <span class="services_section_label d-inline-block mb-2">Our Service</span> --}}
                        {{-- <h2 class="service-single-title">Asthma & COPD Care</h2> --}}
                        {{-- <div class="services_section_underline service_underline  mb-0"></div> --}}
                    </header>
                    <figure class="service-single-figure service-single-figure-sized mb-4" data-aos="fade-up" style="border-radius: 50px 0 !important;">
                        <img src="{{ asset('resources/assets/images/astama.png') }}" alt="Asthma & COPD Care" class="img-fluid">
                    </figure>
                    <div class="service-single-body" data-aos="fade-up">
                        <p class="service-single-text">Asthma and Chronic Obstructive Pulmonary Disease (COPD) are long-term lung conditions that cause breathing difficulty, coughing, and wheezing. These conditions can worsen without proper treatment and trigger sudden attacks. As doctors, we focus on accurate diagnosis, inhaler therapy, trigger control, and regular follow-ups to help patients breathe comfortably and maintain daily activity levels.</p>
                        <p class="service-single-text">Dr. Rahul B. Varma provides comprehensive respiratory care. We help you achieve better control of asthma and COPD through correct inhaler use, action plans, and regular monitoring.</p>
                        <ul class="service-single-list list-unstyled">
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Asthma & COPD assessment</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Inhaler technique & optimization</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Exacerbation prevention plans</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Pulmonary function monitoring</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Lifestyle & vaccination advice</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="btn services_sidebar_btn text-decoration-none mt-3">Book Appointment</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-2 order-lg-2 services_sidebar_col">
                @include('partials.services-sidebar', ['active' => 'asthma-copd'])
            </div>
        </div>
    </div>
</section>
<section class="subscribe_section" id="contact">
    <div class="container">
        <div class="subscribe_background_image">
            <div class="row">
                <div class="col-12" data-aos="fade-right">
                    <div class="subscribe_content text-center">
                        <h2>Breathe Easy with Expert Asthma and COPD Care</h2>
                        <p>Consult Dr. Rahul B. Varma for asthma and COPD care. Schedule your appointment now.</p>
                        <a href="{{ route('contact') }}" class="text-decoration-none"><button type="button" name="btnsubmit" id="submitbutton">Book Appointment</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection