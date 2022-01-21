@extends('layout.navbar')

@section('isi')
{{-- <section id="team"> --}}
<div class="container">
  <div class="row mb-5">
      <div class="col-md-8 mt-3 mx-auto text-center">
          <h3>TESTIMONI</h3>
      </div>
      <div class="border-1 border-bottom border-secondary"> </div>
  </div>  
  <div class="row g-4">
@foreach($testimonis as $testimoni)
  <div class="col-lg-3 col-sm-2">
      <div class="card-effect">
          <img style= "width: 100%; height: 200px" src="{{ asset('storage/' . $testimoni->gambar_menu) }}" alt="">
          <h5 class="mb-0 mt-4">{{ $testimoni->review->user->nama }}</h5>
          <a href="/admin/testimoni/{{ $testimoni->id }}?id={{ $testimoni->id }}" class="btn btn-primary text-center gap-2 col-12 mx-auto rounded-pill mt-4">
            See
          </a>
      </div>
  </div>
  @endforeach
  
</div>
</div>
@endsection
