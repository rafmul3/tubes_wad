@extends('layout.sideadmin')

@section('isi')

@php 
$cek = false;
@endphp


<h3 class="text-uppercase mt-2">List Testimoni</h3>
<table class="table table-striped"> 
    <tr style="border-bottom: 3px solid black; text-align: left;">
        <th style="col">No</th>
        <th style="col">Nama</th>
        <th style="col">Menu</th>
        <th style="col">Tanggal</th>
        <th style="col">Aksi</th>
    </tr>
    @foreach($reviews as $review)
    <tr>
        <td>{{ $count }} </td>
        <td>{{ $review->review->user->nama }} </td>
        <td>{{ $review->review->menu }} </td>
        <td>{{ $review->review->tanggal }} </td>
        <td>
            <div class="mb-3">        
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#testimoni{{ $review->id }}"> Add Thumbnail </button>
              <div class="modal fade" id="testimoni{{ $review->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-body">
                         
                     <div class="mb-0">
     
                 <form action = "/admin/testimoni_gambar/add" method="POST" enctype="multipart/form-data">
                     @csrf
                     <label for="image_thumbnail" class="form-label fs-5">Thumbnail</label>
                     <input class="form-control mb-3 @error('image_profile') is-invalid @enderror" type="file" id="image_thumbnail" name="gambar">
                     <input type="hidden" name="testimoni_id" value="{{ $review->id }}">
                     <button type="submit" class="btn btn-primary">add</button>
                   </form>
                   
                   <form action = "/admin/testimoni_gambar/hapus" class="mt-4" method="post">
                       @csrf
                       <div class="form-control " name="menu" id="nama" readonly >
                       <h4> Gambar Testimoni</h4>
                       <table class="table table-striped">
                           <tr>
                           <th style="col"> Gambar </th>
                           <th class="col" > aksi </th>
                           </tr>

                       @foreach($testimonis as $testimoni)
                       @if($testimoni->testimoni_id == $review->id)
                       <tr>
                           <td>   <img style ="width:40px ; height:40px ;"src="{{ asset('storage/' . $testimoni->gambar) }}"></td>
                           <input type="hidden" class="form-control" name="id" value="{{ $testimoni->id }}">
                           <td><button type="submit" class="btn btn-danger ">Hapus</button> </td>
                       </tr>
                       @endif
                           @endforeach
                       </table>
                       </div>
                   </form>
                     
     
                     </div>
                     </div>
                 </div>
                 </div>
           </div>
         </td>

        </tr>
        @php $count += 1
    @endphp
    @endforeach
</table>


{{-- <table class="table table-striped">
    @if($thumbnails->isempty())
      <tr> 
        <td style="col text-center"><h5>Belum ada thumbnail</h5>
        </td>
        </tr>
      @else
    @foreach($thumbnails as $thumbnail)
      <tr> 
       <td style="col"><img style ="width:40px ; height:40px ;"src="{{ asset('storage/' . $thumbnail->image_thumbnail) }}"></td>
       
       <td style="col"><button type="button"class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#thumbnail{{ $thumbnail->id }}">Hapus</button></td>
       
      </tr>
    @endforeach
    @endif
  </table> --}}

@endsection
