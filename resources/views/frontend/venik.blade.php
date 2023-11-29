@extends('frontend.layouts.master')
@section('main_content')
    <!--========== blog details Start ==============-->
    <!--========== breadcrumb Start ==============-->
    <section class="breadcrumb-wrapper" data-bg-image="{{asset('assets/images/slider/slider-1.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h1 class="breadcrumb-title text-center">Bizning maxsulot</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tj-project-details">
        <div class="container">
            <div class="row">
                @foreach ($mirobidProduct as $value)
                    <div class="col-lg-12">
                        <div class="project-details-wrapper">
                            <div class="tj-project-widget row align-items-center">
                                <div class="col-lg-7">
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <img style="width: 529px; height: 529px; object-fit: contain;" src="{{asset('storage/'.$value->pro_content_img_1)}}" alt="Project" />
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <img style="width: 529px; height: 529px; object-fit: contain;" src="{{asset('storage/'.$value->pro_content_img_2)}}" alt="Project" />
                                        </div>
                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                            <img style="width: 529px; height: 529px; object-fit: contain;" src="{{asset('storage/'.$value->pro_content_img_3)}}" alt="Project" />
                                        </div>
                                        <div class="tab-pane fade" id="pills-contacts" role="tabpanel" aria-labelledby="pills-contacts-tab">
                                            <img style="width: 529px; height: 529px; object-fit: contain;" src="{{asset('storage/'.$value->pro_content_img_4)}}" alt="Project" />
                                        </div>
                                    </div>
                                    <ul class="nav nav-pills mb-3 d-flex" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button style="outline-style: none; border-style: none;" class="" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                                <img style="width: 119px; height: 119px" src="{{asset('storage/'.$value->pro_content_img_1)}}" alt="Project" />
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button style="outline-style: none; border-style: none;" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                                <img style="width: 119px; height: 119px" src="{{asset('storage/'.$value->pro_content_img_2)}}" alt="Project" />
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button style="outline-style: none; border-style: none;"  id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                                                <img style="width: 119px; height: 119px" src="{{asset('storage/'.$value->pro_content_img_3)}}" alt="Project" />
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button style="outline-style: none; border-style: none;"  id="pills-contacts-tab" data-bs-toggle="pill" data-bs-target="#pills-contacts" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                                                <img style="width: 119px; height: 119px" src="{{asset('storage/'.$value->pro_content_img_4)}}" alt="Project" />
                                            </button>
                                        </li>
                                    </ul>

                                </div>
                                <div class="col-lg-5">
                                    <div class="check-list">
                                        <h3 class="title">{{$value->product_name}}</h3>
                                        <p>
                                            {!! $value->pro_label !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @if($value->product_name == 'Веники')
                                <div class="tj-project-widget row align-items-center d-flex justify-content-between">
                                    <div class="col-lg-3 col-md-6 wow fadeInUp my-3" data-wow-delay="0.3s">
                                        <div class="package-item">
                                            <div class="overflow-hidden" style="height: 280px;">
                                                <img class="img-fluid" src="{{asset('front_asset/images/venik/venik-3x.jpg')}}" alt="" >
                                            </div>

                                            <div class="text-start p-4">
                                                <h6 class="text-start">Веник 3-х лучевой нитка</h6>
                                                <ul >
                                                    <li style="list-style: none;"><strong>Вес</strong> от 300-350 гр </li>
                                                    <li style="list-style: none;"><strong>Высота </strong>85-90 см</li>
                                                    <li style="list-style: none;"><strong>Высота Ручки</strong>45 см</li>
                                                    <li style="list-style: none;"><strong>Высота Метлы</strong>40 см</li>
                                                    <li style="list-style: none;"><strong>Рабочая лопатка </strong>25-30 см</li>
                                                    <li style="list-style: none;"><strong>Объем</strong>300 шт/м3</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 wow fadeInUp my-3" data-wow-delay="0.3s">
                                        <div class="package-item">
                                            <div class="overflow-hidden" style="height: 280px;">
                                                <img class="img-fluid" src="{{asset('front_asset/images/venik/4x.jpg')}}" alt="" >
                                            </div>

                                            <div class="text-start p-4">
                                                <h6 class="text-start">Веник 4-лучевой 5-прошивной</h6>
                                                <ul >
                                                    <li style="list-style: none;"><strong>Вес</strong> от 500-600 гр </li>
                                                    <li style="list-style: none;"><strong>Высота </strong>90-100 см</li>
                                                    <li style="list-style: none;"><strong>Высота Ручки</strong>45 см </li>
                                                    <li style="list-style: none;"><strong>Высота Метлы</strong> 40 см </li>
                                                    <li style="list-style: none;"><strong>Рабочая лопатка </strong>30-35 см </li>
                                                    <li style="list-style: none;"><strong>Объем</strong>230 шт/м3</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 wow fadeInUp my-3" data-wow-delay="0.3s">
                                        <div class="package-item">
                                            <div class="overflow-hidden" style="height: 280px;">
                                                <img class="img-fluid" src="{{asset('front_asset/images/venik/5x.jpg')}}" alt="" >
                                            </div>

                                            <div class="text-start p-4">
                                                <h6 class="text-start">Веник 5-х лучевой проволока</h6>
                                                <ul >
                                                    <li style="list-style: none;"><strong>Вес</strong> от 250-300 гр  </li>
                                                    <li style="list-style: none;"><strong>Высота </strong>85-90 см</li>
                                                    <li style="list-style: none;"><strong>Высота Ручки</strong>45 см</li>
                                                    <li style="list-style: none;"><strong>Высота Метлы</strong>40 см</li>
                                                    <li style="list-style: none;"><strong>Рабочая лопатка </strong>25-35 см </li>
                                                    <li style="list-style: none;"><strong>Объем</strong>280 шт/м3</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 wow fadeInUp my-3" data-wow-delay="0.3s">
                                        <div class="package-item">
                                            <div class="overflow-hidden" style="height: 280px;">
                                                <img class="img-fluid" src="{{asset('front_asset/images/venik/venik-moldovsky.jpg')}}" alt="" >
                                            </div>

                                            <div class="text-start p-4">
                                                <h6 class="text-start"> Веник  2-прошивной</h6>
                                                <ul >
                                                    <li style="list-style: none;"><strong>Вес</strong> от  250-300 гр  </li>
                                                    <li style="list-style: none;"><strong>Высота </strong> 80-85 см </li>
                                                    <li style="list-style: none;"><strong>Высота Ручки</strong>45 см</li>
                                                    <li style="list-style: none;"><strong>Высота Метлы</strong>35 см </li>
                                                    <li style="list-style: none;"><strong>Рабочая лопатка </strong>22-28 см </li>
                                                    <li style="list-style: none;"><strong>Объем</strong>300 шт/м3</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="details-tags-box">
                                <div class="share-link">
                                    <span> Поделиться статьей</span>
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                </div>
                                <div class="tags-link">
                                    <a href="mirobidlogistic.uz">Логистика</a>
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
