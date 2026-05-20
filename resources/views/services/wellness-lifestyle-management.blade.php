@php($title = 'Wellness and Lifestyle Management | Dr. Rahul B Varma | Physician & Diabetologist - Navi Mumbai')
@section('meta_desc')
Dr. Rahul B. Varma provides personalized guidance for wellness and lifestyle management in Navi Mumbai. Nutrition, exercise, stress management, and prevention.
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
                        <h1 data-aos="fade-up">Wellness and Lifestyle Management</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- SERVICE CONTENT: title at top, then image, then content (sidebar on right) -->
<section class="services_page_section services_grid_section service-single-section wellness-lifestyle-management-section">
    <div class="container">
        <div class="row services_page_row align-items-start">
            <!-- Main content: stacked layout -->
            <div class="col-lg-8 col-md-12 order-1 order-lg-1 services_content_col">
                <div class="service-single-content service-single-stacked">
                    <header class="service-single-header" data-aos="fade-up">
                    </header>
                    <figure class="service-single-figure service-single-figure-sized mb-4" data-aos="fade-up" style="border-radius: 50px 0 !important;">
                        <img src="{{ asset('resources/assets/images/wellness-and-lifestyle.png') }}" alt="Wellness and Lifestyle Management" class="img-fluid">
                    </figure>
                    <div class="service-single-body" data-aos="fade-up">
                        <p class="service-single-text">Maintaining a healthy lifestyle is crucial for preventing diseases and promoting overall well-being. Proper nutrition, physical activity, stress management, and regular health monitoring are essential for long-term health.</p>
                        <p class="service-single-text">Dr. Rahul B. Varma provides personalized guidance for wellness and lifestyle management. We help patients improve energy, prevent lifestyle diseases, and maintain overall health through evidence-based strategies.</p>
                        <ul class="service-single-list list-unstyled">
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Nutrition & diet counselling</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Physical activity & exercise planning</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Stress management & mental well-being</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Preventive health monitoring</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Personalized lifestyle guidance</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="btn services_sidebar_btn text-decoration-none ">Book Appointment</a>
                    </div>
                </div>
            </div>
            <!-- Right sidebar: all services nav -->
            <div class="col-lg-4 col-md-12 order-2 order-lg-2 services_sidebar_col">
                @include('partials.services-sidebar', ['active' => 'wellness-lifestyle-management'])
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
                        <h2>Your health deserves expert attention and timely care.</h2>
                        <p>Consult Dr. Rahul B. Varma for wellness and lifestyle management. Schedule your appointment now.</p>
                        <a href="{{ route('contact') }}" class="text-decoration-none"><button type="button" name="btnsubmit" id="submitbutton">Book Appointment</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection