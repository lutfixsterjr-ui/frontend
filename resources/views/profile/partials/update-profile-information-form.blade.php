<header>
    <p class="section-kicker">Account details</p>
    <h2>Informasi Profil</h2>
    <p class="section-description">Perbarui nama dan alamat email yang terhubung dengan akun TURISMO Anda.</p>
</header>

<form id="send-verification" method="post" action="{{ route('verification.send') }}">
    @csrf
</form>

<form method="post" action="{{ route('profile.update') }}" class="account-form">
    @csrf
    @method('patch')

    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
        @if ($errors->get('name'))
            <div class="form-error">{{ $errors->first('name') }}</div>
        @endif
    </div>

    <div class="mb-4">
        <label for="email" class="form-label">Alamat Email</label>
        <input id="email" name="email" type="email" class="form-control" value="{{ old('email', $user->email) }}" required autocomplete="username">
        @if ($errors->get('email'))
            <div class="form-error">{{ $errors->first('email') }}</div>
        @endif

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div class="verification-note">
                Email Anda belum diverifikasi.
                <button form="send-verification">Kirim ulang tautan verifikasi</button>
            </div>
        @endif
    </div>

    <button type="submit" class="btn btn-turismo">Simpan Perubahan</button>
</form>
