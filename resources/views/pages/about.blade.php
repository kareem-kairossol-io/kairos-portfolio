@extends('layouts.site')

@section('title', 'About Us | '.$siteSettings['company_name'])

@push('styles')
    <style>
        .founder-section .founder-media,
        .founder-section .founder-content > *,
        .mission-vision-section .purpose-card .purpose-visual,
        .mission-vision-section .purpose-card .purpose-content > * {
            opacity: 0;
            transform: translateY(22px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .founder-section.animate-in .founder-media,
        .founder-section.animate-in .founder-content > *,
        .mission-vision-section.animate-in .purpose-card .purpose-visual,
        .mission-vision-section.animate-in .purpose-card .purpose-content > * {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
@endpush

@section('content')
    <section class="hero-section page-hero">
        <div class="container m-auto px-4">
            <div class="hero-badge">
                <div class="hero-badge-icon">
                    <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.93945 2.39812L4.2937 3.38191C4.68721 4.47378 5.54703 5.3336 6.6389 5.72712L7.62268 6.08137C7.71135 6.11357 7.71135 6.23931 7.62268 6.27107L6.6389 6.62532C5.54703 7.01884 4.68721 7.87866 4.2937 8.97053L3.93945 9.95432C3.90724 10.043 3.78151 10.043 3.74975 9.95432L3.3955 8.97053C3.00199 7.87866 2.14217 7.01884 1.0503 6.62532L0.0665199 6.27107C-0.0221529 6.23886 -0.0221529 6.11313 0.0665199 6.08137L1.0503 5.72712C2.14217 5.3336 3.00199 4.47378 3.3955 3.38191L3.74975 2.39812C3.78151 2.309 3.90724 2.309 3.93945 2.39812Z" fill="#0C2118"/>
                        <path d="M8.36786 0.0341102L8.54741 0.532181C8.74681 1.08496 9.18224 1.52038 9.73501 1.71979L10.2331 1.89934C10.2781 1.91566 10.2781 1.97919 10.2331 1.99551L9.73501 2.17506C9.18224 2.37447 8.74681 2.80989 8.54741 3.36267L8.36786 3.86074C8.35153 3.90574 8.28801 3.90574 8.27169 3.86074L8.09213 3.36267C7.89273 2.80989 7.45731 2.37447 6.90453 2.17506L6.40647 1.99551C6.36147 1.97919 6.36147 1.91566 6.40647 1.89934L6.90453 1.71979C7.45731 1.52038 7.89273 1.08496 8.09213 0.532181L8.27169 0.0341102C8.28801 -0.0113294 8.35198 -0.0113294 8.36786 0.0341102Z" fill="#0C2118"/>
                        <path d="M8.36786 8.49249L8.54741 8.99056C8.74681 9.54333 9.18224 9.97876 9.73501 10.1782L10.2331 10.3577C10.2781 10.374 10.2781 10.4376 10.2331 10.4539L9.73501 10.6334C9.18224 10.8328 8.74681 11.2683 8.54741 11.821L8.36786 12.3191C8.35153 12.3641 8.28801 12.3641 8.27169 12.3191L8.09213 11.821C7.89273 11.2683 7.45731 10.8328 6.90453 10.6334L6.40647 10.4539C6.36147 10.4376 6.36147 10.374 6.40647 10.3577L6.90453 10.1782C7.45731 9.97876 7.89273 9.54333 8.09213 8.99056L8.27169 8.49249C8.28801 8.44749 8.35198 8.44749 8.36786 8.49249Z" fill="#0C2118"/>
                    </svg>
                </div>
                <p class="hero-badge-text">ABOUT {{ strtoupper($siteSettings['company_name']) }}</p>
            </div>
            <h1 class="hero-title">An Engineer-Led Software Partner <br> for Growing Businesses</h1>
            <p class="hero-description">We help businesses plan, build, host, and support reliable software solutions designed around the way their teams actually work.</p>
        </div>
    </section>

    @include('partials.site.news-bar')

    <section class="who-we-are">
        <div class="container m-auto px-4">

            <!-- Left: content -->
            <div class="who-we-are-content">
                <div class="badge">
                    <div class="badge-icon">
                        <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.93945 2.39812L4.2937 3.38191C4.68721 4.47378 5.54703 5.3336 6.6389 5.72712L7.62268 6.08137C7.71135 6.11357 7.71135 6.23931 7.62268 6.27107L6.6389 6.62532C5.54703 7.01884 4.68721 7.87866 4.2937 8.97053L3.93945 9.95432C3.90724 10.043 3.78151 10.043 3.74975 9.95432L3.3955 8.97053C3.00199 7.87866 2.14217 7.01884 1.0503 6.62532L0.0665199 6.27107C-0.0221529 6.23886 -0.0221529 6.11313 0.0665199 6.08137L1.0503 5.72712C2.14217 5.3336 3.00199 4.47378 3.3955 3.38191L3.74975 2.39812C3.78151 2.309 3.90724 2.309 3.93945 2.39812Z" fill="#0C2118"/>
                            <path d="M8.36786 0.0341102L8.54741 0.532181C8.74681 1.08496 9.18224 1.52038 9.73501 1.71979L10.2331 1.89934C10.2781 1.91566 10.2781 1.97919 10.2331 1.99551L9.73501 2.17506C9.18224 2.37447 8.74681 2.80989 8.54741 3.36267L8.36786 3.86074C8.35153 3.90574 8.28801 3.90574 8.27169 3.86074L8.09213 3.36267C7.89273 2.80989 7.45731 2.37447 6.90453 2.17506L6.40647 1.99551C6.36147 1.97919 6.36147 1.91566 6.40647 1.89934L6.90453 1.71979C7.45731 1.52038 7.89273 1.08496 8.09213 0.532181L8.27169 0.0341102C8.28801 -0.0113294 8.35198 -0.0113294 8.36786 0.0341102Z" fill="#0C2118"/>
                            <path d="M8.36786 8.49249L8.54741 8.99056C8.74681 9.54333 9.18224 9.97876 9.73501 10.1782L10.2331 10.3577C10.2781 10.374 10.2781 10.4376 10.2331 10.4539L9.73501 10.6334C9.18224 10.8328 8.74681 11.2683 8.54741 11.821L8.36786 12.3191C8.35153 12.3641 8.28801 12.3641 8.27169 12.3191L8.09213 11.821C7.89273 11.2683 7.45731 10.8328 6.90453 10.6334L6.40647 10.4539C6.36147 10.4376 6.36147 10.374 6.40647 10.3577L6.90453 10.1782C7.45731 9.97876 7.89273 9.54333 8.09213 8.99056L8.27169 8.49249C8.28801 8.44749 8.35198 8.44749 8.36786 8.49249Z" fill="#0C2118"/>
                        </svg>
                    </div>
                    <p class="badge-text">WHO WE ARE</p>
                </div>

                <h2 class="who-we-are-title">Built to Make Business <br> Software Simpler</h2>

                <p class="who-we-are-lead">Kairos Solutions is an engineer-led software company helping small and medium businesses turn operational needs into reliable digital systems.</p>

                <div class="who-we-are-divider"></div>

                <p class="who-we-are-body">We build custom websites, e-commerce platforms, CRM systems, dashboards, mobile applications, and internal business tools. But our responsibility does not end when development is complete — we can also host, manage, maintain, and support each solution after launch.</p>

                <p class="who-we-are-body">Our approach is practical and focused. We begin by understanding how the business operates, then design the technology around its real workflow, priorities, and growth plans.</p>
            </div>

            <!-- Right: 2×2 card grid -->
            <div class="who-we-are-cards">

                <div class="wwa-card">
                    <div class="wwa-card-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2"/>
                            <path d="M8 21h8M12 17v4"/>
                        </svg>
                    </div>
                    <h3 class="wwa-card-title">Custom Software</h3>
                    <p class="wwa-card-desc">Websites, CRMs, dashboards, and internal tools built around your real workflow.</p>
                </div>

                <div class="wwa-card">
                    <div class="wwa-card-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                            <path d="M2 17l10 5 10-5"/>
                            <path d="M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <h3 class="wwa-card-title">Managed Hosting</h3>
                    <p class="wwa-card-desc">We keep your system live, stable, and secure — no need to manage infrastructure yourself.</p>
                </div>

                <div class="wwa-card">
                    <div class="wwa-card-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <h3 class="wwa-card-title">Ongoing Support</h3>
                    <p class="wwa-card-desc">Maintenance, updates, and day-to-day support long after your product launches.</p>
                </div>

                <div class="wwa-card">
                    <div class="wwa-card-icon">
                    <svg clip-rule="evenodd" fill-rule="evenodd" fill="currentColor" height="512" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg" id="fi_8740845"><g id="Icon"><path d="m8.75 11v2c0 .597.237 1.169.659 1.591s.994.659 1.591.659h2c.597 0 1.169-.237 1.591-.659s.659-.994.659-1.591v-2c0-.597-.237-1.169-.659-1.591s-.994-.659-1.591-.659h-2c-.597 0-1.169.237-1.591.659s-.659.994-.659 1.591zm1.5 0c0-.199.079-.39.22-.53.14-.141.331-.22.53-.22h2c.199 0 .39.079.53.22.141.14.22.331.22.53v2c0 .199-.079.39-.22.53-.14.141-.331.22-.53.22h-2c-.199 0-.39-.079-.53-.22-.141-.14-.22-.331-.22-.53z"></path><path d="m1.25 3.5v2c0 .597.237 1.169.659 1.591s.994.659 1.591.659h2c.597 0 1.169-.237 1.591-.659s.659-.994.659-1.591v-2c0-.597-.237-1.169-.659-1.591s-.994-.659-1.591-.659h-2c-.597 0-1.169.237-1.591.659s-.659.994-.659 1.591zm1.5 0c0-.199.079-.39.22-.53.14-.141.331-.22.53-.22h2c.199 0 .39.079.53.22.141.14.22.331.22.53v2c0 .199-.079.39-.22.53-.14.141-.331.22-.53.22h-2c-.199 0-.39-.079-.53-.22-.141-.14-.22-.331-.22-.53z"></path><path d="m16.25 18.5v2c0 .597.237 1.169.659 1.591s.994.659 1.591.659h2c.597 0 1.169-.237 1.591-.659s.659-.994.659-1.591v-2c0-.597-.237-1.169-.659-1.591s-.994-.659-1.591-.659h-2c-.597 0-1.169.237-1.591.659s-.659.994-.659 1.591zm1.5 0c0-.199.079-.39.22-.53.14-.141.331-.22.53-.22h2c.199 0 .39.079.53.22.141.14.22.331.22.53v2c0 .199-.079.39-.22.53-.14.141-.331.22-.53.22h-2c-.199 0-.39-.079-.53-.22-.141-.14-.22-.331-.22-.53z"></path><path d="m7 5.25h13c.332 0 .649.132.884.366.234.235.366.552.366.884v3.5c0 .332-.132.649-.366.884-.235.234-.552.366-.884.366h-3c-.414 0-.75.336-.75.75s.336.75.75.75h3c.729 0 1.429-.29 1.945-.805.515-.516.805-1.216.805-1.945 0-1.083 0-2.417 0-3.5 0-.729-.29-1.429-.805-1.945-.516-.515-1.216-.805-1.945-.805-4.084 0-13 0-13 0-.414 0-.75.336-.75.75s.336.75.75.75z"></path><path d="m13 18.75h-9c-.332 0-.649-.132-.884-.366-.234-.235-.366-.552-.366-.884 0-1.083 0-2.417 0-3.5 0-.332.132-.649.366-.884.235-.234.552-.366.884-.366h5.5c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-5.5c-.729 0-1.429.29-1.945.805-.515.516-.805 1.216-.805 1.945v3.5c0 .729.29 1.429.805 1.945.516.515 1.216.805 1.945.805h9c.414 0 .75-.336.75-.75s-.336-.75-.75-.75z"></path><path d="m19.53 13.47-1.469-1.47s1.469-1.47 1.469-1.47c.293-.292.293-.768 0-1.06-.292-.293-.768-.293-1.06 0l-2 2c-.293.293-.293.767 0 1.06l2 2c.292.293.768.293 1.06 0 .293-.292.293-.768 0-1.06z"></path><path d="m12.53 22.03 2-2c.293-.293.293-.767 0-1.06l-2-2c-.292-.293-.768-.293-1.06 0-.293.292-.293.768 0 1.06l1.469 1.47s-1.469 1.47-1.469 1.47c-.293.292-.293.768 0 1.06.292.293.768.293 1.06 0z"></path></g></svg>                    </div>
                    <h3 class="wwa-card-title">Built Around Your Workflow</h3>
                    <p class="wwa-card-desc">Every solution is shaped around your team, processes, and real business needs.</p>
                </div>

            </div>

        </div>
    </section>

    <section class="founder-section">
        <div class="container mx-auto p-4">
            <div class="founder-panel">
                <div class="founder-media">
                    <div class="founder-photo-card">
                        <img src="{{ asset('assets/imgs/kareem.png') }}" alt="Kareem Mohamed portrait">
                    </div>
                </div>

                <div class="founder-content">
                    <div class="badge">
                        <div class="badge-icon">
                            <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.93945 2.39812L4.2937 3.38191C4.68721 4.47378 5.54703 5.3336 6.6389 5.72712L7.62268 6.08137C7.71135 6.11357 7.71135 6.23931 7.62268 6.27107L6.6389 6.62532C5.54703 7.01884 4.68721 7.87866 4.2937 8.97053L3.93945 9.95432C3.90724 10.043 3.78151 10.043 3.74975 9.95432L3.3955 8.97053C3.00199 7.87866 2.14217 7.01884 1.0503 6.62532L0.0665199 6.27107C-0.0221529 6.23886 -0.0221529 6.11313 0.0665199 6.08137L1.0503 5.72712C2.14217 5.3336 3.00199 4.47378 3.3955 3.38191L3.74975 2.39812C3.78151 2.309 3.90724 2.309 3.93945 2.39812Z" fill="#0C2118"/>
                                <path d="M8.36786 0.0341102L8.54741 0.532181C8.74681 1.08496 9.18224 1.52038 9.73501 1.71979L10.2331 1.89934C10.2781 1.91566 10.2781 1.97919 10.2331 1.99551L9.73501 2.17506C9.18224 2.37447 8.74681 2.80989 8.54741 3.36267L8.36786 3.86074C8.35153 3.90574 8.28801 3.90574 8.27169 3.86074L8.09213 3.36267C7.89273 2.80989 7.45731 2.37447 6.90453 2.17506L6.40647 1.99551C6.36147 1.97919 6.36147 1.91566 6.40647 1.89934L6.90453 1.71979C7.45731 1.52038 7.89273 1.08496 8.09213 0.532181L8.27169 0.0341102C8.28801 -0.0113294 8.35198 -0.0113294 8.36786 0.0341102Z" fill="#0C2118"/>
                                <path d="M8.36786 8.49249L8.54741 8.99056C8.74681 9.54333 9.18224 9.97876 9.73501 10.1782L10.2331 10.3577C10.2781 10.374 10.2781 10.4376 10.2331 10.4539L9.73501 10.6334C9.18224 10.8328 8.74681 11.2683 8.54741 11.821L8.36786 12.3191C8.35153 12.3641 8.28801 12.3641 8.27169 12.3191L8.09213 11.821C7.89273 11.2683 7.45731 10.8328 6.90453 10.6334L6.40647 10.4539C6.36147 10.4376 6.36147 10.374 6.40647 10.3577L6.90453 10.1782C7.45731 9.97876 7.89273 9.54333 8.09213 8.99056L8.27169 8.49249C8.28801 8.44749 8.35198 8.44749 8.36786 8.49249Z" fill="#0C2118"/>
                            </svg>
                        </div>
                        <p class="badge-text">FOUNDER-LED DELIVERY.</p>
                    </div>

                    <h2 class="founder-title">Meet Kareem Mohamed</h2>
                    <p class="founder-role">Founder &amp; Lead Software Engineer</p>
                    <div class="founder-divider"></div>
                    <p class="founder-description">Kareem founded {{ $siteSettings['company_name'] }} to give growing businesses one dependable technical partner for development, hosting, and ongoing support.</p>
                    <p class="founder-description">With 4+ years of hands-on software engineering experience, he remains directly involved in planning and technical delivery — helping ensure every solution is practical, reliable, and built with long-term accountability in mind.</p>

                    <a href="https://kareem.kairossol.io/" target="_blank" rel="noopener noreferrer" class="founder-cta">
                        <span>View Selected Work</span>
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M5 12H19M14 7L19 12L14 17" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="mission-vision-section">
        <div class="container mx-auto px-4">
            <article class="purpose-card purpose-card-mission">
                <div class="purpose-content">
                    <div class="purpose-icon purpose-icon-mission">
                        <!-- Mission icon -->
                        <svg
                            width="55"
                            height="55"
                            viewBox="0 0 55 55"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true"
                        >
                            <g clip-path="url(#missionClip)">
                                <path
                                    d="M25.2084 27.5C25.2084 28.1078 25.4498 28.6907 25.8796 29.1205C26.3094 29.5503 26.8923 29.7917 27.5 29.7917C28.1078 29.7917 28.6907 29.5503 29.1205 29.1205C29.5503 28.6907 29.7917 28.1078 29.7917 27.5C29.7917 26.8923 29.5503 26.3094 29.1205 25.8796C28.6907 25.4498 28.1078 25.2084 27.5 25.2084C26.8923 25.2084 26.3094 25.4498 25.8796 25.8796C25.4498 26.3094 25.2084 26.8923 25.2084 27.5Z"
                                    stroke="#00B86A"
                                    stroke-width="3"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />

                                <path
                                    d="M27.5 16.0416C25.2337 16.0416 23.0184 16.7136 21.1341 17.9727C19.2497 19.2318 17.7811 21.0213 16.9138 23.115C16.0466 25.2088 15.8197 27.5127 16.2618 29.7354C16.7039 31.9581 17.7952 33.9998 19.3977 35.6022C21.0002 37.2047 23.0419 38.296 25.2646 38.7381C27.4873 39.1803 29.7911 38.9533 31.8849 38.0861C33.9786 37.2188 35.7682 35.7502 37.0272 33.8659C38.2863 31.9816 38.9583 29.7662 38.9583 27.5"
                                    stroke="#0C2118"
                                    stroke-width="3"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />

                                <path
                                    d="M29.7917 7.00104C25.5431 6.5244 21.2513 7.3798 17.5102 9.44893C13.769 11.5181 10.7632 14.6986 8.90871 18.5507C7.05418 22.4028 6.44254 26.736 7.15838 30.9509C7.87422 35.1658 9.88216 39.054 12.9045 42.0779C15.9268 45.1017 19.814 47.1116 24.0286 47.8295C28.2431 48.5475 32.5766 47.938 36.4296 46.0855C40.2826 44.2329 43.4647 41.2287 45.5357 37.4886C47.6067 33.7485 48.4643 29.4572 47.9898 25.2083"
                                    stroke="#00B86A"
                                    stroke-width="3"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />

                                <path
                                    d="M34.375 13.75V20.625H41.25L48.125 13.75H41.25V6.875L34.375 13.75Z"
                                    stroke="#00B86A"
                                    stroke-width="3"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />

                                <path
                                    d="M34.375 20.625L27.5 27.5"
                                    stroke="#00B86A"
                                    stroke-width="3"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </g>

                            <defs>
                                <clipPath id="missionClip">
                                    <rect width="55" height="55" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                    <h2 class="purpose-title">Our Mission</h2>
                    <p class="purpose-lead">
                        To help growing businesses operate more efficiently through practical, reliable software built around their real needs.
                    </p>
                    <p class="purpose-description">
                        We work closely with each client to understand their workflow, identify opportunities for improvement, and deliver the complete technical journey — from planning and development to deployment, hosting, maintenance, and ongoing support. Our goal is to simplify daily operations, reduce repetitive work, and give teams the tools they need to grow with confidence.
                    </p>
                </div>
                <div class="purpose-visual">
                    <img src="{{ asset('assets/imgs/our-mission.png') }}" alt="Kairos Solutions mission illustration">
                </div>
            </article>

            <article class="purpose-card purpose-card-vision">
                <div class="purpose-visual">
                    <img src="{{ asset('assets/imgs/our-vision.png') }}" alt="Kairos Solutions vision illustration">
                </div>
                <div class="purpose-content">
                    <div class="purpose-icon purpose-icon-vision">
                        <!-- Eye icon -->
                        <svg
                            width="55"
                            height="55"
                            viewBox="0 0 55 55"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true"
                        >
                            <path
                                d="M5.5 27.5C10.7 18.8 18 14.5 27.5 14.5C37 14.5 44.3 18.8 49.5 27.5C44.3 36.2 37 40.5 27.5 40.5C18 40.5 10.7 36.2 5.5 27.5Z"
                                stroke="#0C2118"
                                stroke-width="3"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />

                            <circle
                                cx="27.5"
                                cy="27.5"
                                r="6"
                                stroke="#00B86A"
                                stroke-width="3"
                            />

                            <circle
                                cx="27.5"
                                cy="27.5"
                                r="2"
                                fill="#00B86A"
                            />
                        </svg>
                    </div>

                    <h2 class="purpose-title">Our Vision</h2>
                    <p class="purpose-lead">
                        To become a trusted long-term software partner for businesses across Egypt and the Middle East.
                    </p>
                    <p class="purpose-description">
                        We aim to be known not only for delivering effective software, but also for the quality, clarity, accountability, and continuous support behind every project. Our vision is to help businesses replace disconnected tools and manual processes with dependable digital systems that evolve with their operations and create lasting value.
                    </p>
                </div>
            </article>
        </div>
    </section>

    @include('partials.site.final-cta')
@endsection
