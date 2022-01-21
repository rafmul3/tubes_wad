<?php

namespace App\Http\Controllers;

use App\Models\thumbnail;
use App\Http\Requests\StorethumbnailRequest;
use App\Http\Requests\UpdatethumbnailRequest;

class ThumbnailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorethumbnailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorethumbnailRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\thumbnail  $thumbnail
     * @return \Illuminate\Http\Response
     */
    public function show(thumbnail $thumbnail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\thumbnail  $thumbnail
     * @return \Illuminate\Http\Response
     */
    public function edit(thumbnail $thumbnail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatethumbnailRequest  $request
     * @param  \App\Models\thumbnail  $thumbnail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatethumbnailRequest $request, thumbnail $thumbnail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\thumbnail  $thumbnail
     * @return \Illuminate\Http\Response
     */
    public function destroy(thumbnail $thumbnail)
    {
        //
    }
}
