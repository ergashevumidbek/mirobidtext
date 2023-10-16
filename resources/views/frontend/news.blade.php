@extends('frontend.layouts.master')
@section('main_content')
   <!--========== breadcrumb Start ==============-->
   <section style="margin-bottom: 60px">
   
   </section>
<!--========== breadcrumb End ==============-->

<!--========== Service Section Start ==============-->
<section class="tj-service-section-four tj-service-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape"> Mirobid tex</span>
                    <h3 class="">Korxona yangiliklari</h3>
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
                        <h4><a class="title" href="{{route('mirobidtext_news.show', ['mirobidtext_news'=>$value->id])}}">{{$value->news_title}}</a></h4>
                        <p>{{$value->news_short_content}}</p>
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
