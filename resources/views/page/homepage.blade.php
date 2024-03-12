@extends('layouts.page')

@section('title')
<title>{{ __('Trang chủ') }} | Kattech PC</title>
@endsection

@section('content')
<div class="main-slider">
    <div class="main-menu">
        <nav class="main-menu-nav">
            <ul class="main-menu-list">
                <li class="main-menu-item">
                    <span>Laptop</span>
                    <svg viewBox="0 0 6 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 1.5L4.5 4L1.5 6.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </li>
            </ul>
        </nav>
    </div>

    <div class="main-banner" style="display: none;">

    </div>
</div>
@endsection
