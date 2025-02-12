@extends('layouts.main')
@extends('layouts.sidebar')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> SUPPLIER</h4>
                    </div>
                    <div class="card-body">
                        <div class="row mb-4">
                            <div class="col-md-12 text-end">
                                <a href="{{ route('supplier.index') }}" class="btn btn-success">
                                    << Kembali</a>
                            </div>
                        </div>
                        <form action="{{ route('supplier.store') }}" method="POST" enctype="multipart/form-data">
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
                                <tr>
                                    <th>Nama Supplier</th>
                                    <th>No Hp</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" name="addmore[0][nama_supplier]" placeholder="Enter subject"
                                            class="form-control" />
                                    </td>
                                    <td>
                                        <input type="text" name="addmore[0][no_hp]" placeholder="Enter subject"
                                            class="form-control" />
                                    </td>
                                    <td>
                                        <textarea name="addmore[0][alamat]" placeholder="Enter subject" class="form-control"></textarea>
                                    </td>
                                    <td><button type="button" name="add" id="dynamic-ar"
                                            class="btn btn-outline-primary">Add Subject</button></td>
                                </tr>
                            </table>
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                        </form>
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
    <script src="{{ asset('js/supplier.js') }}"></script>
