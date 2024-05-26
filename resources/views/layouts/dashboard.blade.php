<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
@include('components.dashboard.head')

<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   menu-collapsed fixed-navbar"  data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('components.dashboard.nav')
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    @include('components.dashboard.sidbar')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
          <div class="content-header row">
          </div>
          <div class="content-body">
              
            @yield('content') 
            
          </div>
      </div>
  </div>
  <div class="sidenav-overlay"></div>
  <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
   @include('components.dashboard.footer')
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
   @include('components.dashboard.script')

</body>
<!-- END: Body-->

</html>
