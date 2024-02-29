@extends('layouts.master')
@section('title')
    {{ __('Social Media') }}
@endsection
@push('css')
    <link rel="stylesheet" href="{{ URL::asset('build/libs/glightbox/css/glightbox.min.css') }}">
@endpush
@section('content')
    <div class="grid grid-cols-12 mt-5 gap-x-5">
        <div class="col-span-12 lg:col-span-5 xl:col-span-3 shrink-0 lg:block">
            <div class="card">
                <div class="card-body">
                    <div class="flex items-center gap-3 mb-5">
                        <div class="rounded-full bg-slate-100 shrink-0 dark:bg-zink-600">
                            <img src="{{ URL::asset('build/images/users/avatar-1.png') }}" alt=""
                                class="rounded-full h-14">
                        </div>
                        <div class="grow">
                            <h6 class="mb-1 text-15">Paula Keenan <i data-lucide="badge-check"
                                    class="inline-block size-4 text-sky-500 fill-sky-100 dark:fill-sky-500/20"></i></h6>
                            <p class="text-slate-500 dark:text-zink-200">@paulak145</p>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-1 text-center divide-y sm:divide-y-0 sm:divide-x sm:grid-cols-3 divide-slate-200 dark:divide-zink-500 divide-dashed rtl:divide-x-reverse">
                        <div class="py-3 sm:py-0 sm:px-3">
                            <h6>489</h6>
                            <p class="text-slate-500 dark:text-zink-200">Posts</p>
                        </div>
                        <div class="py-3 sm:py-0 sm:px-3">
                            <h6>4.6k</h6>
                            <p class="text-slate-500 dark:text-zink-200">Follower</p>
                        </div>
                        <div class="py-3 sm:py-0 sm:px-3">
                            <h6>159</h6>
                            <p class="text-slate-500 dark:text-zink-200">Following</p>
                        </div>
                    </div>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <ul class="flex flex-col w-full gap-2 mb-4 text-sm font-medium shrink-0 nav-tabs">
                        <li class="group grow active">
                            <a href="{{ url('dashboards-social-media') }}"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i
                                    data-lucide="home" class="inline-block size-4 align-middle ltr:mr-1 rtl:ml-1"></i>
                                <span class="align-middle">Feed</span></a>
                        </li>
                        <li class="group grow">
                            <a href="{{ url('apps-social-friends') }}"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i
                                    data-lucide="user-2" class="inline-block size-4 align-middle ltr:mr-1 rtl:ml-1"></i>
                                <span class="align-middle">Friends</span></a>
                        </li>
                        <li class="group grow">
                            <a href="{{ url('apps-social-event') }}"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i
                                    data-lucide="calendar-days"
                                    class="inline-block size-4 align-middle ltr:mr-1 rtl:ml-1"></i> <span
                                    class="align-middle">Event</span></a>
                        </li>
                        <li class="group grow">
                            <a href="{{ url('apps-social-video') }}"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i
                                    data-lucide="clapperboard"
                                    class="inline-block size-4 align-middle ltr:mr-1 rtl:ml-1"></i> <span
                                    class="align-middle">Watch Video</span></a>
                        </li>
                        <li class="group grow">
                            <a href="{{ url('apps-social-marketplace') }}"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i
                                    data-lucide="shopping-cart"
                                    class="inline-block size-4 align-middle ltr:mr-1 rtl:ml-1"></i> <span
                                    class="align-middle">Marketplace</span></a>
                        </li>
                        <li class="group grow">
                            <a href="{{ url('pages-account-settings') }}"
                                class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i
                                    data-lucide="settings" class="inline-block size-4 align-middle ltr:mr-1 rtl:ml-1"></i>
                                <span class="align-middle">Settings</span></a>
                        </li>
                    </ul>
                    <p class="mb-4 text-slate-500 dark:text-zink-200">Suggestion Pages</p>
                    <ul class="flex flex-col gap-4">
                        <li>
                            <a href="#!" class="flex gap-3">
                                <img src="{{ URL::asset('build/images/brand/adwords.png') }}" alt="" class="h-5">
                                <h6>Harmonious Team</h6>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="flex gap-3">
                                <img src="{{ URL::asset('build/images/brand/twitter.png') }}" alt=""
                                    class="h-5">
                                <h6>Twitter</h6>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="flex gap-3">
                                <img src="{{ URL::asset('build/images/brand/meta.png') }}" alt="" class="h-5">
                                <h6>Design Stack</h6>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="flex gap-3">
                                <img src="{{ URL::asset('build/images/brand/figma.png') }}" alt="" class="h-5">
                                <h6>UI / UX Community</h6>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Active Friends</h6>
                    <div class="flex flex-wrap items-center gap-3">
                        <a href="#!" class="relative">
                            <img src="{{ URL::asset('build/images/users/avatar-2.png') }}" alt=""
                                class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                            <span
                                class="top-0 ltr:right-0 rtl:left-0 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                        </a>
                        <a href="#!" class="relative">
                            <img src="{{ URL::asset('build/images/users/avatar-3.png') }}" alt=""
                                class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                            <span
                                class="top-0 ltr:right-0 rtl:left-0 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                        </a>
                        <a href="#!" class="relative">
                            <img src="{{ URL::asset('build/images/users/avatar-4.png') }}" alt=""
                                class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                            <span
                                class="top-0 ltr:right-0 rtl:left-0 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                        </a>
                        <a href="#!" class="relative">
                            <img src="{{ URL::asset('build/images/users/avatar-5.png') }}" alt=""
                                class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                            <span
                                class="top-0 ltr:right-0 rtl:left-0 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                        </a>
                        <a href="#!" class="relative">
                            <img src="{{ URL::asset('build/images/users/avatar-6.png') }}" alt=""
                                class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                            <span
                                class="top-0 ltr:right-0 rtl:left-0 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                        </a>
                        <a href="#!" class="relative">
                            <img src="{{ URL::asset('build/images/users/avatar-7.png') }}" alt=""
                                class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                            <span
                                class="top-0 ltr:right-0 rtl:left-0 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                        </a>
                        <a href="#!" class="relative">
                            <img src="{{ URL::asset('build/images/users/avatar-8.png') }}" alt=""
                                class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                            <span
                                class="top-0 ltr:right-0 rtl:left-0 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                        </a>
                        <a href="#!" class="relative">
                            <img src="{{ URL::asset('build/images/users/avatar-9.png') }}" alt=""
                                class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                            <span
                                class="top-0 ltr:right-0 rtl:left-0 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                        </a>
                        <a href="#!" class="relative">
                            <img src="{{ URL::asset('build/images/users/avatar-10.png') }}" alt=""
                                class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                            <span
                                class="top-0 ltr:right-0 rtl:left-0 absolute  w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                        </a>
                        <a href="#!"
                            class="relative flex items-center justify-center size-10 rounded-full bg-custom-100 text-custom-500 dark:bg-custom-500/20">
                            5+
                        </a>
                    </div>
                </div>
            </div><!--end card-->
        </div><!--end-->
        <div class="col-span-12 lg:col-span-7 xl:col-span-9 2xl:col-span-6">
            <div class="card">
                <div class="card-body">
                    <div class="w-full" data-simplebar>
                        <div class="flex gap-4">
                            <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story active"
                                data-glightbox="max-width: 28rem;">
                                <div
                                    class="size-16 mx-auto rounded-full bg-pink-100 dark:bg-pink-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                    <img src="{{ URL::asset('build/images/users/avatar-1.png') }}" alt=""
                                        class="size-16 rounded-full">
                                    <div
                                        class="absolute flex items-center justify-center size-5 text-white rounded-full ltr:-right-0.5 rtl:-left-0.5 -bottom-0.5 bg-sky-500">
                                        <i data-lucide="plus" class="size-4"></i>
                                    </div>
                                </div>
                                <h6 class="mt-2 font-normal truncate">Your story</h6>
                            </a>

                            <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story active"
                                data-glightbox="max-width: 28rem;">
                                <div
                                    class="size-16 mx-auto rounded-full bg-sky-100 dark:bg-sky-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                    <img src="{{ URL::asset('build/images/users/avatar-2.png') }}" alt=""
                                        class="size-16 rounded-full">
                                </div>
                                <h6 class="mt-2 font-normal truncate"> @zaria_muller</h6>
                            </a>

                            <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story active"
                                data-glightbox="max-width: 28rem;">
                                <div
                                    class="size-16 mx-auto rounded-full bg-slate-100 dark:bg-zink-600 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                    <img src="{{ URL::asset('build/images/users/avatar-3.png') }}" alt=""
                                        class="size-16 rounded-full">
                                </div>
                                <h6 class="mt-2 font-normal truncate"> @christina</h6>
                            </a>

                            <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story active"
                                data-glightbox="max-width: 28rem;">
                                <div
                                    class="size-16 mx-auto rounded-full bg-yellow-100 dark:bg-yellow-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                    <img src="{{ URL::asset('build/images/users/avatar-4.png') }}" alt=""
                                        class="size-16 rounded-full">
                                </div>
                                <h6 class="mt-2 font-normal truncate"> @blaze_herzog</h6>
                            </a>
                            <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story active"
                                data-glightbox="max-width: 28rem;">
                                <div
                                    class="size-16 mx-auto rounded-full bg-emerald-100 dark:bg-emerald-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                    <img src="{{ URL::asset('build/images/users/avatar-5.png') }}" alt=""
                                        class="size-16 rounded-full">
                                </div>
                                <h6 class="mt-2 font-normal truncate">@keon_rippin</h6>
                            </a>
                            <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story active"
                                data-glightbox="max-width: 28rem;">
                                <div
                                    class="size-16 mx-auto rounded-full bg-purple-100 dark:bg-purple-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                    <img src="{{ URL::asset('build/images/users/avatar-6.png') }}" alt=""
                                        class="size-16 rounded-full">
                                </div>
                                <h6 class="mt-2 font-normal truncate">@niko_watsica</h6>
                            </a>

                            <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story"
                                data-glightbox="max-width: 28rem;">
                                <div
                                    class="size-16 mx-auto rounded-full bg-custom-100 dark:bg-custom-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                    <img src="{{ URL::asset('build/images/users/avatar-7.png') }}" alt=""
                                        class="size-16 rounded-full">
                                </div>
                                <h6 class="mt-2 font-normal truncate">@genesis</h6>
                            </a>
                            <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story"
                                data-glightbox="max-width: 28rem;">
                                <div
                                    class="size-16 mx-auto rounded-full bg-green-100 dark:bg-green-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                    <img src="{{ URL::asset('build/images/users/avatar-8.png') }}" alt=""
                                        class="size-16 rounded-full">
                                </div>
                                <h6 class="mt-2 font-normal truncate">@brayan_herman</h6>
                            </a>
                            <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story"
                                data-glightbox="max-width: 28rem;">
                                <div
                                    class="size-16 mx-auto rounded-full bg-purple-100 dark:bg-purple-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                    <img src="{{ URL::asset('build/images/users/avatar-9.png') }}" alt=""
                                        class="size-16 rounded-full">
                                </div>
                                <h6 class="mt-2 font-normal truncate">@logan</h6>
                            </a>
                            <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story"
                                data-glightbox="max-width: 28rem;">
                                <div
                                    class="size-16 mx-auto rounded-full bg-cyan-100 dark:bg-cyan-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                    <img src="{{ URL::asset('build/images/users/avatar-10.png') }}" alt=""
                                        class="size-16 rounded-full">
                                </div>
                                <h6 class="mt-2 font-normal truncate">@gerhold</h6>
                            </a>
                            <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story"
                                data-glightbox="max-width: 28rem;">
                                <div
                                    class="size-16 mx-auto rounded-full bg-sky-100 dark:bg-sky-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                    <img src="{{ URL::asset('build/images/users/avatar-2.png') }}" alt=""
                                        class="size-16 rounded-full">
                                </div>
                                <h6 class="mt-2 font-normal truncate">@fletcher</h6>
                            </a>
                            <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story"
                                data-glightbox="max-width: 28rem;">
                                <div
                                    class="size-16 mx-auto rounded-full bg-sky-100 dark:bg-sky-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                    <img src="{{ URL::asset('build/images/users/avatar-2.png') }}" alt=""
                                        class="size-16 rounded-full">
                                </div>
                                <h6 class="mt-2 font-normal truncate">@fletcher</h6>
                            </a>
                            <a href="#!" class="block w-20 px-1 py-2 group">
                                <div
                                    class="size-16 mx-auto rounded-full bg-slate-100 dark:bg-zink-600 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700">
                                    <img src="{{ URL::asset('build/images/users/avatar-3.png') }}" alt=""
                                        class="size-16 rounded-full">
                                </div>
                                <h6 class="mt-2 font-normal truncate">@christina</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <div class="flex gap-3">
                        <ul class="flex gap-3 grow">
                            <li>
                                <a href="#!"><i data-lucide="video"
                                        class="inline-block size-4 text-red-500 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle text-slate-500 dark:text-zink-200">Live Video</span></a>
                            </li>
                            <li>
                                <a href="#!" data-modal-target="imagesVideoPostModal"><i data-lucide="image"
                                        class="inline-block size-4 ltr:mr-1 text-custom-600 rtl:ml-1"></i> <span
                                        class="align-middle text-slate-500 dark:text-zink-200">Image/Video</span></a>
                            </li>
                            <li>
                                <a href="#!" data-modal-target="eventModal"><i data-lucide="calendar-days"
                                        class="inline-block size-4 text-green-500 ltr:mr-1 rtl:ml-1"></i> <span
                                        class="align-middle text-slate-500 dark:text-zink-200">Event</span></a>
                            </li>
                            <li>
                                <a href="#!"><i data-lucide="at-sign"
                                        class="inline-block size-4 ltr:mr-1 text-sky-500 rtl:ml-1"></i> <span
                                        class="align-middle text-slate-500 dark:text-zink-200">Mention</span></a>
                            </li>
                        </ul>
                        <div class="relative dropdown shrink-0">
                            <button
                                class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                id="socialMediaCreate" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                                    class="size-3"></i></button>
                            <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                aria-labelledby="socialMediaCreate">
                                <li>
                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200 text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                        href="#!"><i data-lucide="git-pull-request"
                                            class="inline-block size-3 mr-1"></i> <span class="align-middle">Create a
                                            poll</span></a>
                                </li>
                                <li>
                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200 text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                        href="#!"><i data-lucide="messages-square"
                                            class="inline-block size-3 mr-1"></i> <span class="align-middle">Ask a
                                            question</span></a>
                                </li>
                                <li>
                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200 text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                        href="#!"><i data-lucide="help-circle"
                                            class="inline-block size-3 mr-1"></i> <span
                                            class="align-middle">Help</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <form action="#!">
                        <div class="flex gap-3 mt-4">
                            <div class="bg-pink-100 rounded-full size-9 shrink-0 dark:bg-pink-500/20">
                                <img src="{{ URL::asset('build/images/users/avatar-1.png') }}" alt=""
                                    class="rounded-full size-9">
                            </div>
                            <div class="grow">
                                <textarea
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    id="textArea" placeholder="Share your thoughts ..." rows="3"></textarea>
                            </div>
                        </div>
                        <div class="mt-4 text-right">
                            <button type="submit"
                                class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Share
                                Post</button>
                        </div>
                    </form>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <div class="flex flex-wrap items-center gap-3 mb-5">
                        <div
                            class="size-12 bg-green-100 rounded-full outline-1 outline outline-transparent outline-offset-[3px] [&.active]:outline-custom-500 shrink-0 dark:bg-green-500/20">
                            <img src="{{ URL::asset('build/images/users/avatar-8.png') }}" alt=""
                                class="size-12 rounded-full">
                        </div>
                        <div class="grow">
                            <h6 class="mb-1 text-15"><a href="#!"
                                    class="transition-all duration-200 ease-linear hover:text-custom-500 dark:hover:text-custom-500">Frances
                                    Zboncak</a> -<small class="ml-1 font-normal text-slate-500 dark:text-zink-200">25
                                    min</small></h6>
                            <p class="text-slate-500 dark:text-zink-200">Web Developer at <a href="#!"
                                    class="underline">Themesdesign</a></p>
                        </div>
                        <div class="flex items-center gap-2 mt-4 shrink-0 md:mt-4">
                            <button type="button"
                                class="group/item toggle-button active px-2 py-1.5 text-xs bg-white border-dashed text-sky-500 btn border-sky-500 hover:text-sky-500 hover:bg-sky-50 hover:border-sky-600 focus:text-sky-600 focus:bg-sky-50 focus:border-sky-600 active:text-sky-600 active:bg-sky-50 active:border-sky-600 dark:bg-zink-700 dark:ring-sky-400/20 dark:hover:bg-sky-800/20 dark:focus:bg-sky-800/20 dark:active:bg-sky-800/20">
                                <span class="group-[.active]/item:hidden block"><i data-lucide="plus"
                                        class="inline-block size-3 mr-1"></i> Follow</span>
                                <span class="group-[.active]/item:block hidden"><i data-lucide="user-x-2"
                                        class="inline-block size-3 mr-1"></i> Unfollow</span>
                            </button>
                            <div class="relative dropdown">
                                <button
                                    class="dropdown-toggle flex items-center justify-center size-[30px] p-0 bg-white text-sky-500 btn hover:text-sky-500 hover:bg-sky-100 focus:text-sky-500 focus:bg-sky-100 active:text-sky-500 active:bg-sky-100 dark:bg-zink-700 dark:hover:bg-sky-500/10 dark:focus:bg-sky-500/10 dark:active:bg-sky-500/10"
                                    id="socialPost1" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                                        class="size-4"></i></button>
                                <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                    aria-labelledby="socialPost1">
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200 text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                            href="#!"><i data-lucide="git-pull-request"
                                                class="inline-block size-3 mr-1"></i> <span class="align-middle">Create a
                                                poll</span></a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200 text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                            href="#!"><i data-lucide="messages-square"
                                                class="inline-block size-3 mr-1"></i> <span class="align-middle">Ask a
                                                question</span></a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200 text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500"
                                            href="#!"><i data-lucide="help-circle"
                                                class="inline-block size-3 mr-1"></i> <span
                                                class="align-middle">Help</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p>Our newly established office serves as a clear representation of our unwavering commitment to
                        nurturing a vibrant and dynamic work atmosphere, where innovation thrives and creativity knows no
                        bounds.</p>
                </div>
                <div class="border-y border-slate-200 card-body dark:border-zink-500">
                    <ul class="flex items-center gap-4 mb-0">
                        <li>
                            <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="messages-square"
                                    class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">48
                                    Comments</span></a>
                        </li>
                        <li>
                            <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="heart"
                                    class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">257
                                    Likes</span></a>
                        </li>
                        <li>
                            <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="send"
                                    class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">13
                                    Share</span></a>
                        </li>
                        <li class="ltr:ml-auto rtl:mr-auto">
                            <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="bookmark"
                                    class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span
                                    class="align-middle">7</span></a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <form action="#!">
                        <div class="flex gap-3">
                            <div class="bg-pink-100 rounded-full size-9 shrink-0 dark:bg-pink-500/20">
                                <img src="{{ URL::asset('build/images/users/avatar-1.png') }}" alt=""
                                    class="rounded-full size-9">
                            </div>
                            <div class="grow">
                                <input type="text" id="commentInput"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Write your comment ...">
                            </div>
                            <div class="shrink-0">
                                <button type="submit"
                                    class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Send</button>
                            </div>
                        </div>
                    </form>

                    <div class="mt-5">
                        <div class="flex gap-3">
                            <div class="bg-yellow-100 rounded-full size-9 shrink-0 dark:bg-yellow-500/20">
                                <img src="{{ URL::asset('build/images/users/avatar-5.png') }}" alt=""
                                    class="rounded-full size-9">
                            </div>
                            <div class="grow">
                                <div class="p-3 rounded-md bg-slate-100 dark:bg-zink-600">
                                    <h6 class="mb-3 text-15"><a href="#!">@bertha34</a> - <span
                                            class="text-sm font-normal text-slate-500 dark:text-zink-200">14 June,
                                            2023</span></h6>
                                    <p>Do you have a date or timeline when do you release the Laravel + Vite + Jetstream +
                                        Pest + Vue (Full Stack) version of this item ?</p>
                                    <div class="flex items-center gap-2 mt-4">
                                        <a href="#!"
                                            class="px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-slate-200 text-slate-500 transition hover:bg-slate-200 dark:text-zink-200 dark:bg-slate-700 dark:border-zink-500">Like
                                            (3)</a>
                                        <a href="#!"
                                            class="px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-slate-200 text-slate-500 transition hover:bg-slate-200 dark:text-zink-200 dark:bg-slate-700 dark:border-zink-500">Reply</a>
                                    </div>
                                </div>
                                <div class="flex gap-3 mt-4">
                                    <div class="bg-green-100 rounded-full size-9 shrink-0 dark:bg-green-500/20">
                                        <img src="{{ URL::asset('build/images/users/avatar-8.png') }}" alt=""
                                            class="rounded-full size-9">
                                    </div>
                                    <div class="grow">
                                        <div class="p-3 rounded-md bg-slate-100 dark:bg-zink-600">
                                            <h6 class="mb-3 text-15"><a href="#!">@frances_zboncak</a> - <span
                                                    class="text-sm font-normal text-slate-500 dark:text-zink-200">14 June,
                                                    2023</span></h6>
                                            <p class="mb-1">Sorry not at the moment. But Laravel + Interia + Vue will be
                                                ready next week hopefully. FYI: There will be no backend-related
                                                functionality with this template.</p>
                                            <p>Thank you</p>
                                            <div class="flex items-center gap-2 mt-4">
                                                <a href="#!"
                                                    class="px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-slate-200 text-slate-500 transition hover:bg-slate-200 dark:text-zink-200 dark:bg-slate-700 dark:border-zink-500">Like
                                                    (6)</a>
                                                <a href="#!"
                                                    class="px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-slate-200 text-slate-500 transition hover:bg-slate-200 dark:text-zink-200 dark:bg-slate-700 dark:border-zink-500">Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <div class="flex flex-wrap items-center gap-3 mb-5">
                        <div
                            class="size-12 bg-green-100 rounded-full outline-1 outline outline-transparent outline-offset-[3px] [&.active]:outline-custom-500 shrink-0 dark:bg-green=500/20">
                            <img src="{{ URL::asset('build/images/users/avatar-7.png') }}" alt=""
                                class="size-12 rounded-full">
                        </div>
                        <div class="grow">
                            <h6 class="mb-1 text-15"><a href="#!"
                                    class="transition-all duration-200 ease-linear hover:text-custom-500 dark:hover:text-custom-500">Stephen
                                    Tillman</a> -<small class="ml-1 font-normal text-slate-500 dark:text-zink-200">25
                                    min</small></h6>
                            <p class="text-slate-500 dark:text-zink-200">React Developer at <a href="#!"
                                    class="underline">Webfox Info</a></p>
                        </div>
                        <div class="flex flex-wrap items-center mt-4 shrink-0 md:mt-4">
                            <button type="button"
                                class="group/item toggle-button active px-2 py-1.5 text-xs bg-white border-dashed text-sky-500 btn border-sky-500 hover:text-sky-500 hover:bg-sky-50 hover:border-sky-600 focus:text-sky-600 focus:bg-sky-50 focus:border-sky-600 active:text-sky-600 active:bg-sky-50 active:border-sky-600 dark:bg-zink-700 dark:ring-sky-400/20 dark:hover:bg-sky-800/20 dark:focus:bg-sky-800/20 dark:active:bg-sky-800/20">
                                <span class="group-[.active]/item:hidden block"><i data-lucide="plus"
                                        class="inline-block size-3 mr-1"></i> Follow</span>
                                <span class="group-[.active]/item:block hidden"><i data-lucide="user-x-2"
                                        class="inline-block size-3 mr-1"></i> Unfollow</span>
                            </button>
                            <div class="relative dropdown">
                                <button
                                    class="dropdown-toggle flex items-center justify-center size-[30px] p-0 bg-white text-sky-500 btn hover:text-sky-500 hover:bg-sky-100 focus:text-sky-500 focus:bg-sky-100 active:text-sky-500 active:bg-sky-100 dark:bg-zink-700 dark:hover:bg-sky-500/10 dark:focus:bg-sky-500/10 dark:active:bg-sky-500/10"
                                    id="socialPost2" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                                        class="size-4"></i></button>
                                <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                    aria-labelledby="socialPost2">
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="#!"><i data-lucide="git-pull-request"
                                                class="inline-block size-3 mr-1"></i> <span class="align-middle">Create a
                                                poll</span></a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="#!"><i data-lucide="messages-square"
                                                class="inline-block size-3 mr-1"></i> <span class="align-middle">Ask a
                                                question</span></a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="#!"><i data-lucide="help-circle"
                                                class="inline-block size-3 mr-1"></i> <span
                                                class="align-middle">Help</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p>Product design is the process of developing a usable product that meets customer's needs by defining
                        the users' problems and finding creative solutions for these problems. The term is also used to
                        refer to the result of this process, the design qualities of an existing product.</p>
                    <div class="grid gap-4 mt-4 md:grid-cols-3">
                        <a href="{{ URL::asset('build/images/small/img-6.jpg') }}" class="highlight-story">
                            <img src="{{ URL::asset('build/images/small/img-6.jpg') }}" alt=""
                                class="rounded-md">
                        </a>
                        <a href="{{ URL::asset('build/images/small/img-3.jpg') }}" class="highlight-story">
                            <img src="{{ URL::asset('build/images/small/img-3.jpg') }}" alt=""
                                class="rounded-md">
                        </a>
                        <a href="{{ URL::asset('build/images/small/img-3.jpg') }}" class="highlight-story">
                            <img src="{{ URL::asset('build/images/small/img-5.jpg') }}" alt=""
                                class="rounded-md">
                        </a>
                    </div>
                </div>
                <div class="border-y border-slate-200 card-body dark:border-zink-500">
                    <ul class="flex items-center gap-4 mb-0">
                        <li>
                            <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="messages-square"
                                    class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">224
                                    Comments</span></a>
                        </li>
                        <li>
                            <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="heart"
                                    class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">746
                                    Likes</span></a>
                        </li>
                        <li>
                            <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="send"
                                    class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">47
                                    Share</span></a>
                        </li>
                        <li class="ltr:ml-auto rtl:mr-auto">
                            <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="bookmark"
                                    class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span
                                    class="align-middle">139</span></a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <form action="#!">
                        <div class="flex gap-3">
                            <div class="bg-pink-100 rounded-full size-9 shrink-0 dark:bg-pink-500/20">
                                <img src="{{ URL::asset('build/images/users/avatar-1.png') }}" alt=""
                                    class="rounded-full size-9">
                            </div>
                            <div class="grow">
                                <input type="text" id="commentInput"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Write your comment ...">
                            </div>
                            <div class="shrink-0">
                                <button type="submit"
                                    class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <div class="flex flex-wrap items-center gap-3 mb-5">
                        <div
                            class="size-12 bg-green-100 rounded-full outline-1 outline outline-transparent outline-offset-[3px] [&.active]:outline-custom-500 shrink-0 dark:bg-green-500/20">
                            <img src="{{ URL::asset('build/images/users/avatar-7.png') }}" alt=""
                                class="size-12 rounded-full">
                        </div>
                        <div class="grow">
                            <h6 class="mb-1 text-15"><a href="#!"
                                    class="transition-all duration-200 ease-linear hover:text-custom-500 dark:hover:text-custom-500">Stephen
                                    Tillman</a> -<small class="ml-1 font-normal text-slate-500 dark:text-zink-200">25
                                    min</small></h6>
                            <p class="text-slate-500 dark:text-zink-200">React Developer at <a href="#!"
                                    class="underline">Webfox Info</a></p>
                        </div>
                        <div class="flex items-center gap-2 mt-4 shrink-0 md:mt-4">
                            <button type="button"
                                class="group/item toggle-button active px-2 py-1.5 text-xs bg-white border-dashed text-sky-500 btn border-sky-500 hover:text-sky-500 hover:bg-sky-50 hover:border-sky-600 focus:text-sky-600 focus:bg-sky-50 focus:border-sky-600 active:text-sky-600 active:bg-sky-50 active:border-sky-600 dark:bg-zink-700 dark:ring-sky-400/20 dark:hover:bg-sky-800/20 dark:focus:bg-sky-800/20 dark:active:bg-sky-800/20">
                                <span class="group-[.active]/item:hidden block"><i data-lucide="plus"
                                        class="inline-block size-3 mr-1"></i> Follow</span>
                                <span class="group-[.active]/item:block hidden"><i data-lucide="user-x-2"
                                        class="inline-block size-3 mr-1"></i> Unfollow</span>
                            </button>
                            <div class="relative dropdown">
                                <button
                                    class="dropdown-toggle flex items-center justify-center size-[30px] p-0 bg-white text-sky-500 btn hover:text-sky-500 hover:bg-sky-100 focus:text-sky-500 focus:bg-sky-100 active:text-sky-500 active:bg-sky-100 dark:bg-zink-700 dark:hover:bg-sky-500/10 dark:focus:bg-sky-500/10 dark:active:bg-sky-500/10"
                                    id="socialPost3" data-bs-toggle="dropdown"><i data-lucide="more-horizontal"
                                        class="size-4"></i></button>
                                <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                    aria-labelledby="socialPost3">
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="#!"><i data-lucide="git-pull-request"
                                                class="inline-block size-3 mr-1"></i> <span class="align-middle">Create a
                                                poll</span></a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="#!"><i data-lucide="messages-square"
                                                class="inline-block size-3 mr-1"></i> <span class="align-middle">Ask a
                                                question</span></a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                            href="#!"><i data-lucide="help-circle"
                                                class="inline-block size-3 mr-1"></i> <span
                                                class="align-middle">Help</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p>Add a 'Different Languages' option to the poll.</p>
                    <ul
                        class="inline-flex flex-col gap-3 p-4 mt-4 rounded-md w-80 bg-slate-100 max-w-7xl dark:bg-zink-600">
                        <li>
                            <a href="#!" class="relative flex gap-4 group active">
                                <div class="absolute top-1 ltr:right-1 rtl:left-1">
                                    <i data-lucide="check-circle"
                                        class="size-4 text-green-500 fill-green-200 dark:fill-green-500/20 group-[&.active]:block hidden"></i>
                                </div>
                                <h6 class="shrink-0">1.</h6>
                                <div class="grow">
                                    <h6 href="#!">React Js</h6>
                                    <div class="w-full h-1.5 rounded-full bg-white dark:bg-zink-700 mt-2">
                                        <div class="h-1.5 rounded-full bg-custom-500" style="width: 75%"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="relative flex gap-3 group">
                                <div class="absolute top-1 ltr:right-1 rtl:left-1">
                                    <i data-lucide="check-circle"
                                        class="size-4 text-green-500 fill-green-200 group-[&.active]:block hidden"></i>
                                </div>
                                <h6 class="shrink-0">2.</h6>
                                <div class="grow">
                                    <h6 href="#!">Laravel</h6>
                                    <div class="w-full h-1.5 rounded-full bg-white dark:bg-zink-700 mt-2">
                                        <div class="h-1.5 rounded-full bg-custom-500" style="width: 41%"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="relative flex gap-3 group">
                                <div class="absolute top-1 ltr:right-1 rtl:left-1">
                                    <i data-lucide="check-circle"
                                        class="size-4 text-green-500 fill-green-200 group-[&.active]:block hidden"></i>
                                </div>
                                <h6 class="shrink-0">3.</h6>
                                <div class="grow">
                                    <h6 href="#!">ASP.Net / MVC.Net</h6>
                                    <div class="w-full h-1.5 rounded-full bg-white dark:bg-zink-700 mt-2">
                                        <div class="h-1.5 rounded-full bg-custom-500" style="width: 63%"></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="border-y border-slate-200 card-body dark:border-zink-500">
                    <ul class="flex items-center gap-4 mb-0">
                        <li>
                            <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="messages-square"
                                    class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">495
                                    Comments</span></a>
                        </li>
                        <li>
                            <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="heart"
                                    class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">1.3k
                                    Likes</span></a>
                        </li>
                        <li>
                            <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="send"
                                    class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">203
                                    Share</span></a>
                        </li>
                        <li class="ltr:ml-auto rtl:mr-auto">
                            <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="bookmark"
                                    class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span
                                    class="align-middle">159</span></a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <form action="#!">
                        <div class="flex gap-3">
                            <div class="bg-pink-100 rounded-full size-9 shrink-0 dark:bg-pink-500/20">
                                <img src="{{ URL::asset('build/images/users/avatar-1.png') }}" alt=""
                                    class="rounded-full size-9">
                            </div>
                            <div class="grow">
                                <input type="text" id="commentInput"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Write your comment ...">
                            </div>
                            <div class="shrink-0">
                                <button type="submit"
                                    class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!--end card-->
            <div class="flex justify-center mb-5">
                <button type="button"
                    class="flex items-center text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                    <svg class="size-4 ltr:mr-2 rtl:ml-2 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                            stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                    Load More
                </button>
            </div>
        </div><!--end-->
        <div class="col-span-12 lg:hidden xl:col-span-3 2xl:block shrink-0">
            <div class="card" id="messageList">
                <div class="card-body">
                    <div class="flex items-center gap-3">
                        <h6 class="mb-0 grow text-15">Message <span
                                class="inline-flex items-center justify-center size-6 text-xs font-medium border rounded rtl:mr-1 ltr:ml-1 bg-custom-100 border-custom-100 text-custom-500 dark:bg-custom-400/20 dark:border-transparent">15</span>
                        </h6>
                        <div class="shrink-0">
                            <a href="#!" class="underline text-custom-500">Requests(2)</a>
                        </div>
                    </div>
                    <div class="relative mt-3">
                        <input type="text"
                            class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Search for ..." autocomplete="off">
                        <i data-lucide="search"
                            class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                    </div>
                    <div class="js-read-smore" data-read-smore-words="15">
                        <ul class="flex flex-col gap-3 mt-5 list">
                            <li>
                                <a href="#!"
                                    class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                    <div class="relative rounded-full size-7 bg-slate-100 dark:bg-zink-600">
                                        <img src="{{ URL::asset('build/images/users/avatar-3.png') }}" alt=""
                                            class="rounded-full h-7">
                                        <span
                                            class="bottom-0 ltr:right-0 rtl:left-0 absolute w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                    </div>
                                    <h6
                                        class="transition-all duration-150 ease-linear group-hover/items:text-custom-500 user-name">
                                        Louisa Howe</h6>
                                </a>
                            </li>
                            <li>
                                <a href="#!"
                                    class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                    <div class="relative rounded-full size-7 bg-slate-100 dark:bg-zink-600">
                                        <img src="{{ URL::asset('build/images/users/avatar-4.png') }}" alt=""
                                            class="rounded-full h-7">
                                        <span
                                            class="bottom-0 ltr:right-0 rtl:left-0 absolute w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                    </div>
                                    <h6
                                        class="transition-all duration-150 ease-linear group-hover/items:text-custom-500 user-name">
                                        Everett Moore</h6>
                                </a>
                            </li>
                            <li>
                                <a href="#!"
                                    class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                    <div class="relative rounded-full size-7 bg-slate-100 dark:bg-zink-600">
                                        <img src="{{ URL::asset('build/images/users/avatar-5.png') }}" alt=""
                                            class="rounded-full h-7">
                                        <span
                                            class="bottom-0 ltr:right-0 rtl:left-0 absolute w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                    </div>
                                    <h6
                                        class="transition-all duration-150 ease-linear group-hover/items:text-custom-500 user-name">
                                        Omari Welch</h6>
                                </a>
                            </li>
                            <li>
                                <a href="#!"
                                    class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                    <div class="relative rounded-full size-7 bg-slate-100 dark:bg-zink-600">
                                        <img src="{{ URL::asset('build/images/users/avatar-6.png') }}" alt=""
                                            class="rounded-full h-7">
                                        <span
                                            class="bottom-0 ltr:right-0 rtl:left-0 absolute w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                    </div>
                                    <h6
                                        class="transition-all duration-150 ease-linear group-hover/items:text-custom-500 user-name">
                                        Paul Gerhold</h6>
                                </a>
                            </li>
                            <li>
                                <a href="#!"
                                    class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                    <div class="relative rounded-full size-7 bg-slate-100 dark:bg-zink-600">
                                        <img src="{{ URL::asset('build/images/users/avatar-7.png') }}" alt=""
                                            class="rounded-full h-7">
                                        <span
                                            class="bottom-0 ltr:right-0 rtl:left-0 absolute w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                    </div>
                                    <h6
                                        class="transition-all duration-150 ease-linear group-hover/items:text-custom-500 user-name">
                                        Green Langworth</h6>
                                </a>
                            </li>
                            <li>
                                <a href="#!"
                                    class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                    <div class="relative rounded-full size-7 bg-slate-100 dark:bg-zink-600">
                                        <img src="{{ URL::asset('build/images/users/avatar-8.png') }}" alt=""
                                            class="rounded-full h-7">
                                        <span
                                            class="bottom-0 ltr:right-0 rtl:left-0 absolute w-2.5 h-2.5 bg-red-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                    </div>
                                    <h6
                                        class="transition-all duration-150 ease-linear group-hover/items:text-custom-500 user-name">
                                        Lucie Beahan</h6>
                                </a>
                            </li>
                            <li>
                                <a href="#!"
                                    class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                    <div class="relative rounded-full size-7 bg-slate-100 dark:bg-zink-600">
                                        <img src="{{ URL::asset('build/images/users/avatar-9.png') }}" alt=""
                                            class="rounded-full h-7">
                                        <span
                                            class="bottom-0 ltr:right-0 rtl:left-0 absolute w-2.5 h-2.5 bg-red-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                    </div>
                                    <h6
                                        class="transition-all duration-150 ease-linear group-hover/items:text-custom-500 user-name">
                                        Susana Dooley</h6>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Popular Events</h6>
                    <ul class="flex flex-col gap-4 mt-5">
                        <li>
                            <a href="#!"
                                class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                <div>
                                    <img src="{{ URL::asset('build/images/brand/app-store.png') }}" alt=""
                                        class="h-6 rounded-full">
                                </div>
                                <h6 class="transition-all duration-150 ease-linear group-hover/items:text-custom-500">Music
                                    Festivals</h6>
                            </a>
                        </li>
                        <li>
                            <a href="#!"
                                class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                <div>
                                    <img src="{{ URL::asset('build/images/brand/telegram.png') }}" alt=""
                                        class="h-6 rounded-full">
                                </div>
                                <h6 class="transition-all duration-150 ease-linear group-hover/items:text-custom-500">
                                    Conferences and Seminars</h6>
                            </a>
                        </li>
                        <li>
                            <a href="#!"
                                class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                <div>
                                    <img src="{{ URL::asset('build/images/brand/android.png') }}" alt=""
                                        class="h-6 rounded-full">
                                </div>
                                <h6 class="transition-all duration-150 ease-linear group-hover/items:text-custom-500">
                                    Business Networking Events</h6>
                            </a>
                        </li>
                        <li>
                            <a href="#!"
                                class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                <div>
                                    <img src="{{ URL::asset('build/images/brand/slack.png') }}" alt=""
                                        class="h-6 rounded-full">
                                </div>
                                <h6 class="transition-all duration-150 ease-linear group-hover/items:text-custom-500">Award
                                    Ceremonies</h6>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!--end card-->
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">Upcoming Birthday</h6>
                    <ul class="flex flex-col gap-3 mt-5">
                        <li>
                            <a href="#!"
                                class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                <div class="relative rounded-full size-9 bg-slate-100 dark:bg-zink-600">
                                    <img src="{{ URL::asset('build/images/users/avatar-3.png') }}" alt=""
                                        class="rounded-full h-9">
                                    <span
                                        class="bottom-0 ltr:right-0 rtl:left-0 absolute w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                </div>
                                <div class="grow">
                                    <h6
                                        class="mb-1 transition-all duration-150 ease-linear group-hover/items:text-custom-500">
                                        Louisa Howe</h6>
                                    <p class="text-slate-500">Today</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!"
                                class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                <div class="relative rounded-full size-9 bg-slate-100 dark:bg-zink-600">
                                    <img src="{{ URL::asset('build/images/users/avatar-4.png') }}" alt=""
                                        class="rounded-full h-9">
                                    <span
                                        class="bottom-0 ltr:right-0 rtl:left-0 absolute w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                </div>
                                <div class="grow">
                                    <h6
                                        class="mb-1 transition-all duration-150 ease-linear group-hover/items:text-custom-500">
                                        Everett Moore</h6>
                                    <p class="text-slate-500">Tomorrow</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!"
                                class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                <div class="relative rounded-full size-9 bg-slate-100 dark:bg-zink-600">
                                    <img src="{{ URL::asset('build/images/users/avatar-5.png') }}" alt=""
                                        class="rounded-full h-9">
                                    <span
                                        class="bottom-0 ltr:right-0 rtl:left-0 absolute w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                </div>
                                <div class="grow">
                                    <h6
                                        class="mb-1 transition-all duration-150 ease-linear group-hover/items:text-custom-500">
                                        Omari Welch</h6>
                                    <p class="text-slate-500">13 Nov</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!"
                                class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                <div class="relative rounded-full size-9 bg-slate-100 dark:bg-zink-600">
                                    <img src="{{ URL::asset('build/images/users/avatar-6.png') }}" alt=""
                                        class="rounded-full h-9">
                                    <span
                                        class="bottom-0 ltr:right-0 rtl:left-0 absolute w-2.5 h-2.5 bg-green-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                </div>
                                <div class="grow">
                                    <h6
                                        class="mb-1 transition-all duration-150 ease-linear group-hover/items:text-custom-500">
                                        Paul Gerhold</h6>
                                    <p class="text-slate-500">14 Nov</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div><!--end card-->
        </div><!--end-->
    </div><!--end-->


    <div id="inline-example"
        class="max-h-[600px] !p-3.5 bg-white rounded-md bg-cover bg-no-repeat relative bg-[url('https://cdn.dribbble.com/userupload/3012253/file/original-dd6cf163ea8f5617304d9d41f6ff38e7.png?resize=1024x768')]"
        style="display: none">
        <div
            class="absolute inset-0 before:absolute before:bg-gradient-to-b before:from-black/50 before:to-transparent before:top-0 before:right-0 before:left-0 before:h-20 after:absolute after:bg-gradient-to-b after:form-transparent after:to-black/50 after:bottom-0 after:right-0 after:left-0 after:h-20">
        </div>
        <div class="relative flex flex-col h-full inline-inner">
            <div class="absolute right-0.5 top-0.5">
                <a class="transition-all duration-200 ease-linear gtrigger-close inline-close-btn text-slate-50 hover:text-white"
                    href="#"><i data-lucide="x"></i></a>
            </div>
            <div class="flex items-center gap-3 mb-5">
                <div
                    class="size-12 bg-green-100 rounded-full outline-1 outline outline-transparent outline-offset-[3px] [&.active]:outline-custom-500 shrink-0">
                    <img src="{{ URL::asset('build/images/users/avatar-8.png') }}" alt=""
                        class="size-12 rounded-full">
                </div>
                <div class="grow">
                    <h6 class="mb-1 text-white text-15"><a href="#!">Frances Zboncak</a></h6>
                    <p class="text-white">25 min ago</p>
                </div>
            </div>
            <div class="flex items-center gap-2 pt-16 mt-auto">
                <div class="grow">
                    <label for="inputText" class="hidden mb-2 text-base font-medium">Text <span
                            class="text-red-500">*</span></label>
                    <input type="text" id="inputText"
                        class="border-transparent form-input focus:outline-none bg-white/80 backdrop-blur-md disabled:bg-slate-100 disabled:border-slate-300"
                        placeholder="Reply for story ..." required="">
                </div>
                <button type="button"
                    class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 bg-white text-red-500 btn bg-transparent border-red-500 hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 active:text-white active:bg-red-600 active:border-red-600"><i
                        data-lucide="heart" class="size-4"></i></button>
            </div>
        </div>
    </div>

    <div id="imagesVideoPostModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                <h5 class="text-16">Add Post Image / Video</h5>
                <button data-modal-close="imagesVideoPostModal"
                    class="transition-all duration-200 ease-linear text-slate-500 dark:text-zink-200 hover:text-red-500 dark:hover:text-red-500"><i
                        data-lucide="x" class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="#!">
                    <div class="mb-4">
                        <label for="postTitle" class="inline-block mb-2 text-base font-medium">Post Title</label>
                        <input type="text" id="postTitle"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Enter title">
                    </div>
                    <div class="mb-4">
                        <label for="descriptionInput" class="inline-block mb-2 text-base font-medium">Description</label>
                        <textarea
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            id="descriptionInput" rows="3"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="mentionUserSelect" class="inline-block mb-2 text-base font-medium">@Mention</label>
                        <input
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            id="mentionUserSelect" data-choices data-choices-text-unique-true type="text"
                            value="@shaylee-pouros">
                    </div>
                    <div class="mb-4">
                        <label class="inline-block mb-2 text-base font-medium">Images / Video</label>
                        <div
                            class="flex items-center justify-center bg-white border border-dashed rounded-md cursor-pointer dropzone border-slate-300 dropzone2 dark:bg-zink-700 dark:border-zink-500">
                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="w-full py-5 text-lg text-center dz-message needsclick">
                                <div class="mb-3">
                                    <i data-lucide="upload-cloud"
                                        class="block size-12 mx-auto text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-600"></i>
                                </div>

                                <h5 class="mb-0 font-normal text-slate-500 dark:text-zink-200 text-15">Drag and drop your
                                    images / video or <a href="#!">browse</a> your images / video</h5>
                            </div>
                        </div>

                        <ul class="flex flex-wrap mb-0 gap-x-5" id="dropzone-preview2">
                            <li class="mt-5" id="dropzone-preview-list2">
                                <!-- This is used as the file preview template -->
                                <div class="border rounded border-slate-200 dark:border-zink-500">
                                    <div class="p-2 text-center">
                                        <div>
                                            <div class="p-2 mx-auto rounded-md size-14 bg-slate-100 dark:bg-zink-500">
                                                <img data-dz-thumbnail class="block w-full h-full rounded-md"
                                                    src="{{ URL::asset('build/images/new-document.png') }}"
                                                    alt="Dropzone-Image">
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <h5 class="mb-1 text-15" data-dz-name>&nbsp;</h5>
                                            <p class="mb-0 text-slate-500 dark:text-zink-200" data-dz-size></p>
                                            <strong class="text-red-500 error" data-dz-errormessage></strong>
                                        </div>
                                        <div class="mt-2">
                                            <button data-dz-remove
                                                class="px-2 py-1.5 text-xs text-white bg-purple-500 border-purple-500 btn hover:text-white hover:bg-purple-600 hover:border-purple-600 focus:text-white focus:bg-purple-600 focus:border-purple-600 focus:ring focus:ring-purple-100 active:text-white active:bg-purple-600 active:border-purple-600 active:ring active:ring-purple-100 dark:ring-purple-400/10">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="text-right">
                        <button type="submit"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Share
                            Post</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="eventModal" modal-center
        class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                <h5 class="text-16">Create a Event</h5>
                <button data-modal-close="eventModal"
                    class="transition-all duration-200 ease-linear text-slate-500 dark:text-zink-200 hover:text-red-500 dark:hover:text-red-500"><i
                        data-lucide="x" class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="#!">
                    <div class="mb-4">
                        <label for="eventTitle" class="inline-block mb-2 text-base font-medium">Title</label>
                        <input type="text" id="eventTitle"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Event title">
                    </div>
                    <div class="mb-4">
                        <label for="eventDateInput" class="inline-block mb-2 text-base font-medium">Event Date</label>
                        <input type="text"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 flatpickr-input"
                            id="eventDateInput" data-provider="flatpickr" data-date-format="d M, Y" readonly="readonly"
                            placeholder="Select Date">
                    </div>
                    <div class="mb-4">
                        <label for="eventTimeInput" class="inline-block mb-2 text-base font-medium">Event Date</label>
                        <input type="text"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 flatpickr-input"
                            id="eventTimeInput" data-provider="timepickr" data-time-basic="true"
                            placeholder="Select Time">
                    </div>
                    <div class="mb-4">
                        <label for="descriptionEventInput"
                            class="inline-block mb-2 text-base font-medium">Description</label>
                        <textarea
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            id="descriptionEventInput" rows="2"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="location" class="inline-block mb-2 text-base font-medium">Location</label>
                        <input
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            id="location" type="text" placeholder="Enter location">
                    </div>
                    <div class="text-right">
                        <button type="submit"
                            class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Create
                            Event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <!-- list js-->
    <script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
    <script src="{{ URL::asset('build/libs/glightbox/js/glightbox.min.js') }}"></script>

    <!-- apps social feed init js-->
    <script src="{{ URL::asset('build/js/pages/apps-dashboards-social.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endpush
