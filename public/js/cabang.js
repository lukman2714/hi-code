$(document).ready(function () {
var i = 0;
$("#dynamic-ar").click(function () {
    ++i;
    $("#dynamicAddRemove").append('<tr><td><input type="text" name="addmore['+i+'][nama_cabang]" placeholder="Enter subject" class="form-control" /></td><td><textarea class="form-control"  name="addmore['+i+'][alamat]"></textarea></td><td><input type="text" name="addmore['+i+'][no_hp]" placeholder="Enter subject" class="form-control" /></td><td><select name="addmore['+i+'][fungsi]" class="form-control"><option value="" disabled selected>--Pilih Fungsi--</option><option value="2">Gudang</option><option value="1">Toko</option></select></td><td><button type="button" name="add" id="remove-input-field" class="btn btn-danger">Remove</button></td></tr>');
});
$(document).on('click', '#remove-input-field', function () {
    $(this).parents('tr').remove();
});
});
$(document).ready(function () {
    $('#cabang').DataTable();
});