@extends('layouts.page')

@section('title')
    <title>{{ __('Trang chủ') }} | Kattech PC</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('/plugins/owlcarousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/page/productCate.css') }}" />
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="flex" id="select-price">
                <h2>Lọc theo giá</h2>

                <div data-id="duoi-10trieu">
                    <button>Dưới 10 triệu</button>
                </div>
                <div data-id="tu-10trieu-15trieu">
                    <button>10 triệu - 15 triệu</button>
                </div>
                <div data-id="tu-15trieu-20trieu">
                    <button>15 triệu - 20 triệu</button>
                </div>
                <div data-id="tu-20trieu-30trieu">
                    <button>20 triệu - 30 triệu</button>
                </div>
                <div data-id="tu-30trieu-50trieu">
                    <button>30 triệu - 50 triệu</button>
                </div>
                <div data-id="tu-50trieu-100trieu">
                    <button>50 triệu - 100 triệu</button>
                </div>
                <div data-id="tren-100trieu">
                    <button>Trên 100 triệu</button>
                </div>
            </div>
        </div>
          <div class="row1">
            <div class="flex sort" id="sort">
                <h2>Lọc theo tiêu chí</h2>

                <div data-id="new">
                    <button>Hàng mới về</button>
                </div>
                <div data-id="price-asc">
                    <button>Giá tăng dần</button>
                </div>
                <div data-id ="price-desc">
                    <button>Giá giảm dần</button>
                </div>
                <div data-id ="name">
                    <button>Tên từ A->Z</button>
                </div>
                <div>
                    <select name="cars" id="cars">
                        <option value="volvo">Thương hiệu</option>
                        <option value="saab"></option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div>
                    <select name="cars" id="cars">
                        <option value="volvo">Bộ vi xử lý(CPU)</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div>
                    <select name="cars" id="cars">
                        <option value="volvo">Card đồ họa</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div>
                    <select name="cars" id="cars">
                        <option value="volvo">Dung lượng RAM</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>

            </div>
        </div>
        <div class="row">
            @foreach($dataCategory->products as $product)
            <div class="column"  >
                <div class="" role="group">
                    <div class="product-item">
                        <a href="" class="product-image position-relative">
                            @if(isset($product->image))
                                <img src="{{ asset($product->image[0]) }}" width="210" height="164" class="lazy entered loaded hover-for-tooltips">
                            @endif
                        </a>
                        <div class="product-info">
                            <a href="{{ route('productDetail', $product['slug']) }}">
                                <h3 class="product-title line-clamp-3"> {{ $product->name }}</h3>
                            </a>

                            <div class="product-martket-main d-flex align-items-center">
                                <p class="product-market-price">{{ $product->price }} ₫</p>
                                <?php $new_price = floor(100 - (((int) $product->new_price / (int) $product->price) * 100)) ?>
                                <div class="product-percent-price">-{{ $new_price }}%</div>
                            </div>

                            <div class="product-price-main font-weight-600">
                                {{ $product->new_price }}   đ
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

@section('js')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/plugins/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/js/page/main.js') }}"></script>
    <script>
        $('.vendor-carousel').owlCarousel({
            loop: true,
            nav: false,
            autoplay: true,
            smartSpeed: 1000,
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#select-price div').click(function() {
                let url  = '?price='
                    + $(this).data('id');
                window.location.href = url;
            });

            $('#sort div').click(function() {
                let url  = '?sort='
                    + $(this).data('id');
                window.location.href = url;
            });
        });
    </script>
@endsection
