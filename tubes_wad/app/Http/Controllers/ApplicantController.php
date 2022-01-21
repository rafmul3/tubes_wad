<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\review;
use App\Models\vendor;
use App\Models\package;
use App\Models\applicant;
use App\Http\Requests\StoreapplicantRequest;
use App\Http\Requests\UpdateapplicantRequest;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.applicant' , [
            "applicants" => applicant::all(),
            'count' => 1
        ]);
    }

    public function vendor()
    {
        return view('admin.vendor' , [
            "vendors" => vendor::all(),
            'count' => 1
        ]);
    }

    public function dashboard()
    {
        return view('admin.report' , [
            "vendors" => vendor::count(),
            "customers" => User::count(),
            "reviews" => review::count(),
            "packages" => package::count()
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
     * @param  \App\Http\Requests\StoreapplicantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreapplicantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(applicant $applicant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateapplicantRequest  $request
     * @param  \App\Models\applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateapplicantRequest $request, applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(applicant $applicant)
    {
        //
    }
}
