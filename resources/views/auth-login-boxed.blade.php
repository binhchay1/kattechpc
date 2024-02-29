@extends('layouts.master-without-nav')
@section('title')
    {{ __('Sign In') }}
@endsection
@section('content')

    <body
        class="flex items-center justify-center min-h-screen px-4 py-16 bg-cover bg-auth-pattern dark:bg-auth-pattern-dark dark:text-zink-100 font-public">

        <div class="mb-0 border-none shadow-none xl:w-2/3 card bg-white/70 dark:bg-zink-500/70">
            <div class="grid grid-cols-1 gap-0 lg:grid-cols-12">
                <div class="lg:col-span-5">
                    <div class="!px-12 !py-12 card-body">

                        <div class="text-center">
                            <h4 class="mb-2 text-purple-500 dark:text-purple-500">Welcome Back !</h4>
                            <p class="text-slate-500 dark:text-zink-200">Sign in to continue to Tailwick.</p>
                        </div>

                        <form action="#!" class="mt-10" id="signInForm">
                            <div class="hidden px-4 py-3 mb-3 text-sm text-green-500 border border-green-200 rounded-md bg-green-50 dark:bg-green-400/20 dark:border-green-500/50"
                                id="successAlert">
                                You have <b>successfully</b> signed in.
                            </div>
                            <div class="mb-3">
                                <label for="username" class="inline-block mb-2 text-base font-medium">UserName/ Email
                                    ID</label>
                                <input type="text" id="username"
                                    class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Enter username or email">
                                <div id="username-error" class="hidden mt-1 text-sm text-red-500">Please enter a valid email
                                    address.</div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="inline-block mb-2 text-base font-medium">Password</label>
                                <input type="password" id="password"
                                    class="form-input dark:bg-zink-600/50 border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    placeholder="Enter password">
                                <div id="password-error" class="hidden mt-1 text-sm text-red-500">Password must be at least
                                    8 characters long and contain both letters and numbers.</div>
                            </div>
                            <div>
                                <div class="flex items-center gap-2">
                                    <input id="checkboxDefault1"
                                        class="size-4 border rounded-sm appearance-none bg-slate-100 border-slate-200 dark:bg-zink-600/50 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400"
                                        type="checkbox" value="">
                                    <label for="checkboxDefault1"
                                        class="inline-block text-base font-medium align-middle cursor-pointer">Remember
                                        me</label>
                                </div>
                                <div id="remember-error" class="hidden mt-1 text-sm text-red-500">Please check the "Remember
                                    me" before submitting the form.</div>
                            </div>
                            <div class="mt-10">
                                <button type="submit"
                                    class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Sign
                                    In</button>
                            </div>

                            <div
                                class="relative text-center my-9 before:absolute before:top-3 before:left-0 before:right-0 before:border-t before:border-t-slate-200 dark:before:border-t-zink-500">
                                <h5
                                    class="inline-block px-2 py-0.5 text-sm bg-white text-slate-500 dark:bg-zink-600 dark:text-zink-200 rounded relative">
                                    Sign In with</h5>
                            </div>

                            <div class="flex flex-wrap justify-center gap-2">
                                <button type="button"
                                    class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 active:text-white active:bg-custom-600 active:border-custom-600"><i
                                        data-lucide="facebook" class="size-4"></i></button>
                                <button type="button"
                                    class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 text-white btn bg-orange-500 border-orange-500 hover:text-white hover:bg-orange-600 hover:border-orange-600 focus:text-white focus:bg-orange-600 focus:border-orange-600 active:text-white active:bg-orange-600 active:border-orange-600"><i
                                        data-lucide="mail" class="size-4"></i></button>
                                <button type="button"
                                    class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 text-white btn bg-sky-500 border-sky-500 hover:text-white hover:bg-sky-600 hover:border-sky-600 focus:text-white focus:bg-sky-600 focus:border-sky-600 active:text-white active:bg-sky-600 active:border-sky-600"><i
                                        data-lucide="twitter" class="size-4"></i></button>
                                <button type="button"
                                    class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 text-white btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 active:text-white active:bg-slate-600 active:border-slate-600"><i
                                        data-lucide="github" class="size-4"></i></button>
                            </div>

                            <div class="mt-10 text-center">
                                <p class="mb-0 text-slate-500 dark:text-zink-200">Don't have an account ? <a
                                        href="{{ url('auth-signup-cover') }}"
                                        class="font-semibold underline transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500">
                                        SignUp</a> </p>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mx-2 mt-2 mb-2 border-none shadow-none lg:col-span-7 card bg-white/60 dark:bg-zink-500/60">
                    <div class="!px-10 !pt-10 h-full !pb-0 card-body flex flex-col">
                        <div class="flex items-center justify-between gap-3">
                            <div class="grow">
                                <a href="index">
                                    <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" class="hidden h-6 dark:block">
                                    <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" class="block h-6 dark:hidden">
                                </a>
                            </div>
                            <div class="shrink-0">
                                <div class="relative dropdown text-end">
                                    <button type="button"
                                        class="inline-flex items-center gap-3 transition-all duration-200 ease-linear dropdown-toggle btn border-slate-200 dark:border-zink-400/60 group/items focus:border-custom-500 dark:focus:border-custom-500"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown">
                                        <img src="{{ URL::asset('build/images/flags/us.svg') }}" alt=""
                                            class="object-cover h-5 rounded-full">
                                        <h6
                                            class="text-base font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500 dark:text-zink-200 dark:group-hover/items:text-custom-500">
                                            English</h6>
                                    </button>

                                    <div class="absolute z-50 hidden p-3 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[9rem] flex flex-col gap-3 dark:bg-zink-600"
                                        aria-labelledby="dropdownMenuButton">
                                        <a href="#!" class="flex items-center gap-3 group/items">
                                            <img src="{{ URL::asset('build/images/flags/us.svg') }}" alt=""
                                                class="object-cover h-4 rounded-full">
                                            <h6
                                                class="text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500 dark:text-zink-200 dark:group-hover/items:text-custom-500">
                                                English</h6>
                                        </a>
                                        <a href="#!" class="flex items-center gap-3 group/items">
                                            <img src="{{ URL::asset('build/images/flags/es.svg') }}" alt=""
                                                class="object-cover h-4 rounded-full">
                                            <h6
                                                class="text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500 dark:text-zink-200 dark:group-hover/items:text-custom-500">
                                                Spanish</h6>
                                        </a>
                                        <a href="#!" class="flex items-center gap-3 group/items">
                                            <img src="{{ URL::asset('build/images/flags/de.svg') }}" alt=""
                                                class="object-cover h-4 rounded-full">
                                            <h6
                                                class="text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500 dark:text-zink-200 dark:group-hover/items:text-custom-500">
                                                German</h6>
                                        </a>
                                        <a href="#!" class="flex items-center gap-3 group/items">
                                            <img src="{{ URL::asset('build/images/flags/fr.svg') }}" alt=""
                                                class="object-cover h-4 rounded-full">
                                            <h6
                                                class="text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500 dark:text-zink-200 dark:group-hover/items:text-custom-500">
                                                French</h6>
                                        </a>
                                        <a href="#!" class="flex items-center gap-3 group/items">
                                            <img src="{{ URL::asset('build/images/flags/jp.svg') }}" alt=""
                                                class="object-cover h-4 rounded-full">
                                            <h6
                                                class="text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500 dark:text-zink-200 dark:group-hover/items:text-custom-500">
                                                Japanese</h6>
                                        </a>
                                        <a href="#!" class="flex items-center gap-3 group/items">
                                            <img src="{{ URL::asset('build/images/flags/it.svg') }}" alt=""
                                                class="object-cover h-4 rounded-full">
                                            <h6
                                                class="text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500 dark:text-zink-200 dark:group-hover/items:text-custom-500">
                                                Italian</h6>
                                        </a>
                                        <a href="#!" class="flex items-center gap-3 group/items">
                                            <img src="{{ URL::asset('build/images/flags/ru.svg') }}" alt=""
                                                class="object-cover h-4 rounded-full">
                                            <h6
                                                class="text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500 dark:text-zink-200 dark:group-hover/items:text-custom-500">
                                                Russian</h6>
                                        </a>
                                        <a href="#!" class="flex items-center gap-3 group/items">
                                            <img src="{{ URL::asset('build/images/flags/ae.svg') }}" alt=""
                                                class="object-cover h-4 rounded-full">
                                            <h6
                                                class="text-sm font-medium transition-all duration-200 ease-linear text-slate-600 group-hover/items:text-custom-500 dark:text-zink-200 dark:group-hover/items:text-custom-500">
                                                Arabic</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto">
                            <img src="{{ URL::asset('build/images/auth/img-01.png') }}" alt="" class="md:max-w-[32rem] mx-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @push('scripts')
        <script src="{{ URL::asset('build/js/pages/auth-login.init.js') }}"></script>
    @endpush
