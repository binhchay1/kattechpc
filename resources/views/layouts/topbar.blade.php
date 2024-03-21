<header id="page-topbar" class="ltr:md:left-vertical-menu rtl:md:right-vertical-menu group-data-[sidebar-size=md]:ltr:md:left-vertical-menu-md group-data-[sidebar-size=md]:rtl:md:right-vertical-menu-md group-data-[sidebar-size=sm]:ltr:md:left-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:md:right-vertical-menu-sm group-data-[layout=horizontal]:ltr:left-0 group-data-[layout=horizontal]:rtl:right-0 fixed right-0 z-[1000] left-0 print:hidden group-data-[navbar=bordered]:m-4 group-data-[navbar=bordered]:[&.is-sticky]:mt-0 transition-all ease-linear duration-300 group-data-[navbar=hidden]:hidden group-data-[navbar=scroll]:absolute group/topbar group-data-[layout=horizontal]:z-[1004]">
    <div class="layout-width">
        <div class="flex items-center px-4 mx-auto bg-topbar border-b-2 border-topbar group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:border-topbar-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:border-topbar-brand shadow-md h-header shadow-slate-200/50 group-data-[navbar=bordered]:rounded-md group-data-[navbar=bordered]:group-[.is-sticky]/topbar:rounded-t-none group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:border-zink-700 dark:shadow-none group-data-[topbar=dark]:group-[.is-sticky]/topbar:dark:shadow-zink-500 group-data-[topbar=dark]:group-[.is-sticky]/topbar:dark:shadow-md group-data-[navbar=bordered]:shadow-none group-data-[layout=horizontal]:group-data-[navbar=bordered]:rounded-b-none group-data-[layout=horizontal]:shadow-none group-data-[layout=horizontal]:dark:group-[.is-sticky]/topbar:shadow-none">
            <div class="flex items-center w-full group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl navbar-header group-data-[layout=horizontal]:ltr:xl:pr-3 group-data-[layout=horizontal]:rtl:xl:pl-3">

                <div class="items-center justify-center hidden px-5 text-center h-header group-data-[layout=horizontal]:md:flex group-data-[layout=horizontal]:ltr::pl-0 group-data-[layout=horizontal]:rtl:pr-0">
                    <a href="{{ url('index') }}">
                        <span class="hidden">
                            <img src="{{ URL::asset('images/logo/logo.png') }}" alt="" class="h-6 mx-auto" style="height: 6.5rem;">
                        </span>
                        <span class="group-data-[topbar=dark]:hidden group-data-[topbar=brand]:hidden">
                            <img src="{{ URL::asset('images/logo/logo.png') }}" alt="" class="h-6 mx-auto" style="height: 6.5rem;">
                        </span>
                    </a>
                    <a href="{{ url('index') }}" class="hidden group-data-[topbar=dark]:block group-data-[topbar=brand]:block">
                        <span class="group-data-[topbar=dark]:hidden group-data-[topbar=brand]:hidden">
                            <img src="{{ URL::asset('images/logo/logo.png') }}" alt="" class="h-6 mx-auto" style="height: 6.5rem;">
                        </span>
                        <span class="group-data-[topbar=dark]:block group-data-[topbar=brand]:block">
                            <img src="{{ URL::asset('images/logo/logo.png') }}" alt="" class="h-6 mx-auto" style="height: 6.5rem;">
                        </span>
                    </a>
                </div>

                <button type="button" class="inline-flex relative justify-center items-center p-0 text-topbar-item transition-all w-[37.5px] h-[37.5px] duration-75 ease-linear bg-topbar rounded-md btn hover:bg-slate-100 group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:border-topbar-dark group-data-[topbar=dark]:text-topbar-item-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:border-topbar-brand group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:text-zink-200 group-data-[topbar=dark]:dark:border-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=dark]:dark:hover:text-zink-50 group-data-[layout=horizontal]:flex group-data-[layout=horizontal]:md:hidden hamburger-icon" id="topnav-hamburger-icon">
                    <i data-lucide="chevrons-left" class="w-5 h-5 group-data-[sidebar-size=sm]:hidden"></i>
                    <i data-lucide="chevrons-right" class="hidden w-5 h-5 group-data-[sidebar-size=sm]:block"></i>
                </button>

                <div class="relative hidden ltr:ml-3 rtl:mr-3 lg:block group-data-[layout=horizontal]:hidden group-data-[layout=horizontal]:lg:block">
                    <input type="text" class="py-2 pr-4 text-sm text-topbar-item bg-topbar border border-topbar-border rounded pl-8 placeholder:text-slate-400 form-control focus-visible:outline-0 min-w-[300px] focus:border-blue-400 group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:border-topbar-border-dark group-data-[topbar=dark]:placeholder:text-slate-500 group-data-[topbar=dark]:text-topbar-item-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:border-topbar-border-brand group-data-[topbar=brand]:placeholder:text-blue-300 group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:border-zink-500 group-data-[topbar=dark]:dark:text-zink-100" placeholder="Search for ..." autocomplete="off">
                    <i data-lucide="search" class="inline-block size-4 absolute left-2.5 top-2.5 text-topbar-item fill-slate-100 group-data-[topbar=dark]:fill-topbar-item-bg-hover-dark group-data-[topbar=dark]:text-topbar-item-dark group-data-[topbar=brand]:fill-topbar-item-bg-hover-brand group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=dark]:dark:text-zink-200 group-data-[topbar=dark]:dark:fill-zink-600"></i>
                </div>

                <div class="flex gap-3 ms-auto">

                    <div class="relative flex items-center h-header">
                        <label class="switch">
                            <input type="checkbox" id="button-maintainer" title="{{ __('Maintenance mode') }}">
                            <span class="slider round"></span>
                        </label>
                    </div>

                    <div class="relative flex items-center dropdown h-header">
                        <button type="button" class="inline-flex justify-center items-center p-0 text-topbar-item transition-all w-[37.5px] h-[37.5px] duration-200 ease-linear bg-topbar rounded-md dropdown-toggle btn hover:bg-topbar-item-bg-hover hover:text-topbar-item-hover group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=dark]:dark:text-zink-500 group-data-[topbar=dark]:dark:hover:text-zink-50" id="flagsDropdown" data-bs-toggle="dropdown">
                            @switch(Session::get('lang'))
                            @case('us')
                            <img src="{{ URL::asset('build/images/flags/20/us.svg') }}" alt="" id="header-lang-img" class="h-5 rounded-sm">
                            @break

                            @default
                            <img src="{{ URL::asset('build/images/flags/20/vi.svg') }}" alt="" id="header-lang-img" class="h-5 rounded-sm">
                            @endswitch
                        </button>
                        <div class="absolute z-50 hidden p-4 ltr:text-left rtl:text-right bg-white rounded-md shadow-md !top-4 dropdown-menu min-w-[10rem] flex flex-col gap-4 dark:bg-zink-600" aria-labelledby="flagsDropdown">
                            <a href="{{ url('index/en') }}" class="flex items-center gap-3 group/items language" data-lang="en" title="English">
                                <img src="{{ URL::asset('build/images/flags/20/us.svg') }}" alt="" class="object-cover h-4 rounded-full">
                                <h6 class="transition-all duration-200 ease-linear font-15medium text- text-slate-600 dark:text-zink-200 group-hover/items:text-custom-500">English</h6>
                            </a>
                        </div>
                    </div>

                    <div class="relative flex items-center h-header">
                        <button type="button" class="inline-flex relative justify-center items-center p-0 text-topbar-item transition-all w-[37.5px] h-[37.5px] duration-200 ease-linear bg-topbar rounded-md btn hover:bg-topbar-item-bg-hover hover:text-topbar-item-hover group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=dark]:dark:hover:text-zink-50 group-data-[topbar=dark]:dark:text-zink-200 group-data-[topbar=dark]:text-topbar-item-dark" id="light-dark-mode">
                            <i data-lucide="sun" class="inline-block w-5 h-5 stroke-1 fill-slate-100 group-data-[topbar=dark]:fill-topbar-item-bg-hover-dark group-data-[topbar=brand]:fill-topbar-item-bg-hover-brand"></i>
                        </button>
                    </div>

                    <div class="relative flex items-center dropdown h-header">
                        <button type="button" class="inline-flex justify-center relative items-center p-0 text-topbar-item transition-all w-[37.5px] h-[37.5px] duration-200 ease-linear bg-topbar rounded-md dropdown-toggle btn hover:bg-topbar-item-bg-hover hover:text-topbar-item-hover group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=dark]:dark:hover:text-zink-50 group-data-[topbar=dark]:dark:text-zink-200 group-data-[topbar=dark]:text-topbar-item-dark" id="notificationDropdown" data-bs-toggle="dropdown">
                            <i data-lucide="bell-ring" class="inline-block w-5 h-5 stroke-1 fill-slate-100 group-data-[topbar=dark]:fill-topbar-item-bg-hover-dark group-data-[topbar=brand]:fill-topbar-item-bg-hover-brand"></i>
                            <span class="absolute top-0 right-0 flex w-1.5 h-1.5">
                                <span class="absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-sky-400"></span>
                                <span class="relative inline-flex w-1.5 h-1.5 rounded-full bg-sky-500"></span>
                            </span>
                        </button>
                        <div class="absolute z-50 hidden ltr:text-left rtl:text-right bg-white rounded-md shadow-md !top-4 dropdown-menu min-w-[20rem] lg:min-w-[26rem] dark:bg-zink-600" aria-labelledby="notificationDropdown">
                            <div data-simplebar class="max-h-[350px]">
                                <div class="flex flex-col gap-1" id="notification-list">
                                    <a href="#!" class="flex gap-3 p-4 product-item hover:bg-slate-50 dark:hover:bg-zink-500 follower">
                                        <div class="w-10 h-10 rounded-md shrink-0 bg-slate-100">
                                            <img src="{{ URL::asset('build/images/users/avatar-3.png') }}" alt="" class="rounded-md">
                                        </div>
                                        <div class="grow">
                                            <h6 class="mb-1 font-medium"><b>@willie_passem</b> followed you</h6>
                                            <p class="mb-0 text-sm text-slate-500 dark:text-zink-300"><i data-lucide="clock" class="inline-block w-3.5 h-3.5 mr-1"></i>
                                                <span class="align-middle">Wednesday 03:42 PM</span>
                                            </p>
                                        </div>
                                        <div class="flex items-center self-start gap-2 text-xs text-slate-500 shrink-0 dark:text-zink-300">
                                            <div class="w-1.5 h-1.5 bg-custom-500 rounded-full"></div> 4 sec
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative flex items-center dropdown h-header">
                        <button type="button" class="inline-block p-0 transition-all duration-200 ease-linear bg-topbar rounded-full text-topbar-item dropdown-toggle btn hover:bg-topbar-item-bg-hover hover:text-topbar-item-hover group-data-[topbar=dark]:text-topbar-item-dark group-data-[topbar=dark]:bg-topbar-dark group-data-[topbar=dark]:hover:bg-topbar-item-bg-hover-dark group-data-[topbar=dark]:hover:text-topbar-item-hover-dark group-data-[topbar=brand]:bg-topbar-brand group-data-[topbar=brand]:hover:bg-topbar-item-bg-hover-brand group-data-[topbar=brand]:hover:text-topbar-item-hover-brand group-data-[topbar=dark]:dark:bg-zink-700 group-data-[topbar=dark]:dark:hover:bg-zink-600 group-data-[topbar=brand]:text-topbar-item-brand group-data-[topbar=dark]:dark:hover:text-zink-50 group-data-[topbar=dark]:dark:text-zink-200" id="dropdownMenuButton" data-bs-toggle="dropdown">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <div class="bg-pink-100 rounded-full">
                                <img src="{{Auth::user()->profile_photo_path}}" alt="" class="w-[37.5px] h-[37.5px] rounded-full">
                            </div>
                            @else
                            <i data-lucide="user-2" class="inline-block w-5 h-5 stroke-1 fill-slate-100 group-data-[topbar=dark]:fill-topbar-item-bg-hover-dark group-data-[topbar=brand]:fill-topbar-item-bg-hover-brand"></i>
                            @endif
                        </button>
                        <div class="absolute z-50 hidden p-4 ltr:text-left rtl:text-right bg-white rounded-md shadow-md !top-4 dropdown-menu min-w-[14rem] dark:bg-zink-600" aria-labelledby="dropdownMenuButton">
                            <h6 class="mb-2 text-sm font-normal text-slate-500 dark:text-zink-300">{{ Auth::user()->name }}
                            </h6>
                            <a href="#!" class="flex gap-3 mb-3">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <div class="relative inline-block shrink-0">
                                    <div class="rounded bg-slate-100 dark:bg-zink-500">
                                        <img src="" alt="" class="w-12 h-12 rounded">
                                    </div>
                                    <span class="-top-1 ltr:-right-1 rtl:-left-1 absolute w-2.5 h-2.5 bg-green-400 border-2 border-white rounded-full dark:border-zink-600"></span>
                                </div>
                                @endif
                                <div>
                                    <h6 class="mb-1 text-15"></h6>
                                    <p class="text-slate-500 dark:text-zink-300">CEO & Founder</p>
                                </div>
                            </a>
                            <ul>
                                <li>
                                    <a class="block ltr:pr-4 rtl:pl-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:text-custom-500 focus:text-custom-500 dark:text-zink-200 dark:hover:text-custom-500 dark:focus:text-custom-500" href="{{ route('admin.profile.edit',  Auth::user()->id) }}"><i data-lucide="user-2" class="inline-block size-4 ltr:mr-2 rtl:ml-2"></i> Profile</a>
                                </li>
                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <li>
                                    <a class="block ltr:pr-4 rtl:pl-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:text-custom-500 focus:text-custom-500 dark:text-zink-200 dark:hover:text-custom-500 dark:focus:text-custom-500" href="{{ route('api-tokens.index') }}"><i data-lucide="key-round" class="inline-block size-4 ltr:mr-2 rtl:ml-2"></i> API Tokens</a>
                                </li>
                                @endif
                                <li>
                                    <a class="block ltr:pr-4 rtl:pl-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:text-custom-500 focus:text-custom-500 dark:text-zink-200 dark:hover:text-custom-500 dark:focus:text-custom-500" href="{{ url('apps-mailbox') }}"><i data-lucide="mail" class="inline-block size-4 ltr:mr-2 rtl:ml-2"></i> Inbox <span class="inline-flex items-center justify-center w-5 h-5 ltr:ml-2 rtl:mr-2 text-[11px] font-medium border rounded-full text-white bg-red-500 border-red-500">15</span></a>
                                </li>
                                <li>
                                    <a class="block ltr:pr-4 rtl:pl-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:text-custom-500 focus:text-custom-500 dark:text-zink-200 dark:hover:text-custom-500 dark:focus:text-custom-500" href="{{ url('apps-chat') }}"><i data-lucide="messages-square" class="inline-block size-4 ltr:mr-2 rtl:ml-2"></i> Chat</a>
                                </li>
                                <li>
                                    <a class="block ltr:pr-4 rtl:pl-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:text-custom-500 focus:text-custom-500 dark:text-zink-200 dark:hover:text-custom-500 dark:focus:text-custom-500" href="#!"><i data-lucide="gem" class="inline-block size-4 ltr:mr-2 rtl:ml-2"></i> Upgrade <span class="inline-flex items-center justify-center w-auto h-5 ltr:ml-2 rtl:mr-2 px-1 text-[12px] font-medium border rounded text-white bg-sky-500 border-sky-500">Pro</span></a>
                                </li>

                                <li class="pt-2 mt-2 border-t border-slate-200 dark:border-zink-500">
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <a href="{{ route('logout') }}" class="block ltr:pr-4 rtl:pl-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:text-custom-500 focus:text-custom-500 dark:text-zink-200 dark:hover:text-custom-500 dark:focus:text-custom-500" @click.prevent="$root.submit();">
                                            <i data-lucide="log-out" class="inline-block size-4 ltr:mr-2 rtl:ml-2"></i>
                                            {{ __('Sign Out') }}
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
