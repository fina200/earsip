@extends('user.user')

@section('user')
    <div class="card mt-2 ">
        <div class="card-header bg-secondary text-white font-weight-bold">
            Form Tamu Umum
        </div>
        <div class="card-body ">
            <form method = "post" action = "{{ url("user/$dataedit->id") }}">
                @method('put')
                @csrf
                <div class="form-group ">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required class = "form-control"
                    value="{{ $dataedit->nama }}">
                </div>
                <div class="form-group ">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required
                        class = "form-control"value="{{ $dataedit->username }}">
                </div>
                <div class="form-group ">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" name="password" required
                        class = "form-control"value="{{ $dataedit->password }}">
                </div>
                <div class="form-group ">
                    <label for="role">Role</label>
                    <input type="text" class="form-control" id="role" name="role" required
                        class = "form-control"value="{{ $dataedit->role }}">
                </div>
                <div class="form-group ">
                    <label for="departemen">Departmen</label>
                    <input type="text" class="form-control" id="departemen" name="departemen" required
                        class = "form-control"value="{{ $dataedit->departemen_id }}">
                </div>
                <button type="submit" name="bsimpan" class="btn btn-primary bi bi-save"> Simpan</button>
                <button type="reset" name="bbatal" class="btn btn-danger bi bi-x-square"> Batal</button>
            </form>
        </div>
    </div>
@endsection