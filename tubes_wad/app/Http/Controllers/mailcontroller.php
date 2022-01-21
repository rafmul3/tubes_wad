<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\sendmail;
use App\Models\vendor;
use App\Models\applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class mailcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendmail(Request $applicant)
    {
// @ddd($applicant);
        $validatedata = $applicant->validate([
            'nama' => 'required|max:32',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8',
            'isadmin' => '',
            'isvendor' => '',
            'iscustomer' => ''
        ]);
        $validatedata['isvendor'] = '1'; 

        // $validatedata['password'] = hash::make($validatedata['password']);
        User::create($validatedata);

        $validatedata2 = $applicant->validate([
            'nama' => 'required|max:32',
            'alamat' => 'required',
            'keterangan' => 'required',
            'nama_toko' => 'required',
            'category' => 'required',
            'kota' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'user_id' => ''
        ]);
        
        $validatedata3 = User::where('email', $validatedata2['email']) ->first();
        
        $validatedata2['user_id'] = $validatedata3['id'] ;

            vendor::create($validatedata2);  

            $isi = [
                'title' => 'Registration Validation',
                'body' => 'Terima kasih telah mendaftar di website kami
                akun anda telah berhasil di aktivasi oleh kami silakan lakukan login pada link berikut :
                http://127.0.0.1:8000/login'
    
            ]; 

        Mail::to("$applicant->email")->send(new sendmail($isi));

        applicant::destroy($applicant->id);
        
        return redirect("/admin/applicant")->with('status', 'Vendor berhasil ditambahkan');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $applicant)
    {
        // @ddd($applicant);

        $isi = [
            'title' => 'Registration Validation',
            'body' => 'Mohon maaf, toko anda masih belum memenuhi kriteria website kami
            jika anda berkenan silakan registrasi ulang. 
            Terimakasih sudah menggunakan applikasi kami'

        ];
        
        Mail::to("$applicant->email")->send(new sendmail($isi));

        applicant::destroy($applicant->id);
        return redirect("/admin/applicant")->with('status', 'Vendor berhasil ditolak');
    }


}