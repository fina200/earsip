<?php

namespace App\Http\Controllers;

use App\Models\TamuDinas;
use Illuminate\Http\Request;

class TamuDinasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = TamuDinas::all();
        return view('tamu.dinas.index', compact('data'));
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
        TamuDinas::create($validateData);
        return redirect('/tamudinas');
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
        $dataedit = TamuDinas::find($id);
        $data = TamuDinas::all();
        return view('tamu.dinas.edit', compact(['data', 'dataedit']));
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
        TamuDinas::where('id', $id)->update($validateData);
        return redirect('/tamudinas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        TamuDinas::destroy($id);
        return redirect('/tamudinas');
    }
}
