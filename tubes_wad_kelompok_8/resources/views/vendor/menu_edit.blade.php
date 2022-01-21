@extends('layout.sidebar')
@section('isi')
@if (session('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('status') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@foreach($packages as $menu)

<form method="post" action="/profile/menu/{{$menu->id}}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <input type="hidden" value={{ $menu->id }} name="id">
    <div class="mb-1">
      <label for="exampleInputEmail1" class="form-label fs-5 mt-4">Menu</label>
      <input type="text" class="form-control @error('menu') is-invalid @enderror" id="exampleInputEmail1" name="menu" value="{{ $menu->menu }}" autofocus> 
    </div>
    <label for="basic-url" class="form-label fs-5">Harga</label>
        <div class="input-group mb-1">
            <span class="input-group-text" id="basic-url">Rp.</span>
            <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="harga" value="{{ $menu->harga }}">
          </div>
      <div class="mb-3">
        <div class="mb-4">
            <label for="description" class="form-label fs-5">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description " rows="5" name="description">{{ $menu->menu }}</textarea>
        </div>
        <label for="gambar" class="form-label fs-5">Image</label>
        <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar">
      </div>
    <button type="submit" class="btn btn-warning">Edit</button>
  </form>
  
@endforeach
@endsection
