@extends('tamu.pengawas.tamupengawas')
@section('tamupengawas')
    <div class="card mt-2 ">
        <div class="card-header bg-secondary text-white font-weight-bold">
            Form Tamu pengawas
        </div>
        <div class="card-body ">
            <form method = "post" action = "{{ url('tamupengawas') }}">
                @csrf
                <div class="form-group ">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required class = "form-control">
                </div>
                <div class="form-group ">
                    <label for="instansi">Instansi / Jabatan</label>
                    <input type="text" class="form-control" id="instansi" name="instansi" required
                        class = "form-control">
                </div>
                <div class="form-group ">
                    <label for="tujuan">Tujuan</label>
                    <input type="text" class="form-control" id="tujuan" name="tujuan" required
                        class = "form-control">
                </div>
                <div class="form-group ">
                    <label for="saran">Saran</label>
                    <input type="text" class="form-control" id="saran" name="saran" required
                        class = "form-control">
                </div>
                <button type="submit" name="bsimpan" class="btn btn-primary bi bi-save"> Simpan</button>
                <button type="reset" name="bbatal" class="btn btn-danger bi bi-x-square"> Batal</button>
            </form>
        </div>
    </div>
@endsection
