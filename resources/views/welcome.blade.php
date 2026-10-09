<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>TURISMO | The Premium Model Range</title>
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
    color: var(--text-main);
    background-color: #ffffff;
    overflow-x: hidden;
  }

  /* ================= NAVBAR ================= */
  .navbar-turismo {
    height: 80px;
    background: rgba(255, 255, 255, 0.98);
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
    background: none; border: none; font-size: 12px; font-weight: 700;
    letter-spacing: 1px; text-transform: uppercase; display: flex;
    align-items: center; gap: 10px; padding: 0; cursor: pointer;
  }

  .turismo-brand {
    position: absolute; left: 50%; transform: translateX(-50%);
    font-weight: 800; letter-spacing: 4px; color: var(--porsche-black) !important;
    text-transform: uppercase; font-size: 1.2rem; text-decoration: none;
  }

  .nav-actions { display: flex; align-items: center; gap: 20px; }

  .btn-auth {
    background: var(--porsche-black); color: #fff; border-radius: 2px;
    padding: 8px 20px; font-size: 11px; font-weight: 700;
    text-transform: uppercase; border: none; transition: 0.3s; text-decoration: none;
  }

  .btn-auth:hover { background: var(--porsche-red); color: #fff; }

  /* ================= PROFIL ================= */
  .profile-trigger {
    background: none; border: none; display: flex; align-items: center;
    gap: 10px; padding: 0; cursor: pointer; font-size: 12px; font-weight: 700;
    letter-spacing: 1px; text-transform: uppercase; color: #000;
  }

  .profile-trigger::after { margin-left: 0; }

  .profile-avatar {
    width: 34px; height: 34px; border-radius: 50%;
    background: #000; color: #fff; display: inline-flex;
    align-items: center; justify-content: center;
    font-size: 13px; font-weight: 800; flex-shrink: 0; transition: 0.3s;
  }

  .profile-trigger:hover .profile-avatar { background: var(--porsche-red); }

  .profile-avatar-lg {
    width: 46px; height: 46px; font-size: 18px; background: var(--porsche-red);
  }

  .profile-menu {
    min-width: 260px; border: 1px solid #e5e5e5; border-radius: 2px;
    padding: 0; margin-top: 18px !important;
    box-shadow: 0 10px 30px rgba(0,0,0,.08);
  }

  .profile-header {
    display: flex; align-items: center; gap: 14px; padding: 20px;
    background: var(--porsche-grey); border-bottom: 1px solid #eee;
  }

  .profile-info { min-width: 0; }

  .profile-info-name {
    font-size: 13px; font-weight: 800; text-transform: uppercase; letter-spacing: .5px;
  }

  .profile-info-email {
    font-size: 12px; color: #888; overflow: hidden;
    text-overflow: ellipsis; white-space: nowrap;
  }

  .profile-menu .dropdown-item {
    display: flex; align-items: center; gap: 10px; padding: 12px 20px;
    font-size: 12px; font-weight: 600; letter-spacing: .5px;
  }

  .profile-menu .dropdown-item:hover { background: var(--porsche-grey); }

  /* ================= MENU ================= */
  .offcanvas { background: #fff; border: none; width: 350px !important; }
  .offcanvas-header { padding: 30px; border-bottom: 1px solid #eee; }
  .offcanvas-body { padding: 40px 30px; }
  .offcanvas-nav .nav-link {
    font-size: 24px; font-weight: 800; text-transform: uppercase;
    color: #000 !important; margin-bottom: 20px; transition: .3s; padding: 0;
  }
  .offcanvas-nav .nav-link:hover { color: var(--porsche-red) !important; padding-left: 10px; }

  /* ================= HERO (BACKGROUND GELAP) ================= */
  .product-hero {
    position: relative;
    height: 85vh;
    background: radial-gradient(circle at center, #2c2c2c 0%, #0a0a0a 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    padding-top: 80px;
    color: #ffffff;
  }

  .product-bg-text {
    position: absolute;
    font-size: 14vw;
    font-weight: 900;
    color: rgba(255, 255, 255, 0.04);
    z-index: 1;
    text-transform: uppercase;
    pointer-events: none;
    white-space: nowrap;
  }

  .product-content-wrapper {
    z-index: 2;
    text-align: center;
    width: 100%;
    transition: opacity 0.5s ease-in-out;
  }

  .product-image img {
    width: 50%;
    max-width: 650px;
    filter: drop-shadow(0 40px 60px rgba(0,0,0,0.5));
    transition: transform 0.8s cubic-bezier(0.165, 0.84, 0.44, 1);
  }

  .product-name {
    font-size: 4rem;
    font-weight: 800;
    text-transform: uppercase;
    margin: 0;
    letter-spacing: -1px;
    color: #ffffff;
  }

  .hero-nav-btn {
    position: absolute;
    border: none;
    background: transparent;
    font-size: 2.5rem;
    color: rgba(255, 255, 255, 0.3);
    transition: 0.3s;
    z-index: 10;
  }
  .hero-nav-btn:hover { color: #ffffff; }

  /* ================= COLLECTIONS ================= */
  .model-filter-nav { border-bottom: 1px solid #e5e5e5; margin-bottom: 50px; display: flex; gap: 40px; }
  .filter-btn { background: none; border: none; font-size: 11px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; padding: 20px 0; color: #888; position: relative; transition: 0.3s; }
  .filter-btn.active { color: #000; }
  .filter-btn.active::after { content: ""; position: absolute; bottom: -1px; left: 0; width: 100%; height: 3px; background: var(--porsche-red); }

  .marketing-card { border: none; transition: 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94); margin-bottom: 30px; }
  .marketing-img-container { background: #f8f8f8; padding: 40px; margin-bottom: 20px; display: flex; justify-content: center; align-items: center; height: 300px; overflow: hidden; }
  .marketing-img { max-width: 100%; max-height: 100%; object-fit: contain; transition: transform 0.6s ease; }
  .marketing-card:hover .marketing-img { transform: scale(1.08); }

  .model-badge { font-size: 9px; font-weight: 800; border: 1px solid #000; padding: 2px 8px; text-transform: uppercase; display: inline-block; margin-bottom: 10px; }
  .marketing-btn { background: #000; color: #fff; border: none; border-radius: 2px; font-size: 10px; font-weight: 700; letter-spacing: 1px; padding: 12px; width: 100%; text-transform: uppercase; transition: 0.3s; text-decoration: none; display: block; text-align: center; }
  .marketing-btn:hover { background: var(--porsche-red); color: #fff; }

  .slider-dots { position: absolute; bottom: 30px; display: flex; gap: 10px; z-index: 10; }
  .dot { width: 30px; height: 3px; background: rgba(255,255,255,0.2); cursor: pointer; transition: 0.3s; }
  .dot.active { background: var(--porsche-red); width: 50px; }

  .cart-toast { position: fixed; bottom: 30px; right: 30px; background: #000; color: #fff; padding: 15px 30px; font-size: 11px; text-transform: uppercase; letter-spacing: 1px; z-index: 9999; display: none; }
  .cart-toast.show { display: block; }
  .cart-toast.error { background: var(--porsche-red); }
</style>
</head>

<body>

<nav class="navbar fixed-top navbar-turismo">
  <div class="container">
    <button class="menu-trigger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
      <i class="bi bi-list fs-4"></i> <span>Menu</span>
    </button>

    <a class="turismo-brand" href="#">TURISMO</a>

    <div class="nav-actions">

      @auth
        <!-- PROFIL -->
        <div class="dropdown profile-dropdown">
          <button
            class="profile-trigger dropdown-toggle"
            type="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            aria-label="Profil"
          >
            <span class="profile-avatar">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
            <span class="profile-name d-none d-md-inline">{{ Auth::user()->name }}</span>
          </button>

          <div class="dropdown-menu dropdown-menu-end profile-menu">
            <div class="profile-header">
              <div class="profile-avatar profile-avatar-lg">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</div>
              <div class="profile-info">
                <div class="profile-info-name">{{ Auth::user()->name }}</div>
                <div class="profile-info-email">{{ Auth::user()->email }}</div>
              </div>
            </div>

            <a class="dropdown-item" href="{{ Route::has('profile.edit') ? route('profile.edit') : url('/profile') }}">
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

      <a href="{{ route('cart.index') }}" class="text-dark"><i class="bi bi-bag fs-5"></i></a>

      @auth
        <form method="POST" action="{{ route('logout') }}" class="m-0 d-none d-md-block">@csrf <button class="btn-auth">Logout</button></form>
      @else
        <a href="{{ route('login') }}" class="btn-auth d-none d-md-block">Login</a>
      @endauth
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
      @auth
        <li class="nav-item">
          <a class="nav-link" href="{{ Route::has('profile.edit') ? route('profile.edit') : url('/profile') }}">Profile</a>
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
        <a href="{{ route('login') }}" class="btn-auth d-block text-center">Login</a>
      @endauth
    </div>
  </div>
</div>

<section id="models" class="product-hero">
  <h1 class="product-bg-text" id="bgText">MODEL RANGE</h1>
  <div class="product-content-wrapper" id="heroWrapper">
    <h2 class="product-name" id="prodName">Loading...</h2>
    <div class="product-image my-4">
      <img src="" id="mainImg" alt="Main Model">
    </div>
    <div class="product-buttons">
      <a href="#collections" class="btn-auth px-5 py-3">Explore Collections</a>
    </div>
  </div>
  <button class="hero-nav-btn start-0 ms-5" onclick="prevProduct()">❮</button>
  <button class="hero-nav-btn end-0 me-5" onclick="nextProduct()">❯</button>
  <div class="slider-dots" id="sliderDots"></div>
</section>

<section id="collections" class="py-5">
  <div class="container py-5">
    <div class="row mb-4 align-items-end">
      <div class="col-md-7">
        <h6 class="text-danger fw-bold text-uppercase mb-2" style="letter-spacing: 2px;">Inventory</h6>
        <h2 class="display-5 fw-bold text-uppercase">The Collection</h2>
      </div>
      <div class="col-md-5 text-end">
        <input type="text" id="productSearch" class="form-control rounded-0 border-dark shadow-none" placeholder="SEARCH MODELS..." onkeyup="filterProducts()">
      </div>
    </div>

    <div class="model-filter-nav overflow-auto">
      <button class="filter-btn active" onclick="filterCategory('all', this)">All Models</button>
      <button class="filter-btn" onclick="filterCategory('suv', this)">SUV Series</button>
      <button class="filter-btn" onclick="filterCategory('sportcar', this)">Sportcar Series</button>
      <button class="filter-btn" onclick="filterCategory('sedan', this)">Sedan Series</button>
    </div>

    <div class="row g-5" id="marketingProducts">
      @foreach ($products as $product)
      <div class="col-lg-4 col-md-6 marketing-item" data-name="{{ strtolower($product->name) }}" data-category="{{ strtolower($product->category) }}">
        <div class="marketing-card">
          <div class="model-badge">Segment: {{ $product->category }}</div>
          <div class="marketing-img-container">
<img
    src="{{ $product->image ? 'http://127.0.0.1:8000/storage/' . $product->image : asset('assets/img/GT3 RS.PNG') }}"
    class="marketing-img"
    alt="{{ $product->name }}"
    onerror="this.onerror=null; this.src='{{ asset('assets/img/GT3 RS.PNG') }}';"
>
          </div>
          <div class="d-flex justify-content-between align-items-start">
            <div class="pe-3">
              <h5 class="fw-bold text-uppercase m-0">{{ $product->name }}</h5>
              <p class="text-muted small mt-2">{{ Str::limit($product->description, 70) }}</p>
            </div>
            <div class="text-end">
              <span class="text-muted" style="font-size: 9px; text-transform: uppercase;">From</span>
              <span class="fw-bold d-block text-nowrap">$ {{ number_format($product->price, 0, ',', '.') }}</span>
            </div>
          </div>
          <div class="mt-3">
            @auth
              <form action="{{ route('cart.store') }}" method="POST" class="select-model-form">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button type="submit" class="marketing-btn">Select Model</button>
              </form>
            @else
              <a href="{{ route('login') }}" class="marketing-btn">Login to Select</a>
            @endauth
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<section id="about" class="bg-black text-white py-5">
  <div class="container py-5">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 text-center">
        <img src="{{ asset('assets/img/los.jpg') }}" class="img-fluid" style="filter: grayscale(1); opacity: 0.7; max-height: 400px;" alt="Heritage">
      </div>
      <div class="col-lg-5 offset-lg-1">
        <h6 class="text-danger fw-bold text-uppercase mb-3">Heritage</h6>
        <h2 class="display-4 fw-bold text-uppercase mb-4">Precision <br> Engineering</h2>
        <p class="text-muted lead">Kami menggabungkan desain futuristik dengan performa mesin yang legendaris untuk menciptakan standar baru dalam dunia otomotif premium.</p>
      </div>
    </div>
  </div>
</section>

<div id="cartToast" class="cart-toast" role="status" aria-live="polite"></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // ================= DATA MANUAL HERO =================
  const heroManualProducts = [
    {
      name: "SPORTCAR SERIES",
      image: "/assets/img/GT3 RS.PNG"
    },
    {
      name: "SUV SERIES",
      image: "/assets/img/MACAN.png"
    },
    {
      name: "SEDAN SERIES",
      image: "/assets/img/SEDAN.png"
    }
  ];

  let currentIndex = 0;
  let slideInterval;

  function renderHero(index) {
    if(!heroManualProducts.length) return;
    const p = heroManualProducts[index];
    const wrapper = document.getElementById('heroWrapper');
    wrapper.style.opacity = 0;
    setTimeout(() => {
      document.getElementById('bgText').innerText = p.name.toUpperCase();
      document.getElementById('prodName').innerText = p.name;
      document.getElementById('mainImg').src = p.image;
      document.querySelectorAll('.dot').forEach((d, i) => d.classList.toggle('active', i === index));
      wrapper.style.opacity = 1;
    }, 400);
  }

  function nextProduct() { currentIndex = (currentIndex + 1) % heroManualProducts.length; renderHero(currentIndex); resetTimer(); }
  function prevProduct() { currentIndex = (currentIndex - 1 + heroManualProducts.length) % heroManualProducts.length; renderHero(currentIndex); resetTimer(); }
  function startTimer() { slideInterval = setInterval(nextProduct, 5000); }
  function resetTimer() { clearInterval(slideInterval); startTimer(); }

  function createDots() {
    const dotContainer = document.getElementById('sliderDots');
    dotContainer.innerHTML = ''; // Clear dots before recreating
    heroManualProducts.forEach((_, i) => {
      const dot = document.createElement('div');
      dot.className = `dot ${i === 0 ? 'active' : ''}`;
      dot.onclick = () => { currentIndex = i; renderHero(i); resetTimer(); };
      dotContainer.appendChild(dot);
    });
  }

  // LOGIKA FILTER COLLECTION (DATABASE)
  function filterCategory(category, btn) {
    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    document.querySelectorAll('.marketing-item').forEach(item => {
      const itemCat = item.getAttribute('data-category').toLowerCase();
      item.style.display = (category === 'all' || itemCat === category.toLowerCase()) ? 'block' : 'none';
    });
  }

  function filterProducts() {
    const val = document.getElementById('productSearch').value.toLowerCase();
    document.querySelectorAll('.marketing-item').forEach(item => {
      const name = item.dataset.name;
      item.style.display = name.includes(val) ? 'block' : 'none';
    });
  }

  let toastTimeout;

  function showCartToast(message, isError = false) {
    const toast = document.getElementById('cartToast');
    toast.textContent = message;
    toast.classList.toggle('error', isError);
    toast.classList.add('show');
    clearTimeout(toastTimeout);
    toastTimeout = setTimeout(() => toast.classList.remove('show'), 3000);
  }

  document.querySelectorAll('.select-model-form').forEach(form => {
    form.addEventListener('submit', async event => {
      event.preventDefault();
      const button = form.querySelector('button[type="submit"]');
      button.disabled = true;

      try {
        const response = await fetch(form.action, {
          method: 'POST',
          headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Accept': 'application/json'
          },
          body: new FormData(form)
        });
        const result = await response.json();

        if (!response.ok || result.status !== 'success') {
          throw new Error(result.message || 'Gagal menambahkan model ke keranjang.');
        }

        showCartToast(result.message || 'Model berhasil ditambahkan ke keranjang.');
      } catch (error) {
        console.error('Gagal menambahkan model ke keranjang:', error);
        showCartToast(error.message || 'Gagal menambahkan model ke keranjang.', true);
      } finally {
        button.disabled = false;
      }
    });
  });

  window.onload = () => {
    if(heroManualProducts.length > 0) {
      createDots();
      renderHero(0);
      startTimer();
    }
  };
</script>
</body>
</html>