@extends('template.main2')

@section('content')
    <div class="card mt-2">
        <div class="card-header bg-secondary text-white font-weight-bold">
            Data Arsip Surat
        </div>
        <div class="card-body">
            {{-- jika role admin, akan keluar crud. Jika pegawai tidak akan keluar crud --}}
            @if (Auth::user()->role == 'admin')
                <a href="{{ url('arsip_surat/create') }}" class="btn btn-success mb-2">Tambah Data</a>
            @endif
            <table class="table table-bordered table-hovered table-striped" id="my-table">
                <thead>
                    <tr class=text-center>
                        <th>No</th>
                        <th>No Surat</th>
                        <th>Tanggal Surat</th>
                        <th>Tanggal Diterima</th>
                        <th>Perihal</th>
                        <th>Departemen</th>
                        <th>Pengirim</th>
                        <th>file</th>

                        @can('admin')
                            <th>Aksi</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
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
                            @can('admin')
                                <td>
                                    {{-- jika role admin, akan keluar crud. Jika pegawai tidak akan keluar crud --}}
                                    <a href="{{ url("arsip_surat/$d->id/edit") }}"
                                        class="btn btn-outline-success fa fa-pencil"></a>

                                    <Form action="{{ url("arsip_surat/$d->id") }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger fa fa-trash-o"
                                            onclick="return confirm ('Apakah anda yakin ingin menghapus data in?')"></button>
                                    </Form>
                                </td>
                            @endcan
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
