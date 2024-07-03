@extends('template.main')

@section('content')
<div class="card mt-2 ">
    <div class="card-header bg-secondary text-white font-weight-bold">
        Data Departemen
    </div>
        <div class="card-body">
            <table class="table table-bordered table-hovered table-striped table">
                <tr class = text-center>
                    <th>No</th>
                    <th>Nama Departemen</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($data as $d)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->nama }}</td>
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