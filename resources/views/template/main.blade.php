<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>E-Arsip | SDN LANDASAN ULIN UTARA</title>
</head>

<body>
    <!-- AWAL NAV -->
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-info text-white">
        <div class="container">
            <a class="navbar-brand me-auto"><strong>E-Arsip LAURA </strong></a>
            <button class="navbar-toggler btn-group" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link bi bi-house" href="/"> <span class="sr-only"></span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('tamuumum') }}">Tamu Umum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('tamudinas') }}">Tamu Dinas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('tamupengawas') }}">Tamu Khusus Pengawas</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>

    </nav>
    <!-- AKHIR NAV -->
    <!-- awal container -->
    <div class="container">

        @yield('content')


    </div>
    <!-- akhir container -->
    <!-- footer -->
    <footer class="mt-3 bg-info p-2  text-center" style="color: white;font-weight: bold;">
        <p><cite>E-Arsip &copy; 2024 </cite></p>
    </footer>
    <!-- akhir footer -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="assets/js//jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js//bootstrap.min.js"></script>
</body>

</html>
