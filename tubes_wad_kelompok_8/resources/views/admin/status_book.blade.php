@extends('layout.sideadmin')

@section('isi')
<h3 class="text-uppercase mt-2"> Verivikasi Pembayaran</h3>
<table class=""> 
    <tr style="border-bottom: 3px solid black; text-align: left;">
        <th style="width:10%">No</th>
        <th style="width:10%">Menu</th>
        <th style="width:10%">User</th>
        <th style="width:10%">no_telephone</th>
        <th style="width:10%">Tanggal event</th>
        <th style="width:10%">Tanggal booking</th>
        <th style="width:10%">Action</th>
    </tr>
    @foreach ($apps as $app)   
    <tr>
        <td >{{ $count }}</td>
        <td >{{ $app->menu }}</td>
        <td > {{ $app->user->nama }} </td>
        <td>{{ $app->no_telp }}</td>
        <td>{{ $app->tanggal }}</td>
        <td>{{ $app->created_at }}</td>
           <td> 
               <table class="table">
            <form method="post" action="/admin/book/{{ $app->id }}">
                @method('put')
                   @csrf
                   <input type="hidden" class="form-control" name="user_id" value="{{ $app->user_id }}" >
                   <input type="hidden" class="form-control" name="gabung_package_id" value="{{ $app->gabung_package_id }}" >
                   <input type="hidden" class="form-control" name="menu" value="{{ $app->menu }}" >
                   <input type="hidden" class="form-control" name="tanggal" value="{{ $app->tanggal }}" >
                   <input type="hidden" class="form-control" name="no_telp" value="{{ $app->no_telp }}" >
                   <input type="hidden" class="form-control" name="status" value="{{ 1 }}" >
                   <tr><td>
                   <button type="submit" class="btn btn-primary">ACC</button>
                   </td>
                </form>
                @foreach($buktis as $bukti)
                <td>
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#bukti{{ $bukti->id }}">Lihat bukti </button>
                </td>
            </tr>   
                @if($bukti->book_id == "$app->id")
                    <div class="modal fade" id="bukti{{ $bukti->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                            <div class="mb-0">
                                <img src="{{ asset('storage/' . $bukti->bukti) }}">
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    @endif
               @endforeach
</table>
         </td>
    </tr>
    @php $count += 1
    @endphp
    @endforeach
</table>


    <h3 class="text-uppercase mt-5">Jadwal Pernikahan</h3>
<table class=""> 
    <tr style="border-bottom: 3px solid black; text-align: left;">
        <th style="width:10%">Menu</th>
        <th style="width:10%">User</th>
        <th style="width:10%">no_telephone</th>
        <th style="width:10%">Tanggal event</th>
        <th style="width:10%">Tanggal booking</th>
        <th style="width:10%">Action</th>
    </tr>
    @foreach ($books as $book)   
    <tr>
        <td >{{ $book->menu }}</td>
        <td > {{ $book->user->nama }} </td>
        <td>{{ $book->no_telp }}</td>
        <td>{{ $book->tanggal }}</td>
        <td>{{ $book->created_at }}</td>
        <td>
        <form method="post" action="/status">
               @csrf
               <input type="hidden" class="form-control" name="book_id" value="{{ $book->id }}" >
               <input type="hidden" class="form-control" name="user_id" value="{{ $book->user_id }}" >
               <input type="hidden" class="form-control" name="gabung_package_id" value="{{ $book->gabung_package_id }}" >
               <input type="hidden" class="form-control" name="menu" value="{{ $book->menu }}" >
               <input type="hidden" class="form-control" name="tanggal" value="{{ $book->tanggal }}" >
               <input type="hidden" class="form-control" name="no_telp" value="{{ $book->no_telp }}" >
               <input type="hidden" class="form-control" name="status" value="{{ 0 }}" >
               <button type="submit" class="btn btn-success">Selesai</button>
           </form>

                
         </td>
    </tr>
    @php $count += 1
    @endphp
    @endforeach
</table>





<h3 class="text-uppercase mt-5">Create Testimoni</h3>
<table class=""> 
    <tr style="border-bottom: 3px solid black; text-align: left;">
        <th style="width:10%">Menu</th>
        <th style="width:10%">User</th>
        <th style="width:10%">no_telephone</th>
        <th style="width:10%">Tanggal event</th>
        <th style="width:10%">Tanggal booking</th>
        <th style="width:10%">Action</th>
    </tr>
    @foreach ($testimonis as $testimoni)   
    <tr>
        <td >{{ $testimoni->menu }}</td>
        <td > {{ $testimoni->user->nama }} </td>
        <td>{{ $testimoni->no_telp }}</td>
        <td>{{ $testimoni->tanggal }}</td>
        <td>{{ $testimoni->created_at }}</td>
        <td>
        <form method="post" action="/admin/testimoni">
               @csrf
               <input type="hidden" class="form-control" name="review_id" value="{{ $testimoni->id }}" >
               <input type="hidden" class="form-control" name="gambar_menu" value="{{ $testimoni->gabung_package->gambar }}" >
               <button type="submit" class="btn btn-success">Create Testimoni</button>
           </form>
         </td>
    </tr>
    @php $count += 1
    @endphp
    @endforeach
</table>



@endsection
