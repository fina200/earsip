@extends('template.main')

@section('content')
    @yield('tamuumum')
    <div class="card mt-2">
        <div class="card-header bg-secondary text-white font-weight-bold">
            Data Tamu Umum
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hovered table-striped" id="my-table">
                <thead>
                    <tr class=text-center>
                        <th>No</th>
                        <th>Nama Tamu</th>
                        <th>Instansi</th>
                        <th>Tujuan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->instansi }}</td>
                            <td>{{ $d->tujuan }}</td>
                            <td>
                                <a href="{{ url("tamuumum/$d->id/edit") }}" class="btn btn-outline-success fa fa-pencil"></a>

                                <Form action="{{ url("tamuumum/$d->id") }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger fa fa-trash-o"
                                        onclick="return confirm ('Apakah anda yakin ingin menghapus data in?')"></button>
                                </Form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
