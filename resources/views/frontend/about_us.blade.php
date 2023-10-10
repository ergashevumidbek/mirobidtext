@extends('frontend.layouts.master')
@section('main_content')

        <!--========== breadcrumb Start ==============-->
        <section class="breadcrumb-wrapper" data-bg-image="assets/images/banner/breadcrumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h1 class="breadcrumb-title text-center">About Us</h1>
                            <div class="breadcrumb-link">
                                <span>
                                    <a href="index-2.html">
                                        <span>Home</span>
                                    </a>
                                </span>
                                >
                                <span>
                                    <span> About</span>
                                </span>
                            </div>
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
                                <span class="sub-title active-shape"> Transportation Company</span>
                                <h2 class="title">We Provide Full Range Global Logistics</h2>
                                <p class="desc">
                                    Quisque dignissim enim diam, eget pulvinar ex viverra id. Nulla a lobortis lectus,
                                    id volutpat magna. Morbi consequat porttitor fermentum. Nulla vestibulum tincidunt
                                    viverra. Vestibulum accumsan
                                </p>
                            </div>
                            <div class="tj-icon-box">
                                <div class="ab-text d-flex align-items-center">
                                    <div class="ab-icon">
                                        <img src="assets/images/icon/global.svg" alt="Icon" />
                                    </div>
                                    <div class="ab-title">
                                        <h5 class="title">Worldwide Service</h5>
                                    </div>
                                </div>
                                <p class="desc">
                                    Lorem ipsum is simply velit anod<br />
                                    ipas aliquet enean quis.
                                </p>
                            </div>
                            <div class="tj-icon-box">
                                <div class="ab-text d-flex align-items-center">
                                    <div class="ab-icon">
                                        <img src="assets/images/icon/winner.svg" alt="Icon" />
                                    </div>
                                    <div class="ab-title">
                                        <h5 class="title">Certified & Awward Winner</h5>
                                    </div>
                                </div>
                                <p class="desc">
                                    Lorem ipsum is simply velit anod<br />
                                    ipas aliquet enean quis.
                                </p>
                            </div>
                            <div class="ab-button-box d-flex align-items-center">
                                <div class="tj-theme-btn">
                                    <a class="tj-primary-btn" href="contact.html">
                                        Read More <i class="flaticon-right-1"></i>
                                    </a>
                                </div>
                                <div class="right-text">
                                    <img src="assets/images/icon/auother.svg" alt="Image" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-sal="slide-right" data-sal-duration="800">
                        <div class="about-group-image d-flex flex-wrap align-items-start flex-column">
                            <div class="tj-icon-box2 text-center">
                                <div class="number-icon">
                                    <i class="flaticon-in-person"></i>
                                </div>
                                <div class="about-number">
                                    <div class="tj-count"><span class="odometer" data-count="1700">0</span></div>
                                    <p class="desc">Satisfied Client</p>
                                </div>
                            </div>
                            <div class="image-box">
                                <img class="p-z-idex" src="assets/images/about/ab-1.jpg" alt="Image" />
                            </div>
                            <img class="group-1 p-z-idex" src="assets/images/about/ab-2.jpg" alt="Image" />
                            <img class="group-shape" src="assets/images/about/ab-shape.png" alt="Image" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=========== About Section End =========-->
@endsection
