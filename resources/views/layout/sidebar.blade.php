 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
     <!-- sidebar: style can be found in sidebar.less -->
     <section class="sidebar">
         <!-- Sidebar user panel -->
         <div class="user-panel">
             <div class="pull-left image">
                 <img src="{{ url('/') }}/img/avatar5.png" class="img-circle" alt="User Image">
             </div>
             <div class="pull-left info">
                 <!-- <p>{{ session()->get('user_name') }}</p> -->
                 <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
             </div>
         </div>

         <!-- /.search form -->
         <!-- sidebar menu: : style can be found in sidebar.less -->
         <ul class="sidebar-menu" data-widget="tree">`
             {{-- class="active treeview" --}}
             <li>
                 <a href="{{ route('login') }}">
                     <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                 </a>
             </li>
           
                 <li class="treeview">
                     <a href="#">
                         <i class="fa fa-book"></i>
                         <span>Blog</span>
                         <span class="pull-right-container">
                             <i class="fa fa-angle-left pull-right"></i>
                         </span>
                     </a>
                     <ul class="treeview-menu">
                         <li ><a href="{{route('blogs.index')}}"
                                ><i class="fa fa-book"></i> Blog list</a></li>
                         <li><a href="{{route('blogs.create')}}" ><i class="fa fa-book"></i> Create Blog </a>
                         </li>
                     </ul>
                 </li>
            
                 <li class="treeview">
                     <a href="#">
                         <i class="fa fa-clock-o"></i>
                         <span>Newsroom</span>
                         <span class="pull-right-container">
                             <i class="fa fa-angle-left pull-right"></i>
                         </span>
                     </a>
                     <ul class="treeview-menu">
                         <li><a href="{{route('newsroom.index')}}"><i class="fa fa-list"></i> News Room List </a></li>
                         <li><a href="{{route('newsroom.create')}}"><i class="fa fa-plus"></i> News Room Create </a></li>
                     </ul>
                </li>

                <li class="treeview">
                     <a href="#">
                         <i class="fa fa-clock-o"></i>
                         <span> Team </span>
                         <span class="pull-right-container">
                             <i class="fa fa-angle-left pull-right"></i>
                         </span>
                     </a>
                     <ul class="treeview-menu">
                         <li><a href="{{route('team.create')}}"><i class="fa fa-plus"></i> Create Member </a></li>
                         <li><a href="{{route('team.index')}}"><i  class="fa fa-list"></i> Member's List </a></li>
                     </ul>
                </li>
                <li class="treeview">
                     <a href="#">
                         <i class="fa fa-clock-o"></i>
                         <span> Home </span>
                         <span class="pull-right-container">
                             <i class="fa fa-angle-left pull-right"></i>
                         </span>
                     </a>
                     <ul class="treeview-menu">
                         <li><a href="{{route('testimonial.index')}}"><i class="fa fa-plus"></i> Create Testimonial </a></li>
                         
                     </ul>
                </li>
                <li class="treeview">
                     <a href="#">
                         <i class="fa fa-clock-o"></i>
                         <span> Career </span>
                         <span class="pull-right-container">
                             <i class="fa fa-angle-left pull-right"></i>
                         </span>
                     </a>
                     <ul class="treeview-menu">
                         <li><a href="{{route('career.create')}}"><i class="fa fa-plus"></i> Create Job </a></li>
                         <li><a href="{{route('career.index')}}"><i  class="fa fa-list"></i> Job List </a></li>
                     </ul>
                </li>
            
             <!-- <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Profile Edit</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> User Allocate </a></li>
            
          </ul>
        </li>   -->
         </ul>
     </section>
     <!-- /.sidebar -->
 </aside>
