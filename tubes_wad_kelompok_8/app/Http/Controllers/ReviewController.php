<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\review;
use App\Models\vendor;
use App\Http\Requests\StorereviewRequest;
use App\Http\Requests\UpdatereviewRequest;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vendor.review' , [
            "head" => "",
            "bayars" => book::where('status', '0')->where('isbayar', '0')->get(),
            "requests" => book::where('status', '0')->where('isbayar', '1')->get(),
            "proses" => book::where('status', '1')->get(),
            "reviews" => review::where('status', '0')->get(),
            "vendor" => vendor::where('user_id', auth()->user()->id)->first(),
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
     * @param  \App\Http\Requests\StorereviewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorereviewRequest $request)
    {
        $validatedata = $request->validate([
            'book_id' => 'required',
            'user_id' => 'required',
            'gabung_package_id' => 'required',
            'menu' => 'required',
            'tanggal' => '',
            'no_telp' => '',
            'status' => ''
        ]);

        review::create($validatedata);
        book::destroy($validatedata['book_id']);
        return redirect('/')->with('status', 'Registration berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(review $review)
    {
        return view('vendor.customer' , [
            "head" => "",
            "reviews" => review::where('status', '1')->get(),
            "vendor" => vendor::where('user_id', auth()->user()->id)->first(),
            'count' => 1
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatereviewRequest  $request
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatereviewRequest $request, review $review)
    {
        $validatedata = $request->validate([
            'ulasan' => '',
            'review' => '',
            'status' => ''
        ]);

        review::where('id', $request->id) ->update($validatedata);
        
        return redirect('/status')->with('status', 'Registration berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(review $review)
    {
        //
    }
}
