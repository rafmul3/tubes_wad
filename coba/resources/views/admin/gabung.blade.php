@extends('layout.sideadmin')

@section('isi')
<h3 class="text-uppercase mt-2"> List Package</h3>
<a class="btn btn-primary btn-lg mt-3" href="/admin/package">Create Package</a>
<table class=""> 
    <tr style="border-bottom: 3px solid black; text-align: left;">
        <th style="width:10%">No</th>
        <th style="width:10%">Nama</th>
        <th style="width:10%">vendor</th>
        <th style="width:10%">Aksi</th>
    </tr>
    @foreach ($admins as $admin)   
    <tr>
        <td >{{ $count }}</td>
        <td >{{ $admin->menu }}</td>
        <td >
            @if(empty($admin->package))
                None   |
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{ $admin->menu }}"> Add </button>
            @else
                @foreach($admin->package as $package)
                {{ $package->vendor->nama }}
                @endforeach
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{ $admin->menu }}"> Add </button>
            @endif
            <div class="modal fade" id="{{ $admin->menu }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <form action = "/admin/listpackage" method="POST">
                    @csrf
                    <div class="modal-content">
                    <div class="modal-body">
                    <div class="mb-0">
                    <label for="tanggal" class="form-label">Add Vendor</label>
                    <select  class="form-select" name="vendor_id" aria-label="Example select with button addon">
                        <option selected>Choose...</option>
                        @foreach($vendors as $vendor)
                        <option value={{ $vendor->id }}>{{ $vendor->nama }}</option>
                        @endforeach
                    </select>
                    <input type="hidden" class="form-control" name="gabung_package_id" value="{{ $admin->id }}">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
                    </div>
                    </div>
                </form>
        </td>
        <td>
            <a class="btn btn-danger">Hapus</a>
         </td>
    </tr>
    @php $count += 1
    @endphp
    @endforeach

@endsection
