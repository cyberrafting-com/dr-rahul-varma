@php($title = 'Stroke & Paralysis Management | Dr. Rahul B Varma | Physician & Diabetologist - Navi Mumbai')
@section('meta_desc')
Dr. Rahul B. Varma offers advanced treatment and rehabilitation for stroke and paralysis patients in Navi Mumbai. Acute care, recovery support, and long-term management to improve quality of life.
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
                        <h1 data-aos="fade-up">Stroke </h1>
                        {{-- <p data-aos="fade-right">Advanced treatment and rehabilitation for stroke patients</p> --}}
                        <!-- <div class="btn_wrapper" data-aos="fade-up">
                            <a class="text-decoration-none" href="{{ route('home') }}"><span class="sub_home_span">Home</span><i class="fa-solid fa-arrow-right"></i><span class="sub_span">Stroke & Paralysis Management</span></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="services_page_section services_grid_section service-single-section stroke-paralysis-section">
    <div class="container">
        <div class="row services_page_row align-items-start">
            <div class="col-lg-8 col-md-12 order-1 order-lg-1 services_content_col">
                <div class="service-single-content service-single-stacked">
                    <header class="service-single-header" data-aos="fade-up">
                        {{-- <span class="services_section_label d-inline-block mb-2">Our Service</span> --}}
                        {{-- <h2 class="service-single-title">Stroke & Paralysis Management</h2> --}}
                        {{-- <div class="services_section_underline service_underline mb-0"></div> --}}
                    </header>
                    <figure class="service-single-figure service-single-figure-sized mb-4" data-aos="fade-up" style="border-radius: 50px 0 !important;">
                        <img src="{{ asset('resources/assets/images/stroke.png') }}" alt="Stroke" class="img-fluid">
                    </figure>
                    <div class="service-single-body" data-aos="fade-up">
                        <p class="service-single-text">A stroke occurs when blood flow to the brain is interrupted, leading to sudden weakness, speech difficulty, or paralysis. Early treatment is critical to limit brain damage and improve recovery. Paralysis may result from stroke or nerve-related conditions and often requires long-term care. From a medical perspective, prompt emergency treatment, ongoing rehabilitation, physiotherapy, and careful management of risk factors are vital to help patients regain function and improve quality of life.</p>
                        <p class="service-single-text">Dr. Rahul B. Varma provides comprehensive care for stroke survivors and patients with paralysis. We focus on acute management, rehabilitation planning, and ongoing support to help you regain function and live independently.</p>
                        <ul class="service-single-list list-unstyled">
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Acute stroke assessment & management</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Rehabilitation planning & follow-up</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Medication for secondary prevention</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Paralysis care & mobility support</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Long-term quality of life support</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="btn services_sidebar_btn text-decoration-none ">Book Appointment</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 order-2 order-lg-2 services_sidebar_col">
                @include('partials.services-sidebar', ['active' => 'stroke'])
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
                        <h2>Your Health Deserves Expert Stroke and Paralysis Care</h2>
                        <p>Dr. Rahul B. Varma offers expert care for stroke recovery and paralysis management. Get personalized treatment to regain function and improve your quality of life.</p>
                        <a href="{{ route('contact') }}" class="text-decoration-none"><button type="button" name="btnsubmit" id="submitbutton">Book Appointment</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection