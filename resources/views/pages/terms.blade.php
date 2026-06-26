@extends('layouts.site')

@section('title', 'Terms of Service | '.$siteSettings['company_name'])

@push('styles')
    <style>
        .policy-page {
            padding: 4rem 0 6rem;
        }

        .policy-card {
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem;
            border-radius: 28px;
            background: #fff;
            box-shadow: 0 20px 60px rgba(12, 33, 24, 0.08);
        }

        .policy-card h2 {
            margin: 2rem 0 0.75rem;
            font-size: 1.5rem;
            color: #0c2118;
        }

        .policy-card p,
        .policy-card li {
            color: #41504a;
            line-height: 1.8;
        }

        .policy-card ul {
            margin: 1rem 0 0;
            padding-left: 1.25rem;
            list-style: disc;
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
                <p class="hero-badge-text">TERMS OF SERVICE</p>
            </div>
            <h1 class="hero-title">The Terms That Govern Our Services</h1>
            <p class="hero-description">These Terms of Service describe the general conditions under which {{ $siteSettings['company_name'] }} provides website access, software development, hosting, and ongoing support services.</p>
        </div>
    </section>

    <section class="policy-page">
        <div class="container mx-auto px-4">
            <div class="policy-card">
                <p>By using this website or engaging {{ $siteSettings['company_name'] }} for services, you agree to these Terms of Service. Project-specific contracts, proposals, or statements of work may add more detailed commercial terms where applicable.</p>

                <h2>Services</h2>
                <p>We provide services that may include software planning, design, development, deployment, hosting coordination, support, maintenance, and related advisory work. Specific deliverables, timelines, payment terms, and support scope are defined in project agreements.</p>

                <h2>Client Responsibilities</h2>
                <ul>
                    <li>Provide accurate information, timely feedback, and access to required business or technical materials.</li>
                    <li>Review deliverables promptly and raise material concerns within a reasonable period.</li>
                    <li>Use delivered systems lawfully and in a manner consistent with agreed project scope.</li>
                </ul>

                <h2>Intellectual Property</h2>
                <p>Ownership of final project deliverables is governed by the relevant client agreement. Unless otherwise agreed, pre-existing tools, templates, methods, and internal frameworks remain the property of {{ $siteSettings['company_name'] }} or their original licensors.</p>

                <h2>Hosting and Support</h2>
                <p>Where support or hosting services are included, we will use reasonable efforts to maintain service continuity and respond to operational issues in line with the agreed support arrangement. We do not guarantee uninterrupted or error-free service in all circumstances.</p>

                <h2>Fees and Payment</h2>
                <p>Fees, billing schedules, and payment deadlines are defined in proposals or service agreements. Delayed payments may affect delivery schedules, support response times, or continued access to non-essential services.</p>

                <h2>Limitation of Liability</h2>
                <p>To the fullest extent allowed by law, {{ $siteSettings['company_name'] }} is not liable for indirect, incidental, consequential, or special damages, including lost profits, business interruption, or data loss, except where liability cannot legally be excluded.</p>

                <h2>Termination</h2>
                <p>Either party may terminate services in accordance with the relevant agreement. On termination, both parties remain responsible for obligations already incurred, including completed work, outstanding payments, and agreed transition steps.</p>

                <h2>Changes to These Terms</h2>
                <p>We may update these Terms of Service to reflect operational or legal changes. Continued use of the website or services after updates means you accept the revised terms.</p>
            </div>
        </div>
    </section>

    @include('partials.site.final-cta')
@endsection
