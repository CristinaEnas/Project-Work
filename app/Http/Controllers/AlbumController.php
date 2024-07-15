<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{

    public function index()
    {
        $albums = Album::all();
        return view('admin.albums.index', compact('albums'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.albums.create');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request); ok

        //validazione
        $request ->validate([

                'name' => 'required|string|min:3|max:255',
                'artist_id' => 'required|exists:artist,id',
                'anno' => 'required|integer|min:1900|max:' . date('Y'),
                // 'poster'=> ''
            ]);
        
        $album = new ALbum;
        $album->name = $request->name;
        $album->artist_id = $request->artist_id;
        $album->year= $request->year;
        $album->poster = $request->poster;

        $album->save();
        return redirect()->route('admin.albums.index');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // album
        $album = Album::find($id);
        return view('albums.show', compact('album'));
        // artisti
        $album = Album::with('artists')->findOrFail($id);
        return view('albums.show', compact('album'));
        // tracce - brani
        $album = Album::with('tracks')->findOrFail($id);
        return view('albums.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
