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
                class="nav-link {{ Route::currentRouteName() == 'Project.indexs' || Route::currentRouteName() == 'Project.show' ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('Project.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="menu-item text-truncate" data-i18n="User">@lang('lang.Projects')</span>
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
                class="nav-link {{ Route::currentRouteName() == 'ProjectContact.index' || Route::currentRouteName() == 'aboutus.show' ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('ProjectContact.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="menu-item text-truncate" data-i18n="User">@lang('lang.ProjectsContacts')</span>
                </a>
            </li>
            <li class="nav-link {{ Route::currentRouteName() == 'Review.index' ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('Review.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="menu-item text-truncate" data-i18n="User">@lang('lang.ProjectReview')</span>
                </a>
            </li>
            <li class="nav-link {{ Route::currentRouteName() == 'GeneralReview.index' ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('GeneralReview.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-user">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="menu-item text-truncate" data-i18n="User">@lang('lang.Review')</span>
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
                    <li
                        class="nav-link {{ Route::currentRouteName() == 'aboutus.index' || Route::currentRouteName() == 'aboutus.show' ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{ route('aboutus.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                            <span class="menu-item text-truncate" data-i18n="User">@lang('lang.AboutUs')</span>
                        </a>
                    </li>
                    <li
                        class="nav-link {{ Route::currentRouteName() == 'Branch.index' || Route::currentRouteName() == 'BranchEmployee.create' || Route::currentRouteName() == 'Branch.create' ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{ route('Branch.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                            <span class="menu-item text-truncate" data-i18n="User">@lang('lang.Branches')</span>
                        </a>
                    </li>
                    <li
                        class=" nav-link {{ Route::currentRouteName() == 'Slider.index' || Route::currentRouteName() == 'Slider.create' || Route::currentRouteName() == 'Slider.update' ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{ route('Slider.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                            <span class="menu-item text-truncate" data-i18n="List">@lang('lang.LandingPage')</span></a>
                    </li>
                    <li class=" nav-link {{ Route::currentRouteName() == 'Blog.createFront' ? 'active' : '' }}"><a
                            class="d-flex align-items-center" href="{{ route('Blog.createFront') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                            <span class="menu-item text-truncate" data-i18n="List">@lang('lang.Blog')</span></a>
                    </li>
                    <li
                        class=" nav-link {{ Route::currentRouteName() == 'Type.index' || Route::currentRouteName() == 'Type.create' || Route::currentRouteName() == 'Type.update' ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{ route('Type.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                            <span class="menu-item text-truncate" data-i18n="List">@lang('lang.ProjectType')</span></a>
                    </li>
                    <li
                        class=" nav-link {{ Route::currentRouteName() == 'Infrastructure.index' || Route::currentRouteName() == 'Infrastructure.create' || Route::currentRouteName() == 'Infrastructure.update' ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{ route('Infrastructure.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                            <span class="menu-item text-truncate" data-i18n="List">@lang('lang.Infrastructure')</span></a>
                    </li>
                    <li
                        class=" nav-link {{ Route::currentRouteName() == 'Unit.index' || Route::currentRouteName() == 'Unit.create' || Route::currentRouteName() == 'Unit.update' ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{ route('Unit.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                            <span class="menu-item text-truncate" data-i18n="List">@lang('lang.Units')</span></a>
                    </li>
                    <li
                        class=" nav-link {{ Route::currentRouteName() == 'Element.index' || Route::currentRouteName() == 'Element.create' || Route::currentRouteName() == 'Element.update' ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{ route('Element.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                            <span class="menu-item text-truncate" data-i18n="List">@lang('lang.UnitElements')</span></a>
                    </li>
                    <li
                        class=" nav-link {{ Route::currentRouteName() == 'Philosophy.index' || Route::currentRouteName() == 'Philosophy.create' || Route::currentRouteName() == 'Philosophy.update' ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{ route('Philosophy.index') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle">
                                <circle cx="12" cy="12" r="10"></circle>
                            </svg>
                            <span class="menu-item text-truncate" data-i18n="List">@lang('lang.OurPhilosophy')</span></a>
                    </li>


                </ul>
            </li>

        </ul>
    </div>
</div>
<!-- END: Main Menu-->
