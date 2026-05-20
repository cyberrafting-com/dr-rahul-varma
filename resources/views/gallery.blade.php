@php($title = 'Gallery | Dr. Rahul B Varma | Physician & Diabetologist - Navi Mumbai')
@section('meta_desc')
Gallery of Dr. Rahul B. Varma - Consultant Physician, Intensivist & Diabetologist. Bharti Multispeciality Hospital, Ulwe, Navi Mumbai.
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
                        <h1 data-aos="fade-up">Gallery</h1>
                        {{-- <p data-aos="fade-right">Hospital Images</p> --}}
                        <!-- <div class="btn_wrapper" data-aos="fade-up">
                            <a class="text-decoration-none" href="{{ route('home') }}"><span class="sub_home_span">Home</span><i class="fa-solid fa-arrow-right"></i><span class="sub_span">Gallery</span></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- GALLERY SECTION -->
<section class="gallery_section">
    <div class="container">
       
        <div class="row gallery_grid">
            <div class="col-lg-4 col-md-6 col-12 gallery_col" data-aos="fade-up">
                <a href="{{ asset('resources/assets/images/gallery1.jpeg') }}" class="gallery_item magnific-popup-link">
                    <figure class="mb-0">
                        <img src="{{ asset('resources/assets/images/gallery1.jpeg') }}" alt="Dr. Rahul B. Varma" class="img-fluid">
                    </figure>
                    <span class="gallery_item_overlay"><i class="fa-solid fa-search-plus" aria-hidden="true"></i></span>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12 gallery_col" data-aos="fade-up">
                <a href="{{ asset('resources/assets/images/gallery3.jpeg') }}" class="gallery_item magnific-popup-link">
                    <figure class="mb-0">
                        <img src="{{ asset('resources/assets/images/gallery3.jpeg') }}" alt="Diabetes Care" class="img-fluid">
                    </figure>
                    <span class="gallery_item_overlay"><i class="fa-solid fa-search-plus" aria-hidden="true"></i></span>
                </a>
            </div>
           
            <div class="col-lg-4 col-md-6 col-12 gallery_col" data-aos="fade-up">
                <a href="{{ asset('resources/assets/images/gallery4.jpeg') }}" class="gallery_item magnific-popup-link">
                    <figure class="mb-0">
                        <img src="{{ asset('resources/assets/images/gallery4.jpeg') }}" alt="Stroke Care" class="img-fluid">
                    </figure>
                    <span class="gallery_item_overlay"><i class="fa-solid fa-search-plus" aria-hidden="true"></i></span>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12 gallery_col" data-aos="fade-up">
                <a href="{{ asset('resources/assets/images/gallery5.jpeg') }}" class="gallery_item magnific-popup-link">
                    <figure class="mb-0">
                        <img src="{{ asset('resources/assets/images/gallery5.jpeg') }}" alt="General Medicine" class="img-fluid">
                    </figure>
                    <span class="gallery_item_overlay"><i class="fa-solid fa-search-plus" aria-hidden="true"></i></span>
                </a>
            </div>
           
              <div class="col-lg-4 col-md-6 col-12 gallery_col" data-aos="fade-up">
                <a href="{{ asset('resources/assets/images/gallery7.jpg') }}" class="gallery_item magnific-popup-link">
                    <figure class="mb-0">
                        <img src="{{ asset('resources/assets/images/gallery7.jpg') }}" alt="Consultation Room" class="img-fluid">
                    </figure>
                    <span class="gallery_item_overlay"><i class="fa-solid fa-search-plus" aria-hidden="true"></i></span>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 col-12 gallery_col" data-aos="fade-up">
                <a href="{{ asset('resources/assets/images/gallery9.jpg') }}" class="gallery_item magnific-popup-link">
                    <figure class="mb-0">
                        <img src="{{ asset('resources/assets/images/gallery9.jpg') }}" alt="Hospital Facilities" class="img-fluid">
                    </figure>
                    <span class="gallery_item_overlay"><i class="fa-solid fa-search-plus" aria-hidden="true"></i></span>
                </a>
            </div>
             <div class="col-lg-4 col-md-6 col-12 gallery_col" data-aos="fade-up">
                <a href="{{ asset('resources/assets/images/gallery2.jpeg') }}" class="gallery_item magnific-popup-link">
                    <figure class="mb-0">
                        <img src="{{ asset('resources/assets/images/gallery2.jpeg') }}" alt="Heart Care" class="img-fluid">
                    </figure>
                    <span class="gallery_item_overlay"><i class="fa-solid fa-search-plus" aria-hidden="true"></i></span>
                </a>
            </div>
        </div>
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
