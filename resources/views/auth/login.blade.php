<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>E-Arsip Laura - LOGIN</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/floating-labels.css') }}" rel="stylesheet">
  </head>
  <body>
    <form class="form-signin" method="POST" action="{{ route('login.store') }}">
        @csrf
        <div class="text-center mb-4">
            <img class="mb-4" src="{{ asset('assets/logo2.png') }}" alt="" width="200">
            <h1 class="h3 mb-3 font-weight-normal">Login E-Arsip Laura</h1>
            <p>Masukan Username dan Password Anda!</p>
        </div>

        <div class="form-label-group">
            <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" required autofocus>
            <label for="username">Username</label>
            @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-label-group">
            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
            <label for="password">Password</label>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="remember" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2024-<?= date('Y') ?> SDN 1 LANDASAN ULIN UTARA</p>
    </form>
    
    <!-- Bootstrap core JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
