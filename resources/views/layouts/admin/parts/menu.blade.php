<!-- BEGIN: Main Menu-->
<style>
    .navbar-header {
        display: flex;
        align-items: center;
        justify-content: center;
        height: auto;
        /* Adjust height based on content */
    }

    .navbar-brand {
        display: block;
        /* Block level for the link */
        max-height: 100px;
        /* Set a max height to control image size */
        width: 100%;
        /* Ensure it takes full width */
        overflow: hidden;
        /* Prevent overflow */
    }

    .responsive-logo {
        max-width: 100%;
        /* Scale the image to fit the container width */
        max-height: 100%;
        /* Scale the image to fit the container height */
        height: auto;
        /* Maintain aspect ratio */
        width: auto;
        /* Maintain aspect ratio */
        display: block;
        /* Ensures no inline spacing */
        margin: auto;
        /* Centers the image */
    }
</style>
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('app-assets/images/logo/Deep Programming logo.png') }}" class="responsive-logo"
                        alt="{{ env('APP_NAME') }}">
                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                    <i class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary" data-feather="disc"
                        data-ticon="disc"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">@lang('lang.Statistics')</span><i
                    data-feather="more-horizontal"></i>
            </li>
            <li class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}"><a class="d-flex align-items-center"
                    href="{{ route('home') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-circle">
                        <circle cx="12" cy="12" r="10"></circle>
                    </svg><span class="menu-item text-truncate" data-i18n="Analytics">@lang('lang.Dashboard')</span></a>
            </li>

        </ul>
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">@lang('lang.Menu')</span><i
                    data-feather="more-horizontal"></i>
            </li>
            <li
                class="nav-link {{ Route::currentRouteName() == 'carousel.indexs' || Route::currentRouteName() == 'carousel.show' ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('carousel.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="menu-item text-truncate" data-i18n="User">@lang('lang.carousels')</span>
                </a>
            </li>
            <li
                class="nav-link {{ Route::currentRouteName() == 'aboutus.index' || Route::currentRouteName() == 'aboutus.show' ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('aboutus.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="menu-item text-truncate" data-i18n="User">@lang('lang.AboutUs')</span>
                </a>
            </li>

            <li
                class="nav-link {{ Route::currentRouteName() == 'team.index' || Route::currentRouteName() == 'team.show' ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('team.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="menu-item text-truncate" data-i18n="User">@lang('lang.Team')</span>
                </a>
            </li>

            <li
                class="nav-link {{ Route::currentRouteName() == 'service.index' || Route::currentRouteName() == 'service.show' ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('service.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="menu-item text-truncate" data-i18n="User">@lang('lang.Services')</span>
                </a>
            </li>

            <li
                class="nav-link {{ Route::currentRouteName() == 'contactus.index' || Route::currentRouteName() == 'contactus.show' ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('contactus.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="menu-item text-truncate" data-i18n="User">@lang('lang.ContactUs')</span>
                </a>
            </li>
            <li
                class="nav-link {{ Route::currentRouteName() == 'social_links.index' || Route::currentRouteName() == 'social_links.show' ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('social_links.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="menu-item text-truncate" data-i18n="User">@lang('lang.social_links')</span>
                </a>
            </li>
            <li
                class="nav-link {{ Route::currentRouteName() == 'userMessage.index' || Route::currentRouteName() == 'userMessage.show' ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('userMessage.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="menu-item text-truncate" data-i18n="User">@lang('lang.userMessage')</span>
                </a>
            </li>


            <li class="nav-item has-sub">
                <a class="d-flex align-items-center" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-settings">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path
                            d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                        </path>
                    </svg>
                    <span class="menu-title text-truncate" data-i18n="User">@lang('lang.Settings')</span>
                </a>
                <ul class="menu-content">
                    {{-- <li
                        class="nav-link {{ Route::currentRouteName() == 'aboutus.index' || Route::currentRouteName() == 'aboutus.show' ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{ route('aboutus.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                            <span class="menu-item text-truncate" data-i18n="User">@lang('lang.AboutUs')</span>
                        </a>
                    </li> --}}



                </ul>
            </li>

        </ul>
    </div>
</div>
<!-- END: Main Menu-->
