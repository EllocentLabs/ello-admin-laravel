<div class="left side-menu">
   <div class="sidebar-inner slimscrollleft">
      <!-- User -->
      <div class="user-box">
         <div class="user-img">
            <img src="{{asset('assets/images/users/download.png')}}" alt="user-img" title="{{auth()->user()->name}}" class="rounded-circle img-thumbnail img-responsive">
            <div class="user-status online"><i class="mdi mdi-adjust"></i></div>
         </div>
         <h5><a href="#">{{auth()->user()->name}}</a> </h5>
         <ul class="list-inline">
            <li class="list-inline-item">
               <a href="/admin-profile">
                  <i class="mdi mdi-settings"></i>
               </a>
            </li>
            <li class="list-inline-item">
               <a form method="POST" href="logout" class="text-custom">
                  @csrf
                  <i class="mdi mdi-power"></i>
               </a>
            </li>
         </ul>
      </div>
      <!-- End User -->

      <div class="clearfix"></div>
   </div>
</div>
<!-- Left Sidebar End -->