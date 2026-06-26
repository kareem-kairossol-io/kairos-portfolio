<section class="final-contact-cta anchor-section" id="final-cta">
    <div class="container mx-auto px-4">
        <div class="final-contact-panel">
            <div class="final-contact-content">
                <div class="final-contact-badge">
                    <span class="final-contact-badge-icon" aria-hidden="true">
                        <svg width="11" height="13" viewBox="0 0 11 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.93945 2.39812L4.2937 3.38191C4.68721 4.47378 5.54703 5.3336 6.6389 5.72712L7.62268 6.08137C7.71135 6.11357 7.71135 6.23931 7.62268 6.27107L6.6389 6.62532C5.54703 7.01884 4.68721 7.87866 4.2937 8.97053L3.93945 9.95432C3.90724 10.043 3.78151 10.043 3.74975 9.95432L3.3955 8.97053C3.00199 7.87866 2.14217 7.01884 1.0503 6.62532L0.0665199 6.27107C-0.0221529 6.23886 -0.0221529 6.11313 0.0665199 6.08137L1.0503 5.72712C2.14217 5.3336 3.00199 4.47378 3.3955 3.38191L3.74975 2.39812C3.78151 2.309 3.90724 2.309 3.93945 2.39812Z" fill="#0C2118"/>
                            <path d="M8.36786 0.0341102L8.54741 0.532181C8.74681 1.08496 9.18224 1.52038 9.73501 1.71979L10.2331 1.89934C10.2781 1.91566 10.2781 1.97919 10.2331 1.99551L9.73501 2.17506C9.18224 2.37447 8.74681 2.80989 8.54741 3.36267L8.36786 3.86074C8.35153 3.90574 8.28801 3.90574 8.27169 3.86074L8.09213 3.36267C7.89273 2.80989 7.45731 2.37447 6.90453 2.17506L6.40647 1.99551C6.36147 1.97919 6.36147 1.91566 6.40647 1.89934L6.90453 1.71979C7.45731 1.52038 7.89273 1.08496 8.09213 0.532181L8.27169 0.0341102C8.28801 -0.0113294 8.35198 -0.0113294 8.36786 0.0341102Z" fill="#0C2118"/>
                            <path d="M8.36786 8.49249L8.54741 8.99056C8.74681 9.54333 9.18224 9.97876 9.73501 10.1782L10.2331 10.3577C10.2781 10.374 10.2781 10.4376 10.2331 10.4539L9.73501 10.6334C9.18224 10.8328 8.74681 11.2683 8.54741 11.821L8.36786 12.3191C8.35153 12.3641 8.28801 12.3641 8.27169 12.3191L8.09213 11.821C7.89273 11.2683 7.45731 10.8328 6.90453 10.6334L6.40647 10.4539C6.36147 10.4376 6.36147 10.374 6.40647 10.3577L6.90453 10.1782C7.45731 9.97876 7.89273 9.54333 8.09213 8.99056L8.27169 8.49249C8.28801 8.44749 8.35198 8.44749 8.36786 8.49249Z" fill="#0C2118"/>
                        </svg>
                    </span>
                    <span>READY TO BUILD?</span>
                </div>

                <h2 class="final-contact-title">
                    Turn Your Business Needs
                    <br>
                    Into a Reliable Software Solution
                </h2>

                <p class="final-contact-description">
                    Tell us what your business needs, and we’ll help you plan, build, host, and support a solution designed around the way your team works.
                </p>

                <div class="final-contact-actions">
                    <a href="{{ route('contact') }}" class="final-contact-primary">
                        <span>Discuss Your Project</span>
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M5 12H19M14 7L19 12L14 17" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>

                    <a href="{{ $siteSettings['whatsapp_url'] }}" target="_blank" rel="noopener noreferrer" class="final-contact-whatsapp">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                            <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                        </svg>
                        <span>Chat on WhatsApp</span>
                    </a>
                </div>
            </div>

            <div class="final-contact-channels">
                <div class="final-contact-methods">
                    <a href="mailto:{{ $siteSettings['contact_email'] }}" class="final-contact-channel">
                        <span class="final-contact-channel-icon">
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <rect x="3" y="5" width="18" height="14" rx="3" stroke="currentColor" stroke-width="1.7" />
                                <path d="M5 8L12 13L19 8" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span class="final-contact-channel-copy">
                            <small>Email us</small>
                            <strong>{{ $siteSettings['contact_email'] }}</strong>
                        </span>
                        <span class="final-contact-channel-arrow">↗</span>
                    </a>

                    <a href="tel:{{ $siteSettings['phone_href'] }}" class="final-contact-channel">
                        <span class="final-contact-channel-icon">
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M7.5 4H5.7C4.76 4 4 4.76 4 5.7C4 13.6 10.4 20 18.3 20C19.24 20 20 19.24 20 18.3V16.5L15.8 15.5L14.8 18C11.1 16.65 7.35 12.9 6 9.2L8.5 8.2L7.5 4Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span class="final-contact-channel-copy">
                            <small>Call us</small>
                            <strong>{{ $siteSettings['phone_display'] }}</strong>
                        </span>
                        <span class="final-contact-channel-arrow">↗</span>
                    </a>

                    <a href="{{ route('contact') }}" class="final-contact-channel">
                        <span class="final-contact-channel-icon">
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M5 5H19V16H9L5 20V5Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8 9H16M8 12.5H13" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                            </svg>
                        </span>
                        <span class="final-contact-channel-copy">
                            <small>Have more details?</small>
                            <strong>Send us a message</strong>
                        </span>
                        <span class="final-contact-channel-arrow">↗</span>
                    </a>
                </div>

                <div class="final-contact-social-row">
                    <p>Connect with Kairos</p>

                    <div class="final-contact-socials">
                        @if ($siteSettings['linkedin_url'])
                            <a href="{{ $siteSettings['linkedin_url'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $siteSettings['company_name'] }} on LinkedIn" class="final-contact-social">
                                <svg viewBox="0 0 100 100" fill="currentColor" aria-hidden="true">
                                    <path d="M90 90V60.7c0-14.4-3.1-25.4-19.9-25.4-8.1 0-13.5 4.4-15.7 8.6h-.2v-7.3H38.3V90h16.6V63.5c0-7 1.3-13.7 9.9-13.7 8.5 0 8.6 7.9 8.6 14.1v26H90z"></path>
                                    <path d="M11.3 36.6h16.6V90H11.3z"></path>
                                    <path d="M19.6 10c-5.3 0-9.6 4.3-9.6 9.6s4.3 9.7 9.6 9.7 9.6-4.4 9.6-9.7-4.3-9.6-9.6-9.6z"></path>
                                </svg>
                            </a>
                        @endif

                        @if ($siteSettings['x_url'])
                            <a href="{{ $siteSettings['x_url'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $siteSettings['company_name'] }} on X" class="final-contact-social">
                                <svg viewBox="0 0 1226.37 1226.37" fill="currentColor" aria-hidden="true">
                                    <path d="m727.348 519.284 446.727-519.284h-105.86l-387.893 450.887-309.809-450.887h-357.328l468.492 681.821-468.492 544.549h105.866l409.625-476.152 327.181 476.152h357.328l-485.863-707.086zm-144.998 168.544-47.468-67.894-377.686-540.24h162.604l304.797 435.991 47.468 67.894 396.2 566.721h-162.604l-323.311-462.446z"></path>
                                </svg>
                            </a>
                        @endif

                        @if ($siteSettings['facebook_url'])
                            <a href="{{ $siteSettings['facebook_url'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $siteSettings['company_name'] }} on Facebook" class="final-contact-social">
                                <svg viewBox="0 0 155.139 155.139" fill="currentColor" aria-hidden="true">
                                    <path d="M89.584 155.139V84.378h23.742l3.562-27.585H89.584V39.184c0-7.984 2.208-13.425 13.67-13.425l14.595-.006V1.08C115.325.752 106.661 0 96.577 0 75.52 0 61.104 12.853 61.104 36.452v20.341H37.29v27.585h23.814v70.761H89.584z"></path>
                                </svg>
                            </a>
                        @endif

                        @if ($siteSettings['instagram_url'])
                            <a href="{{ $siteSettings['instagram_url'] }}" target="_blank" rel="noopener noreferrer" aria-label="{{ $siteSettings['company_name'] }} on Instagram" class="final-contact-social">
                                <svg viewBox="0 0 511 511.9" fill="currentColor" aria-hidden="true">
                                    <path d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0"></path>
                                    <path d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0"></path>
                                    <path d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0"></path>
                                </svg>
                            </a>
                        @endif

                        <a href="tel:{{ $siteSettings['phone_href'] }}" aria-label="Call {{ $siteSettings['company_name'] }}" class="final-contact-social">
                            <svg viewBox="0 0 513.64 513.64" fill="currentColor" aria-hidden="true">
                                <path d="M499.66 376.96 427.98 305.28c-25.6-25.6-69.12-15.359-79.36 17.92-7.68 23.041-33.28 35.841-56.32 30.72-51.2-12.8-120.32-79.36-133.12-133.12-7.68-23.041 7.68-48.641 30.72-56.32 33.28-10.24 43.52-53.76 17.92-79.36l-71.68-71.68c-20.48-17.92-51.2-17.92-69.12 0l-48.64 48.64c-48.64 51.2 5.12 186.88 125.44 307.2 120.32 120.32 256 176.641 307.2 125.44l48.64-48.64c17.921-20.48 17.921-51.2 0-69.12z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
