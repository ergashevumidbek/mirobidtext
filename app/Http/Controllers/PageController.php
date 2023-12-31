<?php

namespace App\Http\Controllers;
use App\Models\LatestNew;
use App\Models\MirobidProduct;
use App\Models\Gallery;
use App\Models\SlayderContent;
use App\Models\MirobidStaff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class PageController extends Controller
{
    public function main_page(){
        $latest_news = DB::table('latest_news')->latest()->limit(3)->get();
        $product = DB::table('mirobid_products')->latest()->limit(4)->get();
        $slide_data = DB::table('slayder_contents')->latest()->limit(3)->get();
        return view('frontend.main_page')->with([
            'slide_data' => $slide_data,
            'latest_news'=>$latest_news,
            'product' => $product
    ]);
    }
    public function dashboards(){
        $mirobid_news = LatestNew::all()->count();
        $mirobid_pro = MirobidProduct::all()->count();
        $gallery = Gallery::all()->count();
        $staff = MirobidStaff::all()->count();
        return view('backend.createforms.dashboards')->with([
            'mirobid_news'=>$mirobid_news,
            'mirobid_pro'=>$mirobid_pro,
            'gallery'=>$gallery,
            'staff'=>$staff
        ]);
    }
    public function venik() {
        return view('frontend.venik');
    }
    public function mirobidtex_news(){
        return view('backend.tables.news_tables');
    }
    public function translation() {
        return view('backend.translation.translation');
    }
//    products all
    public function products(){
        return view('backend.tables.product_tables');
    }
    public function toqilmagan_mato(){
        return view('frontend.products.toqilmagan_mato');
    }
    public function vafli_mato() {
        return view('frontend.products.vafli_mato');
    }
    public function teri_sochiqlar(){
        return view('frontend.products.teri_sochiq');
    }
    public function vata_prima() {
        return view('frontend.products.vata_prima');
    }
    public function supurgilar() {
        return view('frontend.products.supurgi');
    }
    public function doka() {
        return view('frontend.products.doka');
    }
    public function staffes_table(){
        return view('backend.tables.staff_tables');
    }
    public function sertificate(){
        return view('backend.tables.sertificate_tables');
    }
    public function gallery(){
        return view('backend.tables.gallery_tables');
    }
    public function avtomobillar(){
        return view('backend.tables.car_tables');
    }

    // Create forms all

    public function add_news(){
        return view('backend.createforms.create_news');
    }
    public function add_product(){
        return view('backend.createforms.create_product');
    }

    public function create_staff(){
        return view('backend.createforms.create_staff');
    }
    public function add_sertificate(){
        return view('backend.createforms.create_sertificate');
    }
    public function add_gallery(){
        return view('backend.createforms.create_gallery');
    }
    public function add_slayder(){
        return view('backend.createforms.create_subject_materials');
    }
// frontend section
    public function yetkazib_berish(){
        return view('frontend.service');
    }
    public function yangiliklar(){
        $new_collaction = DB::table('latest_news')->latest()->limit(6)->get();
        return view('frontend.news')->with(['new_collaction' => $new_collaction]);
    }
    public function biz_haqimizda(){
        $staff = MirobidStaff::all();
        return view('frontend.about_us')->with(['staff' => $staff]);
    }
    public function aloqa(){
        return view('frontend.contact');
    }
    public function mahsulotlar(){
        $product_list = DB::table('mirobid_products')->latest()->limit(8)->get();

        return view('frontend.product')->with(['product_list' => $product_list]);
        // malumot ketyapti

    }
    public function guvohnoma(){
        $sertificate = DB::table('sertificates')->latest()->limit(6)->get();
        return view('frontend.sertificate')->with(['sertificates' => $sertificate]);
    }
    public function login(){
        return view('auth.login');
    }

}
