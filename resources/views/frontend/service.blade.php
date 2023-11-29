@extends('frontend.layouts.master')
@section('main_content')
    @section('title')
        Xizmatlar
    @endsection
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{asset('assets/images/slider/slider-1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Детали услуги</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--========== Faq Section Start ==============-->
<section class="tj-faq-section tj-faq-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape"> Как мы работаем</span>
                    <h6 class="title">Наша служба доставки</h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                <div class="tj-faq-left-content">
                    <div class="faq-image">
                        <img src="{{asset('front_asset/images/slider/slider-2.jpg')}}" alt="Image" />
                    </div>
                    <div class="faq-content">
                        <div class="faq-icon">
                            <i class="fa-regular fa-check"></i>
                        </div>
                        <div class="faq-text">
                            <h6 class="title">Способы оплаты:</h6>
                            <p>Наличный расчет, аккредитив и безналичный расчет</p>
                        </div>
                    </div>
                    <div class="faq-content">
                        <div class="faq-icon">
                            <i class="fa-regular fa-check"></i>
                        </div>
                        <div class="faq-text">
                            <h6 class="title">Способы доставки:</h6>
                            <p>Подробнее можно прочитать в боковом окне</p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                <div class="tj-faq-area">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button
                                    class="accordion-button"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne"
                                    aria-expanded="true"
                                    aria-controls="collapseOne"
                                >
                                    Самовывоз из корпоративного хранилища?
                                </button>
                            </h2>
                            <div
                                id="collapseOne"
                                class="accordion-collapse collapse show"
                                aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    <strong
                                        >There are many variations of passages of available but the Ut elit
                                        tellus luctus nec ullamcorper at mattis</strong
                                    >
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree"
                                    aria-expanded="false"
                                    aria-controls="collapseThree"
                                >
                                    Kурьерская служба?
                                </button>
                            </h2>
                            <div
                                id="collapseThree"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    <strong
                                        >There are many variations of passages of available but the Ut elit
                                        tellus luctus nec ullamcorper at mattis</strong
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour"
                                    aria-expanded="false"
                                    aria-controls="collapseFour"
                                >
                                    Наши условия доставки?
                                </button>
                            </h2>
                            <div
                                id="collapseFour"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample"
                            >
                                <div class="accordion-body">
                                    <strong
                                        >There are many variations of passages of available but the Ut elit
                                        tellus luctus nec ullamcorper at mattis</strong
                                    >
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--========== Faq Section End ==============-->
@endsection
