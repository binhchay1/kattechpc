@extends('layouts.page')

@section('title')
    <title>{{ __('Trang chủ') }} | Kattech PC</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('/plugins/owlcarousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/page/cart.css') }}" />
@endsection

@section('content')
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Basket</title>
    </head>

    <body>
    <main>
        <div class="">
            <img class="image-cart" src="{{asset('images/cart.jpg')}}">
            <h2 class="text-center">{{__('Không có sản phẩm nào trong giỏ hàng')}}</h2>

            <div class="button-css-cart">
                <a href="#">
                    <button class="button-cart">{{__('Tiếp tục mua hàng')}}</button></a>
            </div>

        </div>
        <div class="basket">
            <div class="basket-module">
                <label for="promo-code">Enter a promotional code</label>
                <input id="promo-code" type="text" name="promo-code" maxlength="5" class="promo-code-field">
                <button class="promo-code-cta">Apply</button>
            </div>
            <div class="basket-labels">
                <ul>
                    <li class="item item-heading">Item</li>
                    <li class="price">Price</li>
                    <li class="quantity">Quantity</li>
                    <li class="subtotal">Subtotal</li>
                </ul>
            </div>
            <div class="basket-product">
                <div class="item">
                    <div class="product-image">
                        <img src="http://placehold.it/120x166" alt="Placholder Image 2" class="product-frame">
                    </div>
                    <div class="product-details">
                        <h1><strong><span class="item-quantity">4</span> x Eliza J</strong> Lace Sleeve Cuff Dress</h1>
                        <p><strong>Navy, Size 18</strong></p>
                        <p>Product Code - 232321939</p>
                    </div>
                </div>
                <div class="price">26.00</div>
                <div class="quantity">
                    <input type="number" value="4" min="1" class="quantity-field">
                </div>
                <div class="subtotal">104.00</div>
                <div class="remove">
                    <button>Remove</button>
                </div>
            </div>
            <div class="basket-product">
                <div class="item">
                    <div class="product-image">
                        <img src="http://placehold.it/120x166" alt="Placholder Image 2" class="product-frame">
                    </div>
                    <div class="product-details">
                        <h1><strong><span class="item-quantity">1</span> x Whistles</strong> Amella Lace Midi Dress</h1>
                        <p><strong>Navy, Size 10</strong></p>
                        <p>Product Code - 232321939</p>
                    </div>
                </div>
                <div class="price">26.00</div>
                <div class="quantity">
                    <input type="number" value="1" min="1" class="quantity-field">
                </div>
                <div class="subtotal">26.00</div>
                <div class="remove">
                    <button>Remove</button>
                </div>
            </div>
        </div>
        <aside>
            <div class="summary">
                <div class="summary-total-items"><span class="total-items"></span> Items in your Bag</div>
                <div class="summary-subtotal">
                    <div class="subtotal-title">Subtotal</div>
                    <div class="subtotal-value final-value" id="basket-subtotal">130.00</div>
                    <div class="summary-promo hide">
                        <div class="promo-title">Promotion</div>
                        <div class="promo-value final-value" id="basket-promo"></div>
                    </div>
                </div>
                <div class="summary-delivery">
                    <select name="delivery-collection" class="summary-delivery-selection">
                        <option value="0" selected="selected">Select Collection or Delivery</option>
                        <option value="collection">Collection</option>
                        <option value="first-class">Royal Mail 1st Class</option>
                        <option value="second-class">Royal Mail 2nd Class</option>
                        <option value="signed-for">Royal Mail Special Delivery</option>
                    </select>
                </div>
                <div class="summary-total">
                    <div class="total-title">Total</div>
                    <div class="total-value final-value" id="basket-total">130.00</div>
                </div>
                <div class="summary-checkout">
                    <button class="checkout-cta">Go to Secure Checkout</button>
                </div>
            </div>
        </aside>
    </main>
    </body>

    </html>
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