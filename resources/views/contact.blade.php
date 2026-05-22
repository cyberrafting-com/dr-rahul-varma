@php($title = 'Contact Dr. Rahul B Varma | Physician & Diabetologist Navi Mumbai')
@section('meta_desc')
Contact Dr. Rahul B. Varma - Consultant Physician, Intensivist & Diabetologist. Bharti Multispeciality Hospital, Ulwe, Navi Mumbai.
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
                        <h1 data-aos="fade-up">Contact Us</h1>
                        {{-- <p data-aos="fade-right">Get in touch with us</p> --}}
                        <!-- <div class="btn_wrapper" data-aos="fade-up">
                            <a class="text-decoration-none" href="{{ route('home') }}"><span class="sub_home_span">Home</span><i class="fa-solid fa-arrow-right"></i><span class="sub_span">Contact Us</span></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- MESSAGE SECTION (Appointment Form + Contact Info) -->
<section class="message_section">
    <div class="container">
        <div class="row">
            <div class="col-12" data-aos="fade-up">
                <div class="message_content text-center mb-4">
                    <!-- <span class="services_section_label">Get in Touch.</span>
                    <h2 class="services_section_heading">Book an Appointment</h2> -->
                    <!-- <p class="mb-0">Reach out for appointments or any queries. Use the form below to book appoinment with Dr. Rahul B. Varma.</p> -->
                </div>
            </div>
        </div>
        <div class="row g-4 contact_form_row" data-aos="fade-right">
            <div class="col-lg-7 col-md-7 col-sm-12 col-12 order-md-2">
                <div class="box box_padding mb-0 h-100">
                    <div class="box_image_content">
                        <figure class="mb-0">
                            <i class="fa-solid fa-location-dot box_icon" aria-hidden="true"></i>
                        </figure>
                    </div>
                    <div class="box_wrapper">
                        <h3 class="pb-3" >Bharti Multispecialty Hospital </h3>
                        <!-- <h4>Bharti Multispecialty Hospital</h4> -->
                        <p class="mb-0"><a href="https://maps.app.goo.gl/7tMaGWhgt7TaCs5dA" target="_blank" rel="noopener noreferrer" class="text-decoration-none">
                            1st Floor, Anmol Sankalp Apartment, <br>
                            Plot No - 59, Sector No - 5, <br>
                            Ulwe (West), Navi Mumbai, <br>
                            Maharashtra 410206
                        </a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12 order-md-1">
                <div class="row g-5 h-100">
                    <div class="col-12">
                        <div class="box mb-0">
                            <div class="box_image_content">
                                <figure class="mb-0">
                                    <i class="fa-solid fa-phone box_icon" aria-hidden="true"></i>
                                </figure>
                            </div>
                            <div class="box_wrapper">
                                <h3>Phone</h3>
                                <p class="mb-0"><a href="tel:+919967257207" class="text-decoration-none">+91 99672 57207</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="box mb-0">
                            <div class="box_image_content">
                                <figure class="mb-0">
                                    <i class="fa-solid fa-envelope box_icon" aria-hidden="true"></i>
                                </figure>
                            </div>
                            <div class="box_wrapper">
                                <h3>Email</h3>
                                <p class="mb-0"><a href="mailto:rahulvarma704@gmail.com" class="text-decoration-none">rahulvarma704@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MAP SECTION (Reach Us - small, centered) -->
<section class="contact_map_section ">
    <div class="container">
        <h3 class="contact_map_heading text-center">Reach Us</h3>
        <div class="contact_map_wrap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.8924103654695!2d73.0225431119464!3d18.98035838213033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c3b7e93c4947%3A0x6564fb70c7c716ab!2sDR%20RAHUL%20VARMA%20-%20Diabetes%20Specialist%2C%20Thyroid%20Doctor%20Ulwe%2C%20General%20Physician%20in%20Ulwe%2C%20Best%20Diabetologist%20in%20Navi%20Mumbai!5e0!3m2!1sen!2sin!4v1772081684913!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Dr. Rahul B Varma - Bharti Hospital, Ulwe, Navi Mumbai"></iframe>
        </div>
    </div>
</section>

<!-- CTA SECTION -->
<section class="subscribe_section">
    <div class="container">
        <div class="subscribe_background_image">
            <div class="row">
                <div class="col-12" data-aos="fade-right">
                    <div class="subscribe_content text-center">
                        <h2>Your health deserves expert attention and timely care.</h2>
                        <p>Consult Dr. Rahul B. Varma. Schedule your appointment now.</p>
                        <a href="tel:+919967257207" class="text-decoration-none"><button type="button" name="btnsubmit" id="submitbutton">Book Appointment</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
