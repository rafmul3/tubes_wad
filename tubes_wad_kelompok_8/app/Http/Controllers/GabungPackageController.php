<?php

namespace App\Http\Controllers;

use App\Models\vendor;
use App\Models\package;
use App\Models\gabung_package;
use App\Http\Requests\Storegabung_packageRequest;
use App\Http\Requests\Updategabung_packageRequest;
use Illuminate\Http\Request;

class GabungPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.gabung' , [
            "admins" => gabung_package::all(),
            "packages" => package::all(),
            "vendors" => vendor::all(),
            'count' => 1
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
     * @param  \App\Http\Requests\Storegabung_packageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storegabung_packageRequest $request)
    {
        // @ddd($request);
        $validatedata = $request->validate([
            'gabung_package_id' => 'required',
            'vendor_id' => 'required'
            
        ]);
        
        package::create($validatedata);
        return redirect('/admin/listpackage')->with('status', 'Package berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gabung_package  $gabung_package
     * @return \Illuminate\Http\Response
     */
    public function show(gabung_package $gabung_package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gabung_package  $gabung_package
     * @return \Illuminate\Http\Response
     */
    public function edit(gabung_package $gabung_package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updategabung_packageRequest  $request
     * @param  \App\Models\gabung_package  $gabung_package
     * @return \Illuminate\Http\Response
     */
    public function update(Updategabung_packageRequest $request, gabung_package $gabung_package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gabung_package  $gabung_package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $gabung_package)
    {
        package::destroy($gabung_package->id);
        return redirect("/admin/listpackage")->with('status', 'Vendor berhasil dihapus dari paket');
    }
}
