@extends('frontend.layouts.master')
@section('main_content')
@section('title')
    Biz haqimizda
@endsection
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{asset('front_asset/images/slider/slider-1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Kompaniya haqida</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== breadcrumb End ==============-->

        <!--=========== About Section Start =========-->
        <section class="tj-about-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                        <div class="about-content-one">
                            <div class="tj-section-heading">
                                <span class="sub-title active-shape"> MIROBID TEX</span>
                                <h2 class="title">KOMPANIYA HAQIDA</h2>
                                <p class="desc">
                                    “Mirobid Textile” MChJ “O‘ZTEXTILPROM” ASSOSIATSIYA a’zosi hisoblanadi.Kompaniyamiz
                                    o‘zining asosiy faoliyati bilan bir qatorda, mijozlarimiz biz bilan hamkorlik qilishdan katta mamnuniyat bilan foydalanishlarini ta’minlashga asosiy e’tiborni qaratadi.
                                    Biz sizga yuqori sifatli to'qilmagan matoni taklif qilishga tayyormiz. Siz o'zingizni qiziqtirgan savollarni malakali mutaxassislarimizga berish uchun istalgan vaqtda biz bilan bog'lanishingiz mumkin.
                                    Bizning maqsadimiz uzoq muddatli va o'zaro manfaatli hamkorlikdir. Doimiy hamkorlarimiz tufayli bugungi muvaffaqiyatga erishdik va kelajakda uni rivojlantirishga umid qilamiz.
                                    Bizning asosiy afzalliklarimiz va ish uslublarimizdan biri doimiy va potentsial mijozlar bilan uchrashishdir! Biz mijozlarimizning talablari, ehtiyojlari va istaklariga katta e'tibor beramiz.

                                </p>
                            </div>
                            <div class="tj-icon-box">
                                <div class="ab-text d-flex align-items-center">
                                    <div class="ab-icon">
                                        <img src="{{asset('front_asset/images/icon/global.svg')}}" alt="Icon" />
                                    </div>
                                    <div class="ab-title">
                                        <h5 class="title">Chet el bilan hamkorlik</h5>
                                    </div>
                                </div>
                                <p class="desc">
                                    Bugungi kunda korxona Rossiya Federatsiyasi va MDH mamlakatlaridagi eng yirik korxonalarning ehtiyojlarini qondirishga qodir. Doimiy hamkorlarimiz ro'yxatiga yirik sanoat korxonalari kiradi. “Mirobid Textile” MChJ o‘zining har bir mijozga e’tibori va moslashuvchan yondashuvi bilan ajralib turadigan korxona sifatida obro‘ga ega va bu ko‘pincha uzoq muddatli va o‘zaro manfaatli hamkorlik uchun mustahkam dalil bo‘lib xizmat qiladi.
                                </p>
                            </div>
                            <div class="tj-icon-box">
                                <div class="ab-text d-flex align-items-center">
                                    <div class="ab-icon">
                                        <img src="{{asset('front_asset/images/icon/winner.svg')}}" alt="Icon" />
                                    </div>
                                    <div class="ab-title">
                                        <h5 class="title">Ustuvorligimiz</h5>
                                    </div>
                                </div>
                                <p class="desc">
                                    Ishni tashkil etishning zamonaviy usullari, puxta o‘ylangan texnik va kadrlar siyosati “Mirobid Textile” MChJga iste’molchilarga raqobatchilardan past narxlarni taklif qilish, individual buyurtmalar bo‘yicha yetkazib berish muddatlarini qisqartirish va yuqori sifat kafolatini ta’minlash imkonini beradi.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                        <div class="about-group-image d-flex flex-wrap align-items-start flex-column">
                            <div class="image-box">
                                <img class="p-z-idex" src="{{asset('front_asset/images/about/ab-1.jpg')}}" alt="Image" />
                            </div>
{{--                            <img class="group-1 p-z-idex" src="front_asset/images/about/ab-2.jpg" alt="Image" />--}}
{{--                            <img class="group-shape" src="front_asset/images/about/ab-shape.png" alt="Image" />--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=========== About Section End =========-->

           <!--=========== Testimonial Section Start =========-->
           <section class="tj-testimonial-section tj-testimonial-page">
            <div class="container">
                <div class="row">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape"> Bizning Jamoa</span>
                        <h2 class="title">Bizning jamoa</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="swiper tj-testimonial-slider">
                            <div class="swiper-wrapper">
                                @forelse ($staff as $value)
                                <div class="swiper-slide">
                                    <div class="tj-testimonial-item">
                                        <div class="testimonial-rating d-flex justify-content-between">
                                            <div class="testimoniasl-image">
                                                <img src="{{asset('storage/'.$value->staff_img)}}" alt="Image" />
                                            </div>
                                            <div class="rating-icon">
                                                <ul class="list-gap">
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                    <li><i class="fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="content-area">
                                            <p class="max-lines">
                                                {{$value->staff_bio}}
                                            </p>
                                            <div class="testimonial-content d-flex justify-content-between">
                                                <div class="testimonial-auother">
                                                    <h5 class="title">{{$value->staff_name, $value->staff_surname}}</h5>
                                                    <span class="sub-title"> {{$value->staff_profission}}</span>
                                                </div>
                                                <div class="testimonial-comment">
                                                    {{-- <img src="front_asset/images/icon/comment.svg" alt="Icon" /> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty

                                @endforelse


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=========== Testimonial Section End =========-->
@endsection
