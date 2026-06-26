<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Kairos Solutions</title>
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            background: radial-gradient(circle at top, #e4f6ec, #f4f6f2 55%);
            font-family: Arial, sans-serif;
            color: #0c2118;
        }

        .login-card {
            width: min(420px, calc(100% - 2rem));
            padding: 2rem;
            border-radius: 28px;
            background: #fff;
            box-shadow: 0 24px 80px rgba(12, 33, 24, 0.1);
        }

        .login-card img {
            width: 140px;
            margin-bottom: 1rem;
        }

        .login-card h1 {
            margin: 0 0 0.5rem;
        }

        .login-card p {
            margin: 0 0 1.5rem;
            color: #66756e;
            line-height: 1.7;
        }

        .field {
            margin-bottom: 1rem;
        }

        .field label {
            display: block;
            margin-bottom: 0.45rem;
            font-weight: bold;
        }

        .field input {
            width: 100%;
            padding: 0.9rem 1rem;
            border: 1px solid #dce3dd;
            border-radius: 14px;
            font: inherit;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 1rem;
            border: 0;
            border-radius: 14px;
            background: #00b86a;
            color: #0c2118;
            font: inherit;
            font-weight: bold;
            cursor: pointer;
        }

        .flash {
            margin-bottom: 1rem;
            border-radius: 16px;
            padding: 1rem;
            background: rgba(184, 59, 59, 0.12);
            color: #9f2929;
        }
    </style>
</head>
<body>
    <form class="login-card" action="{{ route('admin.login.store') }}" method="POST">
        @csrf
        <img src="{{ asset('assets/imgs/logo.png') }}" alt="Kairos Solutions">
        <h1>Super Admin Login</h1>
        <p>Use the super admin account to manage FAQs, contact details, and social links across the site.</p>

        @if ($errors->any())
            <div class="flash">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <div class="field">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="field">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
        </div>

        <button type="submit">Login</button>
    </form>
</body>
</html>
