@extends('layout.sidebar')

@section('isi')
<h3 class="text-uppercase"> {{ auth()->user()->nama}} | Profile</h3>
<div class="mt-3" style="width : 80%; ">
    <form method="post" action="/profile/{$vendor->nama}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-1">
          <label for="exampleInputEmail1" class="form-label fs-5">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="exampleInputEmail1" name="nama" value="{{ auth()->user()->nama }}" autofocus> 
        </div>
        <div class="mb-3">
            <label for="image_thumbnail" class="form-label fs-5">Foto Dashboard</label>
            <input class="form-control @error('image_thumbnail') is-invalid @enderror" type="file" id="image_thumbnail" name="image_thumbnail">
          </div>
          <div class="mb-3">
            <label for="image_profile" class="form-label fs-5">Foto profile</label>
            <input class="form-control @error('image_profile') is-invalid @enderror" type="file" id="image_profile" name="image_profile">
          </div>
          <div class="mb-1">
            <label for="alamat" class="form-label fs-5">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" @if(!empty($vendor))value="{{ $vendor->alamat }}" @endif autofocus> 
          </div>
          <div class="mb-4">
            <label for="profile" class="form-label fs-5">Profile</label>
            <textarea class="form-control @error('profile') is-invalid @enderror" id="profile " rows="5" name="profile" >@if(!empty($vendor)) {{ $vendor->profile }} @endif</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
@endsection