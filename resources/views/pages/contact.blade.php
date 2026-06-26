@extends('layouts.site')

@section('title', 'Contact Us | '.$siteSettings['company_name'])

@push('styles')
    <style>
        .contact-flash {
            margin-bottom: 1rem;
            border-radius: 18px;
            padding: 1rem 1.2rem;
            font-size: 0.95rem;
        }

        .contact-flash--success {
            background: rgba(0, 184, 106, 0.12);
            color: #0c2118;
        }

        .contact-flash--error {
            background: rgba(184, 54, 54, 0.12);
            color: #7a1e1e;
        }

        .contact-error-list {
            margin-top: 0.5rem;
            padding-left: 1rem;
            list-style: disc;
        }

        .contact-flash[hidden] {
            display: none;
        }

        .contact-submit[disabled] {
            opacity: 0.7;
            cursor: wait;
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
                <p class="hero-badge-text">Get In Touch</p>
            </div>
            <h1 class="hero-title">Let’s Talk About What <br>Your Business Needs</h1>
            <p class="hero-description">Tell us what you want to build, improve, or simplify. We’ll help you plan the right solution and support it from development and deployment to hosting and ongoing maintenance.</p>
        </div>
    </section>

    @include('partials.site.news-bar')

    <section class="contact-section" id="contact-page">
        <div class="container mx-auto px-4">
            <div class="contact-layout">
                <div class="contact-content">
                    <div class="contact-badge">
                        <span class="contact-badge-icon">
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M4 4h16v16H4V4Z" stroke="currentColor" stroke-width="1.7" />
                                <path d="m4 6 8 6 8-6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span>LET’S WORK TOGETHER</span>
                    </div>

                    <h2 class="contact-title">
                        Tell Us About
                        <br>
                        Your Project
                    </h2>

                    <p class="contact-description">
                        Share a few details about your business and the solution you need. We’ll review your requirements and contact you to discuss the best way to move forward.
                    </p>

                    <div class="contact-location">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z" stroke="currentColor" stroke-width="1.7" />
                            <circle cx="12" cy="10" r="2.5" stroke="currentColor" stroke-width="1.7" />
                        </svg>
                        <span>{{ $siteSettings['location_text'] }}</span>
                    </div>

                    <div class="contact-methods">
                        <a href="mailto:{{ $siteSettings['contact_email'] }}" class="contact-method">
                            <span class="contact-method-icon">
                                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M4 6h16v12H4V6Z" stroke="currentColor" stroke-width="1.7" />
                                    <path d="m4 8 8 6 8-6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span>{{ $siteSettings['contact_email'] }}</span>
                        </a>

                        <a href="tel:{{ $siteSettings['phone_href'] }}" class="contact-method">
                            <span class="contact-method-icon">
                                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M7 4 4.8 6.2c-.9.9-.7 2.7.3 4.7 1.8 3.5 4.5 6.2 8 8 2 .9 3.8 1.1 4.7.2L20 17l-4-3-2 2c-2.6-1.2-4.8-3.4-6-6l2-2-3-4Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span>{{ $siteSettings['phone_display'] }}</span>
                        </a>

                        <a href="{{ $siteSettings['whatsapp_url'] }}" target="_blank" rel="noopener noreferrer" class="contact-method">
                            <span class="contact-method-icon">
                                <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M3 21l1.7-4A9 9 0 1 1 8 20.1L3 21Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9 9.5c.7 2.2 2.3 3.8 4.5 4.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                                </svg>
                            </span>
                            <span>Chat on WhatsApp</span>
                        </a>
                    </div>
                </div>

                <div class="contact-form-card">
                    <div id="contactAjaxFlash" class="contact-flash" hidden></div>

                    @if (session('status'))
                        <div class="contact-flash contact-flash--success">{{ session('status') }}</div>
                    @endif

                    @if ($errors->any())
                        <div class="contact-flash contact-flash--error">
                            We could not send your message yet.
                            <ul class="contact-error-list">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="contact-form" id="contactForm" novalidate>
                        @csrf

                        <input type="text" name="_gotcha" class="hidden" tabindex="-1" autocomplete="off">

                        <div class="contact-field">
                            <label for="contact-name" class="contact-label">Name</label>
                            <div class="contact-control-wrapper">
                                <span class="contact-control-icon">
                                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <circle cx="12" cy="8" r="3" stroke="currentColor" stroke-width="1.7" />
                                        <path d="M5 20c.5-4 3-6 7-6s6.5 2 7 6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                                    </svg>
                                </span>
                                <input id="contact-name" type="text" name="name" class="contact-control" placeholder="Enter your name" autocomplete="name" value="{{ old('name') }}" required>
                            </div>
                        </div>

                        <div class="contact-field">
                            <label for="contact-email" class="contact-label">Email</label>
                            <div class="contact-control-wrapper">
                                <span class="contact-control-icon">
                                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M4 6h16v12H4V6Z" stroke="currentColor" stroke-width="1.7" />
                                        <path d="m4 8 8 6 8-6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <input id="contact-email" type="email" name="email" class="contact-control" placeholder="Enter your email" autocomplete="email" value="{{ old('email') }}" required>
                            </div>
                        </div>

                        <div class="contact-field">
                            <label for="contact-phone" class="contact-label">Phone Number</label>
                            <div class="contact-control-wrapper">
                                <span class="contact-control-icon">
                                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="M7 4 4.8 6.2c-.9.9-.7 2.7.3 4.7 1.8 3.5 4.5 6.2 8 8 2 .9 3.8 1.1 4.7.2L20 17l-4-3-2 2c-2.6-1.2-4.8-3.4-6-6l2-2-3-4Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <input id="contact-phone" type="tel" name="phone" class="contact-control" placeholder="Enter your phone number" autocomplete="tel" value="{{ old('phone') }}">
                            </div>
                        </div>

                        <div class="contact-field">
                            <label for="contact-service" class="contact-label">Service</label>
                            <div class="contact-control-wrapper">
                                <span class="contact-control-icon">
                                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <rect x="4" y="5" width="16" height="14" rx="2" stroke="currentColor" stroke-width="1.7" />
                                        <path d="M8 9h8M8 13h5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" />
                                    </svg>
                                </span>
                                <select id="contact-service" name="service" class="contact-control contact-select" required>
                                    <option value="" disabled @selected(! old('service'))>Select a service</option>
                                    @foreach ($serviceOptions as $value => $label)
                                        <option value="{{ $value }}" @selected(old('service') === $value)>{{ $label }}</option>
                                    @endforeach
                                </select>
                                <span class="contact-select-arrow">
                                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                        <path d="m7 9 5 5 5-5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <div class="contact-field">
                            <label for="contact-message" class="contact-label">Project Details</label>
                            <textarea id="contact-message" name="message" class="contact-control contact-textarea" placeholder="Tell us briefly about your project, business needs, and goals" required>{{ old('message') }}</textarea>
                        </div>

                        <button type="submit" class="contact-submit">
                            <span>Send Project Details</span>
                            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M5 12h14M14 7l5 5-5 5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>

                        <p class="contact-form-note">
                            Your information will only be used to respond to your inquiry.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('partials.site.final-cta')
@endsection

@push('scripts')
    <script>
        (function () {
            const form = document.getElementById('contactForm');
            const flash = document.getElementById('contactAjaxFlash');

            if (!form || !flash) {
                return;
            }

            const submitButton = form.querySelector('.contact-submit');
            const submitLabel = submitButton ? submitButton.querySelector('span') : null;
            const defaultLabel = submitLabel ? submitLabel.textContent : '';

            function setFlash(type, message, errors) {
                flash.className = 'contact-flash ' + (type === 'success' ? 'contact-flash--success' : 'contact-flash--error');
                flash.hidden = false;

                let html = message;

                if (errors && errors.length) {
                    html += '<ul class="contact-error-list">' + errors.map(function (error) {
                        return '<li>' + error + '</li>';
                    }).join('') + '</ul>';
                }

                flash.innerHTML = html;
            }

            function clearFlash() {
                flash.hidden = true;
                flash.textContent = '';
                flash.className = 'contact-flash';
            }

            form.addEventListener('submit', async function (event) {
                event.preventDefault();
                clearFlash();

                if (submitButton) {
                    submitButton.disabled = true;
                }

                if (submitLabel) {
                    submitLabel.textContent = 'Sending...';
                }

                try {
                    const response = await fetch(form.action, {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                        },
                        body: new FormData(form),
                    });

                    const data = await response.json();

                    if (!response.ok) {
                        const errors = data.errors ? Object.values(data.errors).flat() : [];
                        setFlash('error', data.message || 'We could not send your message yet.', errors);
                        return;
                    }

                    setFlash('success', data.message || 'Your message was sent successfully.');
                    form.reset();
                } catch (error) {
                    setFlash('error', 'We could not send your message right now. Please try again.');
                } finally {
                    if (submitButton) {
                        submitButton.disabled = false;
                    }

                    if (submitLabel) {
                        submitLabel.textContent = defaultLabel;
                    }
                }
            });
        })();
    </script>
@endpush
