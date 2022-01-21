@extends('layout.navbar')

@section('isi')
@if (session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('status') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session('loginerror'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ session('loginerror') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="containerform border p-3 mb-5 bg-body rounded">
        <center><a style=" font-size: medium; font-weight:bold;"> LOGIN</a></center>
          <hr>
          
        <form action="/login" method="POST">
          @csrf
            <div class="m-4">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukan Alamat E-Mail" name = "email" required autofocus value={{ old('email') }}>
              @error('email')
              <div class="invalid-feedback">
              {{ $message }}
              </div>
              @enderror
            </div>
            
            <div class="m-4 ">
              <label for="password" class="form-label">Kata Sandi</label>
              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Kata Sandi Anda" name = "password">
              @error('password')
              <div class="invalid-feedback">
                {{ $message }}
                </div>
              @enderror
            </div>
            <center><button type="submit" class="btn btn-primary d-grid gap-2 col-5 mx-auto mb-3 rounded-pill" name = "login">Sign In</button></center>
          </form>
          <center><a>Anda belum mempunyai Account? silakan daftar <a href="/register">Register</a></a></center>
    </div>
@endsection