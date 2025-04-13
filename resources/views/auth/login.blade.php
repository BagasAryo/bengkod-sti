@extends('layout.auth')

@section('title', 'Login')

@section('card-title')
    Login
@endsection

@section('content')
    <form>
        <div class="input-group mb-3">
            <input type="email" class="form-control" id="email" placeholder="Email"/>
            <div class="input-group-text"><span class="bi bi-envelope-fill"></span></div>
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control" id="password" placeholder="Password"/>
            <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
        </div>
        <div class="d-grid mb-2">
            <button type="submit" class="btn btn-success">Sign In</button>
        </div>
    </form>
    <div class="text-center">
        <small>Don't have an Account? <a href="/auth/register" class="text-primary text-decoration-none">Register Now</a></small>
    </div>
@endsection