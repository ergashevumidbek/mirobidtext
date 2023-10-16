@extends('frontend.layouts.master')
@section('main_content')
    <!--========== blog details Start ==============-->
    
    <section class="tj-project-details my-5">
        <div class="container">
            <div class="row">
                @foreach ($mirobidProduct as $value)
                <div class="col-lg-12">
                    <div class="project-details-wrapper">
                        <div class="tj-project-widget tj-project-image">
                            <a href="project-details.html">
                                <img src="{{asset('storage/'.$value->pro_banner_img)}}" alt="Project"
                            /></a>
                            <div class="active-introduction">
                                <h5 class="project_title">{{$value->product_name}}</h5>
                                <div class="project-client">
                                    <ul class="list-gap">
                                        <li><span> Client: </span> Nguyen, Shane</li>
                                        <li><span> Category: </span><a href="#"> Logistics</a></li>
                                        <li><span> Date: </span> 05 October, 2023</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tj-project-widget project-content-area">
                            <h3>
                                <a class="title-link" href="project-details.html">
                                    Here to Know About This Project</a
                                >
                            </h3>
                            {{$value->main_content}}
                        </div>
                        <div class="tj-project-widget row align-items-center">
                            <div class="col-lg-5">
                                <div class="check-image">
                                    <img src="assets/images/project/project-8.jpg" alt="Project" />
                                    <div class="tj-video-area text-center">
                                        <div class="tj-video-popup">
                                            <div class="circle pulse video-icon">
                                                <img class="venobox popup-videos-button" src="{{asset('storage/'.$value->pro_content_img)}}" alt="">
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="check-list">
                                    <h3 class="title">{{$value->pro_short_content}}</h3>
                                    <p>
                                        {{$value->pro_label}}
                                    </p>
                                    <ul class="list-gap">
                                        <li>
                                            <i class="fa-light fa-check"></i> Those who do not know how to pursue
                                        </li>
                                        <li><i class="fa-light fa-check"></i> Pleasure rationally encounter</li>
                                        <li>
                                            <i class="fa-light fa-check"></i> Consequences that are extremely
                                            painful.
                                        </li>
                                        <li>
                                            <i class="fa-light fa-check"></i> Nor again is there anyone who loves or
                                            pursues
                                        </li>
                                        <li><i class="fa-light fa-check"></i> Service Guarantee</li>
                                        <li><i class="fa-light fa-check"></i> Excellence in Healthcare every</li>
                                    </ul>
                                    <p>
                                        The languages only differ in their grammar, their pronu nciation and their
                                        most common words. sometimes by accident, sometimes on purpose. European
                                        languages are members of the same family european languages are members of
                                        the same family.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             @endforeach
               
            </div>
        </div>
    </section>
    <!--========== blog details End ==============-->
@endsection
