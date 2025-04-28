@extends('layout.auth')

@section('title', 'Register')

@section('card-title')
  Register
@endsection

@section('content')
  <form action="{{ route('register.perform') }}" method="POST">
    @csrf
    <div class="input-group mb-3 mt-2">
      <input type="text" class="form-control" id="email" placeholder="Username" name="nama" required />
      <div class="input-group-text"><span class="bi bi-person-fill"></span></div>
    </div>
    <div class="input-group mb-3">
      <input type="email" class="form-control" id="email" placeholder="Email" name="email" required />
      <div class="input-group-text"><span class="bi bi-envelope-fill"></span></div>
    </div>
    <div class="input-group mb-3">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password" required />
      <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
    </div>
    <div class="d-grid mb-2">
      <button type="submit" class="btn btn-success">Sign Up</button>
    </div>
  </form>
  <div class="text-center">
    <small>Already have an Account? <a href="/login" class="text-primary text-decoration-none">Login Now</a></small>
  </div>
@endsection
