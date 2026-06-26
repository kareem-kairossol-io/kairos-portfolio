<footer class="site-footer">
    <div class="container mx-auto px-4">
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="{{ route('home') }}" aria-label="{{ $siteSettings['company_name'] }} home">
                    <img src="{{ asset('assets/imgs/logo.png') }}" alt="{{ $siteSettings['company_name'] }}" class="footer-logo">
                </a>
                <p class="footer-brand-desc">
                    {{ $siteSettings['footer_description'] }}
                </p>
            </div>

            <div class="footer-col">
                <h3 class="footer-col-heading">Quick links</h3>
                <ul class="footer-nav">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('home') }}#services">Our Solutions</a></li>
                    <li><a href="{{ route('home') }}#crm-solutions">Kairos CRM</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3 class="footer-col-heading">Services</h3>
                <ul class="footer-nav">
                    <li><a href="{{ route('home') }}#services">Custom Business Systems</a></li>
                    <li><a href="{{ route('home') }}#services">Managed Hosting &amp; Ongoing Support</a></li>
                    <li><a href="{{ route('home') }}#services">Web &amp; E-Commerce Solutions</a></li>
                    <li><a href="{{ route('home') }}#services">CRM &amp; Business Tools</a></li>
                    <li><a href="{{ route('home') }}#services">Mobile Applications</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3 class="footer-col-heading">Legal</h3>
                <ul class="footer-nav">
                    <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('terms') }}">Terms of Service</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3 class="footer-col-heading">Social</h3>
                <div class="footer-socials">
                    @if ($siteSettings['instagram_url'])
                        <a href="{{ $siteSettings['instagram_url'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $siteSettings['company_name'] }} on Instagram" class="footer-social-btn">
                            <svg viewBox="0 0 511 511.9" fill="currentColor" aria-hidden="true">
                                <path d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0"></path>
                                <path d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0"></path>
                                <path d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0"></path>
                            </svg>
                        </a>
                    @endif

                    @if ($siteSettings['facebook_url'])
                        <a href="{{ $siteSettings['facebook_url'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $siteSettings['company_name'] }} on Facebook" class="footer-social-btn">
                            <svg viewBox="0 0 155.139 155.139" fill="currentColor" aria-hidden="true">
                                <path d="M89.584 155.139V84.378h23.742l3.562-27.585H89.584V39.184c0-7.984 2.208-13.425 13.67-13.425l14.595-.006V1.08C115.325.752 106.661 0 96.577 0 75.52 0 61.104 12.853 61.104 36.452v20.341H37.29v27.585h23.814v70.761H89.584z"></path>
                            </svg>
                        </a>
                    @endif

                    <a href="{{ $siteSettings['whatsapp_url'] }}" target="_blank" rel="noopener noreferrer" aria-label="Contact {{ $siteSettings['company_name'] }} on WhatsApp" class="footer-social-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9"></path>
                            <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1"></path>
                        </svg>
                    </a>

                    @if ($siteSettings['linkedin_url'])
                        <a href="{{ $siteSettings['linkedin_url'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $siteSettings['company_name'] }} on LinkedIn" class="footer-social-btn">
                            <svg viewBox="0 0 100 100" fill="currentColor" aria-hidden="true">
                                <path d="M90 90V60.7c0-14.4-3.1-25.4-19.9-25.4-8.1 0-13.5 4.4-15.7 8.6h-.2v-7.3H38.3V90h16.6V63.5c0-7 1.3-13.7 9.9-13.7 8.5 0 8.6 7.9 8.6 14.1v26H90z"></path>
                                <path d="M11.3 36.6h16.6V90H11.3z"></path>
                                <path d="M19.6 10c-5.3 0-9.6 4.3-9.6 9.6s4.3 9.7 9.6 9.7 9.6-4.4 9.6-9.7-4.3-9.6-9.6-9.6z"></path>
                            </svg>
                        </a>
                    @endif

                    @if ($siteSettings['x_url'])
                        <a href="{{ $siteSettings['x_url'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $siteSettings['company_name'] }} on X" class="footer-social-btn">
                            <svg viewBox="0 0 1226.37 1226.37" fill="currentColor" aria-hidden="true">
                                <path d="m727.348 519.284 446.727-519.284h-105.86l-387.893 450.887-309.809-450.887h-357.328l468.492 681.821-468.492 544.549h105.866l409.625-476.152 327.181 476.152h357.328l-485.863-707.086zm-144.998 168.544-47.468-67.894-377.686-540.24h162.604l304.797 435.991 47.468 67.894 396.2 566.721h-162.604l-323.311-462.446z"></path>
                            </svg>
                        </a>
                    @endif
                </div>
            </div>
        </div>

        <div class="footer-divider"></div>

        <div class="footer-bottom">
            <p class="footer-copyright">© {{ now()->year }} {{ $siteSettings['company_name'] }}, All Rights Reserved</p>
            <button class="footer-back-top" id="footerBackTop" aria-label="Back to top">
                Back To Top
                <svg viewBox="0 0 18 18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <line x1="9" y1="14" x2="9" y2="4"></line>
                    <polyline points="4,9 9,4 14,9"></polyline>
                </svg>
            </button>
        </div>
    </div>
</footer>
