<?php

namespace App\Http\Controllers;
use App\Models\LatestNew;
use App\Models\MirobidProduct;
use App\Models\Gallery;
use App\Models\MirobidStaff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class PageController extends Controller
{
    public function main_page(){
        return view('frontend.main_page');
    }
    public function dashboard(){
        $mirobid_news = LatestNew::all()->count();
        $mirobid_pro = MirobidProduct::all()->count();
        $gallery = Gallery::all()->count();
        $staff = MirobidStaff::all()->count();
        return view('backend.createforms.dashboard')->with([
            'mirobid_news'=>$mirobid_news,
            'mirobid_pro'=>$mirobid_pro,
            'gallery'=>$gallery,
            'staff'=>$staff
        ]);
    }
    public function mirobidtex_news(){
        return view('backend.tables.news_tables');
    }
    public function products(){
        return view('backend.tables.product_tables');
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
        return view('frontend.news');
    }
    public function biz_haqimizda(){
        return view('frontend.about_us');
    }
    public function aloqa(){
        return view('frontend.contact');
    }
    public function mahsulotlar(){
        return view('frontend.product');
    }
    public function guvohnoma(){
        return view('frontend.sertificate');
    }
    public function login(){
        return view('auth.login');
    }
   
}
