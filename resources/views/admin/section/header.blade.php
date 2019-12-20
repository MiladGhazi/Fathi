<!--=========================*
               Sidebar
   *===========================-->
   <nav class="vz_navbar bg-dark">
    <div class="navbar-wrapper">
        <div class="navbar-content scroll-div">
            <div class="vz_navigation">
                <ul class="sidebar nav flex-column">
                    <li class="active"><a class="nav-link text-center" href="javascript:void(0);" data-nav="dashboard"><i class="feather ft-home"></i><span>داشبورد</span></a></li>
                    <li><a class="nav-link text-center" href="javascript:void(0);" data-nav="news"><i class="feather ft-gitlab"></i><span>اخبار</span></a></li>
                </ul>
                <div class="sidebar_content">
                    <div class="vz_sidebar_link dashboard active">
                        <ul class="nav vz_inner_nav">
                            <li class="nav-item menu_title">
                                <label class="text-white">داشبورد</label>
                            </li>
                            <li class="nav-item active">
                                <a href="index.html" class="nav-link"><i class="feather ft-activity mr-2"></i>اطلاعات کلی</a>
                            </li>
                        </ul>
                    </div>
                    <div class="vz_sidebar_link news">
                        <ul class="nav vz_inner_nav">
                            <li class="nav-item menu_title">
                                <label>اخبار</label>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="list.html"><i class="menu_icon ti-alert"></i><span>لیست</span></a></li>
                            <li class="nav-item"><a class="nav-link" href="create.html"><i class="menu_icon ti-layout-accordion-separated"></i><span>افزودن</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
<!--=========================*
           End Sidebar
*===========================-->

<!--=========================*
           Header
*===========================-->
<header class="vz_main_header flex-grow-1 top_nav bg-danger">
    <div class="container-fluid d-flex flex-row h-100 align-items-center">
        <!--=========================*
                          Logo
            *===========================-->
        <div class="text-center rt_nav_wrapper d-flex align-items-center">
            <a class="nav_logo rt_logo" href="index.html"><img src="{{asset("images/admin/logo-dark.svg")}}" alt="logo"/></a>
            <a class="nav_logo nav_logo_mob" href="index.html"><img src="{{asset("images/admin/mobile-logo.svg")}}" alt="logo"/></a>

        </div>
        <!--=========================*
                   End Logo
       *===========================-->
        <div class="nav_wrapper_main d-flex align-items-center justify-content-between flex-grow-1">
            <a class="vz_mobile_menu_icon mr-3 d-md-flex d_none_sm" id="vz_mobileCollapseIcon" href="javascript:void(0)"><span></span></a>
            <form class="search-field d-md-flex d_none_sm" action="#">
                <div class="form-group mb-0">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="feather ft-search"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="جستجو در اینجا ...">
                    </div>
                </div>
            </form>
            <ul class="navbar-nav navbar-nav-right mr-0 ml-auto">

                <!--==================================*
                         Profile Menu
                *====================================-->
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <span class="profile_sec">

                            <span class="profile_name">
                                <span class="hi_name text-white">سلام،</span>
                                آرش خادملو. <i class="feather ft-chevron-down"></i>
                            </span>
                            <img src="{{asset("images/admin/user.jpg")}}" alt="profile"/>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown pt-2"
                         aria-labelledby="profileDropdown">
                        <a class="dropdown-item">
                            <i class="ti-user text-dark mr-3"></i> پروفایل
                        </a>
                        <a class="dropdown-item">
                            <i class="ti-settings text-dark mr-3"></i> تنظیمات حساب
                        </a>
                        <a class="dropdown-item">
                            <i class="feather ft-lock text-dark mr-3"></i>
                            به روز رسانی رمز عبور
                        </a>
                    </div>
                </li>
                <!--==================================*
                         End Profile Menu
                *====================================-->
                <li class="nav-item d_none_sm">
                    <a class="nav-link logout_link" href="login.html">
                        <span class="text-white">خروج</span> <i class="feather ft-power text-white"></i>
                    </a>
                </li>
            </ul>
            <!--=========================*
                       Mobile Menu
           *===========================-->
            <span class="d-lg-none">
                <a class="vz_mobile_menu_icon ml-3" id="vz_mobileCollapseIconMobile" href="javascript:"><span></span></a>
            </span>
            <!--=========================*
                   End Mobile Menu
           *===========================-->
        </div>
    </div>
</header>
<!--=========================*
           End Header
*===========================-->
