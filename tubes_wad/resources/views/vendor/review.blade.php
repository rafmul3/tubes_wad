@extends('layout.navbar')

@section('isi')
<h3 class="text-uppercase mt-2">Pembayaran</h3>
<table class="table table-striped"> 
    <tr style="border-bottom: 3px solid black; text-align: left;">
        <th style="col">No</th>
        <th style="col">Menu</th>
        <th style="col">User</th>
        <th style="col">Tanggal event</th>
        <th style="col">Tanggal berakhir</th>
        <th style="col">Action</th>
    </tr>
    @foreach ($bayars as $bayar)   
    <tr>
        <td >{{ $count }}</td>
        <td >{{ $bayar->menu }}</td>
        <td > {{ $bayar->user->nama }} </td>
        <td>{{ $bayar->tanggal }}</td>
        <td>{{ $bayar->created_at }}</td>
           <td> 
                   <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{ $bayar->menu }}">Upload Bukti Pembayaran </button>
                   
                   <div class="modal fade" id="{{ $bayar->menu }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                        <div class="mb-0">
                    <form action = "/profile/review/bayar" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="bukti" class="form-label fs-5">Upload Bukti pembayaran</label>
                        <input class="form-control mb-3" type="file" id="bukti" name="bukti">
                        <input type="hidden" name="book_id" value="{{ $bayar->id }}">
                        <button type="submit" class="btn btn-primary">Upload</button>
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


<h3 class="text-uppercase mt-2"> Menunggu Konfirmasi</h3>
<table class="table table-striped"> 
    <tr style="border-bottom: 3px solid black; text-align: left;">
        <th style="col">No</th>
        <th style="col">Menu</th>
        <th style="col">User</th>
        <th style="col">Tanggal event</th>
        <th style="col">Tanggal booking</th>
    </tr>
    @foreach ($requests as $review)   
    <tr>
        <td >{{ $count }}</td>
        <td >{{ $review->menu }}</td>
        <td > {{ $review->user->nama }} </td>
        <td>{{ $review->tanggal }}</td>
        <td>{{ $review->created_at }}</td>
    </tr>
    @php $count += 1
    @endphp
    @endforeach


</table>

<h3 class="text-uppercase mt-2"> Transaksi Berlangsung</h3>
<table class="table table-striped"> 
    <tr style="border-bottom: 3px solid black; text-align: left;">
        <th style="col">No</th>
        <th style="col">Menu</th>
        <th style="col">User</th>
        <th style="col">Tanggal event</th>
        <th style="col">Tanggal berakhir</th>
        <th style="col">Action</th>
    </tr>
    @foreach ($proses as $review)   
    <tr>
        <td >{{ $count }}</td>
        <td >{{ $review->menu }}</td>
        <td > {{ $review->user->nama }} </td>
        <td>{{ $review->tanggal }}</td>
        <td>{{ $review->created_at }}</td>
           <td> 
                   <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#{{ $review->menu }}">edit</button>
            

            <div class="modal fade" id="{{ $review->menu }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <form action = "/profile/review/{{ $review->id }}" method="POST">
                @method('put')
                    @csrf
                    <input type="hidden" class="form-control" name="book_id" value="{{ $review->book_id }}" >
                    <input type="hidden" class="form-control" name="user_id" value="{{ $review->user_id }}" >
                   <input type="hidden" class="form-control" name="gabung_package_id" value="{{ $review->gabung_package_id }}" >
                   <input type="hidden" class="form-control" name="menu" value="{{ $review->menu }}" >
                   <input type="hidden" class="form-control" name="tanggal" value="{{ $review->tanggal }}" >
                   <input type="hidden" class="form-control" name="status" value="{{ 1 }}" >

                    <div class="modal-content">
                    <div class="modal-body">
                    <div class="mb-0">
                    <label for="tanggal" class="form-label">Tingkat Kepuasan</label>
                    <select  class="form-select" name="review" aria-label="Example select with button addon">
                        <option value= "Kecewa" @if($review->review === "Kecewa" ) {{ 'selected' }} @endif> Kecewa  </option>
                        <option value= "Biasa" @if($review->review === "Biasa" ) {{ 'selected' }} @endif> Biasa  </option>
                        <option value= "Senang" @if($review->review === "Senang" ) {{ 'selected' }} @endif> Senang  </option>
                        <option value= "Sangat senang" @if($review->review === "Sangat senang" ) {{ 'selected' }} @endif> Sangat senang  </option>
                        
                    </select>
                    <div class="mb-4">
                        <label for="description" class="form-label fs-5">Ulasan</label>
                        <textarea class="form-control" id="description " rows="5" name="ulasan"  > {{ $review->ulasan }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
               </form>
            </td>
    </tr>
    @php $count += 1
    @endphp
    @endforeach

</table>

<h3 class="text-uppercase mt-2"> Selesai</h3>
<table class="table table-striped"> 
    <tr style="border-bottom: 3px solid black; text-align: left;">
        <th style="col">No</th>
        <th style="col">Menu</th>
        <th style="col">User</th>
        <th style="col">Tanggal event</th>
        <th style="col">Tanggal berakhir</th>
        <th style="col">Action</th>
    </tr>
    @foreach ($reviews as $review)   
    <tr>
        <td >{{ $count }}</td>
        <td >{{ $review->menu }}</td>
        <td > {{ $review->user->nama }} </td>
        <td>{{ $review->tanggal }}</td>
        <td>{{ $review->created_at }}</td>
           <td> 
                   <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#{{ $review->menu }}">kasih review</button>
            

            <div class="modal fade" id="{{ $review->menu }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <form action = "/status/{{ $review->id }}" method="POST">
                @method('put')
                    @csrf
                    <input type="hidden" class="form-control" name="book_id" value="{{ $review->book_id }}" >
                    <input type="hidden" class="form-control" name="id" value="{{ $review->id }}" >
                    <input type="hidden" class="form-control" name="user_id" value="{{ $review->user_id }}" >
                   <input type="hidden" class="form-control" name="gabung_package_id" value="{{ $review->gabung_package_id }}" >
                   <input type="hidden" class="form-control" name="menu" value="{{ $review->menu }}" >
                   <input type="hidden" class="form-control" name="tanggal" value="{{ $review->tanggal }}" >
                   <input type="hidden" class="form-control" name="status" value="{{ 1 }}" >

                    <div class="modal-content">
                    <div class="modal-body">
                    <div class="mb-0">
                    <label for="tanggal" class="form-label">Tingkat Kepuasan</label>
                    <select  class="form-select" name="review" aria-label="Example select with button addon">
                        <option value= "Kecewa" @if($review->review === "Kecewa" ) {{ 'selected' }} @endif> Kecewa  </option>
                        <option value= "Biasa" @if($review->review === "Biasa" ) {{ 'selected' }} @endif> Biasa  </option>
                        <option value= "Senang" @if($review->review === "Senang" ) {{ 'selected' }} @endif> Senang  </option>
                        <option value= "Sangat senang" @if($review->review === "Sangat senang" ) {{ 'selected' }} @endif> Sangat senang  </option>
                        
                    </select>
                    <div class="mb-4">
                        <label for="description" class="form-label fs-5">Ulasan</label>
                        <textarea class="form-control" id="description " rows="5" name="ulasan"  > {{ $review->ulasan }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Kasih Review</button>
                </div>
               </form>
            </td>
    </tr>
    @php $count += 1
    @endphp
    @endforeach


</table>

@endsection