@extends('frontend.layouts.master')
@section('main_content')
    @section('title')
        Mahsulotlar
    @endsection
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{asset('assets/images/slider/slider-1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Kompaniya mahsulotlari</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== breadcrumb End ==============-->

    <!--=========== Project Section Start =========-->
    <section class="tj-project-section-two tj-project-page">
        <div class="container">
            <div class="row">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape"> Mirobidtex</span>
                    <h4 class="">Bizning mahsulotlar</h4>
                </div>
            </div>
            <div class="row">
                        @forelse ($product_list as $value)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="{{asset('storage/'.$value->pro_banner_img)}}" alt="">
                            </div>

                            <div class="text-start p-2">

                                <a style="color: var(--tj-primary-color);" href="{{route('mirobid_product.show', ['mirobid_product'=>$value->id])}}">{{$value->product_name}}</a>
                                <p style="width: 270px;  overflow: hidden;  text-overflow: ellipsis;">{{$value->pro_short_content}}</p>
                            </div>
                        </div>
                    </div>
                        @empty
                            <p class="text-danger">Afsuski hech qanday malumot topilmadi</p>
                        @endforelse
                    <div class="tj-theme-btn text-center">
                        <a class="tj-primary-btn" href="project-details.html">
                            Ko'proq <i class="flaticon-right-1"></i>
                        </a>
                    </div>
{{--                </div>--}}
            </div>
        </div>
    </section>
    <!--=========== Project Section End =========-->
@endsection
