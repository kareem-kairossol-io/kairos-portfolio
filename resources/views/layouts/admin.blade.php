<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin').' | Kairos Solutions'</title>
    <style>
        :root {
            --bg: #f4f6f2;
            --card: #ffffff;
            --text: #0c2118;
            --muted: #66756e;
            --line: #dce3dd;
            --accent: #00b86a;
            --accent-dark: #0c2118;
            --danger: #b83b3b;
        }

        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
        }

        a { color: inherit; text-decoration: none; }

        .admin-shell {
            display: grid;
            grid-template-columns: 280px 1fr;
            min-height: 100vh;
        }

        .admin-sidebar {
            padding: 2rem;
            background: linear-gradient(180deg, #0c2118, #133228);
            color: #fff;
        }

        .admin-brand img {
            width: 148px;
            margin-bottom: 1rem;
        }

        .admin-brand p {
            margin: 0 0 2rem;
            color: rgba(255, 255, 255, 0.75);
            line-height: 1.7;
        }

        .admin-nav a,
        .admin-nav button {
            display: block;
            width: 100%;
            margin-bottom: 0.75rem;
            padding: 0.9rem 1rem;
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 16px;
            background: transparent;
            color: #fff;
            text-align: left;
            cursor: pointer;
            font: inherit;
        }

        .admin-nav a.active,
        .admin-nav a:hover,
        .admin-nav button:hover {
            background: rgba(255, 255, 255, 0.08);
        }

        .admin-main {
            padding: 2rem;
        }

        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .admin-header h1 {
            margin: 0 0 0.4rem;
            font-size: 2rem;
        }

        .admin-header p {
            margin: 0;
            color: var(--muted);
        }

        .admin-meta {
            color: var(--muted);
            text-align: right;
        }

        .admin-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1rem;
        }

        .card {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 24px;
            padding: 1.5rem;
            box-shadow: 0 18px 40px rgba(12, 33, 24, 0.06);
        }

        .card h2,
        .card h3 {
            margin-top: 0;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: bold;
            margin: 0.4rem 0;
        }

        .flash {
            margin-bottom: 1rem;
            padding: 1rem 1.2rem;
            border-radius: 18px;
        }

        .flash.success {
            background: rgba(0, 184, 106, 0.12);
        }

        .flash.error {
            background: rgba(184, 59, 59, 0.12);
            color: var(--danger);
        }

        .flash ul {
            margin: 0.75rem 0 0;
            padding-left: 1.25rem;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1rem;
        }

        .field {
            margin-bottom: 1rem;
        }

        .field label {
            display: block;
            margin-bottom: 0.45rem;
            font-weight: bold;
        }

        .field input,
        .field textarea,
        .field select {
            width: 100%;
            padding: 0.9rem 1rem;
            border: 1px solid var(--line);
            border-radius: 14px;
            background: #fff;
            font: inherit;
            color: var(--text);
        }

        .field textarea {
            min-height: 130px;
            resize: vertical;
        }

        .checkbox {
            display: inline-flex;
            align-items: center;
            gap: 0.55rem;
        }

        .checkbox input {
            width: auto;
        }

        .actions {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
            margin-top: 1rem;
        }

        .button,
        .button-secondary,
        .button-danger {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.9rem 1.25rem;
            border-radius: 14px;
            border: 0;
            cursor: pointer;
            font: inherit;
            font-weight: bold;
        }

        .button {
            background: var(--accent);
            color: #0c2118;
        }

        .button-secondary {
            background: #edf3ee;
            color: var(--text);
        }

        .button-danger {
            background: rgba(184, 59, 59, 0.12);
            color: var(--danger);
        }

        .faq-stack {
            display: grid;
            gap: 1rem;
        }

        @media (max-width: 960px) {
            .admin-shell {
                grid-template-columns: 1fr;
            }

            .admin-meta {
                text-align: left;
            }

            .admin-header {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="admin-shell">
        <aside class="admin-sidebar">
            <div class="admin-brand">
                <img src="{{ asset('assets/imgs/logo-white-small.png') }}" alt="Kairos Solutions">
                <p>Manage the public website content, editable FAQ entries, and all contact and social details from one place.</p>
            </div>

            <nav class="admin-nav">
                <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">Dashboard</a>
                <a href="{{ route('admin.settings.edit') }}" class="{{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">Contact Settings</a>
                <a href="{{ route('admin.faqs.index') }}" class="{{ request()->routeIs('admin.faqs.*') ? 'active' : '' }}">FAQs</a>

                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </nav>
        </aside>

        <div class="admin-main">
            <div class="admin-header">
                <div>
                    <h1>@yield('heading', 'Admin')</h1>
                    <p>@yield('subheading', 'Manage the Kairos website content and settings.')</p>
                </div>
                <div class="admin-meta">
                    <strong>{{ auth()->user()->name }}</strong><br>
                    {{ auth()->user()->email }}
                </div>
            </div>

            @if (session('status'))
                <div class="flash success">{{ session('status') }}</div>
            @endif

            @if ($errors->any())
                <div class="flash error">
                    Please review the items below.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </div>
    </div>
</body>
</html>
