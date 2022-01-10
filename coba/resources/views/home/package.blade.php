@extends('layout.navbar')

@section('isi')

@foreach($packages as $package)
<div class="card" style="width: 18rem;">
    <img src="{{ asset('storage/' . $package->gambar) }}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{ $package->menu }}</h5>
      <p class="card-text">{{ $package->harga }}</p>
      <button type="button" class="btn btn-primary text-center gap-2 col-12 mx-auto" data-bs-toggle="modal" data-bs-target="#{{ $package->menu }}">
        Booking
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


{{-- end --}}


  </div>

</div>
</div>
</div>
  @endforeach
@endsection
