@extends('frontend.layouts.master')
@section('main_content')
    @section('title')
        Bosh sahifa
    @endsection
     <!--=========== Slider Section Start =========-->
     <section class="tj-slider-section">
        <div class="swiper sc-slider-1" data-bs-interval="10000">
            <div class="swiper-wrapper" >
                @foreach ($slide_data as $value)
                <div class="swiper-slide" style="height: 720px;"  data-bg-image="{{asset('storage/'.$value->slayder_img)}}">
                    <div class="container">
                        <div class="slider-content p-z-index">
                            <h3 class="text-light">{{$value->slayder_short_text}}</h3>
                            <div class="slider-desc">
                            </div>
                            <div class="tj-theme-button">
                                <a class="tj-transparent-btn" href="{{route('biz_haqimizda')}}">
                                   O Kомпания <i class="flaticon-right-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!--=========== Slider Section End =========-->
     <!--=========== About Section Start =========-->
     <section class="tj-about-section" style="-webkit-box-shadow: 2px 9px 25px -1px rgba(34, 60, 80, 0.2);
    -moz-box-shadow: 2px 9px 25px -1px rgba(34, 60, 80, 0.2);
    box-shadow: 2px 9px 25px -1px rgba(34, 60, 80, 0.2);">
         <div class="container">
             <div class="row">
                 <div class="col-lg-6" >
                     <div class="about-content-one">
                         <div class="tj-section-heading">
                             <span class="sub-title active-shape"> МЧЖ "МИРОБИД ТЕХТИЛЕ"</span>
                             <h2 class="title">Наша компания уже много лет в сердцах клиентов</h2>
                             <p class="desc">
                                 Современные методы организации труда, продуманная техническая и кадровая политика позволяют ООО «Миробид Текстиль» предлагать потребителям более низкие цены, чем у конкурентов,
                                 позволяет сократить сроки поставки индивидуальных заказов и обеспечить высокую гарантию качества.
                             </p>
                         </div>
                         <div class="tj-icon-box">
                             <div class="ab-text d-flex align-items-center">
                                 <div class="ab-icon">
                                     <img src="{{asset('front_asset/images/icon/global.svg')}}" alt="Icon" />
                                 </div>
                                 <div class="ab-title">
                                     <h5 class="title">По всей Азии</h5>
                                 </div>
                             </div>
                             <p class="desc">
                                 Наша продукция доставляется<br />

                             </p>
                         </div>
                         <div class="tj-icon-box">
                             <div class="ab-text d-flex align-items-center">
                                 <div class="ab-icon">
                                     <img src="front_asset/images/icon/winner.svg" alt="Icon" />
                                 </div>
                                 <div class="ab-title">
                                     <h5 class="title">Сертификат и награды</h5>
                                 </div>
                             </div>
                             <p class="desc">
                                 Наша продукция полностью соответствует государственным и мировым стандартам.<br />
                             </p>
                         </div>
                         <div class="ab-button-box d-flex align-items-center">
                             <div class="tj-theme-btn">
                                 <a class="tj-primary-btn" href="{{route('biz_haqimizda')}}">
                                     Узнать больше <i class="flaticon-right-1"></i>
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
                                 <p class="desc">Наши партнеры</p>
                             </div>
                         </div>
                         <div class="image-box">
                             <img class="p-z-idex" src="front_asset/images/car.jpg" alt="Image" /><br>
                             <img class="p-z-idex" src="front_asset/images/building.jpg" alt="Image" />
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--=========== About Section End =========-->
    <!--=========== Service Section Start =========-->
    <section class="tj-service-section" style="
    background-color: #e5e5e57a;
    position: relative;
    top: -110px;
">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape"> Миробидтекстиль</span>
                        <h2 class="title">Наши продукты</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($product as $value)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{asset('storage/'.$value->pro_banner_img)}}" alt="">
                            </div>

                            <div class="text-start p-2">

                                <a style="color: var(--tj-primary-color);" href="{{route('mirobid_product.show', ['mirobid_product'=>$value->id])}}">{{$value->product_name}}</a>
                                <p style="width: 270px; height: 50px;  overflow: hidden;  text-overflow: ellipsis; font-size: 16px;">{{$value->pro_short_content}}</p>
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
        <div class="cta-inner" data-bg-image="{{asset('front_asset/images/mirobid_truck/105-mega-yangi.png')}}"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="cta-content-area">
                        <div class="cta-content">
                            <div class="cta-text">
                                <h3 class="title">ООО "Миробид Текстиль"</h3>
                                <p class="desc">ООО «Mirobid Textile» является членом АССОЦИАЦИИ «УЗТЕКСТИЛПРОМ».Наша компания
                                    Помимо своей основной деятельности, наши клиенты рады сотрудничеству с нами.
                                    основное внимание уделяется тому, чтобы им нравилось его использовать.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 position-relative">
                    <div class="tj-theme-button">
                        <a class="tj-transparent-btn" href="{{route('biz_haqimizda')}}">
                            Более <i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Cta Section End =========-->
    <!--=========== Blog Section Start =========-->
    <section class="tj-blog-section" style="
    position: relative;
    top: -80px;
">
        <div class="container">
            <div class="row">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape">  ООО "Миробид Текстиль"</span>
                    <h2 class="title">Последние новости</h2>
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
{{--                                <div class="blog-button">--}}
{{--                                    <ul class="list-gap">--}}
{{--                                        <li>--}}
{{--                                            <a href="{{route('mirobidtext_news.show', ['mirobidtext_news'=>$value->id])}}">--}}
{{--                                                Batafsil <i class="fa-regular fa-arrow-right"></i--}}
{{--                                            ></a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
