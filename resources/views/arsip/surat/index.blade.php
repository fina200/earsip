@extends('template.main')

@section('content')
    <div class="card mt-2">
        <div class="card-header bg-secondary text-white font-weight-bold">
            Data Arsip Surat
        </div>
        <div class="card-body">
            <a href="{{ url('arsip_surat/create') }}" class="btn btn-success mb-2">Tambah Data</a>
            <table class="table table-bordered table-hovered table-striped">
                <tr class=text-center>
                    <th>No</th>
                    <th>No Surat</th>
                    <th>Tanggal Surat</th>
                    <th>Tanggal Diterima</th>
                    <th>Perihal</th>
                    <th>Departemen</th>
                    <th>Pengirim</th>
                    <th>file</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->no_surat }}</td>
                        <td>{{ $d->tgl_surat }}</td>
                        <td>{{ $d->tgl_surat_masuk }}</td>
                        <td>{{ $d->perihal }}</td>
                        <td>{{ $d->departemen->nama }}</td>
                        <td>{{ $d->pengirim_surat->nama . '/' . $d->pengirim_surat->no_hp }}</td>
                        <td>{{ $d->berkas }}</td>
                        <td>
                            <a href="?halaman=arsip_surat&hal=edit&id=" class="btn btn-outline-success bi bi-pencil"> </a>
                            <a href="?halaman=arsip_surat&hal=hapus&id=" class="btn btn-outline-danger bi bi-trash"
                                onclick="return confirm ('Apakah anda yakin ingin menghapus data in?')"> </a>
                        </td>
                    <tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection
