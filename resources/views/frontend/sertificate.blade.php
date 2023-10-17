@extends('frontend.layouts.master')
@section('main_content')
    <!--========== breadcrumb Start ==============-->
    <section style="margin-bottom: 60px">
       
    </section>
    <!--========== breadcrumb End ==============-->

    <!--=========== Team Section Start =========-->
    <section class="tj-team-section tj-team-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center">
                        <span class="sub-title active-shape"> Guvohnomalar</span>
                        <h2 class="title"></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($sertificates as $value)
                <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="tj-team-item">
                        <div class="image-box">
                            <img src="{{asset('storage/'.$value->gost_banner_img)}}" alt="Image" />
                        </div>
                        <div class="team-content text-center">
                            <h4><a class="title-link" href="team-details.html">{{$value->gost_name}}</a></h4>
                            {{-- <span class="sub-title"> Co Founder</span> --}}
                        </div>
                    </div>
                </div>
                @empty
                    <p class="text-danger">Fsuski hech qanday malumot topilmadi</p>
                @endforelse
                
                
                <div class="tj-theme-btn text-center">
                    <a class="tj-primary-btn" href="team-details.html">
                        Batafsil <i class="flaticon-right-1"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Team Section End =========-->
@endsection
