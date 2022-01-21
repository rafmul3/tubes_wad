@extends('layout.sidebar')

@section('isi')
<h3 class="text-uppercase"> {{ auth()->user()->nama}} | Profile</h3>
<div class="mt-3" style="width : 80%; ">
    <form method="post" action="/profile/{$vendor->nama}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-1">
          <label for="nama_toko" class="form-label fs-5">Nama Toko</label>
          <input type="text" class="form-control @error('nama_toko') is-invalid @enderror" id="nama_toko" name="nama_toko" value="{{ auth()->user()->nama }}" autofocus> 
        </div>
        <div class="mb-1">
          <label for="keterangan" class="form-label fs-5">keterangan</label>
          <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $vendor->keterangan }}" autofocus> 
        </div>
        <div class="mb-3">
            <label for="image_thumbnail" class="form-label fs-5">Foto Dashboard</label>
            <table class="table table-striped">
              @if($thumbnails->isempty())
              <tr> 
                <td style="col text-center"><h5>Belum ada thumbnail</h5>
                </td>
                </tr>
              @else
            @foreach($thumbnails as $thumbnail)
              <tr> 
               <td style="col"><img style ="width:40px ; height:40px ;"src="{{ asset('storage/' . $thumbnail->image_thumbnail) }}"></td>
               
               <td style="col"><button type="button"class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#thumbnail{{ $thumbnail->id }}">Hapus</button></td>
               
              </tr>
            @endforeach
            @endif
          </table>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#vendor{{ $vendor->id }}"> Add Thumbnail </button>
            
          </div>
          <div class="mb-3">
            <label for="image_profile" class="form-label fs-5">Foto profile</label>
            <input class="form-control @error('image_profile') is-invalid @enderror" type="file" id="image_profile" name="image_profile">
          </div>
          <div class="mb-1">
            <label for="kota" class="form-label fs-5">Kota</label>
            <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota" @if(!empty($vendor))value="{{ $vendor->kota }}" @endif autofocus> 
          </div>
          <div class="mb-1">
            <label for="alamat" class="form-label fs-5">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" @if(!empty($vendor))value="{{ $vendor->alamat }}" @endif autofocus> 
          </div>
          <div class="mb-4">
            <label for="profile" class="form-label fs-5">Profile</label>
            <textarea class="form-control @error('profile') is-invalid @enderror" id="profile " rows="5" name="profile" >@if(!empty($vendor)) {{ $vendor->profile }} @endif</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>


      <div class="modal fade" id="vendor{{ $vendor->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            <div class="mb-0">
        <form action = "/profile/thumbnail" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="image_thumbnail" class="form-label fs-5">Thumbnail</label>
            <input class="form-control mb-3 @error('image_profile') is-invalid @enderror" type="file" id="image_thumbnail" name="image_thumbnail">
            <input type="hidden" name="vendor_id" value="{{ $vendor->id }}">
            <button type="submit" class="btn btn-primary">add</button>
          </form>
            </div>
            </div>
        </div>
        </div>
  </div>

@foreach($thumbnails as $thumbnail)
<div class="modal fade" id="thumbnail{{ $thumbnail->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <h5> Apakah anda yakin ingin menghapus thumbnail?</h5>
      <div class="modal-body">
        <div class="mb-0">
          <form method="post" action="/profile/thumbnail/hapus">
            @csrf
            <input type="hidden" name="id" value="{{ $thumbnail->id }}">
            <td style="col"><button type="submit"class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#thumbnail{{ $thumbnail->id }}">Yakin</button></td>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection