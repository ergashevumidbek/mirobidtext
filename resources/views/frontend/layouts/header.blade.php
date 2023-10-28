
<header class="tj-header-section" id="header-sticky" style="margin-top: -20px;">
    <div class="container">
        <div class="row"  style="margin-bottom: 5px;">
            <div class="col-lg-12">
                <div class="bg-color d-flex flex-wrap" >
                    <!-- Logo Area Start -->
                    <div class="logo-area">
                        <div class="logo-box">
                            <a href="{{route('/')}}"> <img src="{{asset('front_asset/images/logo/logotip.jpg')}}" alt="Logo" style="width: 70px; object-fit: contain; margin-left: 60px;" /></a>
                        </div>
                    </div>
                    <!-- Logo Area End -->

                    <div class="header-content-area">
                        <!-- Topbar Section Start -->
{{--                        <div class="header-topbar">--}}
{{--                            <div--}}
{{--                                class="topbar-content-area d-flex flex-wrap align-items-center justify-content-between"--}}
{{--                            >--}}
{{--                                <div class="header-content-left">--}}
{{--                                    <span> Dush-Shan 09:00 dan 18:00 gacha</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <!-- Topbar Section End-->

                        <!-- Header menu Start -->
                        <div class="header-content d-flex flex-wrap align-items-center justify-content-between">
                            <!-- Mainmenu Item Start -->
                            <div class="tj-main-menu d-lg-block d-none text-end" id="main-menu">
                                <ul class="main-menu" id="myDIV">
                                    <li class="current-menu-item">
                                        <a class="news active" href="{{route('/')}}">{{__('message.home')}}</a>
                                    </li>
                                    <li class="current-menu-item">
                                        <a class="news" href="{{route('yangiliklar')}}">{{__('message.news')}}</a>
                                    </li>
                                    <li class=" current-menu-item">
                                        <a class="news" href="{{route('mahsulotlar')}}">{{__('message.product')}}</a>
                                    </li>

                                    <li class="current-menu-item">
                                        <a class="news" href="{{route('guvohnoma')}}">{{__('message.gost')}}</a>
                                    </li>

                                    <li class=" current-menu-item">
                                        <a class="news" href="{{route('yetkazib_berish')}}"> {{__('message.service')}} </a>
                                    </li>

                                    <li>
                                        <a class="news" href="{{route('biz_haqimizda')}}"> {{__('message.about_uc')}}</a>
                                    </li>

                                    <li><a class="news" href="{{route('aloqa')}}">{{__('message.contact')}}</a></li>
                                    <li class="menu-item-has">
                                        <a href="#"> {{__('message.lang')}}</a>
                                        <ul class="list-gap sub-menu-list">
                                            <li><a href="{{url('/uz')}}">Uzbek</a></li>
                                            <li><a href="{{url('/ru')}}">Rus</a></li>
                                        </ul>
                                    </li>
                                    {{-- <li>
                                        <a href="#" style="color: #062e39;"> <img src="front_asset\images\flaguzb.jpg" alt="" width="10" height="10"> Uz</a>
                                    </li>

                                    <li>
                                        <a href="#" style="color: #062e39;"> <img src="front_asset\images\rusian flag.png" alt="" width="10" height="10">Rus</a>
                                    </li> --}}
                                </ul>
                            </div>
                            <!-- Mainmenu Item End -->

                            <div class="header-menu-select d-flex align-items-center justify-content-end">
                                <div class="header-language" style="margin-right: 20px">
                                    <ul class="languages dropdown">
                                        <li class="activated" style="color:#062e39;"></li>
{{--                                        <li >--}}
{{--                                            <select name="" id=""  class="changeLang">--}}
{{--                                                <option value="uz" >Uzb</option>--}}
{{--                                                <option value="ru" >Rus</option>--}}
{{--                                            </select>--}}
{{--                                            <ul class="lang_lists">--}}
{{--                                                <li>--}}

{{--                                                </li>--}}
{{--                                                <li class="active">--}}

{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
                                    </ul>
                                </div>
                                <div class="tj-header-button d-none d-lg-block">

                                </div>
                                <div class="tj-hambagur-icon d-lg-none">
                                    <a class="canva_expander nav-menu-link menu-button" href="#">
                                        <span class="dot1"></span>
                                        <span class="dot2"></span>
                                        <span class="dot3"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Header end End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> --}}
<script>

</script>
