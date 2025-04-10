@extends('layout.app')

@section('content-header')
    <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Dashboard</h3></div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>
    </div>
@endsection

@section('sidebar')
    <li class="nav-item">
        <a href="/pasien/dashboard" class="nav-link">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
            Dashboard
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link active">
            <i class="nav-icon bi bi-card-checklist"></i>
            <p>Periksa</p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/pasien/riwayat" class="nav-link">
            <i class="nav-icon bi bi-clock-history"></i>
            <p>Riwayat</p>
        </a>
    </li>
@endsection

@section('content')
    <div class="card card-success mb-4">
        <div class="card-header">
            <div class="card-title">Periksa</div>
        </div>
        <form>
            <!--begin::Body-->
            <div class="card-body">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Anda</label>
                    <input class="form-control" id="nama"/>
                </div>
                <div class="mb-3">
                    <label for="pilih_dokter" class="form-label">Dokter</label>
                    <input type="password" class="form-control" id="pilih_dokter" />
                </div>
            </div>
            <!--end::Body-->
            <!--begin::Footer-->
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
            <!--end::Footer-->
        </form>
    </div>
@endsection
