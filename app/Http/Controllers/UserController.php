<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Departemen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {
        $departemen = Departemen::all();
        $data= User::with('departemen')->get();
        return view ('arsip.user.index', compact('data','departemen'));
    }
        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $departemen = Departemen::all();
        return view('arsip.user.index', compact(['departemen']));
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
                'username' => 'required|max:255',
                'password' => 'required|max:255',
                'role' => 'required|max:255',
                'departemen_id' => 'required|max:255',
                
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'nama.max' => 'Nama maksimal 255 karakter',
                'username.required' => 'username harus diisi',
                'username.max' => 'username maksimal 255 karakter',
                'password.required' => 'password harus diisi',
                'password.max' => 'password maksimal 255 karakter',
                'role.required' => 'role harus diisi',
                'role.max' => 'role maksimal 255 karakter',
                'departemen_id.required' => 'departemen harus diisi',
                'departemen_id.max' => 'departemen maksimal 255 karakter',
            ]
        );
        
        //$validateData['password'] = bcrypt($validateData['password']);
        $validateData['password'] = Hash::make($validateData['password']);
        User::create($validateData);
        return redirect('/user');
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
        $dataedit = User::find($id);
        //$data = User::all();
        $departemen = Departemen::all();
        return view('arsip.user.edit', compact(['departemen', 'dataedit']));

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
                'username' => 'required|max:255',
                'password' => 'required|max:255',
                'role' => 'required|max:255',
                'departemen_id' => 'required|max:255',
                
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'nama.max' => 'Nama maksimal 255 karakter',
                'username.required' => 'username harus diisi',
                'username.max' => 'username maksimal 255 karakter',
                'password.required' => 'password harus diisi',
                'password.max' => 'password maksimal 255 karakter',
                'role.required' => 'role harus diisi',
                'role.max' => 'role maksimal 255 karakter',
                'departemen_id.required' => 'departemen harus diisi',
                'departemen_id.max' => 'departemen maksimal 255 karakter',
            ]
        );
        User::where('id', $id)->update($validateData);
        return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        User::destroy($id);
        return redirect('/user');
    }
}
