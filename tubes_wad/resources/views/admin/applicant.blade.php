@extends('layout.sideadmin')

@section('isi')
@if (session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('status') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<h3 class="text-uppercase mt-2"> List Applicant</h3>
<table class=""> 
    <tr style="border-bottom: 3px solid black; text-align: left;">
        <th style="width:10%">No</th>
        <th style="width:10%">Nama</th>
        <th style="width:10%">Profile</th>
        <th style="width:10%" >Aksi</th>
    </tr>
    @foreach ($applicants as $applicant)   
    <tr>
        <td >{{ $count }}</td>
                
        <td >{{ $applicant->nama }}</td>
        <td >
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#code{{ $applicant->id }}">Details </button>
            <div class="modal fade" id="code{{ $applicant->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                
                    <div class="modal-content">
                        <h3 class="text-center"> Details Applicant</h3>
                        <div class="modal-body">
                        <div class="mb-2 border-1 border-bottom border-secondary">
                    <label class="col-5">Nama toko </label>
                    <a>{{ $applicant->nama_toko }} </a>
                        </div>
                    <div class="mb-2 border-1 border-bottom border-secondary">
                        <label class="col-5">Keterangan</label>
                        <a>{{ $applicant->keterangan }}</a>
                    </div>

                        <div class="mb-2 border-1 border-bottom border-secondary">
                            <label for="alamat" class="col-5">alamat</label>
                            <a >{{ $applicant->alamat }}</a>
                        </div>

                            <div class="mb-2 border-1 border-bottom border-secondary">
                                <label for="kota" class="col-5">kota</label>
                                <a>{{ $applicant->kota }}</a>
                            </div>

                            <div class="mb-2 border-1 border-bottom border-secondary">
                                <label for="tanggal" class="col-5">Tanggal daftar</label>
                                <a>{{ $applicant->created_at }}</a>
                            </div>

                                <div class="mb-2 border-1 border-bottom border-secondary">
                                    <label for="category" class="col-5">category</label>
                                    <a>{{ $applicant->category }}</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- </form> --}}
        </td>
        <td>
            <div class="row">
            <form action = "/admin/applicant" method="POST" class="col-auto">
                @csrf
                <input type="hidden" class="form-control" name="email" value="{{ $applicant->email }}">
                <input type="hidden" class="form-control" name="nama" value="{{ $applicant->nama }}">
                <input type="hidden" class="form-control" name="nama_toko" value="{{ $applicant->nama_toko }}">
                <input type="hidden" class="form-control" name="category" value="{{ $applicant->category }}">
                <input type="hidden" class="form-control" name="alamat" value="{{ $applicant->alamat }}">
                <input type="hidden" class="form-control" name="kota" value="{{ $applicant->kota }}">
                <input type="hidden" class="form-control" name="keterangan" value="{{ $applicant->keterangan }}">
                <input type="hidden" class="form-control" name="password" value="{{ $applicant->password }}">
                <input type="hidden" class="form-control" name="id" value="{{ $applicant->id }}">
                <button type="submit" class="btn btn-primary ">ACC</button>
            </form>
                
                <form action = "/admin/applicant/hapus" method="POST" class="col-auto">
                    @csrf
                <input type="hidden" class="form-control " name="id" value="{{ $applicant->id }}">
                <input type="hidden" class="form-control" name="email" value="{{ $applicant->email }}">
            <button type="submit" class="btn btn-danger">Tolak</button>
                </form>
                
            </div>
         </td>
    </tr>
    @php $count += 1
    @endphp
    @endforeach

@endsection
