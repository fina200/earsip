<div class="container">
    <div class="center">
        <div class="col-lg-12 mt-3">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-6 "><img src="assets/logo1.png" alt="" width="120"> Daftar Tamu SDN 1 Landasan Ulin Utara</h1>
                    <p class="lead ">Selamat Datang di SDN 1 Landasan Ulin Utara adalah Program yang akan memudahkan anda dalam dalam mengisi Daftar Tamu</p>
                    <hr class="my-4">
                    <a class="btn btn-success btn-lg" href="arsip_surat/admin.php" role="button" onclick="return confirm ('Apakah anda yakin ingin keluar dari halaman Daftar Tamu?')">Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
      <div class="col">
        <div class="card" >
          <div class="card-body">
            <h5 class="card-title">Tamu Umum</h5>
                <?php $data_tamu = mysqli_query($koneksi,"SELECT * FROM tbl_tamu_umum");
                $jumlah_tamu = mysqli_num_rows($data_tamu);?>
                <p>Jumlah Tamu Umum : <?php echo $jumlah_tamu; ?></b></p>
            <a href="?halaman=tamu_umum" class="btn btn-primary">Tamu Umum </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card" >
          <div class="card-body">
            <h5 class="card-title">Tamu Dinas</h5>
                <?php $data_tamu = mysqli_query($koneksi,"SELECT * FROM tbl_tamu_dinas");
                $jumlah_tamu = mysqli_num_rows($data_tamu);?>
                <p>Jumlah Tamu Dinas : <?php echo $jumlah_tamu; ?></b></p>
            <a href="?halaman=tamu_dinas" class="btn btn-primary">Tamu Dinas</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Tamu Pengawas</h5>
                <?php $data_tamu = mysqli_query($koneksi,"SELECT * FROM tbl_tamu_pengawas");
                $jumlah_tamu = mysqli_num_rows($data_tamu);?>
                <p>Jumlah Tamu Pengawas : <?php echo $jumlah_tamu; ?></b></p>
            <a href="?halaman=tamu_pengawas" class="btn btn-primary">Tamu Pengawas</a>
          </div>
        </div>
      </div>
</div>