$(document).ready(function() {
    // Set up CSRF token for all AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Inisialisasi DataTables sekali
    var table = $('#users-table').DataTable({
        columns: [
            { title: "#" },
            { title: "Name" },
            { title: "Role" },
            { title: "Actions" }
        ]
    });

    // Fungsi untuk memuat data pengguna ke dalam tabel
    function loadUserData() {
        $.ajax({
            url: '/pengguna',
            type: 'GET',
            success: function(response) {
                table.clear().draw();  // Bersihkan tabel sebelum mengisi dengan data baru

                response.forEach(function(user, index) {
                    table.row.add([
                        index + 1,
                        user.name,
                        user.role,
                        `
                        <button class="btn btn-sm btn-primary edit-btn" data-id="${user.id}">Edit</button>
                        <button class="btn btn-sm btn-danger delete-btn" data-id="${user.id}">Hapus</button>
                        `
                    ]).draw(false);
                });
            },
            error: function(xhr, status, error) {
                console.error("Error: " + error);
            }
        });
    }

    // Menggunakan delegasi acara untuk tombol edit
    $('#users-table').on('click', '.edit-btn', function() {
        var userId = $(this).data('id');
        $.ajax({
            url: '/pengguna/' + userId,
            type: 'GET',
            success: function(response) {
                $('#editUserId').val(response.id);
                $('#editUserName').val(response.name);
                $('#editUserEmail').val(response.email);
                $('#role').val(response.role);
                $('#editUserModal').modal('show');
            }
        });
    });

    // Menggunakan delegasi acara untuk tombol delete
    $('#users-table').on('click', '.delete-btn', function() {
        var userId = $(this).data('id');
        if (confirm("Apakah Anda yakin ingin menghapus pengguna ini?")) {
            $.ajax({
                url: '/pengguna/' + userId,
                type: 'DELETE',
                success: function(response) {
                    showAlert('danger', response.success);
                    loadUserData();
                },
                error: function(xhr) {
                    var errorMessage = xhr.responseJSON?.error || 'Gagal menghapus pengguna';
                    showAlert('danger', errorMessage);
                }
            });
        }
    });

    // Fungsi untuk menampilkan alert
    function showAlert(type, message) {
        var alertHtml = `
            <div class="alert alert-${type}">
                ${message}
            </div>
        `;
        $('#alert-container').html(alertHtml);
        setTimeout(function() {
            $('.alert').fadeOut('slow');
        }, 3000);
    }

    // Menangani submit form tambah pengguna
    $('#addUserForm').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData(this);
    
        $.ajax({
            url: $(this).data('url'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                showAlert('success', response.success);
                $('#addUserModal').modal('hide');
                loadUserData();  // Muat ulang data setelah penambahan
            },
            error: function(xhr) {
                var errorMessage = xhr.responseJSON?.error || 'Gagal menambahkan pengguna';
                $('#error-messages').removeClass('d-none').text(errorMessage);
            }
        });
    });
    

    // Menangani submit form edit pengguna
    $('#editUserForm').on('submit', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: '/pengguna/' + $('#editUserId').val(),
            type: 'PUT',
            data: formData,
            success: function(response) {
                showAlert('success', response.success);
                $('#editUserModal').modal('hide');
                loadUserData();
            },
            error: function(xhr) {
                var errorMessage = xhr.responseJSON?.error || 'Gagal mengupdate pengguna';
                showAlert('danger', errorMessage);
            }
        });
    });
    $('#addUserModal').modal({
        backdrop: 'static',
        keyboard: false
    });

    $('#addUserModal').on('show.bs.modal', function () {
        $(this).removeAttr('inert');
    }).on('hidden.bs.modal', function () {
        $(this).attr('inert', '');
    });
    // Memuat data pengguna saat halaman pertama kali dimuat
    loadUserData();
});
