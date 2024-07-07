@extends('template.main')

@section('content')
<div class="container">
    <div class="center">
        <div class="col-lg-12 mt-3">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4 "><img src="assets/logo2.png" alt="" width="120"> E-Arsip SDN 1 Landasan Ulin Utara</h1>
                    <p class="lead ">Selamat Datang E-Arsip SDN 1 Landasan Ulin Utara adalah Program yang akan memudahkan anda dalam mengarsip Surat Masuk, dan Daftar Tamu</p>
                    <hr class="my-4">
                    <a class="btn btn-danger btn-lg" href="logout.php" role="button" onclick="return confirm ('Apakah anda yakin ingin keluar dari halaman Administrator?')">Log Out</a>
                    <a class="btn btn-danger btn-lg" href="../index.php" role="button" onclick="return confirm ('Apakah anda yakin ingin keluar dari halaman Administrator?')">Daftar Tamu</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
      <div class="col">
        <div class="card" >
          <div class="card-body">
            <h5 class="card-title">Departemen</h5>
                <?php $data = mysqli_query($koneksi,"SELECT * FROM tbl_dapartemen");
                $jumlah_departemen = mysqli_num_rows($data);?>
                <p>Jumlah Data Departemen : <?php echo $jumlah_departemen; ?></b></p>
            <a href="?halaman=departemen" class="btn btn-primary">Departemen</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" >
          <div class="card-body">
            <h5 class="card-title">Pengirim Surat</h5>
                <?php $data = mysqli_query($koneksi,"SELECT * FROM tbl_pengirim_surat");
                $jumlah_pengirim_surat = mysqli_num_rows($data);?>
                <p>Jumlah Data Pengirim Surat : <?php echo $jumlah_pengirim_surat; ?></b></p>
            <a href="?halaman=pengirim_surat" class="btn btn-primary">Pengirim Surat</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Arsip Surat</h5>
                <?php $data = mysqli_query($koneksi,"SELECT * FROM tbl_arsip");
                $jumlah_arsip_surat = mysqli_num_rows($data);?>
                <p>Jumlah Data Arsip Surat : <?php echo $jumlah_arsip_surat; ?></b></p>
            <a href="?halaman=arsip_surat" class="btn btn-primary">Data Arsip Surat</a>
          </div>
        </div>
      </div>
</div>
@endsection
