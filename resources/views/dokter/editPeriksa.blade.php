@extends('layout.minimal');

@section('content')
  <div class="card card-warning">
    <div class="card-header">
      <div class="card-title">Edit Periksa</div>
    </div>
    <form action="{{ route('dokter.periksa.update', $periksa->id) }}" method="POST">
      <!--begin::Body-->
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="mb-3 form-group">
          <label for="nama" class="form-label">Nama Pasien</label>
          <input type="text" class="form-control" id="nama" name="nama" value="{{ $periksa->pasien->nama }}"
            readonly />
        </div>
        <div class="form-group">
          <label for="tgl_periksa">Tanggal Periksa</label>
          <input type="date" class="form-control" name="tgl_periksa" value="{{ $periksa->tgl_periksa }}" required>
        </div>

        <div class="form-group">
          <label for="catatan">Catatan</label>
          <textarea class="form-control" name="catatan" rows="3">{{ $periksa->catatan }}</textarea>
        </div>

        <div class="form-group">
          <label for="obat">Obat</label>
          <select name="obat[]" class="form-control" multiple>
            @foreach ($obats as $obat)
              <option value="{{ $obat->id }}" @if ($periksa->detailPeriksa->pluck('id_obat')->contains($obat->id)) selected @endif>
                {{ $obat->nama_obat }}
              </option>
            @endforeach
          </select>
          <small>* Tekan Ctrl (Windows) / Cmd (Mac) untuk pilih lebih dari satu</small>
        </div>
      </div>
      <!--end::Body-->
      <!--begin::Footer-->
      <div class="card-footer">
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('dokter.periksa.index') }}" class="btn btn-danger">Batal</a>
      </div>
      <!--end::Footer-->
    </form>
  </div>
@endsection
