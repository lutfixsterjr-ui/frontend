<header>
    <p class="section-kicker">Security</p>
    <h2>Ubah Kata Sandi</h2>
    <p class="section-description">Gunakan kata sandi yang kuat dan unik untuk menjaga keamanan akun Anda.</p>
</header>

<form method="post" action="{{ route('password.update') }}" class="account-form">
    @csrf
    @method('put')

    <div class="mb-3">
        <label for="update_password_current_password" class="form-label">Kata Sandi Saat Ini</label>
        <input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password">
        @if ($errors->updatePassword->get('current_password'))
            <div class="form-error">{{ $errors->updatePassword->first('current_password') }}</div>
        @endif
    </div>

    <div class="mb-3">
        <label for="update_password_password" class="form-label">Kata Sandi Baru</label>
        <input id="update_password_password" name="password" type="password" class="form-control" autocomplete="new-password">
        @if ($errors->updatePassword->get('password'))
            <div class="form-error">{{ $errors->updatePassword->first('password') }}</div>
        @endif
    </div>

    <div class="mb-4">
        <label for="update_password_password_confirmation" class="form-label">Konfirmasi Kata Sandi Baru</label>
        <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password">
        @if ($errors->updatePassword->get('password_confirmation'))
            <div class="form-error">{{ $errors->updatePassword->first('password_confirmation') }}</div>
        @endif
    </div>

    <button type="submit" class="btn btn-turismo">Perbarui Kata Sandi</button>
</form>
