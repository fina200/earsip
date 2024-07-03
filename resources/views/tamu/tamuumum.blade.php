@extends('template.main')

@section('content')
    <div class="card mt-2 ">
        <div class="card-header bg-secondary text-white font-weight-bold">
            Form Tamu Umum
        </div>
        <div class="card-body ">
            <form method = "post" action = "{{ url('tamuumum') }}">
                @csrf
                <div class="form-group ">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required class = "form-control">
                </div>
                <div class="form-group ">
                    <label for="instansi">Instansi / Jabatan</label>
                    <input type="text" class="form-control" id="instansi" name="instansi" required
                        class = "form-control">
                </div>
                <div class="form-group ">
                    <label for="tujuan">Tujuan</label>
                    <input type="text" class="form-control" id="tujuan" name="tujuan" required
                        class = "form-control">
                </div>
                <button type="submit" name="bsimpan" class="btn btn-primary bi bi-save"> Simpan</button>
                <button type="reset" name="bbatal" class="btn btn-danger bi bi-x-square"> Batal</button>
            </form>
        </div>
    </div>


    <div class="card mt-2">
        <div class="card-header bg-secondary text-white font-weight-bold">
            Data Tamu Umum
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hovered table-striped">
                <tr class=text-center>
                    <th>No</th>
                    <th>Nama Tamu</th>
                    <th>Instansi</th>
                    <th>Tujuan</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->instansi }}</td>
                        <td>{{ $d->tujuan }}</td>
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
