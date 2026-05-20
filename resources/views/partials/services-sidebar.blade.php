<aside class="services_sidebar" data-aos="fade-left">
    <div class="services_sidebar_inner">
        <h4 class="services_sidebar_title">All Services</h4>
        <nav class="services_sidebar_nav" aria-label="Services navigation">
            <ul class="services_sidebar_list">
                <li><a href="{{ route('diabetes') }}" class="{{ request()->routeIs('diabetes') ? 'active' : '' }}">Diabetes</a></li>
                <li><a href="{{ route('thyroid') }}" class="{{ request()->routeIs('thyroid') ? 'active' : '' }}">Thyroid</a></li>
                <li><a href="{{ route('blood.pressure') }}" class="{{ request()->routeIs('blood.pressure') ? 'active' : '' }}">Hypertension</a></li>
                <li><a href="{{ route('cardiac.disorder') }}" class="{{ request()->routeIs('cardiac.disorder') ? 'active' : '' }}">Cardiac Disorder</a></li>
                <li><a href="{{ route('fever.infections') }}" class="{{ request()->routeIs('fever.infections') ? 'active' : '' }}">Fever & Infection</a></li>
                <li><a href="{{ route('lung.disorder') }}" class="{{ request()->routeIs('lung.disorder') ? 'active' : '' }}">Lung Disorder</a></li>
                <li><a href="{{ route('kidney.disease') }}" class="{{ request()->routeIs('kidney.disease') ? 'active' : '' }}">Kidney Diseases</a></li>
                <li><a href="{{ route('stroke') }}" class="{{ request()->routeIs('stroke') ? 'active' : '' }}">Stroke</a></li>
                <li><a href="{{ route('critical.illness') }}" class="{{ request()->routeIs('critical.illness') ? 'active' : '' }}">Critical Illness</a></li>
                <li><a href="{{ route('preventive.health') }}" class="{{ request()->routeIs('preventive.health') ? 'active' : '' }}">Preventive Health Care</a></li>
                <li><a href="{{ route('wellness.lifestyle.management') }}" class="{{ request()->routeIs('wellness.lifestyle.management') ? 'active' : '' }}">Wellness and Lifestyle Management</a></li>
            </ul>
        </nav>
        <div class="services_sidebar_cta">
            <p>Need personalized care?</p>
            <a href="{{ route('contact') }}" class="btn services_sidebar_btn text-decoration-none">Book Appointment</a>
        </div>
    </div>
</aside>