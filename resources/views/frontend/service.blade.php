@extends('frontend.layouts.master')
@section('main_content')
    <!--========== breadcrumb Start ==============-->
    <section style="margin-bottom: 60px">
        
    </section>
<!--========== breadcrumb End ==============-->

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
                        <img src="front_asset/images/slider/slider-4.jpg" alt="Image" />
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
