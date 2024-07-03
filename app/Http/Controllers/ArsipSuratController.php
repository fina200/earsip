<?php

namespace App\Http\Controllers;

use App\Models\ArsipSurat;
use Illuminate\Http\Request;

class ArsipSuratController extends Controller
{
    public function index()
    {
        //
        $data=ArsipSurat::all();
        return view ('arsip.arsip_surat', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validateData = $request->validate(
            [
                'no_surat' => 'required|max:255',
                'tgl_surat' => 'required|max:255',
                'tgl_surat_masuk' => 'required|max:255',
                'perihal' => 'required|max:255',
                'departemen' => 'required|max:255',
                'pengirim_surat' => 'required|max:255',
                'file' => 'required|max:255',
            ],
            [
                'no_surat.required' => 'no_surat harus diisi',
                'no_surat.max' => 'no_surat maksimal 255 karakter',
                'tgl_surat.required' => 'tgl_surat harus diisi',
                'tgl_surat.max' => 'tgl_surat maksimal 255 karakter',
                'tgl_surat_masuk.required' => 'tgl_surat_masuk harus diisi',
                'tgl_surat_masuk.max' => 'tgl_surat_masuk maksimal 255 karakter',
                'perihal.required' => 'perihal harus diisi',
                'perihal.max' => 'perihal maksimal 255 karakter',
                'departemen.required' => 'departemen harus diisi',
                'departemen.max' => 'departemen maksimal 255 karakter',
                'pengirim_surat.required' => 'pengirim_surat harus diisi',
                'pengirim_surat.max' => 'pengirim_surat maksimal 255 karakter',
                'file.required' => 'file harus diisi',
                'file.max' => 'file maksimal 255 karakter',
            ]
        );
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}