<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/css/output.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('assets/imgs/favicon.ico') }}" type="image/x-icon">
    <style>
        :root {
            --header-anchor-offset: 120px;
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
