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

    <!--========== Contact Page Start ==============-->
    <section class="tj-contact-page">
        <div class="container">
            <div class="row tj-contact-box">
                <div class="col-lg-4 col-md-6">
                    <div class="tj-contact-list">
                        <div class="contact-icon">
                            <i class="flaticon-phone-call"></i>
                        </div>
                        <div class="contact-header">
                            <span> Bog'lanish uchun</span>
                            <a href="tel:+998-(90)-275-0007"> +998-(90)-275-0007</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tj-contact-list">
                        <div class="contact-icon">
                            <i class="flaticon-email-3"></i>
                        </div>
                        <div class="contact-header">
                            <span> Elektron pochta</span>
                            <a href="mirobid.tex@mail.ru"> mirobid.tex@mail.ru</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tj-contact-list">
                        <div class="contact-icon">
                            <i class="flaticon-map"></i>
                        </div>
                        <div class="contact-header">
                            <span> Bizning manzil</span>


                            <p> Namangan shahri, Polikovskaya ko'chasi 42-uy</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-7" style="margin-top: -318px;">
                    <div class="tj-section-heading">
                        <span class="sub-title active-shape"></span>
                        <h3 class="title">Biz bilan bog'lanish</h3>
                    </div>
                    <div class="tj-animate-form d-flex align-items-center">
                        <form class="animate-form">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form__div">
                                        <input type="text" class="form__input" placeholder=" " />
                                        <label class="form__label">Ism</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form__div">
                                        <input type="text" class="form__input" placeholder=" " />
                                        <label class="form__label">Familya</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form__div">
                                        <input type="text" class="form__input" placeholder=" " />
                                        <label class="form__label"> Email Address</label>
                                    </div>
                                </div>


                                <div class="col-lg-12">
                                    <div class="form__div">
                                        <input type="text" class="form__input textarea" placeholder=" " />
                                        <label class="form__label"> Habar</label>
                                    </div>
                                </div>
                            </div>
                            <div class="tj-theme-button">
                                <button class="tj-primary-btn contact-btn" type="submit" value="submit">
                                    Yuborish <i class="flaticon-right-1"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1505.1669242451258!2d71.63268082842232!3d41.01795149094921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bb4b4c7a66b28d%3A0x2811f87a6d9aa4d6!2z0J7QntCeICLQnNC40YDQvtCx0LjQtCDQotC10LrRgdGC0LjQu9GMIg!5e0!3m2!1sru!2s!4v1697540610982!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== Contact Page End ==============-->
@endsection
