<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\LatestNew;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LatestNewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news_data = LatestNew::all();
        return view('backend.tables.news_tables')->with('mirobidtext_news', $news_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('backend.tables.news_tables');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'news_title'=>'required',
            'news_short_content'=>'required',
            'banner_img'=>'required|mimes:jpeg,png,jpg  ',
            'news_img_1'=>'required|mimes:jpeg,png,jpg  ',
            'news_img_2'=>'required|mimes:jpeg,png,jpg  ',
            'main_content'=>'required'
        ]);
        $news_banner_img = $request->file('banner_img')->store('news_img');
        $news_img1 = $request->file('news_img_1')->store('news_img');
        $news_img2 = $request->file('news_img_2')->store('news_img');
        $news_data = LatestNew::create([
            'news_title'=>$request->news_title,
            'news_short_content'=>$request->news_short_content,
            'banner_img'=>$news_banner_img ?? 'default_img/no_img.jpg',
            'news_img_1'=>$news_img1 ?? 'default_img/no_img.jpg',
            'news_img_2'=>$news_img2 ?? 'default_img/no_img.jpg',
            'main_content'=>$request->main_content
        ]);
        $news_data->save();
        return redirect()->route('mirobidtext_news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(LatestNew $mirobidtext_news)
    {
        $latest_news = LatestNew::find($mirobidtext_news);
        $latest_new = DB::table('latest_news')->latest()->limit(3)->get();

        return view('frontend.detail_page.news_detail')
        ->with([
        'latest_news'=>$latest_news,
        'latest_new'=>$latest_new
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LatestNew $mirobidtext_news)
    {
        // dd($mirobidtext_news);
        return view('backend.edit.news_edit')->with(['mirobidtext_news'=>$mirobidtext_news]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LatestNew $mirobidtext_news)
    {
        if($request->hasFile('banner_img')){
            if(isset($mirobidtext_news->banner_img)){
                Storage::delete($mirobidtext_news->banner_img);
            }
            $news_banner_img = $request->file('banner_img')->store('news_img');
        }elseif($request->hasFile('news_img_1')){
            if(isset($mirobidtext_news->news_img_1)){
                Storage::delete($mirobidtext_news->news_img_1);
            }
            $news_img1 = $request->file('news_img_1')->store('news_img');
        }elseif($request->hasFile('news_img_2')){
            if(isset($mirobidtext_news->news_img_2)){
                Storage::delete($mirobidtext_news->news_img_2);
            }
            $news_img2 = $request->file('news_img_2')->store('news_img');
        }
        $mirobidtext_news->update([
            'news_title'=>$request->news_title,
            'news_short_content'=>$request->news_short_content,
            'banner_img'=>$news_banner_img ?? $mirobidtext_news->banner_img,
            'news_img_1'=>$news_img1 ?? $mirobidtext_news->news_img_1,
            'news_img_2'=>$news_img2 ?? $mirobidtext_news->news_img_2,
            'main_content'=>$request->main_content
        ]);
        return redirect()->route('mirobidtext_news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LatestNew $mirobidtext_news)
    {
        if(Storage::exists($mirobidtext_news->news_banner_img)){
            Storage::delete($mirobidtext_news->news_banner_img);
            /*
                Delete Multiple files this way
                Storage::delete(['upload/test.png', 'upload/test2.png']);
            */
        }else{
            dd('File does not exist.');
        }
        $mirobidtext_news->delete();
        return redirect()->back();
    }
}
