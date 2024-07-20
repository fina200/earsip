<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    
    <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css') }}">
    
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
                    {{-- @if (Auth::user()->role == 'admin')
                    <li class="nav-item active">
                        <a class="nav-link bi bi-house" href="/"> <span class="sr-only"></span></a>
                    </li>                        
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ url('departemen') }}" >Data Departemen</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('pengirim_surat') }}">Data Pengirim Surat</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('arsip_surat') }}">Data Arsip Surat</a>
                      </li>
                    @endif --}}
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="assets/js//jquery-3.5.1.slim.min.js"></script>
    <script src="assets/js//bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script>
        let table = new DataTable('#my-table');
    </script>
</body>

</html>
