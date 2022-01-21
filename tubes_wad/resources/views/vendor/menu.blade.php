@extends('layout.sidebar')

@section('isi')

<h3 class="text-uppercase mt-2"> List Menu</h3>
<a class="btn btn-primary btn-lg mt-3" href="/profile/menu/create">Create Menu</a>
<table class=" table table-striped mt-3"> 
    <tr style="border-bottom: 3px solid black; text-align: left;">
        <th style="col">No</th>
        <th style="col">Menu</th>
        <th style="col">Harga</th>
        <th style="col">Description</th>
    </tr>
    @foreach ($menus as $menu)   
    <tr class="">
        <td >{{ $count }}</td>
        <td >{{ $menu->menu }}</td>
        <td >{{ $menu->harga }}</td>
        <td class="row row-col-lg-2">
            <form action="/profile/menu/{{ $menu->id }}/edit" class="col-2" method="get">
                @csrf
                <input type="hidden" class="form-control" name="id" value="{{ $menu->id }}">
                <button type="submit" class="btn btn-warning ">edit</button> 
            </form> 

            <form action = "/profile/menu/hapus" class="col col-2" method="post">
                @method('delete')
                @csrf
                <input type="hidden" class="form-control" name="id" value="{{ $menu->id }}">
                <button type="submit" class="btn btn-danger ">Hapus</button> 
            </form>
         </td>
    </tr>
    @php $count += 1
    @endphp
    @endforeach

@endsection
