<header id="page-topbar" >
    <div class="navbar-header text-light " style="background-color: dark;"  >
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ ('/') }}" class="logo logo-dark">
                    {{-- <span class="logo-sm">
                        <img src="assets/images/logoBFS.png" alt="" height="50">
                    </span> --}}
                    <span class="logo-lg">
                        <img src="{{asset('assets/images/logoBFS.png')}}" alt="" height="58">
                    </span>
                </a>

                {{-- <a href="{{ ('/') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logoBFS.png" alt="" >
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logoBFS.png" alt="" >
                    </span>
                </a> --}}
            </div>

            {{-- <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button> --}}



            <div class="dropdown dropdown-mega d-none d-lg-block ms-2">

            </div>
        </div>

        <div class="d-flex">

            <div class="dropdown d-inline-block d-lg-none ms-2">
               
            </div>

            <div class="dropdown d-inline-block">


            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">

            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect color-light"  data-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect"  id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{asset('assets/images/users/admin.png')}}"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ms-1 text-dark" key="t-henry">{{ Auth::user()->name }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    @php
                    $id = Auth::user()->id;
                    @endphp
                    <a class="dropdown-item" href="{{ url('profile/'.$id) }}">
                        <i class="bx bx-user font-size-16 align-middle me-1">

                        </i>
                        <span key="t-profile">Profile</span>
                    </a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bx bx-power-off font-size-16 align-middle me-1 text-danger">
                        </i>
                        <span key="t-logout">Logout</span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </div>
            </div>



        </div>
    </div>

</header>
