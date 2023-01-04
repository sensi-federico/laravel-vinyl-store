<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVinylRequest;
use App\Http\Requests\UpdateVinylRequest;
use App\Models\Vinyl;

class VinylController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vinyls = Vinyl::all();
        return view('admin.vinyls.index', compact('vinyls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vinyls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVinylRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVinylRequest $request)
    {
        $newVinyl = new Vinyl();
        $newVinyl->title = $request['title'];
        $newVinyl->artist = $request['artist'];
        $newVinyl->cover = $request['cover'];
        $newVinyl->duration = $request['duration'];
        $newVinyl->genre = $request['genre'];
        $newVinyl->language = $request['language'];
        $newVinyl->save();
        return to_route('vinyls.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vinyl  $vinyl
     * @return \Illuminate\Http\Response
     */
    public function show(Vinyl $vinyl)
    {
        return view('admin.vinyls.show', compact('vinyl'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vinyl  $vinyl
     * @return \Illuminate\Http\Response
     */
    public function edit(Vinyl $vinyl)
    {

        return view('admin.vinyls.edit', compact('vinyl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVinylRequest  $request
     * @param  \App\Models\Vinyl  $vinyl
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVinylRequest $request, Vinyl $vinyl)
    {

        // dd($request->all(), $vinyl);

        $data = [
            'title' => $request['title'],
            'artist' => $request['artist'],
            'cover' => $request['cover'],
            'duration' => $request['duration'],
            'genre' => $request['genre'],
            'language' => $request['language']
        ];

        $vinyl->update($data);

        return to_route('vinyls.index')->with('message', "$vinyl->title update successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vinyl  $vinyl
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vinyl $vinyl)
    {
        //
    }
}
