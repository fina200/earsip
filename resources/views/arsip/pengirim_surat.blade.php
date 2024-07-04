@extends('template.main')

@section('content')
    <div class="card mt-2 ">
        <div class="card-header bg-secondary text-white font-weight-bold">
            Form Pengirim Surat
        </div>
        <div class="card-body ">
            <form method = "post" action = "{{ url('pengirim_surat') }}">
                @csrf
                <div class="form-group ">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required class = "form-control">
                </div>
                <div class="form-group ">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required
                        class = "form-control">
                </div>
                <div class="form-group ">
                    <label for="no_hp">No HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required
                        class = "form-control">
                </div>
                <div class="form-group ">
                    <label for="email">email</label>
                    <input type="text" class="form-control" id="email" name="email" required
                        class = "form-control">
                </div>
                <button type="submit" name="bsimpan" class="btn btn-primary bi bi-save"> Simpan</button>
                <button type="reset" name="bbatal" class="btn btn-danger bi bi-x-square"> Batal</button>
            </form>
        </div>
    </div>


    <div class="card mt-2">
        <div class="card-header bg-secondary text-white font-weight-bold">
            Data pengirim surat
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hovered table-striped">
                <tr class=text-center>
                    <th>No</th>
                    <th>Nama</th>
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