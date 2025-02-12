@extends('layouts.main')
@extends('layouts.sidebar')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Cabang</h4>
                    </div>
                    <div class="card-body">
                        <!-- Tombol Kembali -->
                        <div class="row mb-4">
                            <div class="col-md-12 text-end">
                                <a href="{{ route('cabang.create') }}" class="btn btn-primary">Tambah +</a>
                            </div>
                        </div>

                        <!-- Form -->
                        <table id="cabang" class="display nowrap table table-hover table-striped table-bordered"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr align="center">
                                    <th>No</th>
                                    <th>Cabang</th>
                                    <th>Alamat</th>
                                    <th>No Hp</th>
                                    <th>Fungsi</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cabang as $item)
                                    <tr align="center">
                                        <td>{{ $loop->iteration }}</td>
                                        <form action="{{ route('cabang.update', $item->id) }}" method="POST">
                                            @csrf
                                            @method('patch')
                                            <td><input type="text" style="text-align: center;" name="nama_cabang"
                                                    placeholder="Edit Nama Cabang" value="{{ $item->nama_cabang }}"
                                                    class="form-control" /></td>
                                            <td>
                                                <textarea class="form-control" name="alamat" value="{{ $item->alamat }}">{{ $item->alamat }}</textarea>
                                            </td>
                                            <td><input type="text" style="text-align: center;" name="no_hp"
                                                    placeholder="Edit No Hp" value="{{ $item->no_hp }}"
                                                    class="form-control" /></td>
                                                    <td>
                                                        @if($item->fungsi == '1')
                                                        Toko
                                                        @else
                                                        Gudang
                                                        @endif
                                                    </td>
                                            <td>
                                                <div class="btn-group">

                                                    <button type="submit" class="btn btn-warning">
                                                        <i class="fa fa-edit"></i> Edit
                                                    </button>
                                        </form>
                                                </div>


                    <div class="btn-group">
                        <form action="{{ route('cabang.destroy', $item->id) }}" method="post">
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
            $('#cabang').DataTable();
        });
    </script>
@endpush
