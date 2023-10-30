@extends('frontend.layouts.master')
@section('main_content')
    @section('title')
        Yangiliklar
    @endsection
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{asset('assets/images/slider/slider-1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Yangiliklar</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== breadcrumb End ==============-->
{{--'GoogleTranslate'=>Stichoza\GoogleTranslate\GoogleTranslate::class--}}
<!--========== Service Section Start ==============-->
<section class="tj-service-section-four tj-service-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape"> Mirobid tex</span>
                    <h4 class="">Korxona yangiliklari</h4>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($new_collaction as $value)
            <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                <div class="service-item-three">
                    <div class="service-image">
                        <img src="{{asset('storage/'.$value->banner_img)}}" alt="Image" />
                    </div>
                    <div class="service-content">
                        <h5><a class="title" href="{{route('mirobidtext_news.show', ['mirobidtext_news'=>$value->id])}}">{{$value->news_title}}</a></h5>
                        {{-- <p>{{$value->news_short_content}}</p> --}}
                    </div>
                </div>
            </div>
            @empty
                <p class="text-danger">Hech qanday malumot topilmadi</p>
            @endforelse


        </div>
    </div>
</section>
<!--========== Service Section End ==============-->
@endsection
