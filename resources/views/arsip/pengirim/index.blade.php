@extends('arsip.pengirim.pengirim_surat')

@section('pengirim_surat')

    <div class="card mt-2 ">
        <div class="card-header bg-secondary text-white font-weight-bold">
            Form Pengirim Surat
        </div>
        <div class="card-body ">
            <form method = "post" action = "{{ url('pengirim_surat') }}">
                @csrf
                <div class="form-group ">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required class = "form-control">
                </div>
                <div class="form-group ">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required
                        class = "form-control">
                </div>
                <div class="form-group ">
                    <label for="no_hp">No HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" required
                        class = "form-control">
                </div>
                <div class="form-group ">
                    <label for="email">email</label>
                    <input type="text" class="form-control" id="email" name="email" required
                        class = "form-control">
                </div>
                <button type="submit" name="bsimpan" class="btn btn-primary bi bi-save"> Simpan</button>
                <button type="reset" name="bbatal" class="btn btn-danger bi bi-x-square"> Batal</button>
            </form>
        </div>
    </div>
@endsection