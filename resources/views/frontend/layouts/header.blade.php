
<header class="tj-header-section" id="header-sticky" style="margin-top: -20px;">
    <div class="container">
        <div class="row"  style="margin-bottom: 5px;">
            <div class="col-lg-12">
                <div class="bg-color d-flex flex-wrap" >
                    <!-- Logo Area Start -->
                    <div class="logo-area">
                        <div class="">
                            <a href="{{route('/')}}"> <img src="{{asset('front_asset/images/logo/mirobod1.jpg')}}" alt="Logo" style="width: 270px; object-fit: contain; margin-left: 0px;" /></a>
                        </div>
                    </div>
                    <!-- Logo Area End -->

                    <div class="header-content-area">
                        <!-- Header menu Start -->
                        <div class="header-content d-flex flex-wrap align-items-center justify-content-between">
                            <!-- Mainmenu Item Start -->
                            <div class="tj-main-menu d-lg-block d-none text-start" id="main-menu">
                                <ul class="main-menu" id="myDIV">
                                    <li class="current-menu-item">
                                        <a class="news " href="{{route('/')}}">Bosh sahifa</a>
                                    </li>
                                    <li class="current-menu-item">
                                        <a class="news" href="{{route('yangiliklar')}}">Yangiliklar</a>
                                    </li>
                                    <li class=" menu-item-has">
                                        <a class="news" href="{{route('mahsulotlar')}}">Mahsulotlar</a>
                                        <ul class="list-gap sub-menu-list">
                                            <li><a href="{{route('toqilmagan_mato')}}">To'qilmagan mato</a></li>
                                            <li><a href="{{route('vafli_mato')}}">Vafli mato</a></li>
                                            <li><a href="{{route('teri_sochiqlar')}}"> Terri sochiqlar</a></li>
                                            <li><a href="{{route('vata_prima')}}"> Vata prima</a></li>
                                            <li><a href="{{route('supurgilar')}}"> Supurgilar</a></li>
                                            <li><a href="{{route('doka')}}"> Doka</a></li>
                                        </ul>
                                    </li>
                                    <li class=" current-menu-item">
                                        <a class="news" href="{{route('yetkazib_berish')}}"> Xizmatlar </a>
                                    </li>

                                    <li>
                                        <a class="news"> Kompaniya</a>
                                        <ul class="list-gap sub-menu-list">
{{--                                            <li><a href="project.html">Galereya</a></li>--}}
                                            <li><a href="{{route('guvohnoma')}}">Gost</a></li>
                                            <li><a href="{{route('biz_haqimizda')}}"> Kompaniya haqida</a></li>
                                        </ul>
                                    </li>

                                    <li><a class="news" href="{{route('aloqa')}}">Kantakt</a></li>
                                    <li class="menu-item-has">
                                        <a href="#"><i class="fa fa-globe" aria-hidden="true"></i></a>
                                        <ul class="list-gap sub-menu-list">
                                            <li><a href="{{url('/uz')}}"><img src="{{asset('front_asset\images\flaguzb.jpg')}}" alt="" width="30" height="20"> Uzbek</a></li>
                                            <li><a href="{{url('/ru')}}"><img src="{{asset('front_asset\images\rusia.png')}}" alt="" width="30" height="20"> Rus</a></li>
                                        </ul>
                                    </li>
                                    <li style="font-size: 9px;">
                                        <a class=" text-mute" href="{{route('biz_haqimizda')}}"><i class="fa fa-phone" aria-hidden="true"></i>+998-90-275-0007 </a>
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
