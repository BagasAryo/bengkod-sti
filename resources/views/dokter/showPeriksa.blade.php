@extends('layout.minimal');

@section('title', 'Dokter - Detail Pemeriksaan')

@section('content')
  <div class="container-fluid">
    <div class="card card-info">
      <div class="card-header">
        <div class="card-title">
          Detail Pemeriksaan
        </div>
      </div>
      <div class="card-body">
        <dl class="row">
          <dt class="col-sm-4">Nama Pasien</dt>
          <dd class="col-sm-8">{{ $periksa->pasien->nama }}</dd>

          <dt class="col-sm-4">Tanggal Periksa</dt>
          <dd class="col-sm-8">{{ $periksa->tgl_periksa }}</dd>

          <dt class="col-sm-4">Catatan</dt>
          <dd class="col-sm-8">{{ $periksa->catatan ?? '-' }}</dd>

          <dt class="col-sm-4">Obat</dt>
          <dd class="col-sm-8">
            <ul>
              @forelse ($periksa->detailPeriksa as $detail)
                <li>{{ $detail->obat->nama_obat }}</li>
              @empty
                <li>Tidak ada obat</li>
              @endforelse
            </ul>
          </dd>
          <dt class="col-sm-4">Total Biaya Periksa</dt>
          <dd class="col-sm-8">Rp{{ number_format($periksa->biaya_periksa, 0, ',', '.') }}</dd>
        </dl>
      </div>
      <div class="card-footer">
        <a href="{{ route('dokter.periksa.edit', $periksa->id) }}" class="btn btn-success">Edit</a>
        <a href="{{ route('dokter.periksa.index') }}" class="btn btn-secondary">Kembali</a>
      </div>
    </div>
  </div>
@endsection
