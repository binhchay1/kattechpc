@extends('layouts.page')

@section('title')
    <title>{{ __('Chi tiết quảng cáo') }} | Kattech PC</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('/plugins/owlcarousel/owl.theme.default.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/page/post-detail.css') }}"/>
@endsection

@section('content')
    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>TITLE HEADING</h2>
                <h5>Title description, Dec 7, 2017</h5>
                <div class="fakeimg" style="height:200px;">Image</div>
                <p>Some text..</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="card">
                <h2>TITLE HEADING</h2>
                <div>
                    <div class="fakeimg">Image</div>
                    <p>Some text..</p>
                </div>
                <div>
                    <div class="fakeimg">Image</div>
                    <p>Some text..</p>
                </div>
                <div>
                    <div class="fakeimg">Image</div>
                    <p>Some text..</p>
                </div>
                <div>
                    <div class="fakeimg">Image</div>
                    <p>Some text..</p>
                </div>

                <br>

            </div>
            <div class="card">
                <h3>Follow Me</h3>
                <p>Some text..</p>
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
