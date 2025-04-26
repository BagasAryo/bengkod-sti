@extends('layout.minimal');

@section('content')
  <div class="card card-success">
    <div class="card-header">
      <div class="card-title">Edit Obat</div>
    </div>
    <form action="{{ route('dokter.obat.update', $obat->id) }}" method="POST">
      <!--begin::Body-->
      @csrf
      @method('PUT')
      <div class="card-body">
        <div class="mb-3 form-group">
          <label for="nama_obat" class="form-label">Nama Obat</label>
          <input type="text" class="form-control" value="{{ $obat->nama_obat }}" id="nama_obat" name="nama_obat" required />
        </div>
        <div class="mb-3 form-group">
          <label for="kemasan" class="form-label">Pilih Kemasan</label>
          <select name="kemasan" id="kemasan" class="form-select" required>
            <option selected disabled>-- Pilih Kemasan --</option>
            <option value="Kapsul" {{ $obat->kemasan == 'Kapsul' ? 'selected' : '' }}>Kapsul</option>
            <option value="Sachet" {{ $obat->kemasan == 'Sachet' ? 'selected' : '' }}>Sachet</option>
            <option value="Tablet" {{ $obat->kemasan == 'Tablet' ? 'selected' : '' }}>Tablet</option>
          </select>
        </div>
        <div class="mb-3 form-group">
          <label for="harga" class="form-label">Harga</label>
          <input type="number" class="form-control" value="{{ $obat->harga }}" id="harga" name="harga" required />
        </div>
      </div>
      <!--end::Body-->
      <!--begin::Footer-->
      <div class="card-footer">
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('dokter.obat.index') }}" class="btn btn-danger">Batal</a>
      </div>
      <!--end::Footer-->
    </form>
  </div>
@endsection
