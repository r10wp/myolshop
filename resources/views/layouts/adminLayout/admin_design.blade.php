<!DOCTYPE html>
<html lang="en">
<head>
  <title>Matrix Admin</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/backend_css/bootstrap-responsive.min.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/backend_css/uniform.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/backend_css/fullcalendar.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/backend_css/matrix-style.css')}}" />
  <link rel="stylesheet" href="{{ asset('css/backend_css/matrix-media.css')}}" />
  <link rel="stylesheet" href="{{ asset('fonts/backend_fonts/css/font-awesome.css')}}"  />
  <link rel="stylesheet" href="{{ asset('css/backend_css/jquery.gritter.css')}}" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="{{ asset('css/backend_css/select2.css')}}" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
</head>
<body>
  <!--Header-part-->
  @include('layouts.adminLayout.admin_header')
  <!--close-top-serch-->
  <!--sidebar-menu-->
  @include('layouts.adminLayout.admin_sidebar')
  <!--sidebar-menu-->
  <!--main-container-part-->
  @yield('content')
  <!--end-main-container-part-->
  <!--Footer-part-->
  @include('layouts.adminLayout.admin_footer')
  <!--end-Footer-part-->

  {{-- <script src="{{ asset('js/backend_js/excanvas.min.js')}}"></script>
  <script src="{{ asset('js/backend_js/jquery.min.js')}}"></script>
  <script src="{{ asset('js/backend_js/jquery.ui.custom.js')}}"></script>
  <script src="{{ asset('js/backend_js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('js/backend_js/jquery.flot.min.js')}}"></script>
  <script src="{{ asset('js/backend_js/jquery.flot.resize.min.js')}}"></script>
  <script src="{{ asset('js/backend_js/jquery.peity.min.js')}}"></script>
  <script src="{{ asset('js/backend_js/fullcalendar.min.js')}}"></script>
  <script src="{{ asset('js/backend_js/matrix.js')}}"></script>
  <script src="{{ asset('js/backend_js/matrix.dashboard.js')}}"></script>
  <script src="{{ asset('js/backend_js/jquery.gritter.min.js')}}"></script>
  <script src="{{ asset('js/backend_js/matrix.interface.js')}}"></script>
  <script src="{{ asset('js/backend_js/matrix.chat.js')}}"></script>
  <script src="{{ asset('js/backend_js/jquery.validate.js')}}"></script>
  <script src="{{ asset('js/backend_js/matrix.form_validation.js')}}"></script>
  <script src="{{ asset('js/backend_js/jquery.wizard.js')}}"></script>
  <script src="{{ asset('js/backend_js/jquery.uniform.js')}}"></script>
  <script src="{{ asset('js/backend_js/select2.min.js')}}"></script>
  <script src="{{ asset('js/backend_js/matrix.popover.js')}}"></script>
  <script src="{{ asset('js/backend_js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('js/backend_js/matrix.tables.js')}}"></script>

  <script type="text/javascript">
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage (newURL) {
        // if url is empty, skip the menu dividers and reset the menu selection to default
        if (newURL != "") {
            // if url is "-", it is this page -- reset the menu:
            if (newURL == "-" ) {
                resetMenu();
            }
            // else, send page to designated URL
            else {
              document.location.href = newURL;
            }
        }
    }

  // resets the menu selection upon entry to this page:
  function resetMenu() {
     document.gomenu.selector.selectedIndex = 2;
  }
  </script> --}}

  {{-- Form Validation --}}
  <script src="{{ asset('js/backend_js/jquery.min.js')}}"></script>
  <script src="{{ asset('js/backend_js/jquery.ui.custom.js')}}"></script>
  <script src="{{ asset('js/backend_js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('js/backend_js/jquery.uniform.js')}}"></script>
  <script src="{{ asset('js/backend_js/select2.min.js')}}"></script>
  <script src="{{ asset('js/backend_js/jquery.validate.js')}}"></script>
  <script src="{{ asset('js/backend_js/matrix.js')}}"></script>
  <script src="{{ asset('js/backend_js/matrix.form_validation.js')}}"></script>

  {{-- Form Validation --}}
  <script src="{{ asset('js/backend_js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('js/backend_js/matrix.tables.js')}}"></script>

  {{-- Data Table --}}
  <script src="{{ asset('js/backend_js/matrix.popover.js')}}"></script>

  {{-- Sweet Alert--}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
</body>
</html>
