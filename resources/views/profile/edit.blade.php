<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MY ACCOUNT | TURISMO</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --porsche-red: #d5001c;
            --porsche-grey: #f2f2f2;
            --text-main: #191919;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-main);
            background: #f8f8f8;
        }

        .navbar-turismo {
            height: 80px;
            background: rgba(255, 255, 255, .98);
            backdrop-filter: blur(15px);
            border-bottom: 1px solid #e5e5e5;
            z-index: 1000;
        }

        .navbar-turismo .container {
            height: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        .menu-trigger,
        .profile-trigger {
            border: 0;
            background: none;
            color: #000;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .turismo-brand {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            color: #000;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: 800;
            letter-spacing: 4px;
        }

        .nav-actions { display: flex; align-items: center; gap: 22px; }

        .profile-avatar {
            width: 34px;
            height: 34px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            border-radius: 50%;
            background: #000;
            color: #fff;
            font-size: 13px;
            font-weight: 800;
        }

        .profile-menu {
            min-width: 240px;
            margin-top: 18px !important;
            padding: 8px 0;
            border: 1px solid #e5e5e5;
            border-radius: 2px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
        }

        .profile-menu .dropdown-item {
            padding: 12px 18px;
            font-size: 12px;
            font-weight: 600;
        }

        .profile-menu .dropdown-item i { margin-right: 9px; }

        .offcanvas { width: 350px !important; }
        .offcanvas-header { padding: 30px; border-bottom: 1px solid #eee; }
        .offcanvas-body { padding: 40px 30px; }

        .offcanvas-nav .nav-link {
            margin-bottom: 20px;
            padding: 0;
            color: #000;
            font-size: 24px;
            font-weight: 800;
            text-transform: uppercase;
        }

        .offcanvas-nav .nav-link:hover { color: var(--porsche-red); }

        .account-main {
            max-width: 1100px;
            margin: 0 auto;
            padding: 130px 24px 80px;
        }

        .account-heading {
            margin-bottom: 36px;
            padding-bottom: 28px;
            border-bottom: 1px solid #dedede;
        }

        .account-eyebrow {
            color: var(--porsche-red);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .account-title {
            margin: 8px 0;
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 800;
            letter-spacing: -2px;
            text-transform: uppercase;
        }

        .account-subtitle { margin: 0; color: #777; font-size: 14px; }

        .account-card {
            margin-bottom: 22px;
            padding: 30px;
            border: 1px solid #e5e5e5;
            background: #fff;
        }

        .account-card-danger { border-top: 3px solid var(--porsche-red); }

        .section-kicker {
            margin-bottom: 8px;
            color: #888;
            font-size: 9px;
            font-weight: 800;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .account-card h2 {
            margin: 0;
            color: #111;
            font-size: 18px;
            font-weight: 800;
            letter-spacing: -.3px;
            text-transform: uppercase;
        }

        .section-description {
            margin: 8px 0 0;
            color: #777;
            font-size: 13px;
            line-height: 1.7;
        }

        .account-form { margin-top: 25px; }

        .account-form .form-label {
            margin-bottom: 8px;
            color: #333;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .account-form .form-control {
            min-height: 46px;
            border: 1px solid #dedede;
            border-radius: 0;
            box-shadow: none;
            font-size: 13px;
        }

        .account-form .form-control:focus { border-color: #111; }

        .btn-turismo {
            min-height: 44px;
            padding: 12px 22px;
            border: 0;
            border-radius: 0;
            background: #000;
            color: #fff;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: background .2s;
        }

        .btn-turismo:hover { background: var(--porsche-red); color: #fff; }
        .btn-turismo-danger { background: var(--porsche-red); }
        .btn-turismo-danger:hover { background: #a90016; color: #fff; }
        .form-error { margin-top: 7px; color: var(--porsche-red); font-size: 12px; }
        .form-success { color: #267341; font-size: 12px; font-weight: 600; }

        .verification-note {
            margin-top: 14px;
            padding: 14px;
            background: #f8f8f8;
            color: #555;
            font-size: 12px;
            line-height: 1.7;
        }

        .verification-note button {
            padding: 0;
            border: 0;
            background: none;
            color: #111;
            font-weight: 700;
            text-decoration: underline;
        }

        .modal-content { border: 0; border-radius: 0; }
        .modal-header, .modal-body, .modal-footer { padding: 22px 26px; }
        .modal-title { font-size: 16px; font-weight: 800; text-transform: uppercase; }

        @media (max-width: 575.98px) {
            .account-main { padding: 112px 16px 50px; }
            .account-card { padding: 22px 18px; }
            .profile-name { display: none; }
            .nav-actions { gap: 14px; }
        }
    </style>
</head>
<body>
    <nav class="navbar fixed-top navbar-turismo">
        <div class="container">
            <button class="menu-trigger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-label="Open menu">
                <i class="bi bi-list fs-4"></i><span class="d-none d-sm-inline">Menu</span>
            </button>

            <a class="turismo-brand" href="{{ url('/') }}">TURISMO</a>

            <div class="nav-actions">
                <div class="dropdown">
                    <button class="profile-trigger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="profile-avatar">{{ strtoupper(substr($user->name, 0, 1)) }}</span>
                        <span class="profile-name d-none d-md-inline">{{ $user->name }}</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end profile-menu">
                        <a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="bi bi-person"></i>Profil Saya</a>
                        <a class="dropdown-item" href="{{ route('cart.index') }}"><i class="bi bi-bag"></i>Konfigurasi Saya</a>
                        <div class="dropdown-divider"></div>
                        <form method="POST" action="{{ route('logout') }}" class="m-0">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger"><i class="bi bi-box-arrow-right"></i>Logout</button>
                        </form>
                    </div>
                </div>
                <a href="{{ route('cart.index') }}" class="text-dark" aria-label="Configuration"><i class="bi bi-bag-check fs-5"></i></a>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title fw-bold">MENU</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav offcanvas-nav">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#models">Models</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#collections">Collection</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}#about">Heritage</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('cart.index') }}">Configuration</a></li>
            </ul>
        </div>
    </div>

    <main class="account-main">
        <header class="account-heading">
            <span class="account-eyebrow">TURISMO / MEMBER AREA</span>
            <h1 class="account-title">My Account</h1>
            <p class="account-subtitle">Kelola informasi akun dan keamanan Anda.</p>
        </header>

        @if (session('status') === 'profile-updated')
            <div class="alert alert-success rounded-0" role="status">Informasi profil berhasil diperbarui.</div>
        @elseif (session('status') === 'password-updated')
            <div class="alert alert-success rounded-0" role="status">Kata sandi berhasil diperbarui.</div>
        @elseif (session('status') === 'verification-link-sent')
            <div class="alert alert-success rounded-0" role="status">Tautan verifikasi baru telah dikirim ke email Anda.</div>
        @endif

        <section class="account-card">
            @include('profile.partials.update-profile-information-form')
        </section>

        <section class="account-card">
            @include('profile.partials.update-password-form')
        </section>

        <section class="account-card account-card-danger">
            @include('profile.partials.delete-user-form')
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @if ($errors->userDeletion->isNotEmpty())
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                bootstrap.Modal.getOrCreateInstance(document.getElementById('confirm-user-deletion')).show();
            });
        </script>
    @endif
</body>
</html>
