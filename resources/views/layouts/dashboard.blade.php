<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  
<!-- BEGIN: Head-->
<head>
  @include('components.dashboard.head')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   menu-collapsed fixed-navbar"  data-menu="vertical-menu-modern" data-col="2-columns">

  @if (session()->has('success'))
  <div id="session-success" style="position: fixed; top: 5rem; right: 5rem; width: fit-content; z-index: 100">
    <div class="alert alert-success p-2"  role="alert" >
        {{ session()->get('success') }}
    </div>
  </div>
  @endif

    <!-- BEGIN: Header-->
    @include('components.dashboard.nav')
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    @include('components.dashboard.sidebar')
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
   
   <script>
    setTimeout(() => {
      $('#session-success').hide();
    }, 3000);
   </script>

   @stack('scripts')
   
</body>
<!-- END: Body-->

</html>
