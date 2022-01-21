<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Carousel Template · Bootstrap v5.0</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/css/carousel.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    
          <a class="btn btn-primary ml-4" href="/">Back</a>
        
  </nav>
</header>

<main>

    <div id="carouselExampleControls" class="carousel slide mb-0" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('storage/images.JFIF') }}" class="d-block w-100" alt="...">
              </div>
            @foreach($thumbnails as $thumbnail)
            <div class="carousel-item">
        <img src="{{ asset('storage/' . $thumbnail->image_thumbnail) }}" class="d-block w-100" alt="...">
      </div>
            @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <div class="col-md-10 col-lg-12 p-5 pt-2 mt-4 mb-0">
      <table class="table">
        <tr> <td class="col-1">
        <img style="height:100px ; width:100px ;" class="bd-placeholder-img rounded-circle" src="{{ asset('storage/' . $vendors->image_profile) }}">
        </td>
    <td class="col-7" > <h3> {{ $vendors->nama_toko }} </h3>
        <h5> {{ $vendors->keterangan }}</h5>
        <p class="bx bxs-map-pin bx-xs mb-3">   {{ $vendors->alamat }}</p>
    </td>
    <td class="col-4" > <div class="btn btn-primary"> <h4>Chat Vendor</h4></td>

    </tr>
      </table>
  </div>
    <div class="container">
        <div class="row mb-5 ">
            <div class="col-md-8 mx-auto text-center">
                <h1>Menus</h1>
            </div>
        </div>
    </div>
  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        @foreach($menus as $menu)
      <div class="col-lg-4">
        <img style="height:170px ; width:170px ;" class="bd-placeholder-img rounded-circle" src="{{ asset('storage/' . $menu->gambar) }}">
        <h2>{{ $menu->menu }}</h2>
        <p>{{ $menu->description }}</p>
        <button type="button" class="btn btn-primary text-center" data-bs-toggle="modal" data-bs-target="#menu{{ $menu->id }}">
            Details
          </button>

          <div class="modal fade" id="menu{{ $menu->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="menu{{ $menu->id }}">Booking Set</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  
              <!--form pengisian-->
              <div class="formisi">
        <form class="formsubmit" method="POST" action="/admin/book" >
            @csrf
             <input type="hidden" class="form-control" name="user_id" value="{{ auth()->user()->id }}" >
             <input type="hidden" class="form-control" name="gabung_package_id" value="{{ $menu->id }}" >
             <input type="hidden" class="form-control" name="status" value="{{ 0 }}" >
             <input type="hidden" value=" {{ $menu->menu }}" name="menu">

             <div class="mb-3">
                <label for="tanggal" class="form-label">Event Date</label>
                <input type="date" class="form-control" id="tanggal" placeholder="mm / dd / yy" name="tanggal" required>
              <div class="mb-3">
                <label for="telp" class="form-label">Phone Number</label>
                <input type="number" class="form-control" id="telp" name="no_telp">
                <center>
                    <div class="mt-5 mb-3" >
                        <button type="submit" class="btn btn-primary">BOOK NOW!!!</button>
                    </center>
              </div>
              </div>
        </form>
              </div>
                </div>
              </div>
            </div>
          </div>
      </div><!-- /.col-lg-4 -->
      @endforeach
    </div>



</main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
  </body>
</html>
