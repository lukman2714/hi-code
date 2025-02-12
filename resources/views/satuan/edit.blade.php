@extends('layouts.main')
@extends('layouts.sidebar')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Satuan</h4>
                </div>
                <div class="card-body">
                    <!-- Tombol Kembali -->
                    <div class="mb-4 text-right">
                        <a href="{{ route('satuan.index') }}" class="btn btn-success">
                            <i class="fa fa-arrow-left"></i> Kembali
                        </a>
                    </div>

                    <!-- Form Edit -->
                    <form action="{{ route('satuan.update', $satuan->id) }}" method="POST">
                        @csrf
                        @method('patch')
                        
                        <!-- Input Nama Satuan -->
                        <div class="form-group">
                            <label for="nama_satuan">Nama Satuan</label>
                            <input type="text" id="nama_satuan" name="nama_satuan" value="{{ $satuan->nama_satuan }}" 
                                placeholder="Masukkan Nama Satuan" class="form-control" required>
                        </div>

                        <!-- Tombol Submit -->
                        <div class="form-actions text-right">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-check"></i> Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
