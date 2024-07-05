@extends('arsip.departemen.departemen')

@section('departemen')
    <div class="card mt-2 ">
        <div class="card-header bg-secondary text-white font-weight-bold">
            Form departemen
        </div>
        <div class="card-body ">
            <form method = "post" action = "{{ url("departemen/$dataedit->id") }}">
                @method('put')
                @csrf
                <div class="form-group ">
                    <label for="nama">Nama Departemen</label>
                    <input type="text" class="form-control" id="nama" name="nama" required class = "form-control"
                    value="{{ $dataedit->nama }}">
                </div>
                <button type="submit" name="bsimpan" class="btn btn-primary bi bi-save"> Simpan</button>
                <button type="reset" name="bbatal" class="btn btn-danger bi bi-x-square"> Batal</button>
            </form>
        </div>
    </div>
@endsection