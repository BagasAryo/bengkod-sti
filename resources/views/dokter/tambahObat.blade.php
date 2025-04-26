@extends('layout.minimal');

@section('content')
  <div class="card card-success">
    <div class="card-header">
      <div class="card-title">Tambah Obat</div>
    </div>
    <form action="{{ route('dokter.obat.store') }}" method="POST">
      <!--begin::Body-->
      @csrf
      <div class="card-body">
        <div class="mb-3 form-group">
          <label for="nama" class="form-label">Nama Obat</label>
          <input type="text" class="form-control" id="nama" name="nama_obat" required/>
        </div>
        <div class="mb-3 form-group">
          <label for="kemasan" class="form-label">Pilih Kemasan</label>
          <select name="kemasan" id="kemasan" class="form-select" name="kemasan" required>
            <option selected disabled>-- Pilih Kemasan --</option>
            <option value="Kapsul">Kapsul</option>
            <option value="Sachet">Sachet</option>
            <option value="Tablet">Tablet</option>
          </select>
        </div>
        <div class="mb-3 form-group">
          <label for="harga" class="form-label">Harga</label>
          <input type="number" class="form-control" id="harga" name="harga" required/>
        </div>
      </div>
      <!--end::Body-->
      <!--begin::Footer-->
      <div class="card-footer">
        <button type="submit" class="btn btn-success">Kirim</button>
        <a href="{{ route('dokter.obat.index') }}" class="btn btn-danger">Batal</a>
      </div>
      <!--end::Footer-->
    </form>
  </div>
@endsection
