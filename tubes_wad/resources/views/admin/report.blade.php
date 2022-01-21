@extends('layout.sideadmin')

@section('isi')
<div class="col-md-10 col-lg-12 p-5 pt-2 mt-4">
    <h3 > Dashboard</h3><hr>

    <div class="row row-cols-lg-2 row-cols-sm-1 mt-5">
        <div class="col-xl-6 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2 bg-warning">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h3 font-weight-bold text-black text-uppercase mb-2">Vendors</div>
                  <div class="h4 mb-0 font-weight-bold text-gray-800">{{ $vendors }}</div>
                </div>
                <div class="col-auto">
                  <i class="fa fa-child fa-4x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2 bg-success">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h3 font-weight-bold text-black text-uppercase mb-1">Total Packages</div>
                  <div class="h4 mb-0 font-weight-bold text-black">{{ $packages }}</div>
                </div>
                <div class="col-auto">
                  <i class="fa fa-dropbox fa-4x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2 bg-warning">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h3 font-weight-bold text-black text-uppercase mb-1">Total Customer</div>
                  <div class="h4 mb-0 font-weight-bold text-black">{{ $customers }}</div>
                </div>
                <div class="col-auto">
                  <i class="fa fa-shopping-cart fa-4x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-6 mb-4">
          <div class="card border-left-danger shadow h-100 py-2 bg-danger">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h3 font-weight-bold text-black text-uppercase mb-3">Transaksi</div>
                  <div class="h4 mb-0 font-weight-bold text-black">{{ $reviews }}</div>
                </div>
                <div class="col-auto">
                  <i class="fa fa-users fa-3x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

</div>

  @endsection