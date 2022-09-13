   <div class="vertical-menu">

       <div data-simplebar class="h-100">

           <!--- Sidemenu -->
           <div id="sidebar-menu">
               <!-- Left Menu Start -->
               <ul class="metismenu list-unstyled" id="side-menu">
                   <li class="menu-title" key="t-menu">Menu</li>
                   <li>
                       <a href="{{ route('home') }}" class="waves-effect">
                           <i class="bx bx-home-alt"></i>
                           {{-- <span class="badge rounded-pill bg-info float-end">04</span> --}}
                           <span key="t-dashboards">Dashboard</span>
                       </a>
                   </li>

                   <li>
                       <a href="javascript: void(0);" class="has-arrow waves-effect">
                           <i class="bx bxs-group"></i>
                           <span key="t-contacts">Company</span>
                       </a>
                       <ul class="sub-menu" aria-expanded="false">
                           <li><a href="{{ route('add-company') }}" key="t-user-grid">Add Company</a></li>

                       </ul>
                   </li>

                   <li>
                       <a href="javascript: void(0);" class="has-arrow waves-effect">
                           <i class="bx bxs-user-detail"></i>
                           <span key="t-contacts">Customer</span>
                       </a>
                       <ul class="sub-menu" aria-expanded="false">

                           <li><a href="{{ route('add-customer') }}" key="t-user-grid">Add Customer(s)</a></li>

                       </ul>
                   </li>
                   <li>
                       <a href="javascript: void(0);" class="has-arrow waves-effect">
                           <i class="bx bx-cog"></i>
                           <span key="t-setting">Settings</span>
                       </a>
                       <ul class="sub-menu" aria-expanded="false">

                           <li><a href="{{ route('add-region') }}" key="t-user-grid">Add Region(s)</a></li>
                           <li><a href="{{ route('add-country') }}" key="t-user-grid">Add Country</a></li>
                           <li><a href="{{ route('add-currency') }}" key="t-user-grid">Add Currency Unit</a></li>
                           <li><a href="{{ route('add-charges') }}" key="t-user-grid">Charges List</a></li>

                       </ul>
                   </li>

                   <li>
                       <a href="javascript: void(0);" class="has-arrow waves-effect">
                           <i class="bx bxs-ship"></i>
                           <span key="t-ecommerce">Vendor</span>
                       </a>
                       <ul class="sub-menu" aria-expanded="false">
                           <li><a href="{{ route('add-vendor') }}" key="t-user-grid">Add Vendor</a></li>
                       </ul>
                   </li>
                   <li>
                       <a href="javascript: void(0);" class="has-arrow waves-effect">
                           <i class="bx bx-briefcase"></i>
                           <span key="t-ecommerce">Parcel</span>
                       </a>
                       <ul class="sub-menu" aria-expanded="false">
                           <li><a href="{{ route('add-parcel') }}" key="t-user-grid">Add Parcel</a></li>
                       </ul>
                   </li>

               </ul>
           </div>
           <!-- Sidebar -->
       </div>
   </div>
