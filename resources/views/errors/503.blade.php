

@extends('layouts.master-without-nav')

@section('title')
{{ __('503') }}
@endsection

@section('content')
<div class="mb-0 border-none shadow-none lg:w-[500px] card bg-white/70 dark:bg-zink-500/70">
    <div class="!px-10 !py-12 card-body">
        <a href="index">
            <img src="{{ URL::asset('build/images/logo-light.png') }}" alt="" class="hidden h-6 mx-auto dark:block">
            <img src="{{ URL::asset('build/images/logo-dark.png') }}" alt="" class="block h-6 mx-auto dark:hidden">
        </a>

        <div class="mt-10">
            <img src="{{ URL::asset('build/images/auth/maintenance.png') }}" alt="" class="h-64 mx-auto">
        </div>
        <div class="mt-8 text-center">
            <h4 class="mb-2 text-purple-500">OPPS, SERVICE UNAVAILABLE</h4>
            <p class="mb-6 text-slate-500 dark:text-zink-200">It will be as straightforward as Occidental; in fact,
                it will be just like Occidental to an English speaker.</p>
            <form action="{{ route('admin.toggleMaintenanceMode')}}" method="POST">
                <div class="relative flex items-center h-header" style="text-align:center">
                        @csrf
                        <button style="margin: 0 auto; display: block" class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 align-middle"
                                type="submit" name="enable" value="0">Maintenance Mode
                        </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
