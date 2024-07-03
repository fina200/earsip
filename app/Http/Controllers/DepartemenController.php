<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    public function index()
    {
        $data=Departemen::all();
        return view ('arsip.departemen', compact('data'));
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
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'nama.max' => 'Nama maksimal 255 karakter',
            ]
        );
        Departemen::create($validateData);
        return redirect('/departemen');
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
