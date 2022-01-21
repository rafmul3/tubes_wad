<?php

namespace App\Http\Controllers;

use App\Models\book;
use App\Models\bukti;
use App\Models\review;
use App\Models\thumbnail;
use App\Http\Requests\StorebookRequest;
use App\Http\Requests\UpdatebookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.status_book' , [
            "apps" => book::where('status', '0')->get(),
            "buktis" => bukti::all(),
            "books" => book::where('status', '1')->get(),
            "testimonis" => review::where('status', '1')->get(),
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
     * @param  \App\Http\Requests\StorebookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebookRequest $request)
    {
        // @DDD($request);
        $validatedata = $request->validate([
            'user_id' => 'required',
            'gabung_package_id' => 'required',
            'menu' => 'required',
            'tanggal' => '',
            'no_telp' => '',
            'status' => ''
        ]);

        book::create($validatedata);
        return redirect('/')->with('status', 'Registration berhasil');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebookRequest  $request
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebookRequest $request, book $book)
    {
        $validatedata = $request->validate([
            'user_id' => 'required',
            'gabung_package_id' => 'required',
            'menu' => 'required',
            'tanggal' => '',
            'no_telp' => '',
            'status' => ''
        ]);

        book::where('id', $book->id) ->update($validatedata);
        
        return redirect('/admin/book')->with('status', 'Registration berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(book $book)
    {
        //
    }
}