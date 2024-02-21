@extends('layouts.guest')

@section('css')
<style>
    #stock-code-list::-webkit-scrollbar {
        width: 12px;
    }

    #stock-code-list::-webkit-scrollbar-track {
        background: #ebeef3;
        border-radius: 15px;
    }

    #stock-code-list::-webkit-scrollbar-thumb {
        background-color: #4f73d9;
        border-radius: 15px;
    }

    #industry-list::-webkit-scrollbar {
        width: 12px;
    }

    #industry-list::-webkit-scrollbar-track {
        background: #ebeef3;
        border-radius: 15px;
    }

    #industry-list::-webkit-scrollbar-thumb {
        background-color: #4f73d9;
        border-radius: 15px;
    }

    .industry-list {
        overflow: hidden;
    }

    #industry-list input[type="checkbox"][id^="myCheckbox"] {
        display: none;
    }

    #industry-list label {
        border: 1px solid #fff;
        padding: 10px;
        display: block;
        position: relative;
        margin: 10px;
        cursor: pointer;
    }

    #industry-list label:before {
        background-color: white;
        color: white;
        content: " ";
        display: block;
        border-radius: 50%;
        border: 1px solid grey;
        position: absolute;
        top: -5px;
        left: -5px;
        width: 25px;
        height: 25px;
        text-align: center;
        line-height: 28px;
        transition-duration: 0.4s;
        transform: scale(0);
    }

    #industry-list label img {
        height: 100px;
        width: 100px;
        transition-duration: 0.2s;
        transform-origin: 50% 50%;
    }

    #industry-list :checked+label {
        border-color: #ddd;
    }

    #industry-list :checked+label:before {
        content: "✓";
        background-color: grey;
        transform: scale(1);
    }

    #industry-list :checked+label img {
        transform: scale(0.9);
        box-shadow: 0 0 5px #333;
        z-index: -1;
    }
</style>
@endsection

@section('content')
<div class="content-wrapper">
    <form action="{{ route('personal.data.save') }}" method="post" id="form-personal-data">
        @csrf
        <div class="_3y1d4 " data-hook="site-creation-view">
            <div class="_1sw04 visible">
                <div class="HrsWE " data-hook="business-card-screen">
                    <div class="_4g4Ln">
                        <div class="_1VHiN">
                            <img src="{{ asset('image/logo-no-background.png') }}" width="72" height="28" class="symbol symbol-wixLogoSingleColor RS4AD">
                            <div class="_1bgb1">
                                <span class="site-creation-left-content-title">Hi there! Let us know about the information you are interested in</span>
                            </div>
                        </div>

                        <div class="_1SquL" id="stock-code-area" style="display: block;">
                            <div class="_1H9HQ">
                                <div class="_2V-OL logo">
                                    <label class="stock-code-list-title">
                                        <span>STOCK CODE</span>
                                    </label>
                                    <input type="text" id="stock-code-search" onkeyup="searchStockCode()" placeholder="Search for stock code.." title="Type in a stock code">
                                    <ul id="stock-code-list">
                                        @foreach($stockCode as $code)
                                        <li class="item-list-stock-code">
                                            <input class="form-check-input" type="checkbox" name="stock_code[]" value="{{ $code }}">
                                            <label>
                                                {{ $code }}
                                            </label>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="_1SquL" style="display: none;" id="industry-area">
                            <div class="_1H9HQ">
                                <div class="_2V-OL logo">
                                    <label class="stock-code-list-title">
                                        <span>SECTOR</span>
                                    </label>
                                    <ul id="industry-list">
                                        @foreach($listIndustry as $id => $name)
                                        <li class="item-list-stock-code mt-4">
                                            <input type="checkbox" id="{{ $id }}" style="display: none;" name="industry[]"  value="{{ $id }}"/>
                                            <label for="{{ $id }}" class="image-industry"><img src="{{ asset('image/industry/' . $id . '.png') }}" width="100" height="100" /></label>
                                            <label for="{{ $id }}" class="industry-item-list-title">{{ $name }}</label>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="_2K84h">
                        <div style="visibility: hidden;" id="button-back-personal">
                            <div class="_3utAY" onclick="backPersonalization()">
                                <span>← Quay lại</span>
                            </div>
                        </div>
                        <div class="_1UkKx">
                            <div class="_3utAY" onclick="skipPersonalization()">
                                <span>Bỏ qua</span>
                            </div>
                            <div class="_1mTTD " onclick="nextPersonalization()">
                                <span>Tiếp</span>
                                <svg width="6" height="10" viewBox="0 0 6 10" class="symbol symbol-arrowRightWhite">
                                    <path fill="#fff" d="M.5 10a.5.5 0 01-.353-.853L4.294 5 .147.855A.5.5 0 11.855.147L5.708 5 .855 9.855A.5.5 0 01.5 10z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('js')
<script>
    const arrSection = ['stock-code-area', 'industry-area'];
    const elementButtonBack = document.getElementById('button-back-personal');

    function searchStockCode() {
        var input, filter, ul, li, label, i, txtValue;
        input = document.getElementById("stock-code-search");
        filter = input.value.toUpperCase();
        ul = document.getElementById("stock-code-list");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            label = li[i].getElementsByTagName("label")[0];
            txtValue = label.textContent || label.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }

    function skipPersonalization() {
        window.location.href = '/dashboard?is_new=false';
    }

    function nextPersonalization() {
        for (let i = 0; i < arrSection.length; i++) {
            let elementSection = document.getElementById(arrSection[i]);
            let nextElement = document.getElementById(arrSection[i + 1]);

            if (elementButtonBack.style.visibility == "hidden") {
                elementButtonBack.style.visibility = "inherit";
            }

            if (elementSection.style.display == 'block') {
                if (arrSection[i] == arrSection[arrSection.length - 1]) {
                    document.getElementById("form-personal-data").submit();
                    break;
                }

                elementSection.style.display = 'none';
                nextElement.style.display = 'block';
                break;
            }
        }
    }

    function backPersonalization() {
        for (let i = 0; i < arrSection.length; i++) {
            let elementSection = document.getElementById(arrSection[i]);

            if (elementSection.style.display == 'block') {
                let previousElement = document.getElementById(arrSection[i - 1]);
                elementSection.style.display = 'none';
                previousElement.style.display = 'block';
                if (i - 1 == 0) {
                    elementButtonBack.style.visibility = 'hidden';
                }
                break;
            }
        }
    }
</script>
@endsection