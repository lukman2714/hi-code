@extends('layouts.main')
@extends('layouts.sidebar')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Supplier</h4>
                    </div>
                    <div class="card-body">
                        <!-- Tombol Kembali -->
                        <div class="row mb-4">
                            <div class="col-md-12 text-end">
                                <a href="{{ route('supplier.create') }}" class="btn btn-primary">Tambah +</a>
                            </div>
                        </div>

                        <!-- Form -->
                        <table id="supplier" class="display nowrap table table-hover table-striped table-bordered"
                            cellspacing="0" width="100%">
                            <thead class=" text-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Supplier</th>
                                    <th>No Hp</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($supplier as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <form action="{{ route('supplier.update', $item->id) }}" method="POST">
                                            @csrf
                                            @method('patch')
                                            <td><input type="text" style="text-align: center;" name="nama_supplier"
                                                    placeholder="Edit Nama Satuan" value="{{ $item->nama_supplier }}"
                                                    class="form-control" /></td>
                                            <td><input type="text" style="text-align: center;" name="no_hp"
                                                    placeholder="Edit No Hp" value="{{ $item->no_hp }}"
                                                    class="form-control" /></td>
                                            <td>
                                                <textarea name="alamat" placeholder="Edit Alamat" value="{{ $item->alamat }}" class="form-control">{{ $item->alamat }}</textarea>
                                            </td>
                                            <td>
                                                <div class="btn-group">

                                                    <button type="submit" class="btn btn-warning">
                                                        <i class="fa fa-edit"></i> Edit
                                                    </button>
                                        </form>
                    </div>


                    <div class="btn-group">
                        <form action="{{ route('supplier.destroy', $item->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#supplier').DataTable();
        });
    </script>
@endpush
