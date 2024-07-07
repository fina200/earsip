@extends('template.main')

@section('content')
    <div class="card mt-2 ">
        <div class="card-header bg-secondary text-white font-weight-bold">
            Form Data Arsip Surat LAURA
        </div>
        <div class="card-body ">
            <form method = "post" action = "{{ url("pengirim_surat/$dataedit->id") }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group ">
                    <label for="no_surat">Nomor Pengirim</label>
                    <input type="text" class="form-control" id="no_surat" name="no_surat" required class = "form-control"
                    value="{{ $dataedit->no_surat }}">
                </div>
                <div class="form-group ">
                    <label for="tgl_surat">Tanggal Surat</label>
                    <input type="date" class="form-control" id="tgl_surat" name="tgl_surat" required
                        class = "form-control" value="{{ $dataedit->tgl_surat }}">
                </div>
                <div class="form-group ">
                    <label for="tgl_surat_masuk">Tanggal Diterima</label>
                    <input type="date" class="form-control" id="tgl_surat_masuk" name="tgl_surat_masuk" required
                        class = "form-control"value="{{ $dataedit->tgl_surat_diterima }}">
                </div>
                <div class="form-group ">
                    <label for="perihal">Perihal</label>
                    <input type="text" class="form-control" id="perihal" name="perihal" required
                        class = "form-control"value="{{ $dataedit->perihal }}">
                </div>
                <div class="form-group ">
                    <label for="departemen_id">Departemen / Tujuan</label>
                    <select class="form-control" name="departemen_id" required class = "form-control"value="{{ $dataedit->departemen_id }}">
                        <option value="">- PILIH DEPARTEMEN -</option>
                        @foreach ($departemen as $d)
                            <option value="{{ $d->id }}">{{ $d->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group ">
                    <label for="pengirim_surat_id">Pengirim Surat</label>
                    <select class="form-control" name="pengirim_surat_id" required class = "form-control" value="{{ $dataedit->pengirim_surat_id }}">
                        <option value="">- PILIH PENGIRIM -</option>
                        @foreach ($pengirim as $p)
                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group ">
                    <label for="berkas">Pilih berkas</label>
                    <input type="berkas" class="form-control" id="berkas" name="berkas"value="{{ $dataedit->berkas }}">
                </div>
                <button type="submit" name="bsimpan" class="btn btn-primary">Simpan</button>
                <button type="reset" name="bbatal" class="btn btn-danger">Batal</button>
            </form>
        </div>
    </div>
@endsection
