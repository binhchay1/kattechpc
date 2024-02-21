<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>@yield('title')</title>
    <meta name="description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    
    <link rel="icon" type="image/x-icon" href="{{ asset('image/favicon.ico') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('css/admin/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('css/admin/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/apex-charts/apex-charts.css') }}" />

    @yield('css')

    <script src="{{ asset('js/admin/helpers.js') }}"></script>
    <script src="{{ asset('js/admin/config.js') }}"></script>
</head>


<body>
    @include('sweetalert::alert')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{ route('admin.dashboard') }}" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="{{ asset('image/logo-no-background.png') }}" width="70">
                        </span>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Vasinfor</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <li class="menu-item" id="menu-dashboard">
                        <a href="{{ route('admin.dashboard') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    @if(Auth::user()->role == \App\Enums\Role::ADMIN)
                    <li class="menu-item mt-3" id="menu-users">
                        <a href="{{ route('admin.users') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div data-i18n="Analytics">Users</div>
                        </a>
                    </li>

                    <li class="menu-item mt-3" id="menu-fin">
                        <a href="{{ route('admin.fin') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-chart"></i>
                            <div data-i18n="Analytics">Fintech</div>
                        </a>
                    </li>
                    @endif
                </ul>
            </aside>
            <div class="layout-page">
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item lh-1 me-3">
                                <a class="github-button" href="javascript:void(0);" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="User">{{ Auth::user()->name }}</a>
                            </li>

                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" role="button" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        @if(Auth::user()->gender == 'male')
                                        <img src="{{ Auth::user()->profile_photo_path != null ? asset(Auth::user()->profile_photo_path) : asset('image/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                                        @elseif(Auth::user()->gender == 'female')
                                        <img src="{{ Auth::user()->profile_photo_path != null ? asset(Auth::user()->profile_photo_path) : asset('image/avatars/2.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                                        @else
                                        <img src="{{ Auth::user()->profile_photo_path != null ? asset(Auth::user()->profile_photo_path) : asset('image/avatars/3.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                                        @endif
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" style="pointer-events: none;">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        @if(Auth::user()->gender == 'male')
                                                        <img src="{{ Auth::user()->profile_photo_path != null ? asset(Auth::user()->profile_photo_path) : asset('image/avatars/1.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                                                        @elseif(Auth::user()->gender == 'female')
                                                        <img src="{{ Auth::user()->profile_photo_path != null ? asset(Auth::user()->profile_photo_path) : asset('image/avatars/2.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                                                        @else
                                                        <img src="{{ Auth::user()->profile_photo_path != null ? asset(Auth::user()->profile_photo_path) : asset('image/avatars/3.png') }}" alt class="w-px-40 h-auto rounded-circle" />
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                                    <small class="text-muted">{{ ucfirst(Auth::user()->role) }}</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('admin.profile') }}">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">My Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('admin.user.setting') }}">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    {{--<li>
                                        <a class="dropdown-item" href="#">
                                            <span class="d-flex align-items-center align-middle">
                                                <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                                <span class="flex-grow-1 align-middle">Billing</span>
                                                <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                            </span>
                                        </a>
                                    </li>--}}
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="dropdown-item">
                                                <i class="bx bx-power-off me-2"></i>
                                                <span class="align-middle">Log Out</span>
                                            </button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>

                @yield('content')
            </div>
        </div>

        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

    <footer class="content-footer footer bg-footer-theme">
        <div class="container-xxl d-flex justify-content-end py-2">
            <div class="mb-2 mb-md-0">
                Copyright©
                <script>
                    document.write(new Date().getFullYear());
                </script>
                , made with by <strong style="color: #696cff">Vasinfor</strong>
            </div>
        </div>
    </footer>

    <div class="content-backdrop fade"></div>

    <script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('vendor/popper/popper.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
    <script src="{{ asset('js/admin/bootstrap.js') }}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('js/admin/menu.js') }}"></script>
    <script src="{{ asset('vendor/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('js/admin/main.js') }}"></script>
    <script src="{{ asset('js/admin/dashboards-analytics.js') }}"></script>
    @yield('js')
</body>

</html>