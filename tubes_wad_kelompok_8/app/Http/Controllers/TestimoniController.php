<?php

namespace App\Http\Controllers;

use App\Models\review;
use App\Models\testimoni;
use App\Http\Requests\StoretestimoniRequest;
use App\Http\Requests\UpdatetestimoniRequest;
use App\Models\testimoni_gambar;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.testimoni' , [
            "reviews" => testimoni::all(),
            "testimonis" => testimoni_gambar::all(),
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
     * @param  \App\Http\Requests\StoretestimoniRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretestimoniRequest $request)
    {
        $validatedata = $request->validate([
            'review_id' => 'required',
            'gambar_menu' => 'required'
        ]);

        if($request->file('gambar_menu')) {
            $validatedata['gambar_menu'] = $request->file('gambar_menu')->store('testimoni_menu');
        }
        
        testimoni::create($validatedata);

        return redirect('/admin/listpackage')->with('status', 'Package berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(testimoni $testimoni)
    {
        $id = $_GET['id'];
        return view('home.testimoni_tampil', [
            'gambars' => testimoni_gambar::where('testimoni_id', $id)->get(),
            'head' => 'testimoni'

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit(testimoni $testimoni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetestimoniRequest  $request
     * @param  \App\Models\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetestimoniRequest $request, testimoni $testimoni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy(testimoni $testimoni)
    {
        //
    }
}
