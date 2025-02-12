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
                                <a href="{{ route('bahanbaku.create') }}" class="btn btn-primary">Tambah +</a>
                            </div>
                        </div>

                        <!-- Form -->
                        <table id="bahanbaku" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                          <thead class=" text-primary">
                              <tr>
                                  <th>No</th>
                                  <th>Nama Bahanbaku</th>
                                  <th>Harga Pokok</th>
                                  <th>Harga UP</th>
                                  <th>Berat</th>
                                  <th>Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                          @foreach ($bahanbaku as $item)
                              <tr>
                              <td>{{$loop->iteration}}</td>
                              <td>{{$item->nama_bahanbaku}}</td>
                              <td>@currency(($item->harga_pk))</td>
                              <!-- @php
                              $up = 30/100;
                              $hp = $item->harga_pk * $up;
                              @endphp -->
                              <td>@currency(($item->harga_pk * $item->harga_up/100 ))</td>
                              <td>{{$item->berat}} {{$item->nama_satuan}}</td>
                              <td>
                              <div class="btn-group">
                                  <a href="{{route('bahanbaku.edit',$item->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                  </div>
                                  <div class="btn-group">
                                  <form action="{{route('bahanbaku.destroy',$item->id)}}" method="post">
                                      @csrf
                                      @method('delete')
                                      <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
            $('#bahanbaku').DataTable();
        });
    </script>
@endpush
