@extends('layout.sidebar')

@section('isi')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">DASHBOARD</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
    </div>
  </div>
</div>

<div class="col-md-10 col-lg-12 p-5 pt-2 mt-1">
    <div class="row row-cols-lg-2 row-cols-sm-1 mt-1 justify-content-center">
        <div class="col-xl-6 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2 bg-warning">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h4 font-weight-bold text-black text-uppercase mb-2">Menu</div>
                  <div class="h4 mb-0 font-weight-bold text-dark">{{ $menu }}</div>
                </div>
                <div class="col-auto">
                  <i class="fa fa-dropbox fa-4x text-gray-300"></i>
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
                  <div class="h4 font-weight-bold text-black text-uppercase mb-1">Customer</div>
                  <div class="h4 mb-0 font-weight-bold text-black">{{ $customer }}</div>
                </div>
                <div class="col-auto">
                  <i class="fa fa-users fa-4x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-6 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2 bg-primary">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="h4 font-weight-bold text-black text-uppercase mb-1">Order</div>
                  <div class="h4 mb-0 font-weight-bold text-black">{{ $book }}</div>
                </div>
                <div class="col-auto">
                  <i class="fa fa-shopping-cart fa-4x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </div>

</div>

@endsection