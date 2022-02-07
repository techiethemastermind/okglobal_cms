<!-- NAVIGATION -->
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
    <div class="container-fluid">

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse"
            aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="/" target="_blank">
            <img src="@if(!empty(config('nav_logo'))) 
                    {{ asset('storage/logos/'.config('nav_logo')) }}
                @else 
                    {{asset('/assets/img/logo.svg')}}
                @endif" class="navbar-brand-img mx-auto" alt="...">
        </a>

        <!-- User (xs) -->
        <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">

                <!-- Toggle -->
                <a href="#" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-sm avatar-online">
                        <img src="{{ asset('assets/img/avatars/profiles/avatar-1.jpg') }}" class="avatar-img rounded-circle" alt="...">
                    </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                    <a href="javascript:void(0)" class="dropdown-item">Profile</a>
                    <a href="{{ route('admin.settings.general') }}" class="dropdown-item">Settings</a>
                    <hr class="dropdown-divider">
                    <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                </div>

            </div>

        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidebarCollapse">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
                <div class="input-group input-group-rounded input-group-merge">
                    <input type="search" class="form-control form-control-rounded form-control-prepended"
                        placeholder="Search" aria-label="Search">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fe fe-search"></span>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">
                        <i class="fe fe-home"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.page.index') }}">
                        <i class="fe fe-book"></i> Pages
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.blog.index') }}">
                        <i class="fe fe-clipboard"></i> Blogs
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.contact.index') }}">
                        <i class="fe fe-calendar"></i> Contacts
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.subscribe.index') }}">
                        <i class="fe fe-mail"></i> Subscribers
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('admin.menu.index') }}">
                        <i class="fe fe-grid"></i> Navigations
                    </a>
                </li>
                <li class="nav-item d-md-none">
                    <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                        <span class="fe fe-bell"></span> Notifications
                    </a>
                </li>
            </ul>

            <!-- Divider -->
            <hr class="navbar-divider my-3">

            <!-- Heading -->
            <h6 class="navbar-heading">
                Setting
            </h6>

            <!-- Navigation -->
            <ul class="navbar-nav mb-md-4">
                <li class="nav-item">
                    <a class="nav-link" href="#sidebarBasics" data-toggle="collapse" role="button" aria-expanded="false"
                        aria-controls="sidebarBasics">
                        <i class="fe fe-settings"></i> Settings
                    </a>
                    <div class="collapse " id="sidebarBasics">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item ">
                                <a href="{{ route('admin.settings.general') }}" class="nav-link">
                                    General
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a href="#" class="nav-link">
                                    Others
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

            <!-- Push content down -->
            <div class="mt-auto"></div>

            <!-- User (md) -->
            <div class="navbar-user d-none d-md-flex" id="sidebarUser">

                <!-- Icon -->
                <a href="#sidebarModalActivity" class="navbar-user-link" data-toggle="modal">
                    <span class="icon">
                        <i class="fe fe-bell"></i>
                    </span>
                </a>

                <!-- Dropup -->
                <div class="dropup">

                    <!-- Toggle -->
                    <a href="#" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-sm avatar-online">
                            <span class="avatar-title rounded-circle">AD</span>
                        </div>
                    </a>

                    <!-- Menu -->
                    <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                        <a href="{{ route('admin.profile') }}" class="dropdown-item">Profile</a>
                        <a href="{{ route('admin.settings.general') }}" class="dropdown-item">Settings</a>
                        <hr class="dropdown-divider">
                        <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                    </div>

                </div>

                <!-- Icon -->
                <a href="#sidebarModalSearch" class="navbar-user-link" data-toggle="modal">
                    <span class="icon">
                        <i class="fe fe-search"></i>
                    </span>
                </a>

            </div>


        </div> <!-- / .navbar-collapse -->

    </div>
</nav>
