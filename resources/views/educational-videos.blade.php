@php($title = 'Educational Videos | Dr. Rahul B Varma | Physician & Diabetologist - Navi Mumbai')
@section('meta_desc')
Watch educational health videos by Dr. Rahul B. Varma - Consultant Physician, Intensivist & Diabetologist. Bharti Multispeciality Hospital, Ulwe, Navi Mumbai.
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
                        <h1 data-aos="fade-up">Educational Videos</h1>
                        {{-- <p data-aos="fade-right">Watch & learn how to manage your health</p> --}}
                        <!-- <div class="btn_wrapper" data-aos="fade-up">
                            <a class="text-decoration-none" href="{{ route('home') }}"><span class="sub_home_span">Home</span><i class="fa-solid fa-arrow-right"></i><span class="sub_span">Educational Videos</span></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- EDUCATIONAL VIDEOS PAGE SECTION -->
<section class="educational_videos_section educational_videos_page_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- <header class="gallery_section_header educational_videos_page_header">
                    <span class="services_section_label">Watch & Learn</span>
                    <h2 class="services_section_heading">Educational Videos</h2>
                    <div class="services_section_underline"></div>
                    <p class="gallery_section_intro">Expert health tips and patient education from Dr. Rahul B. Varma. Learn about diabetes care, lifestyle, and wellness.</p>
                </header> -->
            </div>
        </div>
        <div class="row g-4 justify-content-center" data-aos="fade-up">
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="educational_video_box">
                    <div class="video_wrapper">
                        <iframe src="https://www.youtube.com/embed/nf_aolphmzA" title="Educational Video 1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                <div class="educational_video_box">
                    <div class="video_wrapper">
                        <iframe src="https://www.youtube.com/embed/cxX3IRIGgpo" title="Educational Video 2" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
           
        </div>
        {{-- <div class="row mt-4">
            <div class="col-12 text-center" data-aos="fade-up">
                <a href="{{ route('educational.videos') }}" class="btn btn-view-more text-decoration-none">View More</a>
            </div>
        </div> --}}
    </div>
</section>

<!-- CTA SECTION -->
<section class="subscribe_section" id="contact">
    <div class="container">
        <div class="subscribe_background_image">
            <div class="row">
                <div class="col-12" data-aos="fade-right">
                    <div class="subscribe_content text-center">
                        <h2>Your health deserves expert attention and timely care.</h2>
                        <p>Consult Dr. Rahul B. Varma. Schedule your appointment now.</p>
                        <a href="{{ route('contact') }}" class="text-decoration-none"><button type="button" name="btnsubmit" id="submitbutton">Book Appointment</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

