<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
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
        $request->validate([
            'slayder_main_text'=>'required',
            'slayder_short_text'=>'required',
            'slayder_img'=>  'required|mimes:png,jpg,jpeg',
            'slayder_label'=>'required'
        ]);  
        $slide_file = $request->file('slayder_img')->store('slide_img');
        $slide = SlayderContent::create([
            'slayder_main_text'=>$request->slayder_main_text,
            'slayder_short_text'=>$request->slayder_short_text,
            'slayder_img'=>$slide_file,
            'slayder_label'=>$request->slayder_label
        ]);
        $slide->save();
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
    public function destroy( SlayderContent $slayderContent)
    {
        // dd($slayderContent);
        if(Storage::exists($slayderContent->slayder_img)){
            Storage::delete($slayderContent->slayder_img);
            /*
                Delete Multiple files this way
                Storage::delete(['upload/test.png', 'upload/test2.png']);
            */
        }else{
            dd('File does not exist.');
        }
        $slayderContent->delete();
        return redirect()->back();
    }
}
