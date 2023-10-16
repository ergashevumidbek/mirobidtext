@extends('frontend.layouts.master')
@section('main_content')
     <!--=========== Slider Section Start =========-->
     <section class="tj-slider-section">
        <div class="slider_shape"><img src="front_asset/images/banner/shape-1.png" alt="Image" /></div>
        <div class="swiper sc-slider-1">
            <div class="swiper-wrapper">
                @foreach ($slide_data as $value)
                <div class="swiper-slide" data-bg-image="{{asset('storage/'.$value->slayder_img)}}">
                    <div class="container">
                        <div class="slider-content p-z-idex">
                            <h1 class="slider-title">{{$value->slayder_short_text}}</h1>
                            <div class="slider-desc">
                                {{$value->slayder_main_text}}
                            </div>
                            <div class="tj-theme-button">
                                <a class="tj-transparent-btn" href="contact.html">
                                    Batafsil <i class="flaticon-right-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="banner-shape"></div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!--=========== Slider Section End =========-->

    <!--=========== Service Section Start =========-->
    <section class="tj-service-section" style="
    position: relative;
    top: -110px;
">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape"> Mirobidtex</span>
                        <h2 class="title">Mahsulotlarimiz</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($product as $value)
                <div class="col-lg-4 col-md-6">
                    <div class="tj-service-item" data-bg-image="{{asset('storage/'.$value->pro_banner_img)}}">

                        <div class="service-content">
                            <h4><a class="title-link" href="{{route('mirobid_product.show', ['mirobid_product'=>$value->id])}}">{{$value->product_name}}</a></h4>
                            <p>{{$value->pro_short_content}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--=========== Service Section End =========-->

    <!--=========== Cta Section Start =========-->
    <section class="tj-cta-section icon-animate">
        <div class="cta-inner" data-bg-image="front_asset/images/slider/slider-2.jpg"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="cta-content-area">
                        <div class="cta-content">
                            <div class="cta-icon">
                                <img style="width: 100px; object-fit: contain;" src="front_asset/images/logo/logotip-removebg-preview.png" alt="">
                            </div>
                            <div class="cta-text">
                                <h3 class="title">MChJ "Mirobid Textile"</h3>
                                <p class="desc">“Mirobid Textile” MChJ “O'ZTEXTILPROM” ASSOSIATSIYA a'zosi hisoblanadi.Kompaniyamiz
                                    o'zining asosiy faoliyati bilan bir qatorda, mijozlarimiz biz bilan hamkorlik qilishdan katta mamnuniyat bilan foydalanishlarini ta'minlashga asosiy etiborni qaratadi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 position-relative">
                    <div class="tj-theme-button">
                        <a class="tj-transparent-btn" href="contact.html">
                            Batafsil <i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Cta Section End =========-->

    <!--=========== About Section Start =========-->
    <section class="tj-about-section" style="-webkit-box-shadow: 2px 9px 25px -1px rgba(34, 60, 80, 0.2);
    -moz-box-shadow: 2px 9px 25px -1px rgba(34, 60, 80, 0.2);
    box-shadow: 2px 9px 25px -1px rgba(34, 60, 80, 0.2);">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" >
                    <div class="about-content-one">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape"> MChJ "Mirobid Textile"</span>
                            <h2 class="title">We Provide Full Range Global Logistics</h2>
                            <p class="desc">
                                Quisque dignissim enim diam, eget pulvinar ex viverra id. Nulla a lobortis lectus,
                                id volutpat magna. Morbi consequat porttitor fermentum. Nulla vestibulum tincidunt
                                viverra. Vestibulum accumsan
                            </p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon">
                                    <img src="front_asset/images/icon/global.svg" alt="Icon" />
                                </div>
                                <div class="ab-title">
                                    <h5 class="title">Butun Osiyo bo'ylab</h5>
                                </div>
                            </div>
                            <p class="desc">
                                Mahsulotlarimiz yetkazib beriladi<br />

                            </p>
                        </div>
                        <div class="tj-icon-box">
                            <div class="ab-text d-flex align-items-center">
                                <div class="ab-icon">
                                    <img src="front_asset/images/icon/winner.svg" alt="Icon" />
                                </div>
                                <div class="ab-title">
                                    <h5 class="title">Guvohnoma va mukofotlar</h5>
                                </div>
                            </div>
                            <p class="desc">
                                Bizning mahsulotlarimiz davlat va jahon standartlariga to'la javob beradi<br />
                            </p>
                        </div>
                        <div class="ab-button-box d-flex align-items-center">
                            <div class="tj-theme-btn">
                                <a class="tj-primary-btn" href="contact.html">
                                    Batafsil tanishish <i class="flaticon-right-1"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6" >
                    <div class="about-group-image d-flex flex-wrap align-items-start flex-column">
                        <div class="tj-icon-box2 text-center">
                            <div class="number-icon">
                                <i class="flaticon-in-person"></i>
                            </div>
                            <div class="about-number">
                                <div class="tj-count"><span class="odometer" data-count="985">0</span></div>
                                <p class="desc">Bizning hamkorlar</p>
                            </div>
                        </div>
                        <div class="image-box">
                            <img class="p-z-idex" src="front_asset/images/about/ab-1.jpg" alt="Image" />
                        </div>
                        <img class="group-1 p-z-idex" src="front_asset/images/about/ab-2.jpg" alt="Image" />
                        <img class="group-shape" src="front_asset/images/about/ab-shape.png" alt="Image" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== About Section End =========-->


    <!--=========== Blog Section Start =========-->
    <section class="tj-blog-section" style="
    position: relative;
    top: -80px;
">
        <div class="container">
            <div class="row">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape">  MChJ "Mirobid Textile"</span>
                    <h2 class="title">Eng so'ngi yangiliklar</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($latest_news as $value)
                <div class="col-lg-4 col-md-6" >
                    <div class="tj-blog-item">
                        <div class="tj-blog-image">
                            <p > <img src="{{asset('storage/'.$value->banner_img)}}" alt="Blog" /></p>
                        </div>
                        <div class="blog-content-area">

                            <div class="blog-text-box">
                                <div class="blog-header">
                                    <h4>
                                        <a class="title-link" href="{{route('mirobidtext_news.show', ['mirobidtext_news'=>$value->id])}}">
                                           {{$value->news_title}}</a
                                        >
                                    </h4>
                                    <p>
                                        {{$value->news_short_content}}
                                    </p>
                                </div>
                                <div class="blog-button">
                                    <ul class="list-gap">
                                        <li>
                                            <a href="{{route('mirobidtext_news.show', ['mirobidtext_news'=>$value->id])}}">
                                                Batafsil <i class="fa-regular fa-arrow-right"></i
                                            ></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
