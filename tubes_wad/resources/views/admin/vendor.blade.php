@extends('layout.sideadmin')

@section('isi')
@if (session('status'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ session('status') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<h3 class="text-uppercase mt-2"> List Vendor</h3>
<table class=""> 
    <tr style="border-bottom: 3px solid black; text-align: left;">
        <th style="width:10%">No</th>
        <th style="width:10%">Nama Vendor</th>
        <th style="width:10%">Category</th>
        <th style="width:10%">Aksi</th>
    </tr>
    @foreach ($vendors as $vendor)   
    <tr>
        <td >{{ $count }}</td>
                
        <td >{{ $vendor->nama }}</td>
        
        <td >{{ $vendor->category }}</td>
        <td class="row row-cols-lg-2 row-cols-sm-1" >
                <a href="/profile/{{ $vendor->nama }}?id={{ $vendor->id }}" class="btn btn-primary col-lg-4 col-sm-auto" >See Profile </a>
                <form action = "/profile/{{ $vendor->id }}" method="post">
                @method('delete')
                @csrf
                <input type="hidden" class="form-control" name="id" value="{{ $vendor->id }}">
            <button type="submit" class="btn btn-danger col-sm-auto">Hapus Vendor</button>
                </form>
                
                
         </td>
    </tr>

    @php $count += 1
    
    @endphp
    @endforeach

@endsection
