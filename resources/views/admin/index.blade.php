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
        </div>
    </header>
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if(session()->has('LoginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('LoginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <form action="/login" method="post">
        @csrf 
        <h3 style="margin-left:46%; ">Login Admin</h3>
        <div class="mb-3" style="margin-left:45%">
            <label for="email" class="form-label" >Email address</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="emailHelp" style="width: 25%;" required value="{{ old('email') }}">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3" style="margin-left:45%">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" style="width: 25%;" required>
        </div>
            <button type="submit" class="btn btn-primary" style="margin-left:45%; ">Submit</button>
    </form>
</main>

<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  
</body>
</html>