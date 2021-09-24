<!DOCTYPE html>
<html>
   @include('layouts.login')
   <body>
      <div class="account-pages"></div>
      <div class="clearfix"></div>
      <div class="wrapper-page">
         <div class="text-center">
            <a href="/home" class="logo"><span>Ello<span>Admin</span></span></a>
            <h5 class="text-muted m-t-0 font-600">Admin Login Area</h5>
         </div>
         <div class="m-t-40 card-box">
            <div class="text-center">
               <h4 class="text-uppercase font-bold m-b-0">Sign In</h4>
            </div>
            <div class="p-20">
               <form method="POST" action="{{ route('login') }}">
                  @csrf
               <form class="form-horizontal m-t-20">
                  <div class="form-group">
                     <input  name="email" type="email" parsley-trigger="change" required placeholder="Enter email" class="form-control" id="email"  >
                  </div>
                  <div class="form-group">
                     <input id="password"  data-parsley-equalto="#password" required type="password" class="form-control" name="password" placeholder="Password" >
                  </div>
                  <div class="form-group">
                     <div class="col-xs-12">
                        <div class="checkbox checkbox-inverse">
                           <input id="pas" onclick="passwordShow()" type="checkbox" />
                           <label for="pas">Show Password</label>
                        </div>
                     </div>
                  </div>
                  <div class="form-group text-center m-t-30">
                     <div class="col-xs-12">
                        <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">Log In</button>
                     </div>
                  </div>
                  <div class="form-group m-t-30 m-b-0">
                     <div class="col-sm-12">
                        <a href="forget-password" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <!-- end card-box-->
      </div>
      <!-- end wrapper page -->
     <!-- Validation js (Parsleyjs) -->
     <script type="text/javascript" src="assets/plugins/parsleyjs/dist/parsley.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function() {
             $('form').parsley();
         });
      </script>
      <script>
         function passwordShow() {
         var x = document.getElementById("password");
         if (x.type === "password") {
             x.type = "text";
         } else {
             x.type = "password";
         }
         }
      </script>
   </body>
</html>