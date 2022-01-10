@extends('layout.navbar')
@section('isi')

      <div class="containerform border border-secondary shadow p-3 mb-5 bg-body rounded">
        <center><a style=" font-size: medium; font-weight:bold;"> REGISTRASI</a></center>
          <hr>
        <form action="/register" method="POST">
          @csrf
            <div class="mb-0">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Masukan Nama Lengkap" required autofocus value={{ old('nama') }}>
            </div>
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              @error('nama')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-0">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" placeholder="Masukan Alamat E-Mail" required value={{ old('email') }}>
            </div>
            @error('email')
            <div class="invalid-feedback">
              {{ $message }}
              </div>
            @enderror
            <div class="mb-0">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control  @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password Anda" required>
              @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            
            <div class="mb-4">
              <label for="confirm" class="form-label">Confirm Password</label>
              <input type="password" class="form-control  @error('confirm') is-invalid @enderror" id="confirm" name="confirm" placeholder="Konfirmasi Kata Sandi Anda" required>
              @error('confirm')
              <div class="invalid-feedback">
                {{ $message }}
                </div>
              @enderror
            </div>
            <center><button type="submit" class="btn btn-primary d-grid gap-2 col-4 mx-auto mb-3" name="daftar">Daftar</button></center>
          </form>
          <center><a>Anda sudah mempunyai Account? <a href="/login">Login</a></a></center>
    </div>
@endsection