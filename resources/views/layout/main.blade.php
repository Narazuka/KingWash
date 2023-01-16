<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>KING WASHER | {{ $tittle }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">

    

    

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/profile.css" rel="stylesheet">
  </head>
  <body>
<main>
  <div class="container" >
    <header class="d-flex  mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <image class="image-logo" style="margin-left: 10%; padding-bottom: 10px;" src="gambar/logo king washer.svg" alt="logo"></image>
                <svg class="bi me-2" style="width:20px;" height="15px"" ><use xlink:href="#bootstrap"/></svg>
            </a>

            <ul class="nav nav-pills" style="padding-top: 40px;">
                <li class="nav-item"><a href="/home" class="nav-link {{ ($tittle === "Home") ? 'active' : '' }}">Home</a></li>
                <li class="nav-item"><a href="/history" class="nav-link {{ ($tittle === "Booking") ? 'active' : '' }}">Booking</a></li>
            </ul>
        </div>
    </header>

    <div class="container mt-4">
        @yield('container')
    </div>
</main>


<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  
</body>
</html>

