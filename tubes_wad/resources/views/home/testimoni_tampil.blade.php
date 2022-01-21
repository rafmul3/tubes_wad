@extends('layout.navbar')

@section('isi')
<div class="container">
  <div class="row mb-5">
      <div class="col-md-8 mt-3 mx-auto text-center">
          <h3>TESTIMONI</h3>
      </div>
      <div class="border-1 border-bottom border-secondary"> </div>
  </div>  
  <div class="row row-col-2 g-4">
@foreach($gambars as $gambar)
  <div class="col-lg-5 col-sm-2">
      <div class="card-effect">
          <img style= "width: 100%; height: 400px" src="{{ asset('storage/' . $gambar->gambar) }}" alt="">
      </div>
  </div>
  <div class="col-lg-5 col-sm-2">
    <div class="card-effect">
        <img style= "width: 100%; height: 400px" src="{{ asset('storage/' . $gambar->gambar) }}" alt="">
    </div>
</div>
<div class="col-lg-5 col-sm-2">
    <div class="card-effect">
        <img style= "width: 100%; height: 400px" src="{{ asset('storage/' . $gambar->gambar) }}" alt="">
    </div>
</div>
<div class="col-lg-5 col-sm-2">
    <div class="card-effect">
        <img style= "width: 100%; height: 400px" src="{{ asset('storage/' . $gambar->gambar) }}" alt="">
    </div>
</div>
  @endforeach
  
</div>
</div>
@endsection
