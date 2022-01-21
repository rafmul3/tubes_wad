<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\vendor;
use App\Models\package;
use Illuminate\Http\Request;
use App\Models\gabung_package;
use App\Http\Requests\StorepackageRequest;
use App\Http\Requests\UpdatepackageRequest;
use App\Http\Requests\Updategabung_packageRequest;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.package' , [
            "admins" => gabung_package::all(),
            "packages" => package::all(),
            "vendors" => vendor::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepackageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepackageRequest $request)
    {
        // @ddd($request);
        $validatedata = $request->validate([
            'user_id' => 'required',
            'menu' => 'required',
            'harga' => 'required',
            'description' => '',
            'gambar' => 'image',
            'ispackage' => ''
        ]);

        if($request->file('gambar')) {
            $validatedata['gambar'] = $request->file('gambar')->store('package');
        }

        $validatedata['ispackage'] = '1';
        
        gabung_package::create($validatedata);

        return redirect('/admin/listpackage')->with('status', 'Package berhasil dibuat');
        // @ddd($request);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(gabung_package $package)
    {
        return view('admin.gabung_package_edit',  [
        "packages" => gabung_package::where('id', $package->id)->get()
        ]
    );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepackageRequest  $request
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Updategabung_packageRequest $request, gabung_package $package)
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

        return redirect('/admin/listpackage')->with('status', 'Package berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $package)
    {
        gabung_package::destroy($package->id);
        return redirect("/admin/listpackage")->with('status', 'paket berhasil dihapus');
    }
}
