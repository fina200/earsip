@extends('template.main2')

@section('content')
    <div class="card mt-2 ">
        <div class="card-header bg-secondary text-white font-weight-bold">
            Form Arsip Surat
        </div>
        <div class="card-body ">
            <form method = "post" action = "{{ url('arsip_surat') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group ">
                    <label for="no_surat">Nomor Pengirim</label>
                    <input type="text" class="form-control" id="no_surat" name="no_surat" required class = "form-control">
                </div>
                <div class="form-group ">
                    <label for="tanggal_surat">Tanggal Surat</label>
                    <input type="date" class="form-control" id="tanggal_surat" name="tgl_surat" required
                        class = "form-control">
                </div>
                <div class="form-group ">
                    <label for="tanggal_diterima">Tanggal Diterima</label>
                    <input type="date" class="form-control" id="tanggal_diterima" name="tgl_surat_masuk" required
                        class = "form-control">
                </div>
                <div class="form-group ">
                    <label for="prihal">Perihal</label>
                    <input type="text" class="form-control" id="prihal" name="perihal" required
                        class = "form-control">
                </div>
                <div class="form-group ">
                    <label for="id_departemen">Departemen / Tujuan</label>
                    <select class="form-control" name="departemen_id" required class = "form-control">
                        <option value="">- PILIH DEPARTEMEN -</option>
                        @foreach ($departemen as $d)
                            <option value="{{ $d->id }}">{{ $d->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group ">
                    <label for="id_pengirim">Pengirim Surat</label>
                    <select class="form-control" name="pengirim_surat_id" required class = "form-control">
                        <option value="">- PILIH PENGIRIM -</option>
                        @foreach ($pengirim as $p)
                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group ">
                    <label for="file">Pilih File</label>
                    <input type="file" class="form-control" id="file" name="berkas">
                </div>
                <button type="submit" name="bsimpan" class="btn btn-primary">Simpan</button>
                <button type="reset" name="bbatal" class="btn btn-danger">Batal</button>
            </form>
        </div>
    </div>
@endsection
