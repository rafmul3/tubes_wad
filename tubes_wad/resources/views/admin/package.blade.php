@extends('layout.sideadmin')

@section('isi')
<form method="post" action="/admin/package" enctype="multipart/form-data">
    @csrf
    <input type="hidden" class="form-control" name="user_id" value="{{ auth()->user()->id }}" >
    <div class="mb-1">
      <label for="exampleInputEmail1" class="form-label fs-5">Menu</label>
      <input type="text" class="form-control @error('menu') is-invalid @enderror" id="exampleInputEmail1" name="menu" autofocus> 
    </div>
    <label for="basic-url" class="form-label">Harga</label>
        <div class="input-group mb-1">
            <span class="input-group-text" id="basic-url">Rp.</span>
            <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="harga">
          </div>
      <div class="mb-3">
        <div class="mb-4">
            <label for="description" class="form-label fs-5">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description " rows="5" name="description" ></textarea>
        </div>
        <label for="gambar" class="form-label fs-5">Image</label>
        <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar">
      </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
@endsection
