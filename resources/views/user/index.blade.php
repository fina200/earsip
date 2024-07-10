@extends('user.user')

@section('user')
    <div class="card mt-2 ">
        <div class="card-header bg-secondary text-white font-weight-bold">
            Form Registrasi User
        </div>
        <div class="card-body ">
            <form method = "post" action = "{{ url("user") }}">
                @csrf
                <div class="form-group ">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required class = "form-control">
                </div>
                <div class="form-group ">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required
                        class = "form-control">
                </div>
                <div class="form-group ">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" id="password" name="password" required
                        class = "form-control">
                </div>
                <div class="form-group ">
                    <label for="role">Role</label>
                    <input type="text" class="form-control" id="role" name="role" required
                        class = "form-control">
                </div>
                <div class="form-group ">
                    <label for="departemen_id">Departemen</label>
                    <select class="form-control" name="departemen_id" required class = "form-control">
                        <option value="">- PILIH DEPARTEMEN -</option>
                        @foreach ($departemen as $d)
                            <option value="{{ $d->id }}">{{ $d->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" name="bsimpan" class="btn btn-primary bi bi-save"> Simpan</button>
                <button type="reset" name="bbatal" class="btn btn-danger bi bi-x-square"> Batal</button>
            </form>
        </div>
    </div>
@endsection