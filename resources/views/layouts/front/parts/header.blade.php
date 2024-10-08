<style>
    ul li a {
        font-size: 20px !important;
    }

    /* Custom CSS for RTL */
    #hero-carousel{
        direction: ltr !important;
        /* Keeps the carousel items from reversing direction */
    }


</style>
<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">{{ env('APP_NAME') }}</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">@lang('lang.home')</a></li>
                <li><a href="#about">@lang('lang.AboutUs')</a></li>
                <li><a href="#services">@lang('lang.Services')</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">@lang('lang.Team')</a></li>
                <li><a href="#contact">@lang('lang.Contact')</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
