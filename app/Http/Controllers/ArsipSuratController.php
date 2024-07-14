<?php

namespace App\Http\Controllers;

use App\Models\ArsipSurat;
use App\Models\Departemen;
use Illuminate\Http\Request;
use App\Models\PengirimSurat;
use Illuminate\Support\Facades\Storage;

class ArsipSuratController extends Controller
{
    public function index()
    {
        //
        //dd('masuk');
        $data = ArsipSurat::with('departemen', 'pengirim_surat')->get();
        return view('arsip.surat.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $departemen = Departemen::all();
        $pengirim = PengirimSurat::all();
        return view('arsip.surat.create', compact(['departemen', 'pengirim']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //dd($request);

        $validateData = $request->validate(
            [
                'no_surat' => 'required|max:255',
                'tgl_surat' => 'required',
                'tgl_surat_masuk' => 'required',
                'perihal' => 'required',
                'departemen_id' => 'required',
                'pengirim_surat_id' => 'required',
                'berkas' => 'file|max:2048'
            ],
            [
                'no_surat.required' => 'no_surat harus diisi',
                'no_surat.max' => 'no_surat maksimal 255 karakter',
                'tgl_surat.required' => 'tgl_surat harus diisi',
                'tgl_surat_masuk.required' => 'tgl_surat_masuk harus diisi',
                'perihal.required' => 'perihal harus diisi',
                'perihal.max' => 'perihal maksimal 255 karakter',
                'departemen_id.required' => 'departemen harus diisi',
                'pengirim_surat_id.required' => 'pengirim_surat harus diisi',
            ]
        );

        $validateData['berkas'] = $request->file('berkas')->store('surat');
        ArsipSurat::create($validateData);
        return redirect('/arsip_surat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $dataedit = ArsipSurat::find($id);
        //$data = ArsipSurat::all();
        $departemen = Departemen::all();
        $pengirim = PengirimSurat::all();
        return view('arsip.surat.edit', compact(['departemen', 'pengirim', 'dataedit']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validateData = $request->validate(
            [
                'no_surat' => 'required|max:255',
                'tgl_surat' => 'required',
                'tgl_surat_masuk' => 'required',
                'perihal' => 'required',
                'departemen_id' => 'required',
                'pengirim_surat_id' => 'required',
                'berkas' => 'file|max:2048'
            ],
            [
                'no_surat.required' => 'no_surat harus diisi',
                'no_surat.max' => 'no_surat maksimal 255 karakter',
                'tgl_surat.required' => 'tgl_surat harus diisi',
                'tgl_surat_masuk.required' => 'tgl_surat_masuk harus diisi',
                'perihal.required' => 'perihal harus diisi',
                'perihal.max' => 'perihal maksimal 255 karakter',
                'departemen_id.required' => 'departemen harus diisi',
                'pengirim_surat_id.required' => 'pengirim_surat harus diisi',
            ]
        );
        $arsip = ArsipSurat::find($id);
        if ($request->file('berkas')) {
            if ($arsip->berkas) {
                Storage::delete($arsip->berkas);
            }
            $validateData['berkas'] = $request->file('berkas')->store('surat');
        }

        ArsipSurat::where('id', $id)->update($validateData);
        return redirect('/arsip_surat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $arsip = ArsipSurat::find($id);
        if ($arsip->berkas) {
            Storage::delete($arsip->berkas);
        }
        ArsipSurat::destroy($id);
        return redirect('/arsip_surat');
    }

    public function downloadSurat(string $file)
    {
        $ekstensi = explode('.', $file);
        $ekstensi = strtolower(end($ekstensi));

        $id = ArsipSurat::where('berkas', "surat/$file")->first()->id;
        $namafile = 'surat_' . $id . '.' . $ekstensi;
        return response()->download(storage_path("app/surat/$file"), $namafile);
    }
}
