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
                        <img class="img-fluid w-100" src="{{asset('/images/cart.jpg')}}" style="object-fit: cover;">
                        <div class="">

                            <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                            <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" src="{{asset('/images/cart.jpg')}}" style="object-fit: cover;">
                        <div class="">
                            <a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a>
                            <p class="m-0">Rebum dolore duo et vero ipsum clita, est ea sed duo diam ipsum, clita at justo, lorem amet vero eos sed sit...</p>
                        </div>
                    </div>
                </div>
                <div class="row top1">
                    <h1 class="text"> {{__('Tin công nghệ')}}</h1>
                    <div class="parent">
                        <div class="child">
                            <img class="img-fluid w-100" src="{{asset('/images/cart.jpg')}}" style="object-fit: cover;">
                            <div class="">
                                <a  href="">Est stet amet ipsum stet clita rebum duo</a>
                            </div>
                        </div>
                        <div class="child">
                            <img class="img-fluid w-100" src="{{asset('/images/cart.jpg')}}" style="object-fit: cover;">
                            <div class="">
                                <a  href="">Est stet amet ipsum stet clita rebum duo</a>
                            </div>
                        </div>
                        <div class="child">
                            <img class="img-fluid w-100" src="{{asset('/images/cart.jpg')}}" style="object-fit: cover;">
                            <div class="">
                                <a  href="">Est stet amet ipsum stet clita rebum duo</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="hr">
                <div id="content">
                    <div id="left">
                        <img  src="https://source.unsplash.com/87kYkk3oHTM/395x225" alt="Image Alt" class="img-fluid" />
                    </div>
                    <div id="right">
                        <div id="object3">lorem ipsum</div>
                        <div id="object4">dolor site amet</div>
                    </div>
                </div>
                <hr class="hr">
                <div id="content">
                    <div id="left">
                        <img  src="https://source.unsplash.com/87kYkk3oHTM/395x225" alt="Image Alt" class="img-fluid" />
                    </div>
                    <div id="right">
                        <div id="object3">lorem ipsum</div>
                        <div id="object4">dolor site amet</div>
                    </div>
                </div>
                <hr class="hr">
                <div id="content">
                    <div id="left">
                        <img  src="https://source.unsplash.com/87kYkk3oHTM/395x225" alt="Image Alt" class="img-fluid" />
                    </div>
                    <div id="right">
                        <div id="object3">lorem ipsum</div>
                        <div id="object4">dolor site amet</div>
                    </div>
                </div>
                <hr class="hr">
                <div id="content">
                    <div id="left">
                        <img  src="https://source.unsplash.com/87kYkk3oHTM/395x225" alt="Image Alt" class="img-fluid" />
                    </div>
                    <div id="right">
                        <div id="object3">lorem ipsum</div>
                        <div id="object4">dolor site amet</div>
                    </div>
                </div>
                <hr class="hr">

            </div>

            <div class="column2">
                <div class="row top1">
                    <h2 class="text"> {{__('Chủ đề hót')}}</h2>
                    <div class="parent1">
                        <div class="child1">
                            <img src="https://file.hstatic.net/200000722513/file/laptop_1f3300ec0cf1455ca3b5199859d9cfd7.jpg" class="item-hot">
                            <span class="policy-title">{{ __('DELL') }}</span>
                        </div>
                        <div class="child1">
                            <img src="https://file.hstatic.net/200000722513/file/laptop_1f3300ec0cf1455ca3b5199859d9cfd7.jpg" class="item-hot">
                            <span class="policy-title">{{ __('DELL') }}</span>
                        </div>
                        <div class="child1">
                            <img src="https://file.hstatic.net/200000722513/file/laptop_1f3300ec0cf1455ca3b5199859d9cfd7.jpg" class="item-hot">
                            <span class="policy-title">{{ __('DELL') }}</span>
                        </div>
                        <div class="child1">
                            <img src="https://file.hstatic.net/200000722513/file/laptop_1f3300ec0cf1455ca3b5199859d9cfd7.jpg" class="item-hot">
                            <span class="policy-title">{{ __('DELL') }}</span>
                        </div>
                        <div class="child1">
                            <img src="https://file.hstatic.net/200000722513/file/laptop_1f3300ec0cf1455ca3b5199859d9cfd7.jpg" class="item-hot">
                            <span class="policy-title">{{ __('DELL') }}</span>
                        </div>
                        <div class="child1">
                            <img src="https://file.hstatic.net/200000722513/file/laptop_1f3300ec0cf1455ca3b5199859d9cfd7.jpg" class="item-hot">
                            <span class="policy-title">{{ __('DELL') }}</span>
                        </div>
                    </div>
                </div>

                <div class="row top1">
                    <h2 class="text"> {{__('Chủ đề game')}}</h2>
                    <div class="parent1">
                        <div class="child1">
                            <img src="https://file.hstatic.net/200000722513/file/laptop_1f3300ec0cf1455ca3b5199859d9cfd7.jpg" class="item-hot">
                            <span class="policy-title">{{ __('DELL') }}</span>
                        </div>
                        <div class="child1">
                            <img src="https://file.hstatic.net/200000722513/file/laptop_1f3300ec0cf1455ca3b5199859d9cfd7.jpg" class="item-hot">
                            <span class="policy-title">{{ __('DELL') }}</span>
                        </div>
                        <div class="child1">
                            <img src="https://file.hstatic.net/200000722513/file/laptop_1f3300ec0cf1455ca3b5199859d9cfd7.jpg" class="item-hot">
                            <span class="policy-title">{{ __('DELL') }}</span>
                        </div>
                        <div class="child1">
                            <img src="https://file.hstatic.net/200000722513/file/laptop_1f3300ec0cf1455ca3b5199859d9cfd7.jpg" class="item-hot">
                            <span class="policy-title">{{ __('DELL') }}</span>
                        </div>
                        <div class="child1">
                            <img src="https://file.hstatic.net/200000722513/file/laptop_1f3300ec0cf1455ca3b5199859d9cfd7.jpg" class="item-hot">
                            <span class="policy-title">{{ __('DELL') }}</span>
                        </div>
                        <div class="child1">
                            <img src="https://file.hstatic.net/200000722513/file/laptop_1f3300ec0cf1455ca3b5199859d9cfd7.jpg" class="item-hot">
                            <span class="policy-title">{{ __('DELL') }}</span>
                        </div>
                    </div>
                </div>
                <div class="row top1">
                    <h2 class="text"> {{__('Chủ đề hót')}}</h2>
                    <div id="content">
                        <div id="left">
                            <img  src="https://source.unsplash.com/87kYkk3oHTM/395x225" alt="Image Alt" class="img-fluid" />
                        </div>
                        <div id="right">
                            <div id="object3">lorem ipsum</div>
                            <div id="object4">dolor site amet</div>
                        </div>
                    </div>
                    <div id="content">
                        <div id="left">
                            <img  src="https://source.unsplash.com/87kYkk3oHTM/395x225" alt="Image Alt" class="img-fluid" />
                        </div>
                        <div id="right">
                            <div id="object3">lorem ipsum</div>
                            <div id="object4">dolor site amet</div>
                        </div>
                    </div>
                    <div id="content">
                        <div id="left">
                            <img  src="https://source.unsplash.com/87kYkk3oHTM/395x225" alt="Image Alt" class="img-fluid" />
                        </div>
                        <div id="right">
                            <div id="object3">lorem ipsum</div>
                            <div id="object4">dolor site amet</div>
                        </div>
                    </div>  <div id="content">
                        <div id="left">
                            <img  src="https://source.unsplash.com/87kYkk3oHTM/395x225" alt="Image Alt" class="img-fluid" />
                        </div>
                        <div id="right">
                            <div id="object3">lorem ipsum</div>
                            <div id="object4">dolor site amet</div>
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
