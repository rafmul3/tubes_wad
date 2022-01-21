@extends('layout.sidebar')

@section('isi')

<h3 class="text-uppercase mt-2"> List Customer</h3>
<table class=""> 
    <tr style="border-bottom: 3px solid black; text-align: left;">
        <th style="width:10%">No</th>
        <th style="width:10%">Menu</th>
        <th style="width:10%">User</th>
        <th style="width:10%">Action</th>
    </tr>
    @foreach ($reviews as $review)   
    <tr>
        <td >{{ $count }}</td>
        <td >{{ $review->menu }}</td>
        <td > {{ $review->user->nama }} </td>
           <td> 
                   <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#{{ $review->menu }}">Details</button>
            

            <div class="modal fade" id="{{ $review->menu }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-body">
                    <div class="mb-0">
                    <label for="tanggal" class="form-label">Nama</label>
                    <input value="{{ $review->user->nama }}" disabled>
                    <div class="mb-0">
                        <label for="tanggal" class="form-label">Menu</label>
                        <input value="{{ $review->ulasan }}" disabled>

                        <div class="mb-0">
                            <label for="tanggal" class="form-label">Tanggal event</label>
                            <input value="{{ $review->tanggal }}" disabled>

                            <div class="mb-0">
                                <label for="tanggal" class="form-label">Tanggal berakhir</label>
                                <input value="{{ $review->created_at }}" disabled>

                            <div class="mb-0">
                                <label for="tanggal" class="form-label">Tingkat Kepuasan</label>
                                <input value="{{ $review->ulasan }}" disabled>

                                <div class="mb-0">
                                    <label for="tanggal" class="form-label">Review</label>
                                    <input value="{{ $review->review }}" disabled>
    </tr>
    @php $count += 1
    @endphp
    @endforeach


</table>

@endsection