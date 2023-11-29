@extends('frontend.layouts.master')
@section('main_content')
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{asset('assets/images/slider/slider-1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Новости</h1>
                    </div>
                </div>
            </div>
        </div>
        </section>
    <!--========== blog details Start ==============-->
    <section class="tj-blog-details my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($latest_news as $value)
                    <div class="page-details-wrapper">
                        <div class="tj-blog-item-three" >
                            <div class="tj-blog-image" >
                                <a href="#" >
                                    <img class="img-fluid" style="width:100%;
                                    height: 516px; object-fit: fill;" src="{{asset('storage/'.$value->banner_img)}}" alt="Blog"
                                /></a>
                            </div>
                            <div class="blog-content-area">
                                <div class="blog-header">
                                    <h4>
                                            {{$value->news_title}}
                                    </h4>
                                </div>
                                <div class="blog-meta">
                                    <div class="meta-list">
                                        <ul class="list-gap">
                                            <li><i class="fa-light fa-user"></i> <a href="#"> Admin</a></li>
                                            <li><i class="flaticon-calendar"></i> <span> {{$value->created_at}}</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p>
                                {{$value->main_content}}
                            </p>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-5 col-md-6">
                                <div class="check-image">
                                    <img src="{{asset('storage/'.$value->news_img_1)}}" alt="Blog" />
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6">
                                <div class="check-list">
                                    <img src="{{asset('storage/'.$value->news_img_2)}}" alt="Blog" />
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>


                <div class="col-lg-4">
                    <div class="details-sidebar-inner">

                        <div class="tj-sidebar-widget sidebar-post">
                            <h5 class="details_title">Последние новости</h5>
                            @foreach ($latest_new as $values)
                            <div class="tj-post-content">
                                <div class="tj-auother-img">
                                    <a href="">
                                        <img src="{{asset('storage/'.$values->banner_img)}}" alt="Blog"
                                    /></a>
                                </div>
                                <div class="tj-details-text">
                                    <div class="details-meta">
                                        <ul class="list-gap">
                                            <li><i class="flaticon-calendar"></i> {{$values->created_at}}</li>
                                        </ul>
                                    </div>
                                    <div class="tj-details-header">
                                        <h6>
                                            <a href="{{route('mirobidtext_news.show', ['mirobidtext_news'=>$values->id])}}">{{$values->news_title}}</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== blog details End ==============-->
@endsection
