@extends('template.main')

@section('content')
@yield('tamupengawas')

    <div class="card mt-2">
        <div class="card-header bg-secondary text-white font-weight-bold">
            Data Tamu Pengawas
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hovered table-striped">
                <tr class=text-center>
                    <th>No</th>
                    <th>Nama Tamu</th>
                    <th>Instansi</th>
                    <th>Tujuan</th>
                    <th>Saran</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->instansi }}</td>
                        <td>{{ $d->tujuan }}</td>
                        <td>{{ $d->saran }}</td>
                        <td>
                            <a href="{{ url("tamupengawas/$d->id/edit") }}" class="btn btn-outline-success bi bi-pencil"></a>

                            <Form action="{{ url("tamupengawas/$d->id") }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger bi bi-trash"
                                    onclick="return confirm ('Apakah anda yakin ingin menghapus data in?')"></button>
                            </Form>
                        </td>
                    <tr>
                @endforeach
            </table>
        </div>
    </div>
    </div>
@endsection
