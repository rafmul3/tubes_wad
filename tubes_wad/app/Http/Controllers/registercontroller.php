<?php

namespace App\Http\Controllers;

use App\Models\applicant;
use App\Models\User;
use App\Models\vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registercontroller extends Controller
{
    public function index() {
        return view('register', [
            "head" => "register"
        ]);
    }

    public function store(Request $request) {
        $validatedata = $request->validate([
            'nama' => 'required|max:32',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8',
            'confirm' => 'required_with:password|same:password',
            'isadmin' => '',
            'isvendor' => '',
            'iscustomer' => ''
        ]);

        $validatedata['iscustomer'] = '1'; 

        $validatedata['password'] = hash::make($validatedata['password']);

        User::create($validatedata);
        // vendor::create($validatedata2);
        return redirect('/login')->with('status', 'Registration berhasil');
    }

    public function applicant(Request $request) {
        $validatedata = $request->validate([
            'nama' => 'required|max:32',
            'alamat' => 'required',
            'keterangan' => 'required',
            'nama_toko' => 'required',
            'category' => 'required',
            'kota' => 'required',
            'email' => 'required|email:dns|unique:users|unique:applicants',
            'password' => 'required|min:8',
            'confirm' => 'required_with:password|same:password'
        ]);

        $validatedata['password'] = hash::make($validatedata['password']);

        applicant::create($validatedata);
        return redirect('/login')->with('status', 'Akun anda sedang di proses, silakan check email anda jika sudah bisa di aktivasi');
    }
}
