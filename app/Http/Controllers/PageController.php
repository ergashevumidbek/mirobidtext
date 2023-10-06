<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
    public function mirobidtex_news(){
        return view('tables.news_tables');
    }
    public function products(){
        return view('tables.product_tables');
    }
    public function staffes_table(){
        return view('tables.staff_tables');
    }
    public function sertificate(){
        return view('tables.sertificate_tables');
    }
    public function gallery(){
        return view('tables.gallery_tables');
    }
    public function avtomobillar(){
        return view('tables.car_tables');
    }

    // Create forms all

    public function add_news(){
        return view('createforms.create_news');
    }
    public function add_product(){
        return view('createforms.create_product');
    }
    
    public function create_staff(){
        return view('createforms.create_staff');
    }
    public function add_sertificate(){
        return view('createforms.create_sertificate');
    }
    public function add_gallery(){
        return view('createforms.create_gallery');
    }
    public function add_avtomobile(){
        return view('createforms.create_cars');
    }
}
