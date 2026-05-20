<header>
    <div class="main_header">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a class="navbar-brand text-decoration-none" href="{{ route('home') }}">
                    <div class="logo-text-container">
                        <span class="logo-text-name">Dr. Rahul Varma</span>
                        <div class="logo-text-divider"></div>
                        <span class="logo-text-subtitle">Consultant Physician,<br>Intensivist & Diabetologist</span>
                    </div>
                </a>
                <button class="navbar-toggler collapsed mobile-menu-toggler" type="button" aria-controls="mobileSidebar" aria-expanded="false" aria-label="Toggle navigation" id="mobileMenuToggler">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('about') }}">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" href="{{ route('services') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"> Services </a>
                            <div class="dropdown-menu drop-down-content">
                                <ul class="list-unstyled drop-down-pages">
                                    {{-- <li class="nav-item">
                                        <a class="dropdown-item nav-link" href="{{ route('services') }}">All Services</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="dropdown-item nav-link" href="{{ route('diabetes') }}">Diabetes</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item nav-link" href="{{ route('thyroid') }}">Thyroid</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item nav-link" href="{{ route('blood.pressure') }}">Hypertension</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item nav-link" href="{{ route('cardiac.disorder') }}">Cardiac Disorder</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item nav-link" href="{{ route('fever.infections') }}">Fever & Infection</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item nav-link" href="{{ route('lung.disorder') }}">Lung Disorder</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item nav-link" href="{{ route('kidney.disease') }}">Kidney Diseases</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item nav-link" href="{{ route('stroke') }}">Stroke</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item nav-link" href="{{ route('critical.illness') }}">Critical Illness</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item nav-link" href="{{ route('preventive.health') }}">Preventive Health Care</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item nav-link" href="{{ route('wellness.lifestyle.management') }}">Wellness and Lifestyle Management</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="dropdown-item nav-link" href="{{ route('home') }}">Lifestyle Disease Care</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item nav-link" href="{{ route('home') }}"> Insulin Guidance</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item nav-link" href="{{ route('home') }}">Sugar Monitoring</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item nav-link" href="{{ route('home') }}">Gestational Diabetes</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item nav-link" href="{{ route('diabetes.foot') }}">Diabetic Foot </a>
                        </li> -->
                    </ul>
                </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle dropdown-color navbar-text-color" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> Gallery </a>
                    <div class="dropdown-menu drop-down-content">
                        <ul class="list-unstyled drop-down-pages">
                            <li class="nav-item">
                                <a class="dropdown-item nav-link" href="{{ route('media') }}">Media</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item nav-link" href="{{ route('gallery') }}">Images</a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item nav-link" href="{{ route('educational.videos') }}">Educational Videos</a>
                            </li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('testimonials') }}">Testimonials</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                </li>
                {{-- button if required of contact us --}}
                {{-- <li class="nav-item">
                            <a class="nav-link contact_us" href="/contact">Contact Us</a>
                        </li> --}}
                </ul>
        </div>
        </nav>
    </div>
    </div>

    <!-- Mobile full-screen sidebar (single navbar for mobile) -->
    <div class="mobile-sidebar" id="mobileSidebar" aria-hidden="true">
        <div class="mobile-sidebar__inner">
            <div class="mobile-sidebar__header">
                <a href="{{ route('home') }}" class="mobile-sidebar__logo text-decoration-none">
                    <div class="logo-text-container">
                        <span class="logo-text-name">Dr. Rahul Varma</span>
                        <div class="logo-text-divider"></div>
                        <span class="logo-text-subtitle">Consultant Physician,<br>Intensivist & Diabetologist</span>
                    </div>
                </a>
                <button type="button" class="mobile-sidebar__close" id="mobileSidebarClose" aria-label="Close menu">
                    <i class="fa-solid fa-times" aria-hidden="true"></i>
                </button>
            </div>
            <!-- <div class="mobile-sidebar__cta">
                <a href="{{ route('contact') }}" class="mobile-sidebar__cta-btn">Book Appointment <i class="fa-solid fa-chevron-right"></i></a>
            </div> -->
            <nav class="mobile-sidebar__nav">
                <ul class="mobile-sidebar__list">
                    <li class="mobile-sidebar__item">
                        <a class="mobile-sidebar__link" href="{{ route('home') }}"><i class="fa-solid fa-house mobile-sidebar__icon" aria-hidden="true"></i> Home</a>
                    </li>
                    <li class="mobile-sidebar__item">
                        <a class="mobile-sidebar__link" href="{{ route('about') }}"><i class="fa-solid fa-user-doctor mobile-sidebar__icon" aria-hidden="true"></i> About Us</a>
                    </li>
                    <li class="mobile-sidebar__item mobile-sidebar__item--has-sub">
                        <div class="mobile-sidebar__link-row">
                            <a class="mobile-sidebar__link" href="{{ route('services') }}"><i class="fa-solid fa-stethoscope mobile-sidebar__icon" aria-hidden="true"></i> Services</a>
                            <button type="button" class="mobile-sidebar__expand" aria-label="Expand Services" data-sub="services-sub"><i class="fa-solid fa-plus" aria-hidden="true"></i></button>
                        </div>
                        <ul class="mobile-sidebar__sublist" id="services-sub">
                            <li><a href="{{ route('diabetes.foot') }}"><i class="fa-solid fa-chevron-right mobile-sidebar__subicon" aria-hidden="true"></i> Diabetes & Diabetic Foot Care</a></li>
                            <li><a href="{{ route('hypertension.heart') }}"><i class="fa-solid fa-chevron-right mobile-sidebar__subicon" aria-hidden="true"></i> Hypertension & Heart Conditions</a></li>
                            <li><a href="{{ route('stroke') }}"><i class="fa-solid fa-chevron-right mobile-sidebar__subicon" aria-hidden="true"></i> Stroke & Paralysis Management</a></li>
                            <li><a href="{{ route('fever.infections') }}"><i class="fa-solid fa-chevron-right mobile-sidebar__subicon" aria-hidden="true"></i> Fever, Infections & General Medicine</a></li>
                            <li><a href="{{ route('kidney.disease') }}"><i class="fa-solid fa-chevron-right mobile-sidebar__subicon" aria-hidden="true"></i> Kidney Disease Care</a></li>
                            <li><a href="{{ route('asthma.copd') }}"><i class="fa-solid fa-chevron-right mobile-sidebar__subicon" aria-hidden="true"></i> Asthma & COPD Care</a></li>
                            <li><a href="{{ route('critical.illness') }}"><i class="fa-solid fa-chevron-right mobile-sidebar__subicon" aria-hidden="true"></i> Critical Care Services</a></li>
                            <li><a href="{{ route('post.covid.complex') }}"><i class="fa-solid fa-chevron-right mobile-sidebar__subicon" aria-hidden="true"></i> Post-COVID & Complex Care</a></li>
                        </ul>
                    </li>
                    <li class="mobile-sidebar__item mobile-sidebar__item--has-sub">
                        <div class="mobile-sidebar__link-row">
                            <a class="mobile-sidebar__link" href="{{ route('gallery') }}"><i class="fa-solid fa-images mobile-sidebar__icon" aria-hidden="true"></i> Gallery</a>
                            <button type="button" class="mobile-sidebar__expand" aria-label="Expand Gallery" data-sub="gallery-sub"><i class="fa-solid fa-plus" aria-hidden="true"></i></button>
                        </div>
                        <ul class="mobile-sidebar__sublist" id="gallery-sub">
                            <li><a href="{{ route('media') }}"><i class="fa-solid fa-chevron-right mobile-sidebar__subicon" aria-hidden="true"></i> Media</a></li>
                            <li><a href="{{ route('gallery') }}"><i class="fa-solid fa-chevron-right mobile-sidebar__subicon" aria-hidden="true"></i> Images</a></li>
                            <li><a href="{{ route('educational.videos') }}"><i class="fa-solid fa-chevron-right mobile-sidebar__subicon" aria-hidden="true"></i> Educational Videos</a></li>

                        </ul>
                    </li>
                    <li class="mobile-sidebar__item">
                        <a class="mobile-sidebar__link" href="{{ route('testimonials') }}"><i class="fa-solid fa-comments mobile-sidebar__icon" aria-hidden="true"></i> Testimonials</a>
                    </li>
                    <li class="mobile-sidebar__item">
                        <a class="mobile-sidebar__link" href="{{ route('contact') }}"><i class="fa-solid fa-envelope mobile-sidebar__icon" aria-hidden="true"></i> Contact Us</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="mobile-sidebar__backdrop" id="mobileSidebarBackdrop" aria-hidden="true"></div>
</header>