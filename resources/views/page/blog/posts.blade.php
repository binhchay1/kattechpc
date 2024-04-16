@extends('layouts.page')

@section('title')
<title>{{ __('Chi tiết bài viết') }} | Kattech PC</title>
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('/plugins/owlcarousel/owl.theme.default.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/page/post.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')
<div class="container">
    <div class="row d-flex">
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
                <h1 class="content-tech "> {{__('Tin công nghệ')}}</h1>
                <hr class="hr">

                <div class="parent">
                    @foreach($listPostDESC as $postDESC)
                    <div class="child">
                        <img class="img-fluid w-100" src="{{ $random->thumbnail ?? asset('images/page/no-image.png') }}" style="object-fit: cover;">
                        <div class="">
                            <h2><a class="text-tech" href="">{{ $postDESC->title }}</a></h2>
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
                        <img src="{{ $postASC->thumbnail ?? asset( 'images/page/no-image.png')}}" alt="Image Alt" class="img-fluid1" />
                    </div>
                    <div id="content-right">
                        <div id="object3">
                            <h2> {{ $postASC->title }}</h2>
                        </div>
                        <div id="object4">
                            <p class="time-article d-flex align-items-center gap-4">
                                <i class="fa fa-clock-o" style="font-size:16px"></i>
                                <span style="margin-left:10px">{{ $postASC->created_at }} </span>
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

        <div class="column2">
            <div class="row top1">
                <h2 class="text-title"> {{ __('Chủ đề nóng') }}</h2>
                <div class="parent1">
                    @foreach($listCategoryPost as $categoryPost)
                    <div class="child1">
                        <a href="{{ route('post.detail', $categoryPost->slug) }}">
                            <img src="{{ $categoryPost->image }}" class="item-hot">
                            <span class="policy-title">{{ $categoryPost->name }}</span>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="row top2">
                <h2 class="text-title"> {{__('Xem nhanh')}}</h2>
                @foreach($listPost as $post)
                <div id="content">
                    <div id="left">
                        <img src="{{ $post->thumbnail ?? asset( 'images/page/no-image.png') }}" alt="Image Alt" class="img-fluid2" />
                    </div>
                    <div id="content-right">
                        <h4>{{ $post->title }}</h4>
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
