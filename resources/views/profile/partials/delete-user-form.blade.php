<header>
    <p class="section-kicker">Danger zone</p>
    <h2>Hapus Akun</h2>
    <p class="section-description">Penghapusan akun bersifat permanen. Semua data akun Anda akan dihapus dan tidak dapat dipulihkan.</p>
</header>

<button type="button" class="btn btn-turismo btn-turismo-danger mt-4" data-bs-toggle="modal" data-bs-target="#confirm-user-deletion">
    Hapus Akun
</button>

<div class="modal fade" id="confirm-user-deletion" tabindex="-1" aria-labelledby="confirm-user-deletion-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="post" action="{{ route('profile.destroy') }}">
                @csrf
                @method('delete')

                <div class="modal-header">
                    <h2 class="modal-title" id="confirm-user-deletion-title">Konfirmasi Hapus Akun</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>

                <div class="modal-body">
                    <p class="section-description mt-0">Tindakan ini permanen. Masukkan kata sandi Anda untuk mengonfirmasi penghapusan akun.</p>

                    <div class="mt-4">
                        <label for="delete-account-password" class="form-label">Kata Sandi</label>
                        <input id="delete-account-password" name="password" type="password" class="form-control rounded-0" autocomplete="current-password" placeholder="Masukkan kata sandi">
                        @if ($errors->userDeletion->get('password'))
                            <div class="form-error">{{ $errors->userDeletion->first('password') }}</div>
                        @endif
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark rounded-0" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-turismo btn-turismo-danger">Hapus Akun Saya</button>
                </div>
            </form>
        </div>
    </div>
</div>
