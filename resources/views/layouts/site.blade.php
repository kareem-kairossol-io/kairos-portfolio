<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/output.css') }}?v=1.0.1" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/imgs/favicon.ico') }}" type="image/x-icon">
    <style>
        :root {
            --header-anchor-offset: 120px;
        }

        body.menu-open {
            overflow: hidden;
        }

        .anchor-section {
            position: relative;
            scroll-margin-top: var(--header-anchor-offset);
        }

        .anchor-section::before {
            content: '';
            display: block;
            height: var(--header-anchor-offset);
            margin-top: calc(var(--header-anchor-offset) * -1);
            visibility: hidden;
            pointer-events: none;
        }

        .nav-overlay {
            min-height: 100vh;
            min-height: 100dvh;
            overflow-y: auto;
            background-color: rgba(12, 33, 24, 0.96);
        }

        .nav-mobile {
            min-height: 100%;
        }
    </style>
    <title>@yield('title', $siteSettings['company_name'])</title>
    @stack('styles')
</head>
<body>
    @include('partials.site.header')

    <main>
        @yield('content')
    </main>

    @include('partials.site.footer')
    @include('partials.site.scripts')
    @stack('scripts')
</body>
</html>
