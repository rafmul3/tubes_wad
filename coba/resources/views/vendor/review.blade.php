@extends('layout.sidebar')

@section('isi')
<h3 class="text-uppercase mt-2"> Berikan ulasan</h3>
<table class=""> 
    <tr style="border-bottom: 3px solid black; text-align: left;">
        <th style="width:10%">No</th>
        <th style="width:10%">Menu</th>
        <th style="width:10%">User</th>
        <th style="width:10%">Tanggal event</th>
        <th style="width:10%">Tanggal berakhir</th>
        <th style="width:10%">Action</th>
    </tr>
    @foreach ($requests as $request)   
    <tr>
        <td >{{ $count }}</td>
        <td >{{ $request->menu }}</td>
        <td > {{ $request->user->nama }} </td>
        <td>{{ $request->tanggal }}</td>
        <td>{{ $request->created_at }}</td>
           <td> 
                   <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{ $request->menu }}">Tulis Review </button>
            

            <div class="modal fade" id="{{ $request->menu }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <form action = "/profile/review/{{ $request->id }}" method="POST">
                @method('put')
                    @csrf
                    <input type="hidden" class="form-control" name="book_id" value="{{ $request->book_id }}" >
                    <input type="hidden" class="form-control" name="user_id" value="{{ $request->user_id }}" >
                   <input type="hidden" class="form-control" name="gabung_package_id" value="{{ $request->gabung_package_id }}" >
                   <input type="hidden" class="form-control" name="menu" value="{{ $request->menu }}" >
                   <input type="hidden" class="form-control" name="tanggal" value="{{ $request->tanggal }}" >
                   <input type="hidden" class="form-control" name="status" value="{{ 1 }}" >

                    <div class="modal-content">
                    <div class="modal-body">
                    <div class="mb-0">
                    <label for="tanggal" class="form-label">Tingkat Kepuasan</label>
                    <select  class="form-select" name="review" aria-label="Example select with button addon">
                        <option selected>Choose...</option>
                        <option value= "Kecewa"> Kecewa  </option>
                        <option value= "Biasa"> Biasa  </option>
                        <option value= "Senang"> Senang  </option>
                        <option value= "Sangat senang"> Sangat senang  </option>
                        
                    </select>
                    <div class="mb-4">
                        <label for="description" class="form-label fs-5">Ulasan</label>
                        <textarea class="form-control" id="description " rows="5" name="ulasan" ></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Posting Review</button>
                </div>
               </form>
            </td>
    </tr>
    @php $count += 1
    @endphp
    @endforeach
</table>


<h3 class="text-uppercase mt-2"> Berikan ulasan</h3>
<table class=""> 
    <tr style="border-bottom: 3px solid black; text-align: left;">
        <th style="width:10%">No</th>
        <th style="width:10%">Menu</th>
        <th style="width:10%">User</th>
        <th style="width:10%">Tanggal event</th>
        <th style="width:10%">Tanggal berakhir</th>
        <th style="width:10%">Action</th>
    </tr>
    @foreach ($reviews as $review)   
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

@endsection