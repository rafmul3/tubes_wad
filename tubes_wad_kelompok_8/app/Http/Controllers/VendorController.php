<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\review;
use App\Models\vendor;
use App\Models\thumbnail;
use Illuminate\Http\Request;
use App\Models\gabung_package;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StorevendorRequest;
use App\Http\Requests\UpdatevendorRequest;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * 
     
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('vendor.profile' , [
            "head" => "dashboard",
            "vendor" => vendor::where('user_id', auth()->user()->id)->first(),
            "menu" => vendor::where('user_id', auth()->user()->id)->count(),
            "customer" => review::count(),
            "book" => book::where('user_id', auth()->user()->id)->where('status', '0')->count(),
        ]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorevendorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorevendorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(vendor $vendor)
    {
        $id = $_GET["id"];

        return view( 'vendor.vendor', [
            
        "vendors" => vendor::where('id', $id)->first(),
        "thumbnails" => thumbnail::where('vendor_id', $id)->get(),
        "menus" => gabung_package::where('user_id', $id)->get(),

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(vendor $vendor)
    {
        $id = $_GET["id"];
        return view('vendor.edit', [ 
        "head" => "profile",
        "vendor" => vendor::where('user_id', auth()->user()->id)->first(),
        "thumbnails" => thumbnail::where('vendor_id', $id)->get(),
    ]);
   
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevendorRequest  $request
     * @param  \App\Models\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevendorRequest $request, vendor $vendor)
    {
        
        $validatedata = $request->validate([
            'alamat' => 'required',
            'keterangan' => 'required',
            'nama_toko' => 'required',
            'image_profile' => 'image',
            'kota' => 'required',
        ]);

        if($request->file('image_profile')) {
            $validatedata['image_profile'] = $request->file('image_profile')->store('vendor_profile');
        }      
        
        vendor::where('id', auth()->user()->id) ->update($validatedata);
        
        return redirect('/profile');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $vendor)
    {
        vendor::destroy($vendor->id);
        return redirect("/admin/vendor")->with('status', 'Vendor berhasil dihapus');
    }
}
