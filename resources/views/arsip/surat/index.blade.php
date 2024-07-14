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
                    {{-- jika role admin, akan keluar crud. Jika pegawai tidak akan keluar crud --}}

                    @can('admin')
                        <th>Aksi</th>
                    @endcan
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
                        <td><a href="/{{ $d->berkas }}">
                                <h5 class="d-inline"><i class="bi bi-file-earmark-pdf"></i></h5>Download
                            </a></td>
                        @can('admin')
                            <td>
                                {{-- jika role admin, akan keluar crud. Jika pegawai tidak akan keluar crud --}}
                                <a href="{{ url("arsip_surat/$d->id/edit") }}" class="btn btn-outline-success bi bi-pencil"></a>

                                <Form action="{{ url("arsip_surat/$d->id") }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger bi bi-trash"
                                        onclick="return confirm ('Apakah anda yakin ingin menghapus data in?')"></button>
                                </Form>
                            </td>
                        @endcan
                    <tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection
