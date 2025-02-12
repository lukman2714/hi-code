$(document).ready(function () {
    var i = 0;
            $("#dynamic-ar").click(function() {
                ++i;
                $("#dynamicAddRemove").append('<tr><td><input type="text" name="addmore[' + i +
                    '][nama_bahanbaku]" placeholder="Enter subject" class="form-control" /></td><td><input type="text" placeholder="Enter Harga Jual" class="form-control addmore['+ i +'][harga_pk]_1" /><input type="hidden" name="addmore[0][harga_pk]" placeholder="Enter Harga Modal" class="form-control addmore[0][harga_pk]_2" /></td><td><input type="text" name="addmore[' +
                    i +
                    '][harga_up]" placeholder="Enter subject" class="form-control" /></td><td><input type="text" name="addmore[' +
                    i +
                    '][berat]" placeholder="Enter subject" class="form-control" /></td><td>   <select name="addmore[' +
                    i +
                    '][id_satuan]" class="form-control"><option value="" disabled selected>--Pilih Satuan--</option>@foreach ($satuan as $sat)<option value="{{ $sat->id }}">{{ $sat->nama_satuan }}</option>@endforeach</select><td><button type="button" name="add" id="remove-input-field" class="btn btn-danger">Remove</button></td></tr>'
                );
            });
    $(document).on('click', '#remove-input-field', function () {
        $(this).parents('tr').remove();
    });
});
$(document).ready(function () {
    $('#bahanbaku').DataTable();
});