<!-- Modal Tambah Pengguna -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" style="display: none;" inert>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addUserModalLabel">Tambah Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="addUserForm" data-url="{{ route('admin.store') }}" novalidate>

                @csrf
                <div class="modal-body">
                    <!-- Error messages will be shown here -->
                    <div id="error-messages" class="alert alert-danger d-none"></div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" required />
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" id="name" required autofocus />
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Hak Akses</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">--Pilih Hak Akses--</option>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required />
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation"
                            id="password_confirmation" required />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Tambah Pengguna</button>
                </div>
            </form>
        </div>
    </div>
</div>
