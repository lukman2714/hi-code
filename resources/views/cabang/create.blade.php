@extends('layouts.main')
@extends('layouts.sidebar')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Cabang</h4>
                    </div>
                    <div class="card-body">
                        <!-- Tombol Kembali -->
                        <div class="row mb-4">
                            <div class="col-md-12 text-end">
                                <a href="{{ route('cabang.index') }}" class="btn btn-success">
                                    << Kembali</a>
                            </div>
                        </div>

                        <!-- Form -->
                        <form action="{{ route(name: 'cabang.store') }}" method="POST">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (Session::has('success'))
                                <div class="alert alert-success text-center">
                                    <p>{{ Session::get('success') }}</p>
                                </div>
                            @endif
                            <table class="table table-bordered" id="dynamicAddRemove">
                                <thead>
                                    <tr>
                                        <th>Nama Cabang</th>
                                        <th>Alamat</th>
                                        <th>No Telp</th>
                                        <th>Fungsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" name="addmore[0][nama_cabang]" placeholder="Enter subject"
                                                class="form-control" />
                                        </td>
                                        <td>
                                            <textarea class="form-control" name="addmore[0][alamat]"></textarea>
                                        </td>
                                        <td>
                                            <input type="text" name="addmore[0][no_hp]" placeholder="Enter subject"
                                                class="form-control" />
                                        </td>
                                        <td>
                                            <select name="addmore[0][fungsi]" class="form-control">
                                                <option value="" disabled selected>--Pilih Fungsi--</option>
                                                <option value="2">Gudang</option>
                                                <option value="1">Toko</option>
                                            </select>
                                        </td>
                                        <td><button type="button" name="add" id="dynamic-ar"
                                                class="btn btn-outline-primary">Tambah +</button></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="4"></td>
                                        <td><button type="submit" class="btn btn-outline-success btn-block">Simpan</button>
                                        </td>
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
<script src="{{ asset('js/cabang.js') }}"></script>
