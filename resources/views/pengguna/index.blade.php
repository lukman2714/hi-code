@extends('layouts.main')
@extends('layouts.sidebar')

@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Data Pengguna</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pengguna</li>
                    </ol>
                </div>

                <div id="alert-container">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="card-title">Pengguna</h3>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-sm btn-success float-end" data-bs-toggle="modal"
                                        data-bs-target="#addUserModal">Tambah</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered" id="users-table">
                                <thead>
                                    <tr style="text-align: center;">
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Role</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data akan ditambahkan secara dinamis menggunakan AJAX -->
                                </tbody>
                            </table>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include modal edit form -->
    @include('pengguna.edit')
   
@endsection
@include('pengguna.create')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('js/pengguna.js') }}"></script>
