<?php

namespace App\Http\Controllers;

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
            'nama' => 'required|max:16',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8',
            'confirm' => 'required_with:password|same:password'
        ]);

        // $validatedata2 = $request->validate([
        //     'user_id' => '',
        //     'nama' => 'required|max:16',
        //     'email' => 'required|email:dns|unique:users',
        //     'password' => 'required|min:8',
        //     'confirm' => 'required_with:password|same:password'
        // ]);

        $validatedata['password'] = hash::make($validatedata['password']);

        User::create($validatedata);
        // vendor::create($validatedata2);
        return redirect('/login')->with('status', 'Registration berhasil');
    }
}
