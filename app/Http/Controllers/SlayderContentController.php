<?php

namespace App\Http\Controllers;

use App\Models\SlayderContent;
use Illuminate\Http\Request;

class SlayderContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slayder_data = SlayderContent::all();
        return view('backend.tables.slayder_table', ['slayder_data'=>$slayder_data]);
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
        // dd($request);
        $request->validate([
            'slayder_main_text'=>'required',
            'slayder_short_text'=>'required',
            'slayder_img'=>  'required',
            'slayder_label'=>'required'
        ]);
        $slayd_file = $request->file('slayder_img')->store('slayder_img');
        $slayder = SlayderContent::create([
            'slayder_main_text'=>$request->slayder_main_text,
            'slayder_short_text'=>$request->slayder_short_text,
            'slayder_img'=>  $slayd_file ?? 'default_img/no_img.jpg',
            'slayder_label'=>$request->slayder_label
        ]);

        $slayder->save();
        return redirect()->route('slayder_content.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(SlayderContent $slayderContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SlayderContent $slayderContent)
    {
        return view('backend.edit.slayder_edit')->with(['slaydercontent'=>$slayderContent]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SlayderContent $slayderContent)
    {
        if($request->hasFile('slayder_img')){
            if(isset($request->slayder_img)){
                Storage::delete($request->slayder_img);
            }
            $file_path = $request->file('slayder_img')->store('slayder_img');
        }
        $slayderContent->update([
            'slayder_main_text'=>$request->slayder_main_text,
            'slayder_short_text'=>$request->slayder_short_text,
            'slayder_img'=>  $file_path ??  $slayderContent->slayder_img,
            'slayder_label'=>$request->slayder_label
        ]);
        return redirect()->route('slayder_content.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SlayderContent $slayderContent)
    {
        $slayderContent->delete();
        return redirect()->back();
    }
}
