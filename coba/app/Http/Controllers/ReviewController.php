<?php

namespace App\Http\Controllers;

use App\Models\review;
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
            "requests" => review::where('status', '0')->get(),
            "reviews" => review::where('status', '1')->get(),
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
            "reviews" => review::where('status', '1')->get(),
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
            'book_id' => 'required',
            'user_id' => 'required',
            'gabung_package_id' => 'required',
            'menu' => 'required',
            'tanggal' => '',
            'no_telp' => '',
            'ulasan' => '',
            'review' => '',
            'status' => ''
        ]);

        review::where('id', $review->id) ->update($validatedata);
        
        return redirect('/profile/review')->with('status', 'Registration berhasil');
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
