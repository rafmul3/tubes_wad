<?php

namespace App\Http\Controllers;

use App\Models\menu;
use App\Models\vendor;
use Illuminate\Http\Request;
use App\Models\gabung_package;
use App\Http\Requests\StoremenuRequest;
use App\Http\Requests\UpdatemenuRequest;
use App\Http\Requests\Updategabung_packageRequest;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendor.menu',  [
            "head" => "",
            "menus" => gabung_package::where('user_id', auth()->user()->id)->get(),
            "vendor" => vendor::where('user_id', auth()->user()->id)->first(),
            "count" => 1
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendor.menu_create' , [
            "vendor" => auth()->user()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremenuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremenuRequest $request)
    {
        $validatedata = $request->validate([
            'user_id' => '',
            'menu' => 'required',
            'harga' => 'required',
            'description' => '',
            'gambar' => 'image',
            'ispackage' => ''
        ]);

        if($request->file('gambar')) {
            $validatedata['gambar'] = $request->file('gambar')->store('vendor_menu');
        }

        $validatedata['ispackage'] = '0';

        gabung_package::create($validatedata);
        return redirect('/profile/menu')->with('status', 'Registration berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(gabung_package $menu)
    {
        return view('vendor.menu_edit',  [
            "packages" => gabung_package::where('id', $menu->id)->get()
            ]
        );
    }
    
        
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemenuRequest  $request
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Updategabung_packageRequest $request, gabung_package $menu)
    {
        $validatedata = $request->validate([
            'menu' => 'required',
            'harga' => 'required',
            'description' => '',
            'gambar' => 'image'
        ]);
        

        if($request->file('gambar')) {
            $validatedata['gambar'] = $request->file('gambar')->store('package');
        }
        

        gabung_package::where('id', $request->id)->update($validatedata);

        return redirect('/profile/menu')->with('status', 'Package berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $menu)
    {
        gabung_package::destroy($menu->id);
        return redirect("/profile/menu")->with('status', 'paket berhasil dihapus');
    }
}
