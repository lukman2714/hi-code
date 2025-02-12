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
                            <a href="{{ route('satuan.index') }}" class="btn btn-success"><< Kembali</a>
                        </div>
                    </div>
                    
                    <!-- Form -->
                    <form action="{{ route('satuan.store') }}" method="POST">
                        @csrf
                        <!-- Notifikasi Error -->
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Notifikasi Sukses -->
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif

                        <!-- Tabel Input -->
                        <table class="table table-bordered" id="dynamicAddRemove">
                            <thead>
                                <tr align="center">
                                    <th>Nama Satuan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr align="center">
                                    <td>
                                        <input type="text" name="addmore[0][nama_satuan]" placeholder="Enter subject" class="form-control" />
                                    </td>
                                    <td>
                                        <button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Tambah</button>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr align="center"  >
                                    <td></td>
                                    <td><button type="submit" class="btn btn-outline-success btn-block">Simpan</button></td>
                                </tr>
                            </tfoot>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/satuan.js') }}"></script>

