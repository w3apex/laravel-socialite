<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-right mb-0">

            <li class="d-none d-lg-block">
                <form class="app-search">
                    <div class="app-search-box dropdown">
                        <div class="input-group">
                            <input type="search" class="form-control" placeholder="Search..." id="top-search">
                            <div class="input-group-append">
                                <button class="btn" type="submit">
                                    <i class="fe-search"></i>
                                </button>
                            </div>
                        </div> 
                    </div>
                </form>
            </li>

            <li class="dropdown d-inline-block d-lg-none">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-search noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-lg dropdown-menu-right p-0">
                    <form class="p-3">
                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    </form>
                </div>
            </li>

            <li class="dropdown d-none d-lg-inline-block">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#">
                    <i class="fe-maximize noti-icon"></i>
                </a>
            </li>

            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img class="rounded-circle avatar-lg" src="{{ (!empty(Auth::user()->avatar)) ? asset(Auth::user()->avatar) : asset('backend/assets/images/users/default.png')}}" alt="profile-image">
                    <span class="pro-user-name ml-1">
                        {{Auth::user()->first_name}} <i class="mdi mdi-chevron-down"></i> 
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <a href="{{route('profiles.index')}}" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    {{-- <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings"></i>
                        <span>Settings</span>
                    </a> --}}
                    <div class="dropdown-divider"></div>

                    <!-- Authentication-->
                    <a href="{{route('logout')}}" class="dropdown-item notify-item" 
                            onclick="event.preventDefault();
                                document.getElementById('admin-logout-form').submit();">
                        <i class="fe-log-out mr-1"></i>
                        <span>{{ __('Log Out') }}</span>
                    </a>

                </div>
                <!-- Authentication -->
                <form id="admin-logout-form" action="{{route('logout')}}" method="POST">
                    @csrf
                </form>
            </li>

        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="{{route('dashboard.view')}}" class="logo logo-light text-center">
                <span class="logo-sm">
                    <img src="" alt="" height="55">
                </span>
                <span class="logo-lg">
                    <img src="" alt="" height="60">
                </span>
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>