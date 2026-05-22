@php($title = 'Blood Pressure management in Navi Mumbai by Dr. Rahul B Varma, Physician & Diabetologist')
@section('meta_desc')
Dr. Rahul B. Varma offers evidence-based care for blood pressure management in Navi Mumbai. Optimal blood pressure control and reduction of heart and kidney complications.
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
                        <h1 data-aos="fade-up">Hypertension </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- SERVICE CONTENT: title at top, then image, then content (sidebar on right) -->
<section class="services_page_section services_grid_section service-single-section diabetes-foot-care-section">
    <div class="container">
        <div class="row services_page_row align-items-start">
            <!-- Main content: stacked layout -->
            <div class="col-lg-8 col-md-12 order-1 order-lg-1 services_content_col">
                <div class="service-single-content service-single-stacked">
                    <header class="service-single-header" data-aos="fade-up">
                    </header>
                    <figure class="service-single-figure service-single-figure-sized mb-4" data-aos="fade-up" style="border-radius: 50px 0 !important;">
                        <img src="{{ asset('resources/assets/images/hypertension-s.png') }}" alt="Blood Pressure Care" class="img-fluid">
                    </figure>
                    <div class="service-single-body" data-aos="fade-up">
                        <p class="service-single-text">High blood pressure (hypertension) is a common condition that affects the heart, blood vessels, and kidneys. If left unmanaged, it can increase the risk of heart attacks, strokes, kidney problems, and other serious complications. From a doctor’s point of view, regular blood pressure monitoring, timely medications, healthy diet, physical activity, and stress management are essential to maintain safe blood pressure levels and protect long-term cardiovascular health.</p>
                        <p class="service-single-text">Dr. Rahul B. Varma provides evidence-based care for blood pressure management. With extensive clinical experience, we help patients achieve optimal blood pressure control and reduce the risk of heart and kidney complications through personalized treatment plans and regular monitoring.</p>
                        <ul class="service-single-list list-unstyled">
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Blood pressure monitoring & risk assessment</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Medication & lifestyle management</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Diet & exercise counselling</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Prevention of heart, kidney & vascular complications</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Regular follow-up & personalized care</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="btn services_sidebar_btn text-decoration-none ">Book Appointment</a>
                    </div>
                </div>
            </div>
            <!-- Right sidebar: all services nav -->
            <div class="col-lg-4 col-md-12 order-2 order-lg-2 services_sidebar_col">
                @include('partials.services-sidebar', ['active' => 'blood.pressure'])
            </div>
        </div>
    </div>
</section>

<section class="subscribe_section" id="contact">
    <div class="container">
        <div class="subscribe_background_image">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" data-aos="fade-right">
                    <div class="subscribe_content text-center">
                        <h2>Take Control of Your Blood Pressure Today.</h2>
                        <p>Consult Dr. Rahul B. Varma for personalized blood pressure care. Schedule your appointment now.</p>
                        <div class="form-row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <a href="{{ route('contact') }}" class="text-decoration-none"><button type="button" name="btnsubmit" id="submitbutton">Book Appointment</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection