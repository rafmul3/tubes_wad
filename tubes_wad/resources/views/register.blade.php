@extends('layout.navbar')
@section('isi')

      <div class="containerform border border-secondary shadow p-3 mb-5 bg-body rounded">
        
        <center><a style=" font-size: medium; font-weight:bold;"> REGISTRASI</a></center>
        <ul class="nav nav-tabs"> 
          <li class="nav-item col-lg-6 text-center"><a class="nav-link active " data-bs-toggle="tab" href="#Customer"> Customer </a>  </li>
          <li class="nav-item col-lg-6 text-center"><a class="nav-link" data-bs-toggle="tab" href="#Vendor"> Vendor </a>  </li>
        </ul>

          <hr>


          <div class="tab-content" id="myTabContent">

            <div class="tab-pane active" id="Customer">
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



          <div class="tab-pane" id="Vendor">
          
            <form action="/register-applicant" method="POST">
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
                  <label for="nama_toko" class="form-label">Nama Toko</label>
                  <input type="text" class="form-control @error('nama_toko') is-invalid @enderror" id="nama_toko" name="nama_toko" placeholder="Masukan Nama toko" required autofocus value={{ old('nama_toko') }}>
                </div>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                  @error('nama_toko')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <div class="mb-0">
                  <label for="keterangan" class="form-label">keterangan</label>
                  <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" placeholder="Masukan Nama Keterangan toko" required autofocus value={{ old('keterangan') }}>
                </div>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                  @error('keterangan')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>


                <div class="mb-0">
                  <label for="category" class="form-label">Category</label>
                  <select id="category" class="form-select" name="category">
                    
                    <option value="Dress"> Dress</option>
                    <option value="Decoration"> Decoration</option>
                    <option value="Venue"> Venue</option>
                    <option value="Catering"> Catering</option>
                  </select>
                </div>
                <div class="mb-0">
                  <label for="kota" class="form-label">Kota</label>
                  <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota" placeholder="Masukan kota Asal" required autofocus value={{ old('kota') }}>
                </div>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                  @error('kota')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="mb-0">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Masukan Alamat Lengkap" required autofocus value={{ old('alamat') }}>
                </div>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                  @error('alamat')
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
          </div>
    </div>
@endsection