<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Sertificate;
use Illuminate\Http\Request;

class SertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $serti_data = Sertificate::all();
        return view('backend.tables.sertificate_tables')->with('serti_data',$serti_data);
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
            'gost_name'=>'required',
            'gost_banner_img'=>'required|mimes:png,jpg,jpeg',
            'gost_label'=>'required'
        ]);
        $serti_file_path = $request->file('gost_banner_img')->store('sertificates');
        $sertificate = Sertificate::create([
            'gost_name'=>$request->gost_name,
            'gost_banner_img'=>$serti_file_path ?? 'default_img/img_avatar.png',
            'gost_label'=>$request->gost_label
        ]);

        $sertificate->save();
        return redirect()->route('sertificate.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sertificate $sertificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sertificate $sertificate)
    {
        return view('backend.edit.serti_edit')->with('sertificate_edit', $sertificate);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sertificate $sertificate)
    {
        if($request->hasFile('gost_banner_img')){
            if(isset($sertificate->gost_banner_img)){
                Storage::delete($sertificate->gost_banner_img);
            }
        }
        $gost_file_path = $request->file('gost_banner_img')->store('sertificates');

        $sertificate->update([
            'gost_name'=>$request->gost_name,
            'gost_banner_img'=>$gost_file_path ?? $sertificate->gost_banner_img,
            'gost_label'=>$request->gost_label
        ]);
        return redirect()->route('sertificate.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sertificate $sertificate)
    {
        $sertificate->delete();
        return redirect()->back();
    }
}
