 @extends('admin.index')
 @section('content')
 <!--=========================*
           Main Section
   *===========================-->
   <div class="vz_main_container">
        <div class="vz_main_content">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card card-icon rt_icon_card d-flex mb-mob-4 text-center">
                        <div class="card-body">
                            <span class="heading_icon">
                                <img src="{{asset("images/admin/icon-bg.png")}}" alt="Icon">
                                <i class="feather ft-users"></i>
                            </span>
                            <div class="icon_specs">
                                <p>کاربران جدید</p>
                                <span>57893</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-icon rt_icon_card mb-mob-4 text-center">
                        <div class="card-body">
                            <span class="heading_icon">
                                <img src="{{asset("images/admin/icon-bg.png")}}" alt="Icon">
                                <i class="feather ft-shopping-cart"></i>
                            </span>
                            <div class="icon_specs">
                                <p>مجموع سفارشات</p>
                                <span>670</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-icon rt_icon_card mb-0 text-center">
                        <div class="card-body">
                            <span class="heading_icon">
                                <img src="{{asset("images/admin/icon-bg.png")}}" alt="Icon">
                                <i class="feather ft-briefcase"></i>
                            </span>
                            <div class="icon_specs">
                                <p>پروژه های فعال</p>
                                <span>9466</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 mt-4 stretched_card">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-right">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                    <i class="ion-ios-more-outline"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:void(0);" class="dropdown-item">گزارش هفتگی</a>
                                    <a href="javascript:void(0);" class="dropdown-item">گزارش ماهانه</a>
                                    <a href="javascript:void(0);" class="dropdown-item">اقدام</a>
                                    <a href="javascript:void(0);" class="dropdown-item">تنظیمات</a>
                                </div>
                            </div>
                            <h4 class="card_title mb-3">نظرات اخیر</h4>
                            <div class="table-responsive">
                                <table class="table table-centered table-hover mb-0">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="media recent_activity mt-2">
                                                <img class="mr-3 rounded-circle" src="{{asset("images/admin/google.png")}}" width="50" alt="Activity Image">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">آرش خادملو
                                                        <small class="font-weight-normal d-block mt-1">18 خرداد 1398 11:28 غروب

                                                        </small>
                                                    </h6>
                                                    <span class="mt-2 d-block">بسیاری از نشریات دسکتاپ</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table-action text-center">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="ion-ios-more-outline"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">تنظیمات</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">اقدام</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media recent_activity mt-2">
                                                <img class="mr-3 rounded-circle" src="{{asset("images/admin/google.png")}}" width="50" alt="Activity Image">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">آرش خادملو
                                                        <small class="font-weight-normal d-block mt-1">18 خرداد 1398 11:28 غروب

                                                        </small>
                                                    </h6>
                                                    <span class="mt-2 d-block">بسیاری از نشریات دسکتاپ</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table-action text-center">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="ion-ios-more-outline"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">تنظیمات</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">اقدام</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media recent_activity mt-2">
                                                <img class="mr-3 rounded-circle" src="{{asset("images/admin/google.png")}}" width="50" alt="Activity Image">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">آرش خادملو
                                                        <small class="font-weight-normal d-block mt-1">18 خرداد 1398 11:28 غروب

                                                        </small>
                                                    </h6>
                                                    <span class="mt-2 d-block">بسیاری از نشریات دسکتاپ</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="table-action text-center">
                                            <div class="dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="ion-ios-more-outline"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">تنظیمات</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">اقدام</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div> <!-- end table-responsive-->

                        </div> <!-- end card body-->
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 mt-4 stretched_card">
                    <div class="card">
                        <div class="card-body">
                            <div class="card_title d-flex flex-wrap justify-content-between align-items-center">
                                <div>
                                    <h4 class="card_title mb-0">آمار ترافیک روزانه</h4>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center">
                                        <form>
                                            <div class="form-group w-80 m-0">
                                                <select class="form-control form-control-sm">
                                                    <option>ماه</option>
                                                    <option>دیروز</option>
                                                    <option>امروز</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive mt-10">
                                <table class="table table-hover table-center">
                                    <thead>
                                    <tr>
                                        <td class="w-70">آواتار</td>
                                        <td class="w-30p">نام</td>
                                        <td>شماره سفارش</td>
                                        <td>فروش</td>
                                        <td>شرکت</td>
                                        <td>تاریخ ایجاد</td>
                                        <td>رتبه بندی</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="avatar avatar-md">
                                                <img src="{{asset("images/admin/user.png")}}" alt="Image" class="img-responsive">
                                            </div>
                                        </td>
                                        <td class="text-nowrap">
                                            <div class="fw-600 ">آرش خادملو </div>
                                        </td>
                                        <td>547</td>
                                        <td>100 تومان</td>
                                        <td>شرکت فرضی</td>
                                        <td>12-06-2019</td>
                                        <td class="fs-10 text-warning text-nowrap">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="avatar avatar-md">
                                                <img src="{{asset("images/admin/user.png")}}" alt="User" class="img-responsive">
                                            </div>
                                        </td>
                                        <td class="text-nowrap">
                                            <div class="fw-600 ">آرش خادملو</div>
                                        </td>
                                        <td>547</td>
                                        <td>100 تومان</td>
                                        <td>شرکت فرضی</td>
                                        <td>12-06-2019</td>
                                        <td class="fs-10 text-warning text-nowrap">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="avatar avatar-md">
                                                <img src="{{asset("images/admin/user.png")}}" alt="User" class="img-responsive">
                                            </div>
                                        </td>
                                        <td class="text-nowrap">
                                            <div class="fw-600 ">آرش خادملو</div>
                                        </td>
                                        <td>547</td>
                                        <td>100 تومان</td>
                                        <td>شرکت فرضی</td>
                                        <td>12-06-2019</td>
                                        <td class="fs-10 text-warning text-nowrap">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="avatar avatar-md">
                                                <img src="{{asset("images/admin/user.png")}}" alt="User" class="img-responsive">
                                            </div>
                                        </td>
                                        <td class="text-nowrap">
                                            <div class="fw-600 ">آرش خادملو</div>
                                        </td>
                                        <td>547</td>
                                        <td>100 تومان</td>
                                        <td>شرکت فرضی</td>
                                        <td>12-06-2019</td>
                                        <td class="fs-10 text-warning text-nowrap">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 mt-4 stretched_card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <h4 class="card_title">تیکت های پشتیبانی</h4>
                                <div>
                                    <i class="feather ft-more-vertical text-muted"></i>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <!-- Projects table -->
                                <table class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">شناسه تیکت</th>
                                        <th scope="col">عنوان</th>
                                        <th scope="col">تیکت ایجاد شده</th>
                                        <th scope="col">ایجاد شده توسط</th>
                                        <th scope="col">پیشرفت</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">
                                            RBT4UB
                                        </th>
                                        <td>
                                            سیستم کار نمی کند
                                        </td>
                                        <td>
                                            14-06-2019
                                        </td>
                                        <td>
                                            آرش خادملو
                                        </td>
                                        <td>
                                            <div>
                                                <span class="mb-2">60%</span>
                                                <div>
                                                    <div class="progress h-2p">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            UGR78BH
                                        </th>
                                        <td>
                                            سیستم کار نمی کند
                                        </td>
                                        <td>
                                            14-06-2019
                                        </td>
                                        <td>
                                            آرش خادملو
                                        </td>
                                        <td>
                                            <div>
                                                <span class="mb-2">80%</span>
                                                <div>
                                                    <div class="progress h-2p">
                                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            BHS35MJ
                                        </th>
                                        <td>
                                            سیستم کار نمی کند
                                        </td>
                                        <td>
                                            14-06-2019
                                        </td>
                                        <td>
                                            آرش خادملو
                                        </td>
                                        <td>
                                            <div>
                                                <span class="mb-2">30%</span>
                                                <div>
                                                    <div class="progress h-2p">
                                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            NK89BY
                                        </th>
                                        <td>
                                            سیستم کار نمی کند
                                        </td>
                                        <td>
                                            14-06-2019
                                        </td>
                                        <td>
                                            آرش خادملو
                                        </td>
                                        <td>
                                            <div>
                                                <span class="mb-2">40%</span>
                                                <div>
                                                    <div class="progress h-2p">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            NYS96NU
                                        </th>
                                        <td>
                                            سیستم کار نمی کند
                                        </td>
                                        <td>
                                            14-06-2019
                                        </td>
                                        <td>
                                            آرش خادملو
                                        </td>
                                        <td>
                                            <div>
                                                <span class="mb-2">70%</span>
                                                <div>
                                                    <div class="progress h-2p">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 stretched_card mt-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <h4 class="card_title">فعالیت کاربر</h4>
                                <div>
                                    <i class="feather ft-more-vertical text-muted"></i>
                                </div>
                            </div>
                            <ul class="bullet-line-list">
                                <li>
                                    <p class="text-muted mb-2">24 دی 1398</p>
                                    <p class="mb-2">کاربر با موفقیت وارد سایت شد </p>
                                </li>
                                <li>
                                    <p class="text-muted mb-2">24 دی 1398</p>
                                    <p class="mb-2">کاربر با موفقیت وارد سایت شد </p>
                                </li>
                                <li>
                                    <p class="text-muted mb-2">24 دی 1398</p>
                                    <p class="mb-2">کاربر با موفقیت وارد سایت شد </p>
                                </li>
                                <li>
                                    <p class="text-muted mb-2">24 دی 1398</p>
                                    <p class="mb-0">کاربر با موفقیت وارد سایت شد </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--=========================*
                    Footer
       *===========================-->
        <footer>
            <div class="footer-area">
                <p>© کپی رایت 2019. تمامی حقوق محفوظ است. بومی سازی توسط آرش خادملو</p>
            </div>
        </footer>
        <!--=========================*
                End Footer
       *===========================-->
    </div>
    <!--=========================*
            End Main Section
   *===========================-->
   @endsection
