$(document).ready(function () {
    var i = 0;

    // Event untuk menambahkan input baru
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append(
            '<tr>'+'<td>'+'<input type="text" name="addmore['+i+'][nama_supplier]" placeholder="Enter subject" class="form-control" />'+'</td>'+'<td>'+'<input type="text" name="addmore['+i+'][no_hp]" placeholder="Enter subject" class="form-control" />'+'</td>'+'<td>'+'<textarea name="addmore['+i+'][alamat]" placeholder="Enter subject" class="form-control"></textarea>'+'</td>'+'<td>'+'<button type="button" name="remove" class="btn btn-danger remove-input-field">Hapus</button>'+'</td>'+'</tr>'
        );
    });

    // Event untuk menghapus input
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
});
$(document).ready(function () {
    $('#myTable').DataTable();
});