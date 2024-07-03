@extends('template.main')

@section('content')
<div class="card mt-2 ">
    <div class="card-header bg-secondary text-white font-weight-bold">
        Form Data Pengirim Surat
    </div>
        <div class="card-body ">
        <form method = "post" action = "">
            <div class="form-group ">
                <label for="nama_pengirim">Nama Pengirim</label>
                <input type="text" class="form-control" id="nama_pengirim" name="nama_pengirim"value="<?=@$vnama_pengirim?>" required class = "form-control">
            </div>
            <div class="form-group ">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat"value="<?=@$valamat?>" required class = "form-control">
            </div>
            <div class="form-group ">
                <label for="no_hp">No HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp"value="<?=@$vno_hp?>" required class = "form-control">
            </div>
            <div class="form-group ">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email"value="<?=@$vemail?>" required class = "form-control">
            </div>
            <button type="submit" name="bsimpan" class="btn btn-primary">Simpan</button>
            <button type="reset" name="bbatal" class="btn btn-danger">Batal</button>
            </form>
        </div>
    </div>
 

<div class="card mt-2">
    <div class="card-header bg-secondary text-white font-weight-bold">
        Data Pengirim Surat
    </div>
        <div class="card-body">
            <table class="table table-bordered table-hovered table-striped">
                <tr class = text-center>
                    <th>No</th>
                    <th>Nama Pengirim Surat</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($data as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->alamat }}</td>
                    <td>{{ $d->no_hp }}</td>
                    <td>{{ $d->email }}</td>
                    <td>
                        <a href="?halaman=tamu_dinas&hal=edit&id=" class="btn btn-outline-success bi bi-pencil"></a>
                        <a href="?halaman=tamu_dinas&hal=hapus&id=" class="btn btn-outline-danger bi bi-trash"
                            onclick="return confirm ('Apakah anda yakin ingin menghapus data in?')"> </a>
                    </td>
                <tr>
            @endforeach
        </table>
    </div>
</div>
</div>
@endsection