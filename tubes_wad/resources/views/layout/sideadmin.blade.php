<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/admin">PROFILE</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin') ? 'active' : ''  }}" href="/admin">
              <span data-feather="eye"></span>
            Dashboard Website
            </a>
          </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('admin/listpackage*') ? 'active' : ''  }} {{ Request::is('admin/package') ? 'active' : ''  }}" aria-current="page"  href="/admin/listpackage">
                <span data-feather="book"></span>
            Post Package
              </a>
            </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/applicant') ? 'active' : ''  }}" aria-current="page" href="/admin/applicant">
              <span data-feather="home"></span>
              Vendor Applicant
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ Request::is('admin/vendor') ? 'active' : ''  }}" href="/admin/vendor">
                <span data-feather="users"></span>
                List Vendor
            </a>
        </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/book') ? 'active' : ''  }}" href="/admin/book">
              <span data-feather="bookmark"></span>
            Status book
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('admin/testimoni') ? 'active' : ''  }}" href="/admin/testimoni">
              <span data-feather="bookmark"></span>
            Testimoni
            </a>
          </li>
          
        </ul>

    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('isi')
    </main>
</div>
</div>
      
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>

<script src="/js/dashboard.js"> </script> 
      
    </body>
</html>