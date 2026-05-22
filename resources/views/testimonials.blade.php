@php($title = 'Testimonials for Dr. Rahul B Varma, Physician & Diabetologist - Navi Mumbai')
@section('meta_desc')
Patient reviews and testimonials for Dr. Rahul B. Varma - Consultant Physician, Intensivist & Diabetologist at Bharti Multispeciality Hospital, Ulwe, Navi Mumbai.
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
                        <h1 data-aos="fade-up">Testimonials</h1>
                        {{-- <p data-aos="fade-right">What our patients say about us</p> --}}
                        <!-- <div class="btn_wrapper" data-aos="fade-up">
                            <a class="text-decoration-none" href="{{ route('home') }}"><span class="sub_home_span">Home</span><i class="fa-solid fa-arrow-right"></i><span class="sub_span">Testimonials</span></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- TESTIMONIALS SECTION -->
<section class="testimonials_page_section">
    <div class="container">
        <!-- <div class="testimonials_page_header text-center">
            <h4 class="testimonials_page_label"><span>.........</span> Reviews <span>.........</span></h4>
            <h2 class="testimonials_page_heading">What <span>Patient's</span> Says</h2>
            <div class="services_section_underline"></div>
        </div> -->

        <div class="row testimonials_page_row">
            <div class="col-lg-6 col-md-12 testimonials_page_col mb-4" data-aos="fade-up">
                <article class="testimonial_card_new">
                    <div class="testimonial_card_new_accent"></div>
                    <div class="testimonial_card_new_body">
                        <i class="fa-solid fa-quote-left testimonial_card_new_quote" aria-hidden="true"></i>
                        <div class="testimonial_card_new_header">
                            <figure class="mb-0"><img src="{{ asset('resources/assets/images/google-icon.png') }}" alt="Google Review" class="google-icon"></figure>
                            <div class="testimonial_card_new_meta">
                                <p class="testimonial_person_name mb-0">Anmol Patel</p>
                                <img src="{{ asset('resources/assets/images/star.png') }}" alt="5 Stars" class="star-icon">
                            </div>
                        </div>
                        <p class="testimonial_card_new_text">I recently visited Bharti Multi-Speciality Hospital for a family emergency and had a very positive experience. Living in Ulwe, it is a relief to have a reliable hospital nearby.What I Liked:
The Doctors: Dr. Rahul Varma is exceptional. He is very patient, listens carefully, and doesn’t rush into unnecessary tests. <a href="https://www.google.com/maps/place/Dr+Rahul+Varma+-+Diabetes+Specialist,+Thyroid+Doctor+Ulwe,+General+Physician+in+Ulwe,+Best+Diabetologist+in+Ulwe,+Navi+Mumbai/@18.9803584,73.0229347,17z/data=!3m1!5s0x3be7c33da163bf25:0xd61a745e54871843!4m8!3m7!1s0x3be7c3b7e93c4947:0x6564fb70c7c716ab!8m2!3d18.9803584!4d73.0251234!9m1!1b1!16s%2Fg%2F11rj3v1gpq?entry=ttu" class="testimonial_more_link" target="_blank" rel="noopener noreferrer">More...</a></p>
                    </div>
                </article>
            </div>

            <div class="col-lg-6 col-md-12 testimonials_page_col mb-4" data-aos="fade-up">
                <article class="testimonial_card_new">
                    <div class="testimonial_card_new_accent"></div>
                    <div class="testimonial_card_new_body">
                        <i class="fa-solid fa-quote-left testimonial_card_new_quote" aria-hidden="true"></i>
                        <div class="testimonial_card_new_header">
                            <figure class="mb-0"><img src="{{ asset('resources/assets/images/google-icon.png') }}" alt="Google Review" class="google-icon"></figure>
                            <div class="testimonial_card_new_meta">
                                <p class="testimonial_person_name mb-0">Preeti Dhillon</p>
                                <img src="{{ asset('resources/assets/images/star.png') }}" alt="5 Stars" class="star-icon">
                            </div>
                        </div>
                        <p class="testimonial_card_new_text">I have visited Dr. Rahul Varma several times for myself and my family. He is caring, friendly, and very approachable. His diagnosis is accurate, and the treatment has always been effective. I highly recommend Dr. Rahul Varma and Bharti Hospital, Ulwe, for quality healthcare.</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-6 col-md-12 testimonials_page_col mb-4" data-aos="fade-up">
                <article class="testimonial_card_new">
                    <div class="testimonial_card_new_accent"></div>
                    <div class="testimonial_card_new_body">
                        <i class="fa-solid fa-quote-left testimonial_card_new_quote" aria-hidden="true"></i>
                        <div class="testimonial_card_new_header">
                            <figure class="mb-0"><img src="{{ asset('resources/assets/images/google-icon.png') }}" alt="Google Review" class="google-icon"></figure>
                            <div class="testimonial_card_new_meta">
                                <p class="testimonial_person_name mb-0">Kush Chavhan</p>
                                <img src="{{ asset('resources/assets/images/star.png') }}" alt="5 Stars" class="star-icon">
                            </div>
                        </div>
                        <p class="testimonial_card_new_text">Dr Rahul Varma is a very good diabetologist. He provided good hospital care, and the support from Dr. Kajal and the team was also very good.</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-6 col-md-12 testimonials_page_col mb-4" data-aos="fade-up">
                <article class="testimonial_card_new">
                    <div class="testimonial_card_new_accent"></div>
                    <div class="testimonial_card_new_body">
                        <i class="fa-solid fa-quote-left testimonial_card_new_quote" aria-hidden="true"></i>
                        <div class="testimonial_card_new_header">
                            <figure class="mb-0"><img src="{{ asset('resources/assets/images/google-icon.png') }}" alt="Google Review" class="google-icon"></figure>
                            <div class="testimonial_card_new_meta">
                                <p class="testimonial_person_name mb-0">Prince</p>
                                <img src="{{ asset('resources/assets/images/star.png') }}" alt="5 Stars" class="star-icon">
                            </div>
                        </div>
                        <p class="testimonial_card_new_text">Had a really good experience at Dr. Rahul Varma's clinic. The doctor is very knowledgeable and takes time to explain things properly. The staff is super nice too, especially at reception. The whole team here does a great job.</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-6 col-md-12 testimonials_page_col mb-4" data-aos="fade-up">
                <article class="testimonial_card_new">
                    <div class="testimonial_card_new_accent"></div>
                    <div class="testimonial_card_new_body">
                        <i class="fa-solid fa-quote-left testimonial_card_new_quote" aria-hidden="true"></i>
                        <div class="testimonial_card_new_header">
                            <figure class="mb-0"><img src="{{ asset('resources/assets/images/google-icon.png') }}" alt="Google Review" class="google-icon"></figure>
                            <div class="testimonial_card_new_meta">
                                <p class="testimonial_person_name mb-0">Reena Choudhury</p>
                                <img src="{{ asset('resources/assets/images/star.png') }}" alt="5 Stars" class="star-icon">
                            </div>
                        </div>
                        <p class="testimonial_card_new_text">The doctor is very kind and professional. He listened patiently and explained everything clearly. Very satisfied with the consultation. Thank you, Dr. Rahul Varma.</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-6 col-md-12 testimonials_page_col mb-4" data-aos="fade-up">
                <article class="testimonial_card_new">
                    <div class="testimonial_card_new_accent"></div>
                    <div class="testimonial_card_new_body">
                        <i class="fa-solid fa-quote-left testimonial_card_new_quote" aria-hidden="true"></i>
                        <div class="testimonial_card_new_header">
                            <figure class="mb-0"><img src="{{ asset('resources/assets/images/google-icon.png') }}" alt="Google Review" class="google-icon"></figure>
                            <div class="testimonial_card_new_meta">
                                <p class="testimonial_person_name mb-0">Rahul Badwaik</p>
                                <img src="{{ asset('resources/assets/images/star.png') }}" alt="5 Stars" class="star-icon">
                            </div>
                        </div>
                        <p class="testimonial_card_new_text">Dr Rahul Varma is very friendly, polite, and helpful. He clearly explains the treatment and makes patients feel comfortable.</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-6 col-md-12 testimonials_page_col mb-4" data-aos="fade-up">
                <article class="testimonial_card_new">
                    <div class="testimonial_card_new_accent"></div>
                    <div class="testimonial_card_new_body">
                        <i class="fa-solid fa-quote-left testimonial_card_new_quote" aria-hidden="true"></i>
                        <div class="testimonial_card_new_header">
                            <figure class="mb-0"><img src="{{ asset('resources/assets/images/google-icon.png') }}" alt="Google Review" class="google-icon"></figure>
                            <div class="testimonial_card_new_meta">
                                <p class="testimonial_person_name mb-0">Sara Khan</p>
                                <img src="{{ asset('resources/assets/images/star.png') }}" alt="5 Stars" class="star-icon">
                            </div>
                        </div>
                        <p class="testimonial_card_new_text">My mother has been diabetic for over 7 years, and despite consulting many doctors, her sugar levels were never under control. Only Dr. Rahul Varma managed to stabilize her diabetes. He and his staff treat her with great kindness and patience, and he always greets us with a smile.</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-6 col-md-12 testimonials_page_col mb-4" data-aos="fade-up">
                <article class="testimonial_card_new">
                    <div class="testimonial_card_new_accent"></div>
                    <div class="testimonial_card_new_body">
                        <i class="fa-solid fa-quote-left testimonial_card_new_quote" aria-hidden="true"></i>
                        <div class="testimonial_card_new_header">
                            <figure class="mb-0"><img src="{{ asset('resources/assets/images/google-icon.png') }}" alt="Google Review" class="google-icon"></figure>
                            <div class="testimonial_card_new_meta">
                                <p class="testimonial_person_name mb-0">Mandar Mhatre</p>
                                <img src="{{ asset('resources/assets/images/star.png') }}" alt="5 Stars" class="star-icon">
                            </div>
                        </div>
                        <p class="testimonial_card_new_text">I visited Bharati Hospital last month for consultation. The overall experience was very good, especially with Dr. Rahul sir. The staff was also very helpful.</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-6 col-md-12 testimonials_page_col mb-4" data-aos="fade-up">
                <article class="testimonial_card_new">
                    <div class="testimonial_card_new_accent"></div>
                    <div class="testimonial_card_new_body">
                        <i class="fa-solid fa-quote-left testimonial_card_new_quote" aria-hidden="true"></i>
                        <div class="testimonial_card_new_header">
                            <figure class="mb-0"><img src="{{ asset('resources/assets/images/google-icon.png') }}" alt="Google Review" class="google-icon"></figure>
                            <div class="testimonial_card_new_meta">
                                <p class="testimonial_person_name mb-0">Aadarsh Gupta</p>
                                <img src="{{ asset('resources/assets/images/star.png') }}" alt="5 Stars" class="star-icon">
                            </div>
                        </div>
                        <p class="testimonial_card_new_text">Rahul sir is great. I have never seen such a doctor. His experience and the way he talks with patients makes half of the illness go away and makes the patient feel very happy. Thank you, Rahul sir.</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-6 col-md-12 testimonials_page_col mb-4" data-aos="fade-up">
                <article class="testimonial_card_new">
                    <div class="testimonial_card_new_accent"></div>
                    <div class="testimonial_card_new_body">
                        <i class="fa-solid fa-quote-left testimonial_card_new_quote" aria-hidden="true"></i>
                        <div class="testimonial_card_new_header">
                            <figure class="mb-0"><img src="{{ asset('resources/assets/images/google-icon.png') }}" alt="Google Review" class="google-icon"></figure>
                            <div class="testimonial_card_new_meta">
                                <p class="testimonial_person_name mb-0">Amit K</p>
                                <img src="{{ asset('resources/assets/images/star.png') }}" alt="5 Stars" class="star-icon">
                            </div>
                        </div>
                        <p class="testimonial_card_new_text">I am grateful for the excellent care I received. Dr. Rahul Varma is a very knowledgeable and experienced doctor. Also, all staff is very professional. I recommend this doctor.</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-6 col-md-12 testimonials_page_col mb-4" data-aos="fade-up">
                <article class="testimonial_card_new">
                    <div class="testimonial_card_new_accent"></div>
                    <div class="testimonial_card_new_body">
                        <i class="fa-solid fa-quote-left testimonial_card_new_quote" aria-hidden="true"></i>
                        <div class="testimonial_card_new_header">
                            <figure class="mb-0"><img src="{{ asset('resources/assets/images/google-icon.png') }}" alt="Google Review" class="google-icon"></figure>
                            <div class="testimonial_card_new_meta">
                                <p class="testimonial_person_name mb-0">


Swapnil Lokhande</p>
                                <img src="{{ asset('resources/assets/images/star.png') }}" alt="5 Stars" class="star-icon">
                            </div>
                        </div>
                        <p class="testimonial_card_new_text">Dr. Rahul is an exceptional professional who combines expertise with a genuinely kind and approachable demeanor. He explained every step of the process with patience and clarity, making sure I felt comfortable and informed throughout.</p>
                    </div>
                </article>
            </div>

            <div class="col-lg-6 col-md-12 testimonials_page_col mb-4" data-aos="fade-up">
                <article class="testimonial_card_new">
                    <div class="testimonial_card_new_accent"></div>
                    <div class="testimonial_card_new_body">
                        <i class="fa-solid fa-quote-left testimonial_card_new_quote" aria-hidden="true"></i>
                        <div class="testimonial_card_new_header">
                            <figure class="mb-0"><img src="{{ asset('resources/assets/images/google-icon.png') }}" alt="Google Review" class="google-icon"></figure>
                            <div class="testimonial_card_new_meta">
                                <p class="testimonial_person_name mb-0">


Kirtikumar Ranmale</p>
                                <img src="{{ asset('resources/assets/images/star.png') }}" alt="5 Stars" class="star-icon">
                            </div>
                        </div>
                        <p class="testimonial_card_new_text">Dr Rahul sir is the best and provided exceptional care. Thanks to his treatment, my pain has significantly improved, and I am finally able to go about my daily activities without discomfort. He made my experience truly positive.</p>
                    </div>
                </article>
            </div>
        </div>

        <div class="testimonials_page_cta text-center pt-2">
            <a href="https://www.google.com/maps/place/Dr+Rahul+Varma+-+Diabetes+Specialist,+Thyroid+Doctor+Ulwe,+General+Physician+in+Ulwe,+Best+Diabetologist+in+Ulwe,+Navi+Mumbai/@18.9803584,73.0229347,17z/data=!3m1!5s0x3be7c33da163bf25:0xd61a745e54871843!4m8!3m7!1s0x3be7c3b7e93c4947:0x6564fb70c7c716ab!8m2!3d18.9803584!4d73.0251234!9m1!1b1!16s%2Fg%2F11rj3v1gpq?entry=ttu" class="btn testimonial_view_all_btn text-decoration-none" target="_blank" rel="noopener noreferrer"><span>View All</span> <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
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

