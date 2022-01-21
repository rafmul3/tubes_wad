@extends('layout.sideadmin')

@section('isi')

@php 
$cek = false;
@endphp


<h3 class="text-lowecase mt-2" style="font-size:2px; color:white;"> List Package</h3>
<a class="btn btn-primary btn-lg mt-3" href="/admin/package">Create Package</a>
<table class="table table-striped"> 
    <tr style="border-bottom: 3px solid black; text-align: left;">
        <th style="col">No</th>
        <th style="col">Nama</th>
        <th style="col">vendor</th>
        <th style="col">Aksi</th>
    </tr>
    @foreach ($admins as $package)   
    <tr>
        <td >{{ $count }}</td>
        <td >{{ $package->menu }}</td>
        <td >
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{ $package->menu }}"> Add </button>
            <div class="modal fade" id="{{ $package->menu }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        
                    <div class="mb-0">
                <form action = "/admin/listpackage" method="POST">
                    @csrf
                    <label for="tanggal" class="form-label">Add Vendor</label>
                    <select  class="form-select" name="vendor_id" aria-label="Example select with button addon">
                        <option selected>Choose...</option>
                        @foreach($vendors as $vendor)
                        
                            @foreach($package->package as $packages)
                                @if($vendor->id == $packages->vendor_id)
                                    @php 
                                    $cek = true;
                                    @endphp
                                @else
                                    @php 
                                    $cek = false;
                                    @endphp
                                @endif
                            @endforeach
                            @if($cek === false)
                        <option value={{ $vendor->id }}>{{ $vendor->nama }}</option>
                            @endif
                        @endforeach
                    </select>
                    <input type="hidden" class="form-control" name="gabung_package_id" value="{{ $package->id }}">
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
                <hr>
                
                <form action = "/admin/listpackage/hapus" class="mt-4" method="post">
                    @method('delete')
                    @csrf
                    <div class="form-control " name="menu" id="nama" readonly >
                    <h4> Vendor Terdaftar</h4>
                    <table class="table table-striped">
                        <tr>
                        <th style="col"> Vendor </th>
                        <th class="col" > aksi </th>
                        </tr>
                    @foreach($package->package as $packages)
                    <tr>
                        <td>   {{ $packages->vendor->nama }}</td>
                        <input type="hidden" class="form-control" name="id" value="{{ $packages->id }}">
                        <td><button type="submit" class="btn btn-danger ">Hapus</button> </td>
                    </tr>
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
        <td class="row row-col-lg-2">
            <form action = "/admin/package/{{$package->id }}/edit" class="col-2" method="get">
                @csrf
                <input type="hidden" class="form-control" name="id" value="{{ $package->id }}">
                <button type="submit" class="btn btn-warning ">edit</button> 
            </form> 

            <form action = "/admin/package/hapus" class="col col-2" method="post">
                @method('delete')
                @csrf
                <input type="hidden" class="form-control" name="id" value="{{ $package->id }}">
                <button type="submit" class="btn btn-danger ">Hapus</button> 
            </form>
         </td>
    </tr>
    @php $count += 1
    @endphp
    @endforeach

@endsection
