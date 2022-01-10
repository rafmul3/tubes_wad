<?php

namespace App\Http\Controllers;

use App\Models\vendor;
use App\Http\Requests\StorevendorRequest;
use App\Http\Requests\UpdatevendorRequest;
use Illuminate\Support\Facades\Hash;

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
            "head" => "profile",
            "vendor" => auth()->user()
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
        return view('vendor.profile' , [
            "head" => "profile",
            "vendor" => auth()->user()
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
        return view('vendor.edit', [ 
        "vendor" => vendor::where('id', auth()->user()->id)->first()
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
            'nama' => 'required|max:16',
            'image_profile' => 'image',
            'image_thumbnail' => 'image',
            'alamat' => 'max:255',
            'profile' => 'max:255'
        ]);

        if($request->file('image_profile')) {
            $validatedata['image_profile'] = $request->file('image_profile')->store('vendor_profile');
        }

        if($request->file('image_thumbnail')) {
            $validatedata['image_thumbnail'] = $request->file('image_thumbnail')->store('vendor_thumbnail');
        }
        $check = vendor::where('id', auth()->user()->id) ->first();
        
        if(empty($check)){
            $validatedata['user_id'] = auth()->user()->id ;
            vendor::create($validatedata);
        }
        
        vendor::where('id', auth()->user()->id) ->update($validatedata);
        
        return redirect('/profile/{{$vendor->nama}}/edit');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(vendor $vendor)
    {
        //
    }
}
