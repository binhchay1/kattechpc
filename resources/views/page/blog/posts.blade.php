@extends('layouts.page')

@section('title')
    <title>{{ __('Trang chủ') }} | Kattech PC</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('/plugins/owlcarousel/owl.theme.default.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/page/post.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="column1">
                <div class="top5 ">
                    @foreach($listPostRandom as $random)
                    <div class="col">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" style="object-fit: cover;" alt="Auto Chess phiên bản PC" src="{{$random->thumbnail ?? asset('images/page/no-image.png')}}">
                            <div class="content-top">
                                <h2><a href="{{route('post.detail', $random['slug'])}}" class="h4" href="">{{$random->title}}</a></h2>
                                <?php $text = \Illuminate\Support\Str::limit($random->short_description, 120) ?>
                                <p class="m-0">{{ $text}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class=" top1">
                    <h1 class="content-tech " > {{__('Tin công nghệ')}}</h1>
                    <hr class="hr">

                    <div class="parent">
                        @foreach($listPostDESC as $postDESC)
                        <div class="child">
                            <img class="img-fluid w-100" src="{{$random->thumbnail ?? asset('images/page/no-image.png')}}" style="object-fit: cover;">
                            <div class="">
                                <h2><a class="text-tech" href="">{{$postDESC->title}}</a></h2>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <hr class="hr">
                <div>
                    @foreach($listPostASC as $postASC)
                        <div id="content">
                            <div id="left">
                                <img  src="{{$postASC->thumbnail ?? asset( 'images/page/no-image.png')}}" alt="Image Alt" class="img-fluid1" />
                            </div>
                            <div id="content-right">
                                <div id="object3">
                                    <h2> {{$postASC->title}}</h2>
                                </div>
                                <div id="object4">
                                    <p class="time-article d-flex align-items-center gap-4">
                                        <i class="fa fa-clock-o" style="font-size:16px"></i>
                                        <span style="margin-left:10px">{{$postASC->created_at}} </span>
                                    </p>
                                </div>

                                <div id="object4">
                                    <p class="m-0">{{$postASC->short_description}}</p>
                                </div>
                            </div>
                        </div>
                        <hr class="hr">
                    @endforeach
                </div>
            </div>

            <div class="column2" >
                <div class="row top1">
                    <h2 class="text-title"> {{__('Chủ đề hót')}}</h2>
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
                    <h2 class="text-title"> {{__('Xem nhanh')}}</h2>
                    @foreach($listPost as $post)
                    <div id="content">
                        <div id="left">
                            <img  src="{{$post->thumbnail ?? asset( 'images/page/no-image.png')}}" alt="Image Alt" class="img-fluid2" />
                        </div>
                        <div id="content-right">
                            <h4>{{$post->title}}</h4>
                        </div>
                    </div>
                        @endforeach
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
