<!DOCTYPE html>
<html lang="en">
  <head>
    @include("backend.layouts.head")
  </head>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"> </div>
      <div class="dot"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
        @include("backend.layouts.header")
      <!-- Page Header Ends-->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        @include("backend.layouts.sidebar")
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          @yield('main_content')
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        {{-- @include('layouts.footer') --}}
      </div>
    </div>
        @include('backend.layouts.script')
  </body>
</html>
