@extends('layouts.main')
@extends('layouts.sidebar')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Satuan</h4>
                    </div>
                    <div class="card-body">
                        <!-- Tombol Kembali -->
                        <div class="row mb-4">
                            <div class="col-md-12 text-end">
                                <a href="{{ route('satuan.create') }}" class="btn btn-primary">Tambah +</a>
                            </div>
                        </div>

                        <!-- Form -->
                        <table id="satuan" class="display nowrap table table-hover table-striped table-bordered"
                            cellspacing="0" width="100%">
                            <thead class=" text-primary">
                                <tr align="center">
                                    <th>No</th>
                                    <th>Nama Satuan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($satuan as $item)
                                    <tr align="center">
                                        <td>{{ $loop->iteration }}</td>
                                        <form action="{{ route('satuan.update', $item->id) }}" method="POST">
                                          @csrf
                                          @method('patch')
                                        <td><input type="text" style="text-align: center;" name="nama_satuan" placeholder="Edit Nama Satuan" value="{{ $item->nama_satuan }}" class="form-control" /></td>
                                        <td>

                                            <div class="btn-group">
                                               
                                                    <button type="submit" class="btn btn-warning">
                                                        <i class="fa fa-edit"></i> Edit
                                                    </button>
                                                </form>
                                            </div>


                                            <div class="btn-group">
                                                <form action="{{ route('satuan.destroy', $item->id) }}" method="post">
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
    $(document).ready(function () {
        $('#satuan').DataTable();
    });
</script>
@endpush