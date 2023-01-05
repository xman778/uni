<?php

namespace App\Http\Controllers;

use App\Models\stage;
use App\Http\Requests\StorestageRequest;
use App\Http\Requests\UpdatestageRequest;

class StageController extends Controller
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
     * @param  \App\Http\Requests\StorestageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorestageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function show(stage $stage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function edit(stage $stage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatestageRequest  $request
     * @param  \App\Models\stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatestageRequest $request, stage $stage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stage  $stage
     * @return \Illuminate\Http\Response
     */
    public function destroy(stage $stage)
    {
        //
    }
}
