@extends('template.main2')

@section('content')
    @yield('pengirim_surat')

    <div class="card mt-2">
        <div class="card-header bg-secondary text-white font-weight-bold">
            Data pengirim surat
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hovered table-striped" id="my-table">
                <thead>
                    <tr class=text-center>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $d->nama }}</td>
                            <td>{{ $d->alamat }}</td>
                            <td>{{ $d->no_hp }}</td>
                            <td>{{ $d->email }}</td>
                            <td>
                                <a href="{{ url("pengirim_surat/$d->id/edit") }}"
                                    class="btn btn-outline-success fa fa-pencil"></a>
                                <Form action="{{ url("pengirim_surat/$d->id") }}" method="post" class="d-inline">
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
