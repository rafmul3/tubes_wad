<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<style>
    .containerform{
        margin : 60px auto;
        width: 30%;
        background-color: rgb(245, 245, 245);
        padding: 10px 5% ;
    }
    body {
        background-color: rgb(214, 214, 214);
    }
    .formisi{
            margin: 50px auto ;
            width:80%;
        }
        footer{
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .formisi .navbar{
            padding:0;  
        }
        .gridisi{
            display: grid;
            grid-template-columns: 1fr 1fr;
            border:1px solid gray;
            margin-top: 30px;
        }
        .formgambar{
            display: flex;
            justify-content: center;
            align-items: center;
            padding : 30px;
        }
        
        .formsubmit{
            padding : 20px;
        }
    </style>
    <title>{{ $head }} </title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light pb-2 pt-2">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img class="logo" src="" alt="">
      </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto fs-5 fw-bold">
        
            <li class="nav-item">
              <a class="nav-link" href="/">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/list-vendor">Vendor</a>
            </li>
            <li class="nav-item ml-4">
              <a class="nav-link" href="/list-package">Package</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/testimoni">Testimoni</a>
            </li>
          </ul>
  @auth
<ul class="navbar-nav ms-auto">
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle fs-5" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      {{ auth()->user()->nama }}
    </a>
    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      <li><a class="dropdown-item" href="/profile/">Kelola toko</a></li>
      <li><a class="dropdown-item" href="/admin">Administrative</a></li>{{-- vendor --}}
      <li><a class="dropdown-item" href="/status">Status order</a></li>{{-- guest --}}
      <li><hr class="dropdown-divider"></li>
      <li>
        <form action="/logout" method="POST">
          @csrf
          <button type="submit" class="dropdown-item">Logout</button>
        </form>
        </li>
    </ul>
  </li>
</ul>
  @else
  <ul class="navbar-nav ms-auto">
    @if ($head === "register")
    <div>
        <a type="button" class="btn btn-outline-secondary"> Daftar</a>
    <a href="/login" style="color:black; font-weight: 450px; font-size: 18px; text-decoration: none;" type="button" class= "btn btn-primary text-white"  > Masuk </a>
    </div>
    @elseif ($head === "login")
    <div>
      <a href="/register" style="color:black; font-weight: 450px; font-size: 18px; text-decoration: none;" type="button" class= "btn btn-primary text-white"  > Daftar </a>
      <a type="button" class="btn btn-outline-secondary"> Masuk</a>
    </div>
      @else 
    <div>
    <a href="/register" style="color:black; font-weight: 450px; font-size: 18px; text-decoration: none;" type="button" class= "btn btn-primary text-white"  > Daftar </a>
    <a href="/login" style="color:black; font-weight: 450px; font-size: 18px; text-decoration: none;" type="button" class= "btn btn-primary text-white"  > Masuk </a>
    </div>
  </ul>
@endif
@endauth
</div>
      </div>
</nav>

      @yield('isi')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  </body>
</html>