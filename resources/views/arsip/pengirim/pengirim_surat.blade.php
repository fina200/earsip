@extends('template.main2')

@section('content')
    @yield('pengirim_surat')

    <div class="card mt-2">
        <div class="card-header bg-secondary text-white font-weight-bold">
            Data pengirim surat
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hovered table-striped">
                <tr class=text-center>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->alamat }}</td>
                        <td>{{ $d->no_hp }}</td>
                        <td>{{ $d->email }}</td>
                        <td>
                            <a href="{{ url("pengirim_surat/$d->id/edit") }}" class="btn btn-outline-success bi bi-pencil"></a>

                            <Form action="{{ url("pengirim_surat/$d->id") }}" method="post" class="d-inline">
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