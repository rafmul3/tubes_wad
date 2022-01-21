@extends('layout.navbar')

@section('isi')
<div class="container">
  <div class="row mb-5">
      <div class="col-md-8 mt-3 mx-auto text-center">
          <h3>PACKAGE</h3>
      </div>
      <div class="border-1 border-bottom border-secondary"> </div>
  </div>  
  <div class="row g-4 row-cols-sm-2">

@foreach($packages as $package)
<div class="col-lg-3 col-sm-4">
  <div class="card-effect">
      <img style= "width: 100%; height: 200px" src="{{ asset('storage/' . $package->gambar) }}" alt="">
      <h5 class="mb-0 mt-4 text-dark">{{ $package->menu }}</h5>
      <p class="mb-3 text-secondary">Rp.{{ $package->harga }}</p>
@auth
      <button type="button" class="btn btn-primary text-center gap-2 col-12 mx-auto rounded-pill" data-bs-toggle="modal" data-bs-target="#{{ $package->menu }}">
        Details
      </button>
  </div>
</div>

  <div class="modal fade" id="{{ $package->menu }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="{{ $package->menu }}">Booking Set</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
      <!--form pengisian-->
      <div class="formisi">

        <!-- As a heading -->
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
            <span class="navbar-brand mb-0 h6 mx-auto">Set your wedding now!</span>
        </div>
      </nav>
      <div class="gridisi">
    
      <div class="formgambar">
          <div class="cs"> <img src="{{ asset('storage/' . $package->gambar) }}" class="card-img-top" alt="..." height="400px" >
          </div>
        </div>
      <div>
      <form class="formsubmit" method="POST" action="/admin/book" >
        @csrf
         <input type="hidden" class="form-control" name="user_id" value="{{ auth()->user()->id }}" >
         <input type="hidden" class="form-control" name="gabung_package_id" value="{{ $package->id }}" >
         <input type="hidden" class="form-control" name="status" value="{{ 0 }}" >
        <div class="mb-3">
            <label for="nama" class="form-label">Menu</label>
            <input class="form-control" type="text" value=" {{ $package->menu }}" name="menu" id="nama" readonly >
          </div>
          <div class="mb-3">
            <label for="tanggal" class="form-label">Event Date</label>
            <input type="date" class="form-control" id="tanggal" placeholder="mm / dd / yy" name="tanggal" required>
          <div class="mb-3">
            <label for="telp" class="form-label">Phone Number</label>
            <input type="number" class="form-control" id="telp" name="no_telp">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Colaboration With</label>
            <ul>
            @foreach($collabs as $collab)
            @if($collab->gabung_package_id == $package->id)
            <li><a href="/profile/{{ $collab->vendor->nama }}?id={{ $collab->vendor->id }}"> {{ $collab->vendor->nama }} </a></li>
              @endif
            @endforeach
            </ul>
          
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description " rows="5" name="description" readonly>{{ $package->description }}</textarea>
          </div>
          <center>
          <div class="mt-5 mb-3" >
            <button type="submit" class="btn btn-primary">BOOK NOW!!!</button>
          </center>
          </div>
          </form>
      </div>
          </div>
    
    
    </div>
      </div>
@else

<a href= "/login" class="btn btn-primary text-center gap-2 col-12 mx-auto rounded-pill">
  Details
</a>

@endauth

{{-- end --}}


  </div>

</div>
</div>
</div>
  @endforeach
</div>
</div>
@endsection
