<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Hash;

//$password = Hash::make($request->input('password'));

class AuthController extends Controller
{


    public function getLogin()
    {
        return view('auth.login');
    }

    //Proses login
    public function postLogin(Request $request)
    {
        $credentials = $request->only('username', 'password');
        // dd($request);
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            // misal login sebagai pegawai maka akan tampil ke halaman rekap arsip
            if (auth::user()->role == 'pegawai')
                return redirect()->intended('arsip_surat');

            // misal login sebagai admin maka akan tampil ke halaman dashboard admin
            elseif (auth::user()->role == 'admin')
                return redirect()->intended('admin');
        }
        return redirect()->back()->withErrors(['username' => 'salah.']);
    }

    // postLogout untuk keluar dari session login
    public function postLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    // halaman admin
    public function getAdmin()
    {

        $data = Departemen::all();

        return view('admin', compact(['data']));
    }
}
