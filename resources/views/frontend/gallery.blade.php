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
                        <h1 class="breadcrumb-title text-center">Галерея</h1>
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
                    <span class="sub-title active-shape"> Миробид тех</span>
{{--                    <h4 class="">Bizning mahsulotlar</h4>--}}
                </div>
            </div>
            <!-- Button trigger modal -->
{{--            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">--}}
{{--                Launch demo modal--}}
{{--            </button>--}}

            <!-- Modal -->

            <div class="row">
                @forelse ($gallery_post as $key=>$value_gal)

                    <div class="col-lg-3 col-md-6 wow fadeInUp my-3" data-wow-delay="0.3s">
                        <div class="package-item">
                            <div class="overflow-hidden">
                                <a style="color: var(--tj-primary-color);" href="#{{$value_gal->id}}" data-rel="popup" data-position-to="window">
                                    <img  class="img-fluid" src="{{asset('storage/'.$value_gal->gallery_img)}}" alt="" style="height: 200px; width: 100%; object-fit: contain;">
                                </a>
{{--                                    <div class="" data-role="popup" id="{{$value_gal->id}}" data-overlay-theme="b">--}}
{{--                                        <img  class="img-fluid" src="{{asset('storage/'.$value_gal->gallery_img)}}" alt="" style="height: 200px; width: 100%; object-fit: contain;">--}}

{{--                                    </div>--}}
                            </div>

                            <div class="text-start p-2">


{{--                                <p style="width: 270px; height: 50px;  overflow: hidden;  text-overflow: ellipsis; font-size: 16px;">{{$value->pro_short_content}}</p>--}}
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-danger">К сожалению, никакой информации не найдено</p>
                @endforelse
{{--                <div class="tj-theme-btn text-center">--}}
{{--                    <a class="tj-primary-btn" href="project-details.html">--}}
{{--                        Ko'proq <i class="flaticon-right-1"></i>--}}
{{--                    </a>--}}
{{--                </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </section>
    <!--=========== Project Section End =========-->
@endsection
