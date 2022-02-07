<div class="d-flex no-print" id="wrapper">

    <!-- Sidebar -->
    <div class="border-right geo-border-primary" id="sidebar-wrapper">
        <center><img src="/img/logo.png" class="m-3"></center>
        <br><br>
        <div>

                <a href="/" class="list-group-item @if (Request::is('homes*')) left-bar @endif">
                    Home
                </a>

                <a href="/about_us/create" class="list-group-item @if (Request::is('about_us*')) left-bar @endif">
                    About Us
                </a>

                <a href="/coins" class="list-group-item @if (Request::is('coins*')) left-bar @endif">
                    Coins
                </a>

                <a href="/identity_coins/create" class="list-group-item @if (Request::is('identity_coins*')) left-bar @endif">
                    Identity Coin and Purchase MYID Coins
                </a>
                
                <!--<a href="/roadmap/identity_coins" class="list-group-item @if (Request::is('identity_coins.roadmaps*')) left-bar @endif">-->
                <!--    Road Map for My Identity Coin-->
                <!--</a>-->

                <a href="/money_projects/create" class="list-group-item @if (Request::is('money_projects*')) left-bar @endif">
                    Money project
                </a>

                <a href="/partnerships" class="list-group-item @if (Request::is('partnership*')) left-bar @endif">
                    Partnership
                </a>

                <a href="/download_applications/create" class="list-group-item @if (Request::is('download_applications*')) left-bar @endif">
                    Download Apps
                </a>

                <a href="/youtubes/create" class="list-group-item @if (Request::is('youtubes*')) left-bar @endif">
                    Videos
                </a>

                <a href="/videos" class="list-group-item @if (Request::is('videos*')) left-bar @endif">
                    Youtube
                </a>

                <a href="/social-medias/create" class="list-group-item @if (Request::is('social-medias*')) left-bar @endif">
                    Social Media
                </a>

                <!-- <a href="/useful-links" class="list-group-item @if (Request::is('useful_links*')) left-bar @endif">
                    Useful Link
                </a> -->

                <a href="/news_letters" class="list-group-item @if (Request::is('news-letters*')) left-bar @endif">
                    Newsletter
                </a>

                <a href="/news_letter_settings/create" class="list-group-item @if (Request::is('news_letter_settings*')) left-bar @endif">
                    Setting
                </a>

                <a href="/owners" class="list-group-item @if (Request::is('owner*')) left-bar @endif">
                    The Team
                </a>

                <a href="/contact_us/create" class="list-group-item @if (Request::is('contact_us*')) left-bar @endif">
                    Contact Us Settings
                </a>
                
                <a href="/inquiry/contact_us/index" class="list-group-item @if (Request::is('contact_us.inquiries*')) left-bar @endif">
                    Inqury
                </a>
                
                <a href="/events" class="list-group-item @if (Request::is('events*')) left-bar @endif">
                    Registered User in Events
                </a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

   <!-- Page Content -->
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg geo-primary">
            <button class="navbar-brand navbar-toggler text-light" type="button" id="menu-toggle">
                <i class="fa fa-bars"></i>
            </button>
            <button class="navbar-toggler text-light" type="button" data-toggle="collapse" data-target="#navbar_main" aria-expanded="false">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbar_main">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link text-light"><b>{{$title}}</b></a>
                    </li>
                </ul>
                <span class="my-2 my-lg-0 pointer" data-toggle="popover" id="my-account">
                    <img src="{{Auth::user()->employee->image ?? '/img/no_image.png'}}" class="profile-img">
                    {{Auth::user()->name ?? 'No Name'}}
                </span>
            </div>
        </nav>


        <div class="container-fluid p-3">
            @yield('content')
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<script type="text/javascript">
    $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });

        $('#my-account').popover({
            placement : 'bottom',
            html : true,
            content : `
                <div id="my-account-drop">
                <span class="smaller">WELCOME!</span>
                    <a href="/users/{{Auth::user()->employee_id}}" class="row pointer">
                        <div class="pt-2 pb-2 col-3">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="pt-2 pb-2 col-9 ">
                            My Account
                        </div>
                    </a>
                    
                    <a href="/logout" class="row pointer">
                        <div class="pt-2 pb-2 col-3">
                            <i class="fa fa-sign-out-alt"></i>
                        </div>
                        <div class="pt-2 pb-2 col-9 ">
                            Logout
                        </div>
                    </a>
                </div>
            `
        });

        $('body').on('click', function (e) {
            $('[data-toggle=popover]').each(function () {
                if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('#my-account-drop').has(e.target).length === 0) {
                    $(this).popover('hide');
                }
            });
        });
</script>



