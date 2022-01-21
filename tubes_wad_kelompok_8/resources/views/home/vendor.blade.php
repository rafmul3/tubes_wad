@extends('layout.navbar')

@section('isi')
{{-- <section id="team"> --}}
<div class="container">
  <div class="row mb-5">
      <div class="col-md-8 mt-3 mx-auto text-center">
          <h3>VENDORS</h3>
      </div>
      <div class="border-1 border-bottom border-secondary"> </div>
  </div>  
  <div class="row g-4">
@foreach($vendors as $vendor)
  <div class="col-lg-3 col-sm-2">
      <div class="card-effect">
          <img style= "width: 100%; height: 200px" src="{{ asset('storage/' . $vendor->image_profile) }}" alt="">
          <h5 class="mb-0 mt-4">{{ $vendor->nama_toko }}</h5>
          <p class="mb-0">{{ $vendor->keterangan }}</p>
          <p class="bx bxs-map-pin bx-xs mb-3">{{ $vendor->alamat }}</p>
          <a href="/profile/{{ $vendor->nama }}?id={{ $vendor->id }}" class="btn btn-primary text-center gap-2 col-12 mx-auto rounded-pill">
            See Vendor
          </a>
      </div>
  </div>
  @endforeach
  
</div>
</div>
@endsection
