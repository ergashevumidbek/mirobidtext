<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\MirobidStaff;
use Illuminate\Http\Request;

class MirobidStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staff_data = MirobidStaff::all();
        return view('tables.staff_tables')->with(['staff_data'=> $staff_data]);
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
            'staff_name'=>'required',
            'staff_surname'=>'required',
            'staff_profission'=>'required',
            'staff_img'=>'required|mimes:png,jpg,jpeg',
            'staff_bio'=>'required'
        ]);
        $path = $request->file('staff_img')->store('avatars');
        $mirobid_staff = MirobidStaff::create([
            'staff_name'=>$request->staff_name,
            'staff_surname'=>$request->staff_surname,
            'staff_profission'=>$request->staff_profission,
            'staff_img'=>$path ?? 'default_img/img_avatar.png',
            'staff_bio'=>$request->staff_bio
        ]);
        $mirobid_staff->save();
        return view('tables.staff_tables');
    }

    /**
     * Display the specified resource.
     */
    public function show(MirobidStaff $mirobidStaff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MirobidStaff $mirobidStaff)
    {
        return view('edit.staff_edit', ['staff_edit_data'=>$mirobidStaff]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MirobidStaff $mirobidStaff)
    {
        if($request->hasFile('staff_img')){
            if(isset($mirobidStaff->staff_img)){
                Storage::delete($mirobidStaff->staff_img);
            }
            $staff_img_path = $request->file('staff_img')->store('avatars');
        }
        $mirobidStaff->update([
            'staff_name'=>$request->staff_name,
            'staff_surname'=>$request->staff_surname,
            'staff_profission'=>$request->staff_profission,
            'staff_img'=>$staff_img_path ?? $mirobidStaff->staff_img,
            'staff_bio'=>$request->staff_bio
        ]);
        return redirect()->route('mirobid_staff.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MirobidStaff $mirobidStaff)
    {
        $mirobidStaff->delete();
        return redirect()->back();
    }
}
