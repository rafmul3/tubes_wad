@extends('layout.navbar')

@section('isi')
@foreach($vendors as $vendor)
<div class="card" style="width: 18rem;">
    <img src="{{ asset('storage/' . $vendor->image_thumbnail) }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $vendor->nama }}</h5>
      <p class="card-text">{{ $vendor->description }}</p>
      <button type="button" class="btn btn-primary text-center gap-2 col-12 mx-auto" data-bs-toggle="modal" data-bs-target="#simeru">
        See Profile
      </button>
    </div>
  </div>
  @endforeach
@endsection
