<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorevinylRequest;
use App\Http\Requests\UpdatevinylRequest;
use App\Models\vinyl;

class vinylController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vinyls = vinyl::all();
        return view('admin.vinyls.index', compact('vinyls'));
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
     * @param  \App\Http\Requests\StorevinylRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorevinylRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vinyl  $vinyl
     * @return \Illuminate\Http\Response
     */
    public function show(vinyl $vinyl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vinyl  $vinyl
     * @return \Illuminate\Http\Response
     */
    public function edit(vinyl $vinyl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevinylRequest  $request
     * @param  \App\Models\vinyl  $vinyl
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevinylRequest $request, vinyl $vinyl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vinyl  $vinyl
     * @return \Illuminate\Http\Response
     */
    public function destroy(vinyl $vinyl)
    {
        //
    }
}
