<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\MirobidProduct;
use Illuminate\Http\Request;

class MirobidProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pro_data = MirobidProduct::all();
        return view('backend.tables.product_tables',['pro_data'=>$pro_data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('backend.tables.product_tables');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name'=>'required',
            'pro_short_content'=>'required',
            'product_type'=>'required',
            'pro_banner_img'=>'required',
            'pro_content_img'=>'required',
            'pro_label'=>'required',
            'pro_spesificate'=>'required'
        ]);
        $pro_banner_img = $request->file('pro_banner_img')->store('product_img');
        $pro_content_img = $request->file('pro_content_img')->store('product_img');
        $mirobid_pro = MirobidProduct::create([
            'product_name'=>$request->product_name,
            'pro_short_content'=>$request->pro_short_content,
            'product_type'=>$request->product_type,
            'pro_banner_img'=>$pro_banner_img ?? 'default_img/no_img.jpg',
            'pro_content_img'=>$pro_content_img ?? 'default_img/no_img.jpg',
            'pro_label'=>$request->pro_label,
            'pro_spesificate'=>$request->pro_spesificate
        ]);
        $mirobid_pro->save();
        return redirect()->route('mirobid_product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(MirobidProduct $mirobidProduct)
    {
        // dd($mirobidProduct);
        $product = MirobidProduct::find($mirobidProduct);
        return view('frontend.detail_page.product_detail')->with(['mirobidProduct'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MirobidProduct $mirobidProduct)
    {
        // dd($mirobidProduct);
        return view('backend.edit.product_edit')->with('mirobidProduct', $mirobidProduct);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MirobidProduct $mirobidProduct)
    {
        // dd($mirobidProduct);
        if($request->file('pro_banner_img')){
            if(isset($mirobidProduct->pro_banner_img)){
                Storage::delete($mirobidProduct->pro_banner_img);
            }
            $pro_banner_img = $request->file('pro_banner_img')->store('product_img');
        }elseif($request->file('pro_content_img')){
            if(isset($mirobidProduct->pro_content_img)){
                Storage::delete($mirobidProduct->pro_content_img);
            }
            $pro_content_img = $request->file('pro_content_img')->store('product_img');
        }
        $mirobidProduct->update([
            'product_name'=>$request->product_name,
            'pro_short_content'=>$request->pro_short_content,
            'product_type'=>$request->product_type,
            'pro_banner_img'=>$pro_banner_img ?? $mirobidProduct->pro_banner_img,
            'pro_content_img'=>$pro_content_img ?? $mirobidProduct->pro_content_img,
            'pro_label'=>$request->pro_label,
            'pro_spesificate'=>$request->pro_spesificate
        ]);
        return redirect()->route('mirobid_product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MirobidProduct $mirobidProduct)
    {
        if(Storage::exists($mirobidProduct->slayder_img)){
            Storage::delete($mirobidProduct->slayder_img);
            /*
                Delete Multiple files this way
                Storage::delete(['upload/test.png', 'upload/test2.png']);
            */
        }else{
            dd('File does not exist.');
        }
        $mirobidProduct->delete();
        return redirect()->back();
    }
}
