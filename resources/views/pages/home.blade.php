@extends('layouts.site')

@section('title', $siteSettings['company_name'])

@section('content')
    <section class="hero-section">
        <div class="container m-auto px-4">
            <div class="hero-badge">
                <div class="hero-badge-icon">
                    <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.93945 2.39812L4.2937 3.38191C4.68721 4.47378 5.54703 5.3336 6.6389 5.72712L7.62268 6.08137C7.71135 6.11357 7.71135 6.23931 7.62268 6.27107L6.6389 6.62532C5.54703 7.01884 4.68721 7.87866 4.2937 8.97053L3.93945 9.95432C3.90724 10.043 3.78151 10.043 3.74975 9.95432L3.3955 8.97053C3.00199 7.87866 2.14217 7.01884 1.0503 6.62532L0.0665199 6.27107C-0.0221529 6.23886 -0.0221529 6.11313 0.0665199 6.08137L1.0503 5.72712C2.14217 5.3336 3.00199 4.47378 3.3955 3.38191L3.74975 2.39812C3.78151 2.309 3.90724 2.309 3.93945 2.39812Z" fill="#0C2118"/>
                        <path d="M8.36786 0.0341102L8.54741 0.532181C8.74681 1.08496 9.18224 1.52038 9.73501 1.71979L10.2331 1.89934C10.2781 1.91566 10.2781 1.97919 10.2331 1.99551L9.73501 2.17506C9.18224 2.37447 8.74681 2.80989 8.54741 3.36267L8.36786 3.86074C8.35153 3.90574 8.28801 3.90574 8.27169 3.86074L8.09213 3.36267C7.89273 2.80989 7.45731 2.37447 6.90453 2.17506L6.40647 1.99551C6.36147 1.97919 6.36147 1.91566 6.40647 1.89934L6.90453 1.71979C7.45731 1.52038 7.89273 1.08496 8.09213 0.532181L8.27169 0.0341102C8.28801 -0.0113294 8.35198 -0.0113294 8.36786 0.0341102Z" fill="#0C2118"/>
                        <path d="M8.36786 8.49249L8.54741 8.99056C8.74681 9.54333 9.18224 9.97876 9.73501 10.1782L10.2331 10.3577C10.2781 10.374 10.2781 10.4376 10.2331 10.4539L9.73501 10.6334C9.18224 10.8328 8.74681 11.2683 8.54741 11.821L8.36786 12.3191C8.35153 12.3641 8.28801 12.3641 8.27169 12.3191L8.09213 11.821C7.89273 11.2683 7.45731 10.8328 6.90453 10.6334L6.40647 10.4539C6.36147 10.4376 6.36147 10.374 6.40647 10.3577L6.90453 10.1782C7.45731 9.97876 7.89273 9.54333 8.09213 8.99056L8.27169 8.49249C8.28801 8.44749 8.35198 8.44749 8.36786 8.49249Z" fill="#0C2118"/>
                    </svg>
                </div>
                <p class="hero-badge-text">Bringing Innovation to Every Business System</p>
            </div>
            <h1 class="hero-title">We Build, <br class="mobile-br"> Host &amp; Support <br> Your Business Solution</h1>
            <p class="hero-description">We build the solution your business needs, <br> host it for you, and support you every step of the way.</p>
            <a href="#final-cta" class="hero-cta">Get in touch</a>
        </div>
    </section>

    @include('partials.site.news-bar')

    <section class="warning-section">
        <div class="container m-auto px-4">
            <div class="warning-section-content">
                <div class="badge">
                    <div class="badge-icon">
                        <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.93945 2.39812L4.2937 3.38191C4.68721 4.47378 5.54703 5.3336 6.6389 5.72712L7.62268 6.08137C7.71135 6.11357 7.71135 6.23931 7.62268 6.27107L6.6389 6.62532C5.54703 7.01884 4.68721 7.87866 4.2937 8.97053L3.93945 9.95432C3.90724 10.043 3.78151 10.043 3.74975 9.95432L3.3955 8.97053C3.00199 7.87866 2.14217 7.01884 1.0503 6.62532L0.0665199 6.27107C-0.0221529 6.23886 -0.0221529 6.11313 0.0665199 6.08137L1.0503 5.72712C2.14217 5.3336 3.00199 4.47378 3.3955 3.38191L3.74975 2.39812C3.78151 2.309 3.90724 2.309 3.93945 2.39812Z" fill="#0C2118"/>
                            <path d="M8.36786 0.0341102L8.54741 0.532181C8.74681 1.08496 9.18224 1.52038 9.73501 1.71979L10.2331 1.89934C10.2781 1.91566 10.2781 1.97919 10.2331 1.99551L9.73501 2.17506C9.18224 2.37447 8.74681 2.80989 8.54741 3.36267L8.36786 3.86074C8.35153 3.90574 8.28801 3.90574 8.27169 3.86074L8.09213 3.36267C7.89273 2.80989 7.45731 2.37447 6.90453 2.17506L6.40647 1.99551C6.36147 1.97919 6.36147 1.91566 6.40647 1.89934L6.90453 1.71979C7.45731 1.52038 7.89273 1.08496 8.09213 0.532181L8.27169 0.0341102C8.28801 -0.0113294 8.35198 -0.0113294 8.36786 0.0341102Z" fill="#0C2118"/>
                            <path d="M8.36786 8.49249L8.54741 8.99056C8.74681 9.54333 9.18224 9.97876 9.73501 10.1782L10.2331 10.3577C10.2781 10.374 10.2781 10.4376 10.2331 10.4539L9.73501 10.6334C9.18224 10.8328 8.74681 11.2683 8.54741 11.821L8.36786 12.3191C8.35153 12.3641 8.28801 12.3641 8.27169 12.3191L8.09213 11.821C7.89273 11.2683 7.45731 10.8328 6.90453 10.6334L6.40647 10.4539C6.36147 10.4376 6.36147 10.374 6.40647 10.3577L6.90453 10.1782C7.45731 9.97876 7.89273 9.54333 8.09213 8.99056L8.27169 8.49249C8.28801 8.44749 8.35198 8.44749 8.36786 8.49249Z" fill="#0C2118"/>
                        </svg>
                    </div>
                    <p class="badge-text">Focused. Reliable. Accountable.</p>
                </div>
                <h1 class="warning-title">
                    When Business Operate Without
                    <br>
                    the Right Technical Partner
                </h1>
                <p class="warning-description">
                    Many businesses don’t need a large internal technical team. They need a reliable partner who understands their goals, works with care, communicates clearly, and stays involved after launch.
                </p>
                <p class="warning-description">
                    At {{ $siteSettings['company_name'] }}, we take responsibility for the complete technical journey from planning and development to deployment, ongoing improvements, and support.
                </p>
                <a href="{{ route('contact') }}" class="warning-cta">
                    Discuss Your Project
                </a>
            </div>
            <div class="checks-container">
                <img src="{{ asset('assets/imgs/partener_team.png') }}" alt="Technical partner illustration" class="warning-imgs">
                <div class="checks-card">
                    <h1 class="checks-title">WHAT YOU CAN EXPECT</h1>
                    <div class="check-list-wrapper">
                        @foreach ([
                            'Clear planning before development',
                            'Solutions tailored to your real workflow',
                            'Focused, high-quality execution',
                            'Transparent communication and regular updates',
                            'Reliable support beyond launch',
                        ] as $item)
                            <div class="check-list-item">
                                <div class="check-list-icon">
                                    <svg height="512pt" viewBox="0 0 512 512" width="512pt" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"><path d="m369.164062 174.769531c7.8125 7.8125 7.8125 20.476563 0 28.285157l-134.171874 134.175781c-7.8125 7.808593-20.472657 7.808593-28.285157 0l-63.871093-63.875c-7.8125-7.808594-7.8125-20.472657 0-28.28125 7.808593-7.8125 20.472656-7.8125 28.28125 0l49.730468 49.730469 120.03125-120.035157c7.8125-7.808593 20.476563-7.808593 28.285156 0zm142.835938 81.230469c0 141.503906-114.515625 256-256 256-141.503906 0-256-114.515625-256-256 0-141.503906 114.515625-256 256-256 141.503906 0 256 114.515625 256 256zm-40 0c0-119.394531-96.621094-216-216-216-119.394531 0-216 96.621094-216 216 0 119.394531 96.621094 216 216 216 119.394531 0 216-96.621094 216-216zm0 0"></path></svg>
                                </div>
                                {{ $item }}
                            </div>
                        @endforeach
                    </div>
                    <div class="checks-footer">
                        <img src="{{ asset('assets/imgs/logo-white-small.png') }}" alt="{{ $siteSettings['company_name'] }} logo">
                        <p>QUALITY • CLARITY • CONTINUITY</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="our-services anchor-section" id="services">
        <div class="container mx-auto px-4">
    
            <div class="our-services-header">
                <div class="badge">
                    <div class="badge-icon">
                        <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.93945 2.39812L4.2937 3.38191C4.68721 4.47378 5.54703 5.3336 6.6389 5.72712L7.62268 6.08137C7.71135 6.11357 7.71135 6.23931 7.62268 6.27107L6.6389 6.62532C5.54703 7.01884 4.68721 7.87866 4.2937 8.97053L3.93945 9.95432C3.90724 10.043 3.78151 10.043 3.74975 9.95432L3.3955 8.97053C3.00199 7.87866 2.14217 7.01884 1.0503 6.62532L0.0665199 6.27107C-0.0221529 6.23886 -0.0221529 6.11313 0.0665199 6.08137L1.0503 5.72712C2.14217 5.3336 3.00199 4.47378 3.3955 3.38191L3.74975 2.39812C3.78151 2.309 3.90724 2.309 3.93945 2.39812Z" fill="#0C2118"/>
                            <path d="M8.36786 0.0341102L8.54741 0.532181C8.74681 1.08496 9.18224 1.52038 9.73501 1.71979L10.2331 1.89934C10.2781 1.91566 10.2781 1.97919 10.2331 1.99551L9.73501 2.17506C9.18224 2.37447 8.74681 2.80989 8.54741 3.36267L8.36786 3.86074C8.35153 3.90574 8.28801 3.90574 8.27169 3.86074L8.09213 3.36267C7.89273 2.80989 7.45731 2.37447 6.90453 2.17506L6.40647 1.99551C6.36147 1.97919 6.36147 1.91566 6.40647 1.89934L6.90453 1.71979C7.45731 1.52038 7.89273 1.08496 8.09213 0.532181L8.27169 0.0341102C8.28801 -0.0113294 8.35198 -0.0113294 8.36786 0.0341102Z" fill="#0C2118"/>
                            <path d="M8.36786 8.49249L8.54741 8.99056C8.74681 9.54333 9.18224 9.97876 9.73501 10.1782L10.2331 10.3577C10.2781 10.374 10.2781 10.4376 10.2331 10.4539L9.73501 10.6334C9.18224 10.8328 8.74681 11.2683 8.54741 11.821L8.36786 12.3191C8.35153 12.3641 8.28801 12.3641 8.27169 12.3191L8.09213 11.821C7.89273 11.2683 7.45731 10.8328 6.90453 10.6334L6.40647 10.4539C6.36147 10.4376 6.36147 10.374 6.40647 10.3577L6.90453 10.1782C7.45731 9.97876 7.89273 9.54333 8.09213 8.99056L8.27169 8.49249C8.28801 8.44749 8.35198 8.44749 8.36786 8.49249Z" fill="#0C2118"/>
                        </svg>
                    </div>
                    <p class="badge-text">Practical. Managed. Built to Last.</p>
                </div>
                <h1 class="our-services-title">
                    Software Services Built <br class="mobile-br" /> Around Your Business
                </h1>
                <p class="our-services-description">
                    From custom development to managed hosting and ongoing support, we provide the technical services growing businesses need — without the cost of building an in-house team.
                </p>
            </div>
    
            <div class="services-cards-wrapper">
    
                <!-- Card 1: Custom Business Systems -->
                <div class="service-card">
                    <div class="svc-illus" aria-hidden="true">
                        <div class="svc-browser">
                            <div class="svc-browser-bar">
                                <span class="svc-dot svc-dot--r"></span>
                                <span class="svc-dot svc-dot--y"></span>
                                <span class="svc-dot svc-dot--g"></span>
                            </div>
                            <div class="svc-browser-body">
                                <div class="svc-sidebar">
                                    <div class="svc-sidebar-item svc-sidebar-item--active"></div>
                                    <div class="svc-sidebar-item"></div>
                                    <div class="svc-sidebar-item svc-sidebar-item--active"></div>
                                    <div class="svc-sidebar-item"></div>
                                    <div class="svc-sidebar-item"></div>
                                </div>
                                <div class="svc-content-area">
                                    <div class="svc-row svc-row--80"></div>
                                    <div class="svc-row svc-row--60"></div>
                                    <div class="svc-row svc-row--80"></div>
                                    <div class="svc-row svc-row--accent"></div>
                                    <div class="svc-row svc-row--50"></div>
                                </div>
                            </div>
                            <div class="svc-cursor"></div>
                        </div>
                    </div>
                    <h2>Custom Business Systems</h2>
                    <p>We build CRM platforms, dashboards, internal tools, and workflow systems tailored to the way your business actually operates. Every solution is planned around your goals, team, and daily processes.</p>
                </div>
    
                <!-- Card 2: Managed Hosting (fixed) -->
                <div class="service-card">
                    <div class="svc-illus" aria-hidden="true">
                        <div class="svc-hosting">
    
                            <div class="svc-server-panel">
                                <div class="svc-rack-row">
                                    <div class="svc-rack-slot"><div class="svc-rack-fill" style="animation-delay:0s"></div></div>
                                    <div class="svc-led" style="animation-delay:0s"></div>
                                </div>
                                <div class="svc-rack-row">
                                    <div class="svc-rack-slot"><div class="svc-rack-fill" style="animation-delay:.7s"></div></div>
                                    <div class="svc-led" style="animation-delay:.5s"></div>
                                </div>
                                <div class="svc-rack-row">
                                    <div class="svc-rack-slot"><div class="svc-rack-fill" style="animation-delay:1.4s"></div></div>
                                    <div class="svc-led" style="animation-delay:1.1s"></div>
                                </div>
                                <div class="svc-rack-row">
                                    <div class="svc-rack-slot"><div class="svc-rack-fill" style="animation-delay:2s"></div></div>
                                    <div class="svc-led" style="animation-delay:.3s"></div>
                                </div>
                            </div>
    
                            <div class="svc-pipe">
                                <div class="svc-pipe-dot"></div>
                                <div class="svc-pipe-dot"></div>
                                <div class="svc-pipe-dot"></div>
                            </div>
    
                            <div class="svc-hosting-icons">
                                <div class="svc-hicon">
                                    <svg width="16" height="11" viewBox="0 0 22 14" fill="none">
                                        <path d="M17.5 13H4.5C2.567 13 1 11.433 1 9.5C1 7.703 2.361 6.218 4.109 6.024C4.037 5.693 4 5.351 4 5C4 2.791 5.791 1 8 1C9.42 1 10.668 1.73 11.392 2.832C11.909 2.302 12.618 2 13.4 2C14.939 2 16.2 3.072 16.472 4.499C16.647 4.5 16.82 4.508 16.99 4.526C19.218 4.775 21 6.707 21 9C21 11.209 19.433 13 17.5 13Z" stroke="#00E282" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                    <div class="svc-hicon-dot"></div>
                                </div>
                                <div class="svc-hicon">
                                    <svg width="13" height="15" viewBox="0 0 16 18" fill="none">
                                        <path d="M8 1L1 4V9C1 12.866 4.134 16.217 8 17C11.866 16.217 15 12.866 15 9V4L8 1Z" stroke="#00E282" stroke-width="1.5" stroke-linejoin="round"/>
                                        <polyline points="5,9 7,11 11,7" stroke="#00E282" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="svc-hicon-dot"></div>
                                </div>
                                <div class="svc-hicon">
                                    <svg width="13" height="13" viewBox="0 0 18 18" fill="none">
                                        <polyline points="1,9 5,5 9,9" stroke="#00E282" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M5 5V13H17" stroke="#00E282" stroke-width="1.5" stroke-linecap="round"/>
                                        <polyline points="13,9 17,13 13,17" stroke="#00E282" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="svc-hicon-dot svc-hicon-dot--pulse"></div>
                                </div>
                            </div>
    
                        </div>
                    </div>
                    <h2>Managed Hosting & Ongoing Support</h2>
                    <p>We deploy, host, monitor, and maintain your system after launch. From backups and security updates to technical support and ongoing improvements, we keep your software reliable and ready for growth.</p>
                </div>
    
                <!-- Card 3: Web & E-Commerce (cart animation) -->
                <div class="service-card">
                    <div class="svc-illus" aria-hidden="true">
                        <div class="svc-cart-scene">
    
                            <div class="svc-page">
                                <div class="svc-page-bar">
                                    <span class="svc-dot svc-dot--r"></span>
                                    <span class="svc-dot svc-dot--y"></span>
                                    <span class="svc-dot svc-dot--g"></span>
                                </div>
                                <div class="svc-page-body">
                                    <div class="svc-page-hero"></div>
                                    <div class="svc-page-line svc-page-line--70"></div>
                                    <div class="svc-page-line svc-page-line--45"></div>
                                    <div class="svc-page-btn"></div>
                                </div>
                                <div class="svc-page-overlay"></div>
                            </div>
    
                            <div class="svc-cart">
                                <div class="svc-cart-head"></div>
                                <div class="svc-cart-items">
                                    <div class="svc-cart-item">
                                        <div class="svc-cart-thumb"></div>
                                        <div class="svc-cart-lines">
                                            <div class="svc-cart-line"></div>
                                            <div class="svc-cart-line svc-cart-line--g"></div>
                                        </div>
                                    </div>
                                    <div class="svc-cart-item">
                                        <div class="svc-cart-thumb svc-cart-thumb--b"></div>
                                        <div class="svc-cart-lines">
                                            <div class="svc-cart-line"></div>
                                            <div class="svc-cart-line svc-cart-line--g"></div>
                                        </div>
                                    </div>
                                    <div class="svc-cart-item">
                                        <div class="svc-cart-thumb svc-cart-thumb--c"></div>
                                        <div class="svc-cart-lines">
                                            <div class="svc-cart-line"></div>
                                            <div class="svc-cart-line svc-cart-line--g"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="svc-cart-footer"></div>
                            </div>
    
                        </div>
                    </div>
                    <h2>Web & E-Commerce Solutions</h2>
                    <p>Professional websites, online stores, customer portals, and ordering platforms designed to make your business easier to find, trust, and buy from.</p>
                </div>
    
                <!-- Card 4: CRM & Business Tools -->
                <div class="service-card">
                    <div class="svc-illus" aria-hidden="true">
                        <div class="svc-dashboard">
                            <div class="svc-dash-header">
                                <div class="svc-dash-title-bar"></div>
                                <div class="svc-dash-dot"></div>
                            </div>
                            <div class="svc-dash-body">
                                <div class="svc-chart-bars">
                                    <div class="svc-bar" style="--h:50%"></div>
                                    <div class="svc-bar" style="--h:70%"></div>
                                    <div class="svc-bar" style="--h:40%"></div>
                                    <div class="svc-bar" style="--h:88%"></div>
                                    <div class="svc-bar" style="--h:60%"></div>
                                </div>
                                <div class="svc-pie-wrap">
                                    <div class="svc-pie"></div>
                                    <div class="svc-pie-legend">
                                        <span class="svc-legend-dot svc-legend-dot--green"></span>
                                        <span class="svc-legend-dot svc-legend-dot--light"></span>
                                        <span class="svc-legend-dot svc-legend-dot--muted"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="svc-dash-stats">
                                <div class="svc-stat-chip">
                                    <div class="svc-stat-val">24</div>
                                    <div class="svc-stat-lbl"></div>
                                </div>
                                <div class="svc-stat-chip">
                                    <div class="svc-stat-val svc-stat-val--sm">87%</div>
                                    <div class="svc-stat-lbl"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2>CRM & Business Tools</h2>
                    <p>Practical tools for managing customers, sales, tasks, reporting, inventory, and everyday operations from one organised system.</p>
                </div>
    
                <!-- Card 5: Mobile Applications -->
                <div class="service-card">
                    <div class="svc-illus" aria-hidden="true">
                        <div class="svc-phones">
                            <div class="svc-phone svc-phone--back">
                                <div class="svc-phone-notch"></div>
                                <div class="svc-phone-screen">
                                    <div class="svc-phone-row"></div>
                                    <div class="svc-phone-card">
                                        <div class="svc-phone-line"></div>
                                        <div class="svc-phone-line svc-phone-line--accent"></div>
                                    </div>
                                </div>
                                <div class="svc-phone-home"></div>
                            </div>
                            <div class="svc-phone svc-phone--front">
                                <div class="svc-phone-notch"></div>
                                <div class="svc-phone-screen">
                                    <div class="svc-phone-topbar">
                                        <div class="svc-phone-icon"></div>
                                        <div class="svc-phone-title"></div>
                                    </div>
                                    <div class="svc-phone-card">
                                        <div class="svc-phone-line"></div>
                                        <div class="svc-phone-line svc-phone-line--accent"></div>
                                    </div>
                                    <div class="svc-phone-card">
                                        <div class="svc-phone-line svc-phone-line--accent"></div>
                                        <div class="svc-phone-line"></div>
                                    </div>
                                    <div class="svc-phone-btn"></div>
                                </div>
                                <div class="svc-phone-home"></div>
                                <div class="svc-phone-badge"></div>
                            </div>
                        </div>
                    </div>
                    <h2>Mobile Applications</h2>
                    <p>Reliable Android and iOS applications built around your customers, employees, and business processes — with ongoing support after release.</p>
                </div>
    
            </div>
        </div>
    </section>

    <section class="crm-solutions anchor-section" id="crm-solutions">
        <div class="container m-auto px-4">

            <!-- ── Left: Content ── -->
            <div class="content">

                <div class="crm-solutions-badge">
                    <div class="badge-icon">
                        <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.93945 2.39812L4.2937 3.38191C4.68721 4.47378 5.54703 5.3336 6.6389 5.72712L7.62268 6.08137C7.71135 6.11357 7.71135 6.23931 7.62268 6.27107L6.6389 6.62532C5.54703 7.01884 4.68721 7.87866 4.2937 8.97053L3.93945 9.95432C3.90724 10.043 3.78151 10.043 3.74975 9.95432L3.3955 8.97053C3.00199 7.87866 2.14217 7.01884 1.0503 6.62532L0.0665199 6.27107C-0.0221529 6.23886 -0.0221529 6.11313 0.0665199 6.08137L1.0503 5.72712C2.14217 5.3336 3.00199 4.47378 3.3955 3.38191L3.74975 2.39812C3.78151 2.309 3.90724 2.309 3.93945 2.39812Z" fill="#0C2118"/>
                            <path d="M8.36786 0.0341102L8.54741 0.532181C8.74681 1.08496 9.18224 1.52038 9.73501 1.71979L10.2331 1.89934C10.2781 1.91566 10.2781 1.97919 10.2331 1.99551L9.73501 2.17506C9.18224 2.37447 8.74681 2.80989 8.54741 3.36267L8.36786 3.86074C8.35153 3.90574 8.28801 3.90574 8.27169 3.86074L8.09213 3.36267C7.89273 2.80989 7.45731 2.37447 6.90453 2.17506L6.40647 1.99551C6.36147 1.97919 6.36147 1.91566 6.40647 1.89934L6.90453 1.71979C7.45731 1.52038 7.89273 1.08496 8.09213 0.532181L8.27169 0.0341102C8.28801 -0.0113294 8.35198 -0.0113294 8.36786 0.0341102Z" fill="#0C2118"/>
                            <path d="M8.36786 8.49249L8.54741 8.99056C8.74681 9.54333 9.18224 9.97876 9.73501 10.1782L10.2331 10.3577C10.2781 10.374 10.2781 10.4376 10.2331 10.4539L9.73501 10.6334C9.18224 10.8328 8.74681 11.2683 8.54741 11.821L8.36786 12.3191C8.35153 12.3641 8.28801 12.3641 8.27169 12.3191L8.09213 11.821C7.89273 11.2683 7.45731 10.8328 6.90453 10.6334L6.40647 10.4539C6.36147 10.4376 6.36147 10.374 6.40647 10.3577L6.90453 10.1782C7.45731 9.97876 7.89273 9.54333 8.09213 8.99056L8.27169 8.49249C8.28801 8.44749 8.35198 8.44749 8.36786 8.49249Z" fill="#0C2118"/>
                        </svg>
                    </div>
                    <p class="badge-text">CRM Solutions</p>
                </div>

                <h1 class="crm-solutions-title">
                    Smarter Customer Management <br>Built Around Your Business
                </h1>

                <p class="crm-solutions-description">
                    Managing customers, leads, tasks, and follow-ups across different tools can quickly become difficult. A well-structured CRM brings everything together and gives your team a clearer way to work.
                </p>

                <p class="crm-solutions-description">
                    At Kairos Solutions, we create flexible CRM solutions shaped around your sales process, team structure, and daily workflow — with reliable hosting, onboarding, and ongoing technical support.
                </p>

                <div class="crm-features-wrapper">
                    <div class="crm-feature-item">
                        <div class="crm-feature-icon">
                            <svg viewBox="0 0 10 10" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="1.5,5 4,8 8.5,2"/>
                            </svg>
                        </div>
                        Centralised customer and lead management
                    </div>
                    <div class="crm-feature-item">
                        <div class="crm-feature-icon">
                            <svg viewBox="0 0 10 10" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="1.5,5 4,8 8.5,2"/>
                            </svg>
                        </div>
                        Custom sales pipelines and workflows
                    </div>
                    <div class="crm-feature-item">
                        <div class="crm-feature-icon">
                            <svg viewBox="0 0 10 10" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="1.5,5 4,8 8.5,2"/>
                            </svg>
                        </div>
                        Tasks, reminders, reporting, and team visibility
                    </div>
                    <div class="crm-feature-item">
                        <div class="crm-feature-icon">
                            <svg viewBox="0 0 10 10" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="1.5,5 4,8 8.5,2"/>
                            </svg>
                        </div>
                        Managed hosting, onboarding, and ongoing support
                    </div>
                </div>

                <a href="{{ route('contact') }}" class="crm-solutions-cta">
                    Discuss Your CRM Needs
                </a>

            </div><!-- /content -->

            <!-- ── Right: Visual Cards ── -->
            <div class="crm-visual">

                <!-- Pipeline Card -->
                <div class="crm-card crm-card-accent">

                    <div class="crm-card-header">
                        <div class="crm-card-icon">
                            <svg viewBox="0 0 18 18" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="9" cy="5.5" r="3"/>
                                <path d="M2 16c0-3.5 3.1-6.5 7-6.5s7 3 7 6.5"/>
                            </svg>
                        </div>
                        <div>
                            <div class="crm-card-title">Active Pipeline</div>
                            <div class="crm-card-subtitle">3 leads in progress</div>
                        </div>
                    </div>

                    <div class="crm-pipeline-track">
                        <div class="crm-pipeline-stage active">Lead</div>
                        <div class="crm-pipeline-stage active">Qualified</div>
                        <div class="crm-pipeline-stage">Proposal</div>
                        <div class="crm-pipeline-stage">Closed</div>
                    </div>

                    <div class="crm-lead-row">
                        <div class="crm-lead-avatar avatar-primary">AH</div>
                        <div class="flex-1">
                            <div class="crm-lead-name">Adam Hughes</div>
                            <div class="crm-lead-company">Hughes Retail Co.</div>
                        </div>
                        <span class="crm-lead-pill pill-green">Qualified</span>
                    </div>

                    <div class="crm-lead-row">
                        <div class="crm-lead-avatar avatar-muted">ST</div>
                        <div class="flex-1">
                            <div class="crm-lead-name">Sara Thomas</div>
                            <div class="crm-lead-company">TechVentures Ltd</div>
                        </div>
                        <span class="crm-lead-pill pill-blue">Proposal</span>
                    </div>

                    <div class="crm-lead-row">
                        <div class="crm-lead-avatar avatar-muted">MK</div>
                        <div class="flex-1">
                            <div class="crm-lead-name">Mark Keller</div>
                            <div class="crm-lead-company">Keller Associates</div>
                        </div>
                        <span class="crm-lead-pill pill-amber">Follow-up</span>
                    </div>

                    <div class="crm-stats-row">
                        <div class="crm-stat-item">
                            <div class="crm-stat-value">24</div>
                            <div class="crm-stat-label">Active Leads</div>
                        </div>
                        <div class="crm-stat-item">
                            <div class="crm-stat-value">87%</div>
                            <div class="crm-stat-label">Response Rate</div>
                        </div>
                        <div class="crm-stat-item">
                            <div class="crm-stat-value">£62k</div>
                            <div class="crm-stat-label">Pipeline Value</div>
                        </div>
                    </div>

                </div><!-- /crm-card accent -->

                <!-- Tasks Card -->
                <div class="crm-card">

                    <div class="crm-card-header">
                        <div class="crm-card-icon">
                            <svg viewBox="0 0 18 18" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="2" width="14" height="14" rx="2.5"/>
                                <line x1="5.5" y1="6.5"  x2="12.5" y2="6.5"/>
                                <line x1="5.5" y1="9"    x2="10"   y2="9"/>
                                <line x1="5.5" y1="11.5" x2="8"    y2="11.5"/>
                            </svg>
                        </div>
                        <div>
                            <div class="crm-card-title">Today's Tasks</div>
                            <div class="crm-card-subtitle">3 of 4 completed</div>
                        </div>
                    </div>

                    <div class="crm-task-list">
                        <div class="crm-task-item">
                            <div class="crm-task-check done">
                                <svg viewBox="0 0 8 8" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="1,4 3,6.5 7,1.5"/>
                                </svg>
                            </div>
                            <span class="crm-task-text done">Send proposal to Adam Hughes</span>
                        </div>
                        <div class="crm-task-item">
                            <div class="crm-task-check done">
                                <svg viewBox="0 0 8 8" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="1,4 3,6.5 7,1.5"/>
                                </svg>
                            </div>
                            <span class="crm-task-text done">Schedule onboarding call – Sara Thomas</span>
                        </div>
                        <div class="crm-task-item">
                            <div class="crm-task-check done">
                                <svg viewBox="0 0 8 8" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="1,4 3,6.5 7,1.5"/>
                                </svg>
                            </div>
                            <span class="crm-task-text done">Update contact details – Keller Associates</span>
                        </div>
                        <div class="crm-task-item">
                            <div class="crm-task-check"></div>
                            <span class="crm-task-text">Review monthly pipeline report</span>
                        </div>
                    </div>

                </div><!-- /crm-card -->

            </div><!-- /crm-visual -->

        </div><!-- /container -->
    </section>

    <section class="we-offer-support">
        <div class="container mx-auto px-4">
            <div class="we-offer-support-card">
                <div class="content">
                    <div class="badge">
                        <div class="badge-icon">
                            <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.93945 2.39812L4.2937 3.38191C4.68721 4.47378 5.54703 5.3336 6.6389 5.72712L7.62268 6.08137C7.71135 6.11357 7.71135 6.23931 7.62268 6.27107L6.6389 6.62532C5.54703 7.01884 4.68721 7.87866 4.2937 8.97053L3.93945 9.95432C3.90724 10.043 3.78151 10.043 3.74975 9.95432L3.3955 8.97053C3.00199 7.87866 2.14217 7.01884 1.0503 6.62532L0.0665199 6.27107C-0.0221529 6.23886 -0.0221529 6.11313 0.0665199 6.08137L1.0503 5.72712C2.14217 5.3336 3.00199 4.47378 3.3955 3.38191L3.74975 2.39812C3.78151 2.309 3.90724 2.309 3.93945 2.39812Z" fill="#0C2118"/>
                                <path d="M8.36786 0.0341102L8.54741 0.532181C8.74681 1.08496 9.18224 1.52038 9.73501 1.71979L10.2331 1.89934C10.2781 1.91566 10.2781 1.97919 10.2331 1.99551L9.73501 2.17506C9.18224 2.37447 8.74681 2.80989 8.54741 3.36267L8.36786 3.86074C8.35153 3.90574 8.28801 3.90574 8.27169 3.86074L8.09213 3.36267C7.89273 2.80989 7.45731 2.37447 6.90453 2.17506L6.40647 1.99551C6.36147 1.97919 6.36147 1.91566 6.40647 1.89934L6.90453 1.71979C7.45731 1.52038 7.89273 1.08496 8.09213 0.532181L8.27169 0.0341102C8.28801 -0.0113294 8.35198 -0.0113294 8.36786 0.0341102Z" fill="#0C2118"/>
                                <path d="M8.36786 8.49249L8.54741 8.99056C8.74681 9.54333 9.18224 9.97876 9.73501 10.1782L10.2331 10.3577C10.2781 10.374 10.2781 10.4376 10.2331 10.4539L9.73501 10.6334C9.18224 10.8328 8.74681 11.2683 8.54741 11.821L8.36786 12.3191C8.35153 12.3641 8.28801 12.3641 8.27169 12.3191L8.09213 11.821C7.89273 11.2683 7.45731 10.8328 6.90453 10.6334L6.40647 10.4539C6.36147 10.4376 6.36147 10.374 6.40647 10.3577L6.90453 10.1782C7.45731 9.97876 7.89273 9.54333 8.09213 8.99056L8.27169 8.49249C8.28801 8.44749 8.35198 8.44749 8.36786 8.49249Z" fill="#0C2118"/>
                            </svg>
                        </div>
                        <p class="badge-text">MANAGED SOFTWARE SERVICES</p>
                    </div>
                    <h1 class="we-offer-support-title">
                        Your Software Should Keep<br> Working Long After Launch
                    </h1>
                    <p class="we-offer-support-desc">
                        Building the system is only the beginning. We continue to host, monitor, maintain, and support your software so your team can focus on running the business instead of managing technical problems.
                    </p>
                    <p class="we-offer-ssupport-desc-2">
                        With {{ $siteSettings['company_name'] }}, you have one technical partner responsible for deployment, backups, security updates, performance, technical support, and ongoing improvements.
                    </p>
                    <a href="#final-cta" class="we-offer-support-cta">
                        Explore Managed Support
                    </a>
                </div>

                <div class="we-offer-support-thumbnail">
                    <h2>Everything Managed in One Place</h2>
                    <img src="{{ asset('assets/imgs/we-offer-support-thumbnail.png') }}" alt="Managed support preview">
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section anchor-section" id="faq">
        <div class="container mx-auto px-4">
            <div class="faq-header">
                <div class="badge">
                    <div class="badge-icon">
                        <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.93945 2.39812L4.2937 3.38191C4.68721 4.47378 5.54703 5.3336 6.6389 5.72712L7.62268 6.08137C7.71135 6.11357 7.71135 6.23931 7.62268 6.27107L6.6389 6.62532C5.54703 7.01884 4.68721 7.87866 4.2937 8.97053L3.93945 9.95432C3.90724 10.043 3.78151 10.043 3.74975 9.95432L3.3955 8.97053C3.00199 7.87866 2.14217 7.01884 1.0503 6.62532L0.0665199 6.27107C-0.0221529 6.23886 -0.0221529 6.11313 0.0665199 6.08137L1.0503 5.72712C2.14217 5.3336 3.00199 4.47378 3.3955 3.38191L3.74975 2.39812C3.78151 2.309 3.90724 2.309 3.93945 2.39812Z" fill="#0C2118"/>
                            <path d="M8.36786 0.0341102L8.54741 0.532181C8.74681 1.08496 9.18224 1.52038 9.73501 1.71979L10.2331 1.89934C10.2781 1.91566 10.2781 1.97919 10.2331 1.99551L9.73501 2.17506C9.18224 2.37447 8.74681 2.80989 8.54741 3.36267L8.36786 3.86074C8.35153 3.90574 8.28801 3.90574 8.27169 3.86074L8.09213 3.36267C7.89273 2.80989 7.45731 2.37447 6.90453 2.17506L6.40647 1.99551C6.36147 1.97919 6.36147 1.91566 6.40647 1.89934L6.90453 1.71979C7.45731 1.52038 7.89273 1.08496 8.09213 0.532181L8.27169 0.0341102C8.28801 -0.0113294 8.35198 -0.0113294 8.36786 0.0341102Z" fill="#0C2118"/>
                            <path d="M8.36786 8.49249L8.54741 8.99056C8.74681 9.54333 9.18224 9.97876 9.73501 10.1782L10.2331 10.3577C10.2781 10.374 10.2781 10.4376 10.2331 10.4539L9.73501 10.6334C9.18224 10.8328 8.74681 11.2683 8.54741 11.821L8.36786 12.3191C8.35153 12.3641 8.28801 12.3641 8.27169 12.3191L8.09213 11.821C7.89273 11.2683 7.45731 10.8328 6.90453 10.6334L6.40647 10.4539C6.36147 10.4376 6.36147 10.374 6.40647 10.3577L6.90453 10.1782C7.45731 9.97876 7.89273 9.54333 8.09213 8.99056L8.27169 8.49249C8.28801 8.44749 8.35198 8.44749 8.36786 8.49249Z" fill="#0C2118"/>
                        </svg>
                    </div>
                    <p class="badge-text">Common Questions</p>
                </div>
                <h1 class="faq-title">Frequently Asked Questions</h1>
            </div>

            <div class="faq-list">
                @forelse ($faqs as $faq)
                    <div class="faq-item">
                        <button class="faq-question" aria-expanded="false">
                            <span>{{ $faq->question }}</span>
                            <span class="faq-icon" aria-hidden="true">
                                <svg class="faq-icon-plus" viewBox="0 0 18 18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                                    <line x1="9" y1="3" x2="9" y2="15"></line>
                                    <line x1="3" y1="9" x2="15" y2="9"></line>
                                </svg>
                                <svg class="faq-icon-minus" viewBox="0 0 18 18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                                    <line x1="3" y1="9" x2="15" y2="9"></line>
                                </svg>
                            </span>
                        </button>
                        <div class="faq-answer">
                            <p>{{ $faq->answer }}</p>
                        </div>
                    </div>
                @empty
                    <div class="faq-item open">
                        <button class="faq-question" aria-expanded="true">
                            <span>We are updating our frequently asked questions.</span>
                            <span class="faq-icon" aria-hidden="true">
                                <svg class="faq-icon-minus" viewBox="0 0 18 18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
                                    <line x1="3" y1="9" x2="15" y2="9"></line>
                                </svg>
                            </span>
                        </button>
                        <div class="faq-answer">
                            <p>Please contact us directly and we will be happy to answer your questions.</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    @include('partials.site.final-cta')
@endsection
