<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Gallery::all();
        return view('backend.tables.gallery_tables')->with(['gallery'=>$gallery]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gallery_name'=>'required',
            'gallery_short_text'=>'required',
            'gallery_img'=>'required'
        ]);
        $gallery_img = $request->file('gallery_img')->store('gallery_img');
        $gallery_data = Gallery::create([
            'gallery_name'=>$request->gallery_name,
            'gallery_short_text'=>$request->gallery_short_text,
            'gallery_img'=>$gallery_img
        ]);
        $gallery_data->save();
        return redirect()->route('gallery.index');
    }

    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        return view('backend.edit.gallery_edit')->with(['gallery_data'=>$gallery]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        if($request->hasFile('gallery_img')){
            if(isset($gallery->gallery_img)){
                Storage::delete($gallery->gallery_img);
            }
            $gallery_img_path = $request->file('gallery_img')->store('gallery_img');
        }
        $gallery->update([
            'gallery_name'=>$request->gallery_name,
            'gallery_short_text'=>$request->gallery_short_text,
            'gallery_img'=>$gallery_img_path ?? $gallery->gallery_img
        ]);
        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect()->back();
    }
}
