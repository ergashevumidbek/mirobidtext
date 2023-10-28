@extends('frontend.layouts.master')
@section('main_content')
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="assets/images/slider/slider-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Service Details</h1>
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
                <div class="col-lg-12">
                    <div class="tj-project-area d-flex">
                        <div class="gutter-sizer"></div>
                        @forelse ($product_list as $value)
                        <div class="project-item-three grid-item grid-division-1">
                            <div
                                class="project-image"
                                data-bg-image="{{asset('storage/'.$value->pro_banner_img)}}"
                                style="background-image: url('front_asset/images/project/project.jpg')"
                            ></div>
                            <a class="arrow-btn" href=""> <i class="flaticon-right-1"></i> </a>
                            <div class="project-text">
                                <span class="sub-title">{{$value->product_name}}</span>
                                <h6><a class="title-link" href="{{route('mirobid_product.show', ['mirobid_product'=>$value->id])}}">{{$value->pro_short_content}}</a></h6>
                            </div>
                        </div>
                        @empty
                            <p class="text-danger">Afsuski hech qanday malumot topilmadi</p>
                        @endforelse


                    </div>
                    <div class="tj-theme-btn text-center">
                        <a class="tj-primary-btn" href="project-details.html">
                            Ko'proq <i class="flaticon-right-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Project Section End =========-->
@endsection
