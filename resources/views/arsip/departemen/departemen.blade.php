@extends('template.main2')

@section('content')
    @yield('departemen')
    <tr class="navbar navbar-light bg-light">
        {{-- <form action="/departemen" class="form-inline" method="GET">
            <input class="form-control mr-sm-2" type="search" name="Search" aria-label="Search" placeholder="isikan nama">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> --}}

        <div class="card mt-2">
            <div class="card-header bg-secondary text-white font-weight-bold">
                Data Departemen
            </div>

            <div class="card-body">
                <table id="my-table" class="table table-striped">
                    <thead>
                        <tr class=text-center>
                            <th>No</th>
                            <th>Nama Departemen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $d)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->nama }}</td>
                                <td>
                                    <a href="{{ url("departemen/$d->id/edit") }}" class="btn btn-outline-success fa fa-pencil"></i></a>
                                    <Form action="{{ url("departemen/$d->id") }}" method="post" class="d-inline">
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
