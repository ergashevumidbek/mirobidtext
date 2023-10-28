@extends('frontend.layouts.master')
@section('main_content')
    <!--========== breadcrumb Start ==============-->
{{--    <section class="breadcrumb-wrapper" data-bg-image="assets/images/slider/slider-1.jpg">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="breadcrumb-content">--}}
{{--                        <h1 class="breadcrumb-title text-center">Service Details</h1>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!--========== breadcrumb End ==============-->
    <!--=========== Feature Section Start =========-->
    <section class="tj-choose-us-section">
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tj-section-heading text-center">
{{--                        <span class="sub-title active-shape"> Bizning xizmatlarimiz</span>--}}
{{--                        <h6 class="text-light">Kompaniyaning butun dunyo bo'ylab transport va ekspeditorlik xizmatlari</h6>--}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                    <div class="choose-us-content-1">
                        <div class="tj-section-heading">
                            <span class="sub-title active-shape2"> Xizmatlar</span>
                            <h2 class="title">Kompaniyaning butun dunyo bo'ylab transport va ekspeditorlik xizmatlari</h2>
{{--                            <p class="desc">--}}
{{--                                Quisque dignissim enim diam, eget pulvinar ex viverra id. Nulla a lobortis lectus,--}}
{{--                                id volutpat magna. Morbi consequat porttitor--}}
{{--                            </p>--}}
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-6">
                                <div class="tj-icon-box3 text-center">
                                    <i class="flaticon-delivery-van"></i>
                                    <h6 class="title">Avtomobilda yuk tashish</h6>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-6">
                                <div class="tj-icon-box3 text-center">
                                    <i class="flaticon flaticon-cargo"></i>
                                    <h6 class="title">Temir yo'l orqali yuk tashish</h6>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-6">
                                <div class="tj-icon-box3 text-center">
                                    <i class="flaticon-delivery-van"></i>
                                    <h6 class="title">Suyuq yuklarni tashish</h6>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-6">
                                <div class="tj-icon-box3 text-center">
                                    <i class="flaticon-delivery-van"></i>
                                    <h6 class="title">Xavfli yuklarni tashish</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                    <div class="tj-input-form" data-bg-image="assets/images/banner/form-shape.png">
                        <h4 class="title">Buyurtma berish</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-form">
                                    <label class="d-block"> Ismingiz:</label>
                                    <input
                                        type="text"
                                        id="yourName"
                                        name="name"
                                        placeholder="Ismingiz"
                                        required=""
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-form">
                                    <label class="d-block"> Elektron pochta:</label>
                                    <input
                                        type="text"
                                        id="yourEmail"
                                        name="name"
                                        placeholder=" Email"
                                        required=""
                                    />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-form">
                                    <label class="d-block"> Telifon:</label>
                                    <input type="text" id="yourPhone" name="name" placeholder="Telifon" required="" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tj-input-range">
                                    <div class="d-flex flex-wrap justify-content-between">
                                        <label> Masofa (miles):</label>
                                        <output class="output"></output>
                                    </div>
                                    <input
                                        class="tj-range-1"
                                        type="range"
                                        min="400"
                                        max="7000"
                                        step="10"
                                        value="800"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row select-bm">
                            <div class="col-md-6">
                                <div class="input-form tj-select">
                                    <label> Mahsulot:</label>
                                    <select class="nice-select">
                                        <option value="2">Tanlang</option>
                                        <option value="1" disabled>Optimized Cost</option>
                                        <option value="2">Delivery on Time</option>
                                        <option value="3">Cargo</option>
                                        <option value="4">Safety & Reliability</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-form tj-select">
                                    <label> Load:</label>
                                    <select class="nice-select">
                                        <option value="2">Select</option>
                                        <option value="1" disabled>Optimized Cost</option>
                                        <option value="2">Delivery on Time</option>
                                        <option value="3">Cargo</option>
                                        <option value="4">Safety & Reliability</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="tj-theme-button">
                            <button class="tj-submit-btn" type="submit" value="submit">
                                Submit Now <i class="fa-light fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== Feature Section End =========-->
<!--========== Faq Section Start ==============-->
<section class="tj-faq-section tj-faq-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tj-section-heading text-center">
                    <span class="sub-title active-shape"> Biz qanday ishlaymiz</span>
                    <h6 class="title">Bizning yetkazib berish xizmatimiz</h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6" data-sal="slide-left" data-sal-duration="800">
                <div class="tj-faq-left-content">
                    <div class="faq-image">
                        <img src="front_asset/images/slider/slider-2.jpg" alt="Image" />
                    </div>
                    <div class="faq-content">
                        <div class="faq-icon">
                            <i class="fa-regular fa-check"></i>
                        </div>
                        <div class="faq-text">
                            <h6 class="title">To'lov usullari:</h6>
                            <p>Naqd pul, akkreditiv va naqd pulsiz to'lov</p>
                        </div>
                    </div>
                    <div class="faq-content">
                        <div class="faq-icon">
                            <i class="fa-regular fa-check"></i>
                        </div>
                        <div class="faq-text">
                            <h6 class="title">Yetkazib berish usullari:</h6>
                            <p>Yon oynada batafsil tanishishingiz mumkin</p>

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
                                Korxona omboridan o'zini o'zi chiqarish?
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
                            <h2 class="accordion-header" id="headingTwo">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo"
                                    aria-expanded="false"
                                    aria-controls="collapseTwo"
                                >
                                Transport kompaniyalari?
                                </button>
                            </h2>
                            <div
                                id="collapseTwo"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingTwo"
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
                                Kuryer xizmatlari?
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
                                Yetkazib berish shartlarimiz?
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
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button
                                    class="accordion-button collapsed"
                                    type="button"
                                    data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive"
                                    aria-expanded="false"
                                    aria-controls="collapseFive"
                                >
                                    Methods are Supported What Payment?
                                </button>
                            </h2>
                            <div
                                id="collapseFive"
                                class="accordion-collapse collapse"
                                aria-labelledby="headingFive"
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
