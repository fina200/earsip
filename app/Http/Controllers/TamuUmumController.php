<?php

namespace App\Http\Controllers;

use App\Models\TamuUmum;
use Illuminate\Http\Request;

class TamuUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=TamuUmum::all();
        return view ('tamu.umum.index', compact('data'));
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
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'nama.max' => 'Nama maksimal 255 karakter',
                'instansi.required' => 'instansi harus diisi',
                'instansi.max' => 'instansi maksimal 255 karakter',
                'tujuan.required' => 'tujuan harus diisi',
                'tujuan.max' => 'tujuan maksimal 255 karakter',
            ]
        );
        TamuUmum::create($validateData);
        return redirect('/tamuumum');
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
        $dataedit = TamuUmum::find($id);
        $data = TamuUmum::all();
        return view('tamu.umum.edit', compact(['data', 'dataedit']));
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
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'nama.max' => 'Nama maksimal 255 karakter',
                'instansi.required' => 'instansi harus diisi',
                'instansi.max' => 'instansi maksimal 255 karakter',
                'tujuan.required' => 'tujuan harus diisi',
                'tujuan.max' => 'tujuan maksimal 255 karakter',
            ]
        );
        TamuUmum::where('id', $id)->update($validateData);
        return redirect('/tamuumum');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        TamuUmum::destroy($id);
        return redirect('/tamuumum');
    }
}
