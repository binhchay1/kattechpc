@extends('layouts.page')

@section('title')
    <title>{{ __('Trang chủ') }} | Kattech PC</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('/plugins/owlcarousel/owl.theme.default.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/page/post.css') }}"/>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="column1 ">
                <div class="col">
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" style="object-fit: cover;" alt="Auto Chess phiên bản PC" src="//file.hstatic.net/200000722513/file/tai-auto-chess-pc-9_029caa4b583e452aa59804a2ba2fc1dd.jpg">
                        <div class="">

                            <h2><a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a></h2>
                            <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" style="object-fit: cover;" alt="Auto Chess phiên bản PC" src="//file.hstatic.net/200000722513/file/tai-auto-chess-pc-9_029caa4b583e452aa59804a2ba2fc1dd.jpg">
                        <div class="">
                            <h2><a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a></h2>
                            <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                        </div>
                    </div>
                </div>
                <div class="row top1">
                    <h1 class="text"> {{__('Tin công nghệ')}}</h1>
                    <div class="parent">
                        <div class="child">
                            <img class="img-fluid w-100" src="//file.hstatic.net/200000722513/file/asus_your_voice_matter_a4653e90979c4c50bb3eee5539e96d42_grande.jpg" style="object-fit: cover;">
                            <div class="">
                                <h2><a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a></h2>
                            </div>
                        </div>
                        <div class="child">
                            <img class="img-fluid w-100" src="//file.hstatic.net/200000722513/file/gearvn-cach-download-game-dragon-city-cuc-de-cho-pc-laptop-2_6947843f0b8740efa12fa22c7e010778.jpg" style="object-fit: cover;">
                            <div class="">
                                <h2><a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a></h2>
                            </div>
                        </div>
                        <div class="child">
                            <img class="img-fluid w-100" src="//file.hstatic.net/200000722513/file/monica-ung-dung-ai-mien-phi-d112940-7_187087bd2ddb46c1acdd81b5c1defc89.jpg" style="object-fit: cover;">
                            <div class="">
                                <h2><a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="hr">
                <div id="content">
                    <div id="left">
                        <img  src="https://hanoicomputercdn.com/media/news/2492_msi_monitor_oled_32_inch_gaming_hero.jpg" alt="Image Alt" class="img-fluid" />
                    </div>
                    <div id="content-right">
                        <div id="object3">
                            <h2>  MSI đối đầu với ASUS trong cuộc chiến giá cả bằng màn hình OLED mới</h2>
                        </div>
                        <div id="object4">dolor site amet dolor site ame dolor site ame dolor site ame dolor site ame</div>
                    </div>
                </div>
                <hr class="hr">
                <div id="content">
                    <div id="left">
                        <img  src="https://hanoicomputercdn.com/media/news/2467_aorus_co49dq_gaming_monitor_01.png" alt="Image Alt" class="img-fluid" />
                    </div>
                    <div id="content-right">
                        <div id="object3">
                            <h2>  GIGABYTE hâm nóng thị trường màn OLED siêu rộng nhờ cái tên Aorus CO49DQ</h2>
                        </div>
                        <div id="object4">dolor site amet dolor site ame dolor site ame dolor site ame dolor site ame</div>
                    </div>
                </div>
                <hr class="hr">
                <div id="content">
                    <div id="left">
                        <img  src="https://hanoicomputercdn.com/media/news/2463_acer_predator_z57_hero_1200x624.jpg" alt="Image Alt" class="img-fluid" />
                    </div>
                    <div id="content-right" >
                        <div id="object3">
                            <h2>Đánh Giá Màn hình Mini-LED Acer Predator Z57 với độ phân giải Dual-4K 120Hz
                            </h2>
                        </div>
                        <div id="object4">dolor site amet dolor site ame dolor site ame dolor site ame dolor site ame</div>
                    </div>
                </div>
                <hr class="hr">
                <div id="content">
                    <div id="left">
                        <img  src="https://hanoicomputercdn.com/media/news/2187_adobe_premiere_pro_la_gi.jpg" alt="Image Alt" class="img-fluid" />
                    </div>
                    <div id="content-right">
                        <div id="object3">
                            <h2>  Cấu hình tối ưu cho phần mềm Adobe Premiere Pro</h2>
                        </div>
                        <div id="object4">dolor site amet dolor site ame dolor site ame dolor site ame dolor site ame</div>
                    </div>
                </div>
                <hr class="hr">
            </div>

            <div class="column2" >
                <div class="row top1">
                    <h2 class="text"> {{__('Chủ đề hót')}}</h2>
                    <div class="parent1">
                        <div class="child1">
                            <img src="https://file.hstatic.net/200000722513/file/laptop_1f3300ec0cf1455ca3b5199859d9cfd7.jpg" class="item-hot">
                            <span class="policy-title">{{ __('Laptop') }}</span>
                        </div>
                        <div class="child1">
                            <img src="https://file.hstatic.net/200000722513/file/pc_db4c030d7ae1452987001ec502eae18d.jpg" class="item-hot">
                            <span class="policy-title">{{ __('PC') }}</span>
                        </div>
                        <div class="child1">
                            <img src="https://file.hstatic.net/200000722513/file/man-hinh_2c8cde62363045ed8c46944b1a732458.jpg" class="item-hot">
                            <span class="policy-title">{{ __('Màn hình') }}</span>
                        </div>
                        <div class="child1">
                            <img src="https://file.hstatic.net/200000722513/file/chuot_c2b601fad5b640898d1666b20bc50b34.jpg" class="item-hot">
                            <span class="policy-title">{{ __('Chuột') }}</span>
                        </div>
                        <div class="child1">
                            <img src="https://file.hstatic.net/200000722513/file/ban_phim_7442ed8375924db8816fcbd97a5180ce.jpg" class="item-hot">
                            <span class="policy-title">{{ __('Bàn phím') }}</span>
                        </div>
                        <div class="child1">
                            <img src="https://file.hstatic.net/200000722513/file/linh_kien_pc_23daa86cd21c44b6bc25bb4bab722cf0.jpg" class="item-hot">
                            <span class="policy-title">{{ __('Linh kiện') }}</span>
                        </div>
                    </div>
                </div>

                <div class="row top2">
                    <h2 class="text"> {{__('Xem nhanh')}}</h2>
                    <div id="content">
                        <div id="left">
                            <img  src="//file.hstatic.net/200000722513/article/qs52fmcytlbgvuxz3qg4qz_cc949470e374424b905374e3b47cdd1a_grande.jpg" alt="Image Alt" class="img-fluid" />
                        </div>
                        <div id="content-right">
                            <h4>  Cấu hình tối ưu cho phần mềm Adobe Premiere Pro</h4>
                        </div>
                    </div>
                    <div id="content">
                        <div id="left">
                            <img  src="//file.hstatic.net/200000722513/article/fakfunzqqhzxpbxsak8rgu_f58ad986fbe740a9bb59185f9f0de0e4_grande.jpg" alt="Image Alt" class="img-fluid" />
                        </div>
                        <div id="content-right">
                            <h4>  Cấu hình tối ưu cho phần mềm Adobe Premiere Pro</h4>
                        </div>
                    </div>
                    <div id="content">
                        <div id="left">
                            <img  src="https://source.unsplash.com/87kYkk3oHTM/395x225" alt="Image Alt" class="img-fluid" />
                        </div>
                        <div id="content-right">
                            <h4>  Cấu hình tối ưu cho phần mềm Adobe Premiere Pro</h4>
                        </div>
                    </div>  <div id="content">
                        <div id="left">
                            <img  src="//file.hstatic.net/200000722513/article/csm_intel_laptop_cpu__6_09f6777123_0b42cabfa18b4e348bdd77064de48bed_grande.png" alt="Image Alt" class="img-fluid" />
                        </div>
                        <div id="content-right">
                            <h4>  Cấu hình tối ưu cho phần mềm Adobe Premiere Pro</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('js')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/plugins/owlcarousel/owl.carousel.min.js') }}"></script>
    <script>
        $('.vendor-carousel').owlCarousel({
            loop: true,
            nav: false,
            autoplay: true,
            smartSpeed: 1000,
        });
    </script>
@endsection
