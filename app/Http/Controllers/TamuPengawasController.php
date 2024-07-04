<?php

namespace App\Http\Controllers;

use App\Models\TamuPengawas;
use Illuminate\Http\Request;

class TamuPengawasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=TamuPengawas::all();
        return view ('tamu.pengawas.index', compact('data'));
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
                'instansi' => 'required|max:255',
                'tujuan' => 'required|max:255',
                'saran' => 'required|max:255',
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'nama.max' => 'Nama maksimal 255 karakter',
                'instansi.required' => 'instansi harus diisi',
                'instansi.max' => 'instansi maksimal 255 karakter',
                'tujuan.required' => 'tujuan harus diisi',
                'tujuan.max' => 'tujuan maksimal 255 karakter',
                'saran.required' => 'saran harus diisi',
                'saran.max' => 'saran maksimal 255 karakter',
            ]
        );
        TamuPengawas::create($validateData);
        return redirect('/tamupengawas');
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
        $dataedit = TamuPengawas::find($id);
        $data = TamuPengawas::all();
        return view('tamu.pengawas.edit', compact(['data', 'dataedit']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validateData = $request->validate(
            [
                'nama' => 'required|max:255',
                'instansi' => 'required|max:255',
                'tujuan' => 'required|max:255',
                'saran' => 'required|max:255',
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'nama.max' => 'Nama maksimal 255 karakter',
                'instansi.required' => 'instansi harus diisi',
                'instansi.max' => 'instansi maksimal 255 karakter',
                'tujuan.required' => 'tujuan harus diisi',
                'tujuan.max' => 'tujuan maksimal 255 karakter',
                'saran.required' => 'saran harus diisi',
                'saran.max' => 'saran maksimal 255 karakter',
            ]
        );
        TamuPengawas::where('id', $id)->update($validateData);
        return redirect('/tamupengawas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        TamuPengawas::destroy($id);
        return redirect('/tamupengawas');
    }
}