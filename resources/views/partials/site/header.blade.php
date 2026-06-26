<header class="main-header">
    <div class="container m-auto px-4">
        <a href="{{ route('home') }}" aria-label="{{ $siteSettings['company_name'] }} home">
            <img src="{{ asset('assets/imgs/logo.png') }}" alt="{{ $siteSettings['company_name'] }}" class="logo">
        </a>

        <nav class="nav-desktop hidden lg:flex">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
            <a href="{{ route('home') }}#services">Our Solutions</a>
            <a href="{{ route('home') }}#crm-solutions">Kairos CRM</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a>
        </nav>

        <a href="#final-cta" class="get-in-touch hidden lg:inline-block">
            Get in touch
        </a>

        <button class="menu-toggle lg:hidden" id="menuToggle" aria-label="Toggle menu">
            <span class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>
    </div>

    <div class="nav-overlay hidden lg:hidden" id="navOverlay">
        <nav class="nav-mobile">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About Us</a>
            <a href="{{ route('home') }}#services">Our Solutions</a>
            <a href="{{ route('home') }}#crm-solutions">Kairos CRM</a>
            <a href="{{ route('contact') }}">Contact Us</a>
            <a href="#final-cta" class="get-in-touch-mobile">Get in touch</a>
        </nav>
    </div>
</header>
