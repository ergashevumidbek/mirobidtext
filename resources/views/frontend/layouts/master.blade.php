<!DOCTYPE html>
<html lang="zxx">


    @include('frontend.layouts.head')
    <body>
        <!-- Preloader start -->

        <!-- Preloader end -->
{{--         @include('frontend.layouts.loader')--}}
        <!-- Offcanvas Area Start-->

        <!-- Offcanvas Area End-->
        @include('frontend.layouts.mobile_canvas')
        <!--========== Header Section Start ==============-->
            @include('frontend.layouts.header')
        <!--========== Header Section End ==============-->

       @yield('main_content')

        <!--=========== Footer Section Start =========-->
            @include('frontend.layouts.footer')
        <!--=========== Footer Section End =========-->



       @include('frontend.layouts.script')
    </body>

</html>
