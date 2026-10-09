<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>CONFIGURATION | TURISMO</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">

<style>
:root {
    --porsche-red: #d5001c;
    --porsche-black: #000000;
    --porsche-grey: #f2f2f2;
    --text-main: #191919;
}

body {
    font-family: 'Inter', sans-serif;
    background: #fff;
    color: var(--text-main);
}

/* NAVBAR */
.navbar-turismo {
    height: 80px;
    background: rgba(255,255,255,.98);
    backdrop-filter: blur(15px);
    border-bottom: 1px solid #e5e5e5;
    z-index: 1000;
}

.navbar-turismo .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    height: 100%;
}

.menu-trigger {
    background: none;
    border: none;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 0;
    cursor: pointer;
}

.turismo-brand {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    font-weight: 800;
    letter-spacing: 4px;
    color: #000 !important;
    text-transform: uppercase;
    font-size: 1.2rem;
    text-decoration: none;
}

.nav-actions {
    display: flex;
    align-items: center;
    gap: 20px;
}

.btn-auth {
    background: #000;
    color: #fff;
    border-radius: 2px;
    padding: 8px 20px;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    border: none;
    transition: .3s;
    text-decoration: none;
}

.btn-auth:hover {
    background: var(--porsche-red);
    color: #fff;
}

/* PROFIL */
.profile-trigger {
    background: none;
    border: none;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 0;
    cursor: pointer;
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #000;
}

.profile-trigger::after {
    margin-left: 0;
}

.profile-avatar {
    width: 34px;
    height: 34px;
    border-radius: 50%;
    background: #000;
    color: #fff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 13px;
    font-weight: 800;
    flex-shrink: 0;
    transition: .3s;
}

.profile-trigger:hover .profile-avatar {
    background: var(--porsche-red);
}

.profile-avatar-lg {
    width: 46px;
    height: 46px;
    font-size: 18px;
    background: var(--porsche-red);
}

.profile-menu {
    min-width: 260px;
    border: 1px solid #e5e5e5;
    border-radius: 2px;
    padding: 0;
    margin-top: 18px !important;
    box-shadow: 0 10px 30px rgba(0,0,0,.08);
}

.profile-header {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 20px;
    background: var(--porsche-grey);
    border-bottom: 1px solid #eee;
}

.profile-info {
    min-width: 0;
}

.profile-info-name {
    font-size: 13px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: .5px;
}

.profile-info-email {
    font-size: 12px;
    color: #888;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.profile-menu .dropdown-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 20px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .5px;
}

.profile-menu .dropdown-item:hover {
    background: var(--porsche-grey);
}

/* MENU */
.offcanvas {
    background: #fff;
    border: none;
    width: 350px !important;
}

.offcanvas-header {
    padding: 30px;
    border-bottom: 1px solid #eee;
}

.offcanvas-body {
    padding: 40px 30px;
}

.offcanvas-nav .nav-link {
    font-size: 24px;
    font-weight: 800;
    text-transform: uppercase;
    color: #000 !important;
    margin-bottom: 20px;
    transition: .3s;
    padding: 0;
}

.offcanvas-nav .nav-link:hover {
    color: var(--porsche-red) !important;
    padding-left: 10px;
}

/* CART */
.cart-container {
    max-width: 1200px;
    margin: 140px auto 80px;
    padding: 0 40px;
}

.cart-title {
    font-size: 2rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: -1px;
    margin-bottom: 40px;
    border-left: 4px solid var(--porsche-red);
    padding-left: 20px;
}

.cart-table {
    width: 100%;
    border-collapse: collapse;
}

.cart-table th {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #888;
    padding: 15px;
    border-bottom: 1px solid #eee;
    white-space: nowrap;
}

.cart-table td {
    padding: 30px 15px;
    border-bottom: 1px solid #eee;
    vertical-align: middle;
}

.product-name {
    font-weight: 700;
    text-transform: uppercase;
    font-size: 14px;
    letter-spacing: .5px;
}

/* GAMBAR PRODUK */
.cart-img {
    width: 120px;
    height: 80px;
    object-fit: cover;
    border-radius: 2px;
    background: var(--porsche-grey);
    flex-shrink: 0;
}

.cart-img-placeholder {
    display: flex;
    align-items: center;
    justify-content: center;
    color: #bbb;
    font-size: 24px;
}

.qty-badge {
    font-size: 14px;
    font-weight: 700;
    padding: 7px 15px;
    background: var(--porsche-grey);
    border-radius: 2px;
    display: inline-block;
    min-width: 45px;
    text-align: center;
}

.price-text {
    font-weight: 600;
    font-size: 14px;
    white-space: nowrap;
}

/* ACTION BUTTONS */
.cart-action {
    display: flex;
    gap: 5px;
    justify-content: flex-end;
}

.cart-action button {
    border: none;
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: .2s;
    border-radius: 2px;
}

.btn-minus {
    background: var(--porsche-grey);
    color: #000;
}

.btn-minus:hover {
    background: #ddd;
}

.btn-plus {
    background: #000;
    color: #fff;
}

.btn-plus:hover {
    background: #333;
}

.btn-delete {
    background: #eee;
    color: #cc0000;
}

.btn-delete:hover {
    background: #cc0000;
    color: #fff;
}

/* EMPTY CART */
.empty-cart {
    text-align: center;
    padding: 70px 20px;
}

.empty-cart i {
    font-size: 55px;
    color: #ccc;
}

.empty-cart h4 {
    font-size: 18px;
    font-weight: 800;
    text-transform: uppercase;
    margin-top: 20px;
}

/* FOOTER SUMMARY */
.cart-footer {
    margin-top: 50px;
    padding: 40px;
    background: var(--porsche-grey);
    border-radius: 4px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 25px;
}

.total-price {
    font-size: 24px;
    font-weight: 800;
    color: #000;
}

.btn-luxury {
    padding: 12px 25px;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    text-decoration: none;
    border-radius: 2px;
    transition: .3s;
    border: none;
    cursor: pointer;
    display: inline-block;
    text-align: center;
    white-space: nowrap;
}

.btn-outline {
    border: 1px solid #ccc;
    color: #555;
    background: #fff;
}

.btn-outline:hover {
    background: #ddd;
}

.btn-dark {
    background: #000;
    color: #fff;
}

.btn-dark:hover {
    background: #333;
    color: #fff;
}

.btn-red {
    background: var(--porsche-red);
    color: #fff;
}

.btn-red:hover {
    background: #a90016;
    color: #fff;
}

@media (max-width: 768px) {
    .cart-container {
        padding: 0 15px;
        margin-top: 120px;
    }

    .cart-title {
        font-size: 1.5rem;
    }

    .cart-table th,
    .cart-table td {
        padding: 18px 10px;
    }

    .cart-img {
        width: 80px;
        height: 60px;
    }

    .cart-footer {
        flex-direction: column;
        align-items: stretch;
        text-align: center;
        padding: 25px 15px;
    }

    .action-group {
        display: flex;
        flex-direction: column;
        gap: 12px !important;
    }

    .action-group form,
    .action-group a {
        width: 100%;
    }

    .action-group button {
        width: 100%;
    }
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar fixed-top navbar-turismo">
    <div class="container">

        <button
            class="menu-trigger"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar"
            aria-label="Buka menu"
        >
            <i class="bi bi-list fs-4"></i>
            <span>Menu</span>
        </button>

        <a class="turismo-brand" href="{{ url('/') }}">
            TURISMO
        </a>

        <div class="nav-actions">
            @auth
                <div class="dropdown profile-dropdown">
                    <button
                        class="profile-trigger dropdown-toggle"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                        aria-label="Profil"
                    >
                        <span class="profile-avatar">
                            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </span>
                        <span class="profile-name d-none d-md-inline">
                            {{ Auth::user()->name }}
                        </span>
                    </button>

                    <div class="dropdown-menu dropdown-menu-end profile-menu">
                        <div class="profile-header">
                            <div class="profile-avatar profile-avatar-lg">
                                {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                            </div>
                            <div class="profile-info">
                                <div class="profile-info-name">{{ Auth::user()->name }}</div>
                                <div class="profile-info-email">{{ Auth::user()->email }}</div>
                            </div>
                        </div>

                        <a
                            class="dropdown-item"
                            href="{{ Route::has('profile.edit') ? route('profile.edit') : url('/profile') }}"
                        >
                            <i class="bi bi-person"></i> Profil Saya
                        </a>

                        <a class="dropdown-item" href="{{ route('cart.index') }}">
                            <i class="bi bi-bag-check"></i> Konfigurasi Saya
                        </a>

                        <div class="dropdown-divider"></div>

                        <form method="POST" action="{{ route('logout') }}" class="m-0">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger">
                                <i class="bi bi-box-arrow-right"></i> Logout
                            </button>
                        </form>
                    </div>
                </div>
            @endauth

            <a href="{{ route('cart.index') }}" class="text-dark" aria-label="Keranjang">
                <i class="bi bi-bag-check-fill fs-5"></i>
            </a>

            @auth
                <form method="POST" action="{{ route('logout') }}" class="m-0 d-none d-md-block">
                    @csrf
                    <button type="submit" class="btn-auth">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn-auth d-none d-md-block">
                    Login
                </a>
            @endauth
        </div>

    </div>
</nav>

<!-- OFFCANVAS MENU -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar">

    <div class="offcanvas-header">
        <h5 class="offcanvas-title fw-bold">MENU</h5>

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
        ></button>
    </div>

    <div class="offcanvas-body">

        <ul class="navbar-nav offcanvas-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}#models">Models</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}#collections">Collection</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}#about">Heritage</a>
            </li>

            @auth
                <li class="nav-item">
                    <a
                        class="nav-link"
                        href="{{ Route::has('profile.edit') ? route('profile.edit') : url('/profile') }}"
                    >
                        Profile
                    </a>
                </li>
            @endauth
        </ul>

        <div class="mt-5 pt-5 border-top d-md-none">
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn-auth w-100">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="btn-auth d-block text-center">
                    Login
                </a>
            @endauth
        </div>

    </div>
</div>

<!-- CONFIGURATION -->
<div class="cart-container">

    <div class="cart-title">Your Configuration</div>

    @php
        $total = 0;
    @endphp

    @if ($cart->count() > 0)

        <div class="table-responsive">
            <table class="cart-table">

                <thead>
                    <tr>
                        <th>Model Details</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th class="text-end">Modify</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($cart as $item)

                        @php
                            $subtotal = $item->qty * $item->product->price;
                            $total += $subtotal;
                        @endphp

                        <tr>

                            <!-- DETAIL PRODUK + GAMBAR -->
                            <td>
                                <div class="d-flex align-items-center gap-3">

                                    @if ($item->product->image)
                                        <img
                                            src="http://127.0.0.1:8000/storage/{{ $item->product->image }}"
                                            alt="{{ $item->product->name }}"
                                            class="cart-img"
                                            loading="lazy"
                                        >
                                    @else
                                        <div class="cart-img cart-img-placeholder">
                                            <i class="bi bi-image"></i>
                                        </div>
                                    @endif

                                    <div>
                                        <div class="product-name">
                                            {{ $item->product->name }}
                                        </div>

                                        <div class="text-muted small mt-2">
                                            {{ $item->product->category }}
                                        </div>

                                        <div class="text-muted small mt-1">
                                            $ {{ number_format($item->product->price, 0, ',', '.') }} / unit
                                        </div>
                                    </div>

                                </div>
                            </td>

                            <!-- QUANTITY -->
                            <td>
                                <span class="qty-badge">
                                    {{ $item->qty }}
                                </span>
                            </td>

                            <!-- SUBTOTAL -->
                            <td class="price-text">
                                $ {{ number_format($subtotal, 0, ',', '.') }}
                            </td>

                            <!-- ACTION -->
                            <td>
                                <div class="cart-action">

                                    <form
                                        method="POST"
                                        action="{{ route('cart.update', $item->id) }}"
                                    >
                                        @csrf
                                        @method('PUT')

                                        <input
                                            type="hidden"
                                            name="action"
                                            value="minus"
                                        >

                                        <button
                                            type="submit"
                                            class="btn-minus"
                                            aria-label="Kurangi jumlah"
                                            title="Kurangi"
                                        >
                                            <i class="bi bi-dash"></i>
                                        </button>
                                    </form>

                                    <form
                                        method="POST"
                                        action="{{ route('cart.update', $item->id) }}"
                                    >
                                        @csrf
                                        @method('PUT')

                                        <input
                                            type="hidden"
                                            name="action"
                                            value="plus"
                                        >

                                        <button
                                            type="submit"
                                            class="btn-plus"
                                            aria-label="Tambah jumlah"
                                            title="Tambah"
                                        >
                                            <i class="bi bi-plus"></i>
                                        </button>
                                    </form>

                                    <form
                                        method="POST"
                                        action="{{ route('cart.destroy', $item->id) }}"
                                        onsubmit="return confirm('Yakin ingin menghapus produk ini?')"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn-delete"
                                            aria-label="Hapus produk"
                                            title="Hapus"
                                        >
                                            <i class="bi bi-trash3"></i>
                                        </button>
                                    </form>

                                </div>
                            </td>

                        </tr>

                    @endforeach
                </tbody>

            </table>
        </div>

        <!-- TOTAL DAN TOMBOL -->
        <div class="cart-footer">

            <div>
                <span class="text-uppercase small fw-bold text-muted">
                    Total Investment
                </span>

                <div class="total-price">
                    $ {{ number_format($total, 0, ',', '.') }}
                </div>
            </div>

            <div class="action-group d-flex gap-3">

                <form
                    method="POST"
                    action="{{ route('cart.clear') }}"
                    onsubmit="return confirm('Hapus semua produk dari konfigurasi?')"
                >
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn-luxury btn-outline">
                        Clear All
                    </button>
                </form>

                <a
                    href="{{ route('cart.print') }}"
                    target="_blank"
                    class="btn-luxury btn-dark"
                >
                    <i class="bi bi-printer"></i>
                    Print Spec
                </a>

                <a href="{{ url('/') }}" class="btn-luxury btn-red">
                    Continue
                </a>

            </div>

        </div>

    @else

        <!-- KERANJANG KOSONG -->
        <div class="empty-cart">

            <i class="bi bi-bag"></i>

            <h4>Configuration Is Empty</h4>

            <p class="text-muted mt-3">
                Belum ada produk yang ditambahkan ke konfigurasi kamu.
            </p>

            <a href="{{ url('/') }}#collections" class="btn-luxury btn-dark mt-3">
                Explore Collection
            </a>

        </div>

    @endif

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>