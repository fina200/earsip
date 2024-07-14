@extends('template.main2')

@section('content')
    @yield('content')
    <div class="container">
        <div class="center">
            <div class="col-lg-12 mt-3">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4 "><img src="assets/logo2.png" alt="" width="120"> E-Arsip SDN 1 Landasan
                            Ulin Utara</h1>
                        <p class="lead ">Selamat Datang E-Arsip SDN 1 Landasan Ulin Utara adalah Program yang akan
                            memudahkan anda dalam mengarsip Surat Masuk, dan Daftar Tamu</p>
                        <hr class="my-4">
                        <a class="btn btn-primary btn-lg" href="../index.php" role="button"> Kelola Daftar Tamu</a>
                        <a class="btn btn-danger btn-lg" href="{{ route('login') }} " role="button"
                            onclick="return confirm ('Apakah anda yakin ingin keluar dari halaman Administrator?')">Log
                            Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Departemen</h5>
                    <a href="{{ url('departemen') }}" class="btn btn-primary">Departemen</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pengirim Surat</h5>
                    <a href="{{ url('pengirim_surat') }}" class="btn btn-primary">Pengirim Surat</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Arsip Surat</h5>
                    <a href="{{ url('arsip_surat') }}" class="btn btn-primary">Arsip Surat</a>
                </div>
            </div>
        </div>
    </div>
@endsection
