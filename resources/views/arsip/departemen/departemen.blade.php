@extends('template.main')

@section('content')
    @yield('departemen')

    <div class="card mt-2">
        <div class="card-header bg-secondary text-white font-weight-bold">
            Data Tamu Dinas
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hovered table-striped">
                <tr class=text-center>
                    <th>No</th>
                    <th>Nama Departemen</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->nama }}</td>
                        <td>
                            <a href="{{ url("departemen/$d->id/edit") }}" class="btn btn-outline-success bi bi-pencil"></a>

                            <Form action="{{ url("departemen/$d->id") }}" method="post" class="d-inline">
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
