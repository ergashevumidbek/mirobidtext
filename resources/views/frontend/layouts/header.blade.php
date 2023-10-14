<header class="tj-header-section" id="header-sticky">
    <div class="container">
        <div class="row"  style="margin-bottom: 5px;">
            <div class="col-lg-12">
                <div class="bg-color d-flex flex-wrap" >
                    <!-- Logo Area Start -->
                    <div class="logo-area">
                        <div class="logo-box">
                            <a href="{{route('/')}}"> <img src="assets/images/logo/logotip-removebg-preview.png" alt="Logo" style="width: 70px; object-fit: contain; margin-left: 60px;" /></a>
                        </div>
                    </div>
                    <!-- Logo Area End -->

                    <div class="header-content-area">
                        <!-- Topbar Section Start -->
                        <div class="header-topbar">
                            <div
                                class="topbar-content-area d-flex flex-wrap align-items-center justify-content-between"
                            >
                                <div class="header-content-left">
                                    <span> Dush-Shan 09:00 dan 18:00 gacha</span>
                                </div>
                            </div>
                        </div>
                        <!-- Topbar Section End-->

                        <!-- Header menu Start -->
                        <div class="header-content d-flex flex-wrap align-items-center justify-content-between">
                            <!-- Mainmenu Item Start -->
                            <div class="tj-main-menu d-lg-block d-none text-end" id="main-menu">
                                <ul class="main-menu">
                                    <li class="active current-menu-item">
                                        <a class="active" href="{{route('/')}}">Bosh sahifa</a>
                                    </li>

                                    <li class="active current-menu-item">
                                        <a class="" href="{{route('yangiliklar')}}">Yangiliklar</a>
                                    </li>

                                    <li class=" current-menu-item">
                                        <a href="{{route('mahsulotlar')}}"> Maxsulotlar</a>
                                    </li>

                                    <li class="current-menu-item">
                                        <a href="{{route('guvohnoma')}}"> Guvohnomalar</a>
                                    </li>

                                    <li class=" current-menu-item">
                                        <a href="{{route('yetkazib_berish')}}"> Yetkazib berish </a>
                                    </li>

                                    <li>
                                        <a href="{{route('biz_haqimizda')}}"> Biz haqimizda</a>
                                    </li>

                                    <li><a href="{{route('aloqa')}}">Aloqa</a></li>

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
                                        <li >
                                            <ul class="lang_lists">
                                                <li>
                                                    <a style="display: flex; color:#062e39;" 
                                                        ><img src="front_asset/images/flaguzb.jpg" style="border: 0.5px solid #cac6c6; margin-right: 4px; " alt="Icon"
                                                    /> Uzb</a>
                                                </li>
                                                <li class="active">
                                                    <a style="display: flex; color:#062e39;"
                                                        ><img src="front_asset/images/rusia.png" style="border: 0.5px solid #cac6c6; margin-right: 4px;" alt="Icon" 
                                                    /> Rus</a>
                                                </li>
                                            </ul>
                                        </li>
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
