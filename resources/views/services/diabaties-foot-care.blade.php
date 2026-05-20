@php($title = 'Diabetic Foot Care | Dr. Rahul B Varma | Physician & Diabetologist - Navi Mumbai')
@section('meta_desc')
Dr. Rahul B. Varma offers evidence-based care for diabetic foot conditions in Navi Mumbai. Prevention, early diagnosis, and effective treatment of foot ulcers, infections, and complications.
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
                        <h1 data-aos="fade-up">Diabetic Foot Care</h1>
                        {{-- <p data-aos="fade-right">Expert diabetes management and specialized foot care</p> --}}
                        <!-- <div class="btn_wrapper" data-aos="fade-up">
                            <a class="text-decoration-none" href="{{ route('home') }}"><span class="sub_home_span">Home</span><i class="fa-solid fa-arrow-right"></i><span class="sub_span">Diabetes & Diabetic Foot Care</span></a>
                        </div> -->
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
                        {{-- <span class="services_section_label d-inline-block mb-2">Our Service</span> --}}
                        {{-- <h2 class="service-single-title"> Diabetic Foot Care</h2> --}}
                        {{-- <div class="services_section_underline service_underline mb-0"></div> --}}
                    </header>
                    <figure class="service-single-figure service-single-figure-sized mb-4" data-aos="fade-up" style="border-radius: 50px 0 !important;">
                        <img src="{{ asset('resources/assets/images/footcare.png') }}" alt="Diabetic Foot Care" class="img-fluid">
                    </figure>
                    <div class="service-single-body" data-aos="fade-up">
                        <p class="service-single-text">Diabetic foot problems are a common complication of diabetes caused by nerve damage and poor blood circulation in the feet. Patients may experience numbness, tingling, pain, dryness, swelling, wounds, or infections that heal slowly. If not treated on time, even small cuts or blisters can develop into serious ulcers and increase the risk of severe infections. From a doctor’s point of view, maintaining proper blood sugar levels, regular foot examinations, daily foot hygiene, and early treatment of wounds are important to prevent long-term complications and protect overall foot health.</p>
                        <p class="service-single-text">Dr. Rahul B. Varma offers evidence-based care for diabetic foot conditions with a focus on prevention, early diagnosis, and effective treatment. With fellowship training in Diabetes and extensive experience, we help patients reduce the risk of foot ulcers, infections, and diabetic complications through regular assessments and personalized treatment plans.</p>
                        <ul class="service-single-list list-unstyled">
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Diabetic foot examination & risk assessment</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Nerve sensation & blood circulation testing</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Foot ulcer & wound care management</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Infection prevention & treatment</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Corn, callus & nail care guidance</li>
                            <li><i class="fa-solid fa-check" aria-hidden="true"></i> Blood sugar control for better healing</li>
                        </ul>
                        <a href="{{ route('contact') }}" class="btn services_sidebar_btn text-decoration-none ">Book Appointment</a>
                    </div>
                </div>
            </div>
            <!-- Right sidebar: all services nav -->
            <div class="col-lg-4 col-md-12 order-2 order-lg-2 services_sidebar_col">
                @include('partials.services-sidebar', ['active' => 'diabetes'])
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
                        <h2>Take Control of Your Diabetes & Foot Health Today.</h2>
                        <p>Consult Dr. Rahul B. Varma for personalized diabetes and foot care. Schedule your appointment now.</p>
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