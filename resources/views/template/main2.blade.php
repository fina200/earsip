<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
{{-- <!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]--> --}}

<head>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    
    {{-- {{ asset('style') }} --}}
    <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css') }}">
    

    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="{{ asset('style/assets/scss/style.css') }}">
    <link href="{{ asset('style/assets/css/lib/vector-map/jqvmap.min.css') }}" rel="stylesheet">
    {{-- <link href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css }}" rel="stylesheet"> --}}

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Arsip | SDN 1 Landasan Ulin Utara</title>
    <meta name="description" content="E-Arsip | SDN 1 Landasan Ulin Utara">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="  navbar-brand me-auto">E-Arsip LAURA</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ url('admin') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a></h3>
                    </li>
                    @if (Auth::user()->role == 'admin')
                        <h3 class="menu-title"> <i class = "ti ti-user"> </i>Admin</h3>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                            <ul class="sub-menu children dropdown-menu">

                                <li><i class="fa fa-group"></i> <a href="{{ url('user') }}">Data Registrasi</a></li>
                                <li><i class="fa fa-puzzle-piece"></i> <a href="{{ url('departemen') }}">Departemen</a>
                                <li><i class="fa fa-list-alt"></i> <a href="{{ url('pengirim_surat') }}">Pengirim
                                        Surat</a>
                            </ul>
                        <li>
                            <a href="{{ url('arsip_surat') }}"> <i class="menu-icon ti-email"></i>Arsip Surat </a>
                        </li>
                        <a class=" btn btn-danger .btn-sm " button style="margin-right: 10px;"
                            href="{{ route('login') }} " role="button"
                            onclick="return confirm ('Apakah anda yakin ingin keluar dari halaman Administrator?')">Log
                            Out</a>
                        <a class="btn btn-danger .btn-sm" href="../index.php" role="button"
                            onclick="return confirm ('Apakah anda yakin ingin keluar dari halaman Administrator?')">Daftar
                            Tamu</a>
                </ul>
                </li>
                @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">


                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa-angle-left"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                    aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </header>
        <div class="container">

            @yield('content')

        </div> <!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="{{ asset('style/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('style/assets/js/main.js') }}"></script>


    <script src="{{ asset('style/assets/js/lib/chart-js/Chart.bundle.js') }}"></script>
    <script src="{{ asset('style/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('style/assets/js/widgets.js') }}"></script>
    <script src="{{ asset('style/assets/js/lib/vector-map/jquery.vmap.js') }}"></script>
    <script src="{{ asset('style/assets/js/lib/vector-map/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/lib/vector-map/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('style/assets/js/lib/vector-map/country/jquery.vmap.world.js') }}"></script>

    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script>
        let table = new DataTable('#my-table');
    </script>
</body>

</html>
