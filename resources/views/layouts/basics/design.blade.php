<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
   <meta name="author" content="Coderthemes">
   <link rel="shortcut icon" href="assets/images/favicon.ico">
   <title>Ello Admin</title>
   <!--Morris Chart CSS -->
   <link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">

   <!-- App css -->
   <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
   <!-- Custom box css -->
   <link href="assets/plugins/custombox/dist/custombox.min.css" rel="stylesheet">
   <!-- DataTables -->
   <link href="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
   <link href="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
   <!-- Sweet Alert css -->
   <link href="assets/plugins/sweet-alert/sweetalert2.min.css" rel="stylesheet" type="text/css" />
   <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css" />
   <link type="text/css" href="{{asset('vertical/assets/plugins/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css')}}" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
         alpha/css/bootstrap.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />

   <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
   <!-- Notification css (Toastr) -->
   <link href="{{asset('assets/plugins/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body class="fixed-left" onbeforeunload="activeLoader()">
   <div class="loader" id="loader">
      <div class="nb-spinner"></div>
   </div>
   <!-- Begin page -->
   <div id="wrapper">
      <!-- Top Bar Start -->
      <div class="topbar">
         <!-- LOGO -->
         <div class="topbar-left">
            <a href="/home" class="logo"><span>Ello<span>Admin</span></span><i class="mdi mdi-layers"></i></a>
         </div>
         <!-- Button mobile view to collapse sidebar menu -->
         <div class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
               <!-- Page title -->
               <ul class="nav navbar-nav list-inline navbar-left">
                  <li class="list-inline-item">
                     <button class="button-menu-mobile open-left">
                        <i class="mdi mdi-menu"></i>
                     </button>
                  </li>
                  <li class="list-inline-item">
                     <h4 class="page-title">Admin Dashboard</h4>
                  </li>
               </ul>
               <nav class="navbar-custom">
                  <ul class="list-unstyled topbar-right-menu float-right mb-0">

                  </ul>
               </nav>
            </div>
            <!-- end container -->
         </div>
         <!-- end navbar -->
      </div>
      <!-- Top Bar End -->
      <!-- Main Sidebar -->
      @include('layouts.basics.sidebar')
      <!-- Main Sidebar -->
      <!-- Content Wrapper -->
      @yield('content')
      <!-- Content Wrapper -->
      <!-- Footer -->
      @include('layouts.basics.footer')
      <!-- Footer -->
      <!-- jQuery  -->
      <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
      <script src="{{asset('assets/js/custom.js')}}"></script>
      <script src="{{asset('assets/js/jquery.min.js')}}"></script>
      <script src="{{asset('assets/js/popper.min.js')}}"></script>
      <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('assets/js/detect.js')}}"></script>
      <script src="{{asset('assets/js/fastclick.js')}}"></script>
      <script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
      <script src="{{asset('assets/js/waves.js')}}"></script>
      <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
      <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
      <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
      <script src="{{asset('assets/pages/jquery.inbox.js')}}"></script>
      <script src="{{asset('assets/plugins/custombox/dist/custombox.min.js')}}"></script>
      <script src="{{asset('assets/plugins/custombox/dist/legacy.min.js')}}"></script>
      <!-- Required datatable js -->
      <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
      <script src="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
      <!-- App js -->
      <script src="{{asset('assets/js/jquery.core.js')}}"></script>
      <script src="{{asset('assets/js/jquery.app.jss')}}"></script>
      <!-- Modal-Effect -->
      <script src="assets/plugins/custombox/dist/custombox.min.js"></script>
      <script src="assets/plugins/custombox/dist/legacy.min.js"></script>
      <!-- Validation js (Parsleyjs) -->
      <script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script>
      <!-- Sweet Alert Js  -->
      <script src="assets/plugins/sweet-alert/sweetalert2.min.js"></script>
      <script src="assets/pages/jquery.sweet-alert.init.js"></script>
      <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
      <!-- Toastr js -->
      <script src="{{asset('assets/plugins/toastr/toastr.min.js')}}"></script>


      @if (session()->has('success'))
      <script>
         toastr.success("{{ session('success') }}");
      </script>
      {{Session::forget('success')}}
      @endif
      @if (session()->has('error'))
      <script>
         toastr.error("{{ session('error') }}");
         sessionStorage.clear("error");
      </script>
      {{Session::forget('error')}}
      @endif
      </script>
</body>

</html>