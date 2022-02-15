<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/') }}public/assets/backend/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="{{ asset('/') }}public/assets/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet"
        href="{{ asset('/') }}public/assets/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('/') }}public/assets/backend/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/') }}public/assets/backend/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="{{ asset('/') }}public/assets/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('/') }}public/assets/backend/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('/') }}public/assets/backend/plugins/summernote/summernote-bs4.min.css">


    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset('/') }}public/assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('/') }}public/assets/backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('/') }}public/assets/backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <script type="text/javascript">
        function deleteMsg() {
            var msg = confirm('Are You Sure To Delete This');
            if (msg) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!--            <div class="preloader flex-column justify-content-center align-items-center">
                            <img class="animation__shake" src="{{ asset('/') }}public/assets/backend/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
                        </div>-->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">



                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">


                    <div class="btn-group">
                        <button type="button" class="btn btn-default">
                            {{ session()->get('admin_name') }}
                        </button>
                        <button type="button" class="btn btn-default dropdown-toggle dropdown-icon"
                            data-toggle="dropdown">
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ URL::to('/admin-logout') }}">Logout</a>
                        </div>
                    </div>

                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ URL::to('/dash') }}" class="brand-link text-center">
                <img width="150" src="{{ asset('/') }}public/assets/backend/image/new-logo1.png" alt="" />
                <!--<span class="brand-text font-weight-light " style=""> <b style="color: #298bc5">Food</b> Procurement</span>-->

            </a>

            <!-- Sidebar -->
            <div class="sidebar">




                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                                 with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="{{ URL::to('/dash') }}" class="nav-link ">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p style="font-size:12px ">
                                    ড্যাশবোর্ড
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p style="font-size:12px ">
                                    আবেদন ফরম
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ URL::to('/nagorickApplication') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">নাগরিক আবেদন ফরম</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ URL::to('/tradelicenseApplication') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">ট্রেড লাইসেন্স আবেদন ফরম</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::to('/warishApplication') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">ওয়ারিশ আবেদন ফরম</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::to('/otherServiceApplication') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">অন্যান্য সনদের আবেদন ফরম </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li
                            class="nav-item  {{ (request()->is('nagorik') == 'nagorik'? 'menu-open': request()->is('nagorik/certificate') == 'nagorik/certificate')? 'menu-open': '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p style="font-size:12px ">
                                    নাগরিক আবেদন
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('nagorik_index') }}"
                                        class="nav-link {{ request()->is('nagorik') == 'nagorik' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">নতুন আবেদনকারীগন</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('certificate_index1') }}"
                                        class="nav-link {{ request()->is('nagorik/certificate') == 'nagorik/certificate' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">সনদ গ্রহণকারীগন</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li
                            class="nav-item {{ (((request()->is('Tradelicense') == 'Tradelicense'? 'menu-open': request()->is('Tradelicense/certificate1') == 'Tradelicense/certificate1')? 'menu-open': request()->is('Tradelicense/renewal') == 'Tradelicense/renewal')? 'menu-open': request()->is('Tradelicense/expired') == 'Tradelicense/expired')? 'menu-open': '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p style="font-size:12px ">
                                    ট্রেড লাইসেন্স আবেদন
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('tradelicense_index') }}"
                                        class="nav-link {{ request()->is('Tradelicense') == 'Tradelicense' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">নতুন আবেদনকারীগন</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('tradelicensecertificate_index') }}"
                                        class="nav-link {{ request()->is('Tradelicense/certificate1') == 'Tradelicense/certificate1' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">সনদ গ্রহণকারীগন</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('tradelicenserenewal_index') }}"
                                        class="nav-link {{ request()->is('Tradelicense/renewal') == 'Tradelicense/renewal' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">নবায়ন আবেদনকারীগন</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('tradelicenseexpired_index') }}"
                                        class="nav-link {{ request()->is('Tradelicense/expired') == 'Tradelicense/expired' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">মেয়াদ উত্তীর্ণ ট্রেড লাইসেন্স</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li
                            class="nav-item {{ (request()->segment(1) == 'warishIndex'? 'menu-open': request()->segment(1) == 'warishCertificate')? 'menu-open': '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p style="font-size:12px ">
                                    ওয়ারিশ আবেদন
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('warish_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'warishIndex' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">নতুন আবেদনকারীগন</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('warishcertificate_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'warishCertificate' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">সনদ গ্রহণকারীগন</p>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        <li
                            class="nav-item {{ (((((((((((((request()->segment(1) == 'otherServices'? 'menu-open': request()->segment(1) == 'servicesDeathcertificate')? 'menu-open': request()->segment(1) == 'servicesCharacteristic')? 'menu-open': request()->segment(1) == 'servicesUnmarried')? 'menu-open': request()->segment(1) == 'servicesleanless')? 'menu-open': request()->segment(1) == 'servicesRremarriage')? 'menu-open': request()->segment(1) == 'servicesIncome')? 'menu-open': request()->segment(1) == 'servicesSameName')? 'menu-open': request()->segment(1) == 'servicesDisable')? 'menu-open': request()->segment(1) == 'servicesTraditional')? 'menu-open': request()->segment(1) == 'servicesPermit')? 'menu-open': request()->segment(1) == 'servicesCertificate')? 'menu-open': request()->segment(1) == 'servicesFreedom')? 'menu-open': request()->segment(1) == 'servicesfreedomPet')? 'menu-open': '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p style="font-size:12px ">
                                    অন্যান্য সেবাসমূহ
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('services_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'otherServices' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">নতুন আবেদনকারীগন</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('deathcertificate_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'servicesDeathcertificate' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">মৃত্যু সনদ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('Characteristic_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'servicesCharacteristic' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">চারিত্রিক সনদ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('unmarried_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'servicesUnmarried' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">অবিবাহিত সনদ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('leanless_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'servicesleanless' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">ভূমিহীন সনদ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('remarriage_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'servicesRremarriage' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">পুনঃ বিবাহ না হওয়া সনদ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('annual_incom_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'servicesIncome' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">বার্ষিক আয়ের প্রত্যয়ন</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('same_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'servicesSameName' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">একই নামের প্রত্যয়ন</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('disable_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'servicesDisable' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">প্রকৃত বাকঁ ও শ্রবন প্রতিবন্ধী</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('traditional_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'servicesTraditional' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">সনাতন ধর্ম অবলম্বী</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('permit_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'servicesPermit' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">অনুমতি পত্র</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('certificate_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'servicesCertificate' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">প্রত্যয়ন পত্র</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('freedom_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'servicesFreedom' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">মুক্তিযোদ্ধা সনদ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('freedompet_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'servicesfreedomPet' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">মুক্তিযোদ্ধা পোষ্য সনদ</p>
                                    </a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item ">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p style="font-size:12px ">
                                    খাদ্য বান্ধব কর্মসূচি
                                    <i class="fas fa-angle-left right"></i>
                                    <span class="badge badge-info right">7</span>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ URL::to('foodApplication') }}"
                                        class="nav-link <?= $active == 'fa' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">আবেদনকারীগন</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::to('foodCollection') }}"
                                        class="nav-link <?= $active == 'fc' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">খাদ্য সংগ্রহ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::to('foodProgram') }}"
                                        class="nav-link <?= $active == 'fp' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">কর্মসূচি সমূহ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::to('issuingAuthority') }}"
                                        class="nav-link <?= $active == 'ia' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">ইস্যুকারীর তথ্য</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::to('dealerInfo') }}"
                                        class="nav-link <?= $active == 'di' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">ডিলারের তথ্য</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::to('foodApplicantReport') }}"
                                        class="nav-link <?= $active == 'far' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">রিপোর্ট আবেদনকারীগন</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::to('foodCollectionReport') }}"
                                        class="nav-link <?= $active == 'fcr' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">রিপোর্ট খাদ্য সংগ্রহ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::to('ordnoCollection') }}"
                                        class="nav-link <?= $active == 'oc' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">ওয়ার্ড নং</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::to('appProfession') }}"
                                        class="nav-link <?= $active == 'ap' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">পেশা </p>
                                    </a>
                                </li>

                            </ul>
                        </li>



                        <li
                            class="nav-item {{ ((request()->segment(1) == 'bgd_delivery'? 'menu-open': request()->segment(1) == 'bgd_deliverySetting')? 'menu-open': request()->segment(1) == 'bgd_deliveryReport')? 'menu-open': '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p style="font-size:12px ">
                                    ভিজিডি খাদ্য বিতরণ
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('member_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'bgd_delivery' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">সদস্য গন</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('settingIndex') }}"
                                        class="nav-link {{ request()->segment(1) == 'bgd_deliverySetting' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">সেটিংস সমূহ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('reportIndex') }}"
                                        class="nav-link {{ request()->segment(1) == 'bgd_deliveryReport' ? 'active' : '' }}"
                                        target="_blank">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">বিতরণের রিপোর্ট</p>
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('caseNotice_index') }}"
                                class="nav-link {{ request()->segment(1) == 'case_notice' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p style="font-size:12px ">
                                    মামলার নোটিশ তৈরি

                                </p>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="{{ route('dailydeposit_index') }}"
                                class="nav-link {{ request()->segment(1) == 'dailyDeposit' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p style="font-size:12px ">
                                    দৈনিক জমা

                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dailyexpense_index') }}"
                                class="nav-link {{ request()->segment(1) == 'dailyExpense' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p style="font-size:12px ">
                                    দৈনিক খরচ

                                </p>
                            </a>

                        </li>


                        <li
                            class="nav-item {{ (((request()->segment(1) == 'taxcollection'? 'menu-open': request()->segment(1) == 'dailyBastavita')? 'menu-open': request()->segment(1) == 'annualBastavita')? 'menu-open': request()->segment(1) == 'holdingTax')? 'menu-open': '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p style="font-size:12px ">
                                    কর
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('taxcollection_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'taxcollection' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">কর আদায় </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('dailyBastavita_index') }}" target="_bank"
                                        class="nav-link {{ request()->segment(1) == 'dailyBastavita' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">দৈনিক বসতভিটার প্রতিবেদন</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('annualBastavita_index') }}" target="_bank"
                                        class="nav-link {{ request()->segment(1) == 'annualBastavita' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">বাৎসরিক বসতভিটার প্রতিবেদন</p>
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link {{ request()->segment(1) == 'taxcollection' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">অনাদায়ী বসতভিটার প্রতিবেদন</p>
                                    </a>
                                </li> --}}
                                <li class="nav-item">
                                    <a href="{{ route('holdingTax_index') }}" target="_bank"
                                        class="nav-link {{ request()->segment(1) == 'holdingTax' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">হোল্ডিং টেক্সধারীদের তালিকা</p>
                                    </a>
                                </li>
                                <br>
                                <br>

                            </ul>
                        </li>

                        <li
                            class="nav-item {{ (request()->segment(1) == 'bankexchange'? 'menu-open': request()->segment(1) == 'fundexchange')? 'menu-open': '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p style="font-size:12px ">
                                    টাকার বিনিময়
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('bankexchange_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'bankexchange' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">ব্যাংকের টাকা বিনিময়</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('fundexchange_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'fundexchange' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">ফান্ডের টাকা বিনিময়</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p style="font-size:12px ">
                                    রশিদ সমূহ
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ URL::to('receipt/' . 'tread') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">সকল রশিদ সমূহ</p>
                                    </a>
                                </li>

                                <li class="nav-item active" role="presentation">
                                    <a href="{{ URL::to('receipt/' . 'tread') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px "> ট্রেড লাইসেন্স রশিদ</p>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" href="{{ URL::to('receipt/' . 'bosot') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">বসতভিটার কর রশিদ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ URL::to('receipt/' . 'prof') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">পেশাজীবি কর রশিদ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::to('receipt/' . 'li_basat') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">ট্রেড লাইসেন্সধারির বসত ভিটা কর </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::to('receipt/' . 'deposit') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">দৈনিক জমা রশিদ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::to('receipt/' . 'expense') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">দৈনিক খরচের রশিদ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::to('receipt/' . 'nagorik') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">নাগরিক সনদ রশিদ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::to('receipt/' . 'warish') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">ওয়ারিশ সনদ রশিদ</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li
                            class="nav-item {{ (((((request()->segment(1) == 'dailyReport'? 'menu-open': request()->segment(1) == 'dailyVatcollection')? 'menu-open': request()->segment(1) == 'dailyReportExpense')? 'menu-open': request()->segment(1) == 'dailyReportBank')? 'menu-open': request()->segment(1) == 'dailyMainsector')? 'menu-open': request()->segment(1) == 'dailyDetailsector')? 'menu-open': '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p style="font-size:12px ">
                                    দৈনিক হিসাবের রিপোর্ট
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('collection_index') }}" target="_blank"
                                        class="nav-link {{ request()->segment(1) == 'dailyReport' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">দৈনিক কালেকশন</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('vatcollection_index') }}" target="_blank"
                                        class="nav-link {{ request()->segment(1) == 'dailyVatcollection' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">দৈনিক ভ্যাট কালেকশন</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('reportexpense_index') }}" target="_blank"
                                        class="nav-link {{ request()->segment(1) == 'dailyReportExpense' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">দৈনিক খরচ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('reportbank_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'dailyReportBank' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">দৈনিক ব্যাংক বিবরণ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('mainsector_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'dailyMainsector' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">মূল খাতের বিবরণ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('detailssector_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'dailyDetailsector' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">আনুসাঙ্গিক খাতের বিবরণ</p>
                                    </a>
                                </li>


                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p style="font-size:12px ">
                                    প্রতিবেদন
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('potibadon_index') }}" target="_blank"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">দৈনিক ট্রেড লাইসেন্স প্রতিবেদন</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('monthlyreport_index') }}" target="_blank"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">মাসিক প্রতিবেদন</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('annualreport_index') }}" target="_blank"
                                        class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">বাৎসরিক প্রতিবেদন</p>
                                    </a>
                                </li>



                            </ul>
                        </li>

                        <li
                            class="nav-item {{ (((request()->segment(1) == 'usermanagement'? 'menu-open': request()->segment(1) == 'addOfficermanagement')? 'menu-open': request()->segment(1) == 'rolecreate')? 'menu-open': request()->segment(1) == 'rolelist')? 'menu-open': '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p style="font-size:12px ">
                                    ইউজার ম্যানেজমেন্ট
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('userlist_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'usermanagement' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">ইউজার তালিকা</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('add_officermanagement') }}"
                                        class="nav-link {{ request()->segment(1) == 'addOfficermanagement' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">নতুন ইউজার তৈরী </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('roleCreate') }}"
                                        class="nav-link {{ request()->segment(1) == 'rolecreate' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">Role Create</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('rolelist_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'rolelist' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">Role List</p>
                                    </a>
                                </li>



                            </ul>
                        </li>

                        <li
                            class="nav-item {{ (((((request()->segment(1) == 'unionchairmen'? 'menu-open': request()->segment(1) == 'union_council')? 'menu-open': request()->segment(1) == 'logo_change')? 'menu-open': request()->segment(1) == 'change_cover')? 'menu-open': request()->segment(1) == 'edit_unionchairmenmessage')? 'menu-open': request()->segment(1) == 'new_public')? 'menu-open': '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p style="font-size:12px ">
                                    ওয়েব সাইট ম্যানেজ
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('unionchairmen_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'unionchairmen' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">ইউপি কর্মকর্তা ও কর্মচারী</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('message_unionchairmen') }}"
                                        class="nav-link {{ request()->segment(1) == 'edit_unionchairmenmessage' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">চেয়ারম্যান ম্যাসেজ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('new_public') }}"
                                        class="nav-link {{ request()->segment(1) == 'new_public' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">খবর ম্যানেজ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('change_cover') }}"
                                        class="nav-link {{ request()->segment(1) == 'change_cover' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">কভার ফটো পরিবর্তন</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('logo_change') }}"
                                        class="nav-link {{ request()->segment(1) == 'logo_change' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">লগো পরিবর্তন</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('union_council') }}"
                                        class="nav-link {{ request()->segment(1) == 'union_council' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">ইউপি ম্যাপ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ URL::to('union_list/' . 'tab1') }}"
                                        class="nav-link {{ request()->segment(1) == 'usermanagement' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">ইউনিয়ন পরিষদের তালিকা</p>
                                    </a>
                                </li>


                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('controltool_index') }}"
                                class="nav-link {{ request()->segment(1) == 'controltool' ? 'active' : '' }}">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p style="font-size:12px ">কনট্রোল টুলস্</p>
                            </a>

                        </li>

                        <li
                            class="nav-item {{ (request()->segment(1) == 'websetting'? 'menu-open': request()->segment(1) == 'securitysetting')? 'menu-open': '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p style="font-size:12px ">
                                    ওয়েব সিকুরিটি সেটিং
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('websetting_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'websetting' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">Primary Setting</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('security_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'securitysetting' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">Security Question</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p style="font-size:12px ">
                                    সেটআপ মেনু
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/charts/chartjs.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">একাউন্টিং সেটআপ</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">ট্রেডলাইসেন্সের ফি নির্ধারণ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">বসতভিটার ফি নির্ধারণ</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">আয়ের মূল খাত</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">আয়ের আনুসাঙ্গিক খাত</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">খরচের মূল খাত</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">খরচের আনুসাঙ্গিক খাত</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">ওয়ার্ড মেম্বার যোগ করুন</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">বসতভিটার ধরন</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">পেশা</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">শ্রেণী</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li
                            class="nav-item {{ ((request()->segment(1) == 'smsconfiguration'? 'menu-open': request()->segment(1) == 'typemessage')? 'menu-open': request()->segment(1) == 'smsnotification')? 'menu-open': '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p style="font-size:12px ">
                                    এস এম এস সেটিংস
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('smsconfiguration_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'smsconfiguration' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px "> SMS API Configuration</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('typemessage_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'typemessage' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px "> Type of Messages</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('smsnotification_index') }}"
                                        class="nav-link {{ request()->segment(1) == 'smsnotification' ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">কখন এস এম এস যাবে</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p style="font-size:12px ">
                                    ইউজার প্রোফাইল সেটিং
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/charts/chartjs.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">ইউজার প্রোফাইল</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">প্রোফাইল পরিবর্তন</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p style="font-size:12px ">পাসওয়ার্ড পরিবর্তন</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <br>
                        <br>
                        <br>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('admin-content')
        </div>
        <!-- /.content-wrapper -->
        {{-- <footer class="main-footer">
                <strong>Copyright &copy; 2022 <a href="https://digitaldecoderltd.com/">Digitaldecoderltd.com</a>.</strong>
                All rights reserved.
               
            </footer> --}}

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('/') }}public/assets/backend/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('/') }}public/assets/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/') }}public/assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="{{ asset('/') }}public/assets/backend/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{ asset('/') }}public/assets/backend/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{ asset('/') }}public/assets/backend/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('/') }}public/assets/backend/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('/') }}public/assets/backend/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('/') }}public/assets/backend/plugins/moment/moment.min.js"></script>
    <script src="{{ asset('/') }}public/assets/backend/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script
        src="{{ asset('/') }}public/assets/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">

    </script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- Summernote -->
    <script src="{{ asset('/') }}public/assets/backend/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('/') }}public/assets/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/') }}public/assets/backend/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('/') }}public/assets/backend/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('/') }}public/assets/backend/dist/js/pages/dashboard.js"></script>

    <!-- DataTables  & Plugins -->
    <script src="{{ asset('/') }}public/assets/backend/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}public/assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js">
    </script>
    <script src="{{ asset('/') }}public/assets/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js">
    </script>
    <script src="{{ asset('/') }}public/assets/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
    </script>
    <script src="{{ asset('/') }}public/assets/backend/plugins/datatables-buttons/js/dataTables.buttons.min.js">
    </script>
    <script src="{{ asset('/') }}public/assets/backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js">
    </script>
    <script src="{{ asset('/') }}public/assets/backend/plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('/') }}public/assets/backend/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('/') }}public/assets/backend/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('/') }}public/assets/backend/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('/') }}public/assets/backend/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('/') }}public/assets/backend/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });


        $("document").ready(function() {
            setTimeout(function() {
                $(".flash-message").remove();
            }, 3000); // 3 secs

        });

        $('.select2').select2();
    </script>


    @yield('script')
</body>

</html>
