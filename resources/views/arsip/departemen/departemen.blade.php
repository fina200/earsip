@extends('template.main2')

@section('content')
    @yield('departemen')
    <tr class="navbar navbar-light bg-light">
        <form action="/departemen" class="form-inline" method="GET">
          <input class="form-control mr-sm-2" type="search" name="Search" aria-label="Search" placeholder="isikan nama">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>

    <div class="card mt-2">
        <div class="card-header bg-secondary text-white font-weight-bold">
            Data Departemen
        </div>

        <div class="card-body">
            <table id = "myTable" class="table table-bordered table-hovered table-striped">
                
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
                            <a href="{{ url("departemen/$d->id/edit") }}" class=" btn btn-outline-success bi bi-pencil"></a>

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
