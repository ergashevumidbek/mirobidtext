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
                        <h1 class="breadcrumb-title text-center">О компании</h1>
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
                                <span class="sub-title active-shape"> МИРОБИД ТЕКСТИЛЬ</span>
                                <h2 class="title">О КОМПАНИИ</h2>
                                <p class="desc">
                                            ООО «Mirobid Textile» является членом АССОЦИАЦИИ «УЗТЕКСТИЛПРОМ».Наша компания
                                    В дополнение к своей основной деятельности компания уделяет особое внимание тому, чтобы нашим клиентам было приятно работать с нами.
                                    Мы готовы предложить Вам высококачественный флизелин. Вы можете связаться с нами в любое время и задать нашим квалифицированным специалистам любые интересующие вас вопросы.
                                    Наша цель – долгосрочное и взаимовыгодное сотрудничество. Благодаря нашим постоянным партнерам мы добились сегодняшнего успеха и надеемся развивать его в будущем.
                                    Одним из наших главных преимуществ и способов работы является встреча с постоянными и потенциальными клиентами! Мы уделяем пристальное внимание требованиям, потребностям и пожеланиям наших клиентов.

                                </p>
{{--                                <img class="p-z-idex" src="{{asset('front_asset/images/vafelniy-1 (2).jpg')}}" alt="Image" />--}}
                            </div>
                            <div class="tj-icon-box">
                                <div class="ab-text d-flex align-items-center">
                                    <div class="ab-icon">
                                        <img src="{{asset('front_asset/images/icon/global.svg')}}" alt="Icon" />
                                    </div>
                                    <div class="ab-title">
                                        <h5 class="title">Сотрудничество с зарубежными странами</h5>
                                    </div>
                                </div>
                                <p class="desc">
                                    Сегодня предприятие расположено на территории Российской Федерации и стран СНГ.
                                    способно удовлетворить потребности крупнейших предприятий. К списку наших постоянных партнеров
                                    включает крупные промышленные предприятия. ООО «Миробид Текстиль» уделяет внимание каждому своему клиенту.
                                    и имеет репутацию компании с гибким подходом, и это часто так
                                    служит убедительным доказательством долгосрочного и взаимовыгодного сотрудничества.
                                </p>

                            </div>


                        </div>
                    </div>
                    <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                        <div class="about-group-image d-flex flex-wrap align-items-start flex-column">
{{--                            <div class="image-box">--}}
                                <img class="p-z-idex" src="{{asset('front_asset/images/car_group.jpg')}}" alt="Image" />
                            <div class="tj-icon-box">
                                <div class="ab-text d-flex align-items-center">
                                    <div class="ab-icon">
                                        <img src="{{asset('front_asset/images/icon/winner.svg')}}" alt="Icon" />
                                    </div>
                                    <div class="ab-title">
                                        <h5 class="title">Наш приоритет</h5>
                                    </div>
                                </div>
                                <p class="desc">
                                    Современные методы организации работы, продуманная техническая и кадровая политика позволяют ООО «Миробид Текстиль» предлагать потребителям более низкие цены, чем у конкурентов, сокращать сроки поставки индивидуальных заказов, обеспечивать высокую гарантию качества.
                                </p>
                            </div>
{{--                                <img class="p-z-idex" src="{{asset('front_asset/images/buildinginner.jpg')}}" alt="Image" />--}}
{{--                            </div>--}}
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
                        <span class="sub-title active-shape"> Наша команда</span>
{{--                        <h2 class="title">Наша команда</h2>--}}
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
                                                <img src="{{asset('storage/'.$value->staff_img)}}" style="height: 150px; width: 150px;" alt="Image" />
                                            </div>
                                            <div class="">
                                                <p class="max-lines">
                                                    {{$value->staff_bio}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="content-area">

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
