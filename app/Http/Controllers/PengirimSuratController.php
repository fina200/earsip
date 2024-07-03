<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengirimSurat;

class PengirimSuratController extends Controller
{
    public function index()
    {
        //
        $data=PengirimSurat::all();
        return view ('arsip.pengirim_surat', compact('data'));
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
                'nama' => 'required|max:255',
                'alamat' => 'required|max:255',
                'no_hp' => 'required|max:255',
                'email' => 'required|max:255',
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'nama.max' => 'Nama maksimal 255 karakter',
                'alamat.required' => 'alamat harus diisi',
                'alamat.max' => 'alamat maksimal 255 karakter',
                'no_hp.required' => 'no_hp harus diisi',
                'no_hp.max' => 'no_hp maksimal 255 karakter',
                'email.required' => 'email harus diisi',
                'email.max' => 'email maksimal 255 karakter',
            ]
        );
        PengirimSurat::create($validateData);
        return redirect('/pengirim_surat');
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

