<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\MirobidProduct;
use Illuminate\Http\Request;

class MirobidProductController extends Controller
{
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
            'pro_content_img_1'=>'required',
            'pro_content_img_2'=>'required',
            'pro_content_img_3'=>'required',
            'pro_content_img_4'=>'required',
            'pro_label'=>'required',
            'spetsification'=>''
        ]);


        $pro_banner_img = $request->file('pro_banner_img')->store('product_img');
        $pro_content_img_1 = $request->file('pro_content_img_1')->store('product_img');
        $pro_content_img_2 = $request->file('pro_content_img_2')->store('product_img');
        $pro_content_img_3 = $request->file('pro_content_img_3')->store('product_img');
        $pro_content_img_4 = $request->file('pro_content_img_4')->store('product_img');
        $mirobid_pro = MirobidProduct::create([
            'product_name'=>$request->product_name,
            'pro_short_content'=>$request->pro_short_content,
            'product_type'=>$request->product_type,
            'pro_banner_img'=>$pro_banner_img ?? 'default_img/no_img.jpg',
            'pro_content_img_1'=>$pro_content_img_1 ?? 'default_img/no_img.jpg',
            'pro_content_img_2'=>$pro_content_img_2 ?? 'default_img/no_img.jpg',
            'pro_content_img_3'=>$pro_content_img_3 ?? 'default_img/no_img.jpg',
            'pro_content_img_4'=>$pro_content_img_4 ?? 'default_img/no_img.jpg',
            'pro_label'=>$request->pro_label,
            'spetsification'=>$request->spetsification
        ]);
        $mirobid_pro->save();
        return redirect()->route('mirobid_product.index');
    }

    public function show(MirobidProduct $mirobidProduct)
    {
        // dd($mirobidProduct);
        $product = MirobidProduct::find($mirobidProduct);
        return view('frontend.venik')->with(['mirobidProduct'=>$product]);
    }

    public function edit(MirobidProduct $mirobidProduct)
    {
        // dd($mirobidProduct);
        return view('backend.edit.product_edit')->with('mirobidProduct', $mirobidProduct);
    }

    public function update(Request $request, MirobidProduct $mirobidProduct)
    {
//         dd($mirobidProduct);
        if($request->file('pro_banner_img')){
            if(isset($mirobidProduct->pro_banner_img)){
                Storage::delete($mirobidProduct->pro_banner_img);
            }
            $pro_banner_img = $request->file('pro_banner_img')->store('product_img');
        }elseif($request->file('pro_content_img')){
            if(isset($mirobidProduct->pro_content_img_1)){
                Storage::delete($mirobidProduct->pro_content_img_1);
            }
            $pro_content_img_1 = $request->file('pro_content_img_1')->store('product_img');
        }elseif ($request->file('pro_content_img_2')){
            if(isset($mirobidProduct->pro_content_img_2)){
                Storage::delete($mirobidProduct->pro_content_img_2);
            }
            $pro_content_img_2 = $request->file('pro_content_img_2')->store('product_img');
        }
        elseif ($request->file('pro_content_img_3')){
            if(isset($mirobidProduct->pro_content_img_3)){
                Storage::delete($mirobidProduct->pro_content_img_3);
            }
            $pro_content_img_3 = $request->file('pro_content_img_3')->store('product_img');
        }
        elseif ($request->file('pro_content_img_4')){
            if(isset($mirobidProduct->pro_content_img_4)){
                Storage::delete($mirobidProduct->pro_content_img_4);
            }
            $pro_content_img_4 = $request->file('pro_content_img_4')->store('product_img');
        }
        $mirobidProduct->update([
            'product_name'=>$request->product_name,
            'pro_short_content'=>$request->pro_short_content,
            'product_type'=>$request->product_type,
            'pro_banner_img'=>$pro_banner_img ?? $mirobidProduct->pro_banner_img,
            'pro_content_img_1'=>$pro_content_img_1 ?? $mirobidProduct->pro_content_img_1,
            'pro_content_img_2'=>$pro_content_img_2 ?? $mirobidProduct->pro_content_img_2,
            'pro_content_img_3'=>$pro_content_img_3 ?? $mirobidProduct->pro_content_img_3,
            'pro_content_img_4'=>$pro_content_img_4 ?? $mirobidProduct->pro_content_img_4,
            'pro_label'=>$request->pro_label,
            'spetsification'=>$request->spetsification
        ]);
        return redirect()->route('mirobid_product.index');
    }

    public function destroy(MirobidProduct $mirobidProduct)
    {
        if(optional($mirobidProduct->pro_banner_img)->isNotEmpty()){
            Storage::disk('public')->delete($mirobidProduct->pro_banner_img);
        }else{
            dd('File does not exist.');
        }
        $mirobidProduct->delete();
        return redirect()->back();
    }
}
