@extends('layout.app')

@section('content-header')
    <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Periksa</h3></div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Periksa</li>
            </ol>
        </div>
    </div>
@endsection

@section('sidebar')
    <li class="nav-item">
        <a href="/dokter/dashboard" class="nav-link">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
            Dashboard
            </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/dokter/periksa" class="nav-link active">
            <i class="nav-icon bi bi-card-checklist"></i>
            <p>
            Periksa
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/dokter/obat" class="nav-link">
            <i class="nav-icon bi bi-capsule"></i>
            <p>
            Obat
            </p>
        </a>
    </li>
@endsection

@section('content')
    {{-- begin::card --}}
    <div class="card mb-4">
        {{-- begin::card-body --}}
        <div class="card-body">
                        <table class="table table-bordered">
                          <thead>
                            <tr>
                              <th style="width: 10px">No.</th>
                              <th>Id Periksa</th>
                              <th>Pasien</th>
                              <th>Tanggal Periksa</th>
                              <th>Catatan</th>
                              <th>Biaya Periksa</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($periksas as $periksa)
                              <tr class="align-middle">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $periksa->id }}</td>
                                <td>{{ $periksa->pasien->nama }}</td>
                                <td>{{ $periksa->tgl_periksa }}</td>
                                <td>{{ $periksa->catatan }}</td>
                                <td>{{ $periksa->biaya_periksa }}</td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-end">
                          <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                      </div>
                      {{-- end::card-body --}}
    </div>
    {{-- end::card --}}
@endsection