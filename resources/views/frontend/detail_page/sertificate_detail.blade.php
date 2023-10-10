@extends('frontend.layouts.master')
@section('main_content')
 
        <!--========== breadcrumb Start ==============-->
        <section class="breadcrumb-wrapper" data-bg-image="assets/images/banner/breadcrumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-content">
                            <h1 class="breadcrumb-title text-center">Team Details</h1>
                            <div class="breadcrumb-link">
                                <span>
                                    <a href="index-2.html">
                                        <span>Home</span>
                                    </a>
                                </span>
                                >
                                <span>
                                    <span> Team</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--========== breadcrumb End ==============-->

        <!--========== Team details Start ==============-->
        <section class="tj-team-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="team-details-image">
                            <img src="assets/images/team/team-7.jpg" alt="Team" />
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="team-sidebar-inner">
                            <h4 class="title">George Clooney</h4>
                            <span> Land Transport</span>
                            <div class="team-social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, con adipiscing elit tiam convallis elit id impedie. Quisq
                                commodo simply free ornare tortor. If you are going to use a passage.
                            </p>
                            <h5 class="title">I help my clients stand out and they help me grow.</h5>
                            <div class="team-check d-flex align-items-center">
                                <ul class="list-gap">
                                    <li><i class="fa-light fa-check"></i> Best Quality Services</li>
                                    <li><i class="fa-light fa-check"></i> Meet the Deadlines</li>
                                </ul>
                                <ul class="list-gap">
                                    <li><i class="fa-light fa-check"></i> Best Quality Services</li>
                                    <li><i class="fa-light fa-check"></i> Meet the Deadlines</li>
                                </ul>
                            </div>
                            <div class="tj-team-progress-bar">
                                <label> Public Relations</label>
                                <div class="progress-bars">
                                    <div class="bar" data-size="70">
                                        <span class="perc"></span>
                                    </div>
                                </div>
                                <label> Clients Daily</label>
                                <div class="progress-bars">
                                    <div class="bar" data-size="80">
                                        <span class="perc"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center thumb-group">
                    <div class="col-lg-6">
                        <div class="team-thumb-content">
                            <h4 class="title">Certificates & Education</h4>
                            <p>Trage agile frameworks to provide a robust synopsis approaches to corporate</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team-thumb-image d-flex align-items-center justify-content-end">
                            <div class="thumb-1">
                                <img src="assets/images/team/thumb-1.png" alt="Team" />
                            </div>
                            <div class="thumb-1">
                                <img src="assets/images/team/thumb-1.png" alt="Team" />
                            </div>
                            <div class="thumb-1">
                                <img src="assets/images/team/thumb-1.png" alt="Team" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--========== Team details End ==============-->
@endsection
