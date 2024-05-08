@extends('layouts.page')

@section('title')
<title>{{ __('Lịch sử mua hàng') }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/page/profile.css') }}" />
<link rel="stylesheet" href="{{ asset('css/page/order-history.css') }}" />
@endsection

@section('content')
<div class="row">
    @include('includes.left-menu-profile')
    <div class="rightcolumn">
        <div class="card">
            <h2>{{ __('Lịch sử mua hàng') }}</h2>
            <div class="basket">
                <div class="basket-labels">
                    <div class="item-code heading">{{ __('Mã đơn hàng') }}</div>
                    <div class="item-date heading">{{ __('Ngày') }}</div>
                    <div class="item-total heading">{{ __('Thành tiền') }}</div>
                    <div class="item-action heading">{{ __('Hành động') }}</div>
                </div>
                @foreach($dataUser->orders as $orderHistory)
                <div class="basket-product">
                    <div class="item-code">{{ $orderHistory->order_code }}</div>
                    <div class="item-date">{{ $orderHistory->order_date }}</div>
                    <div class="item-total">{{ number_format($orderHistory->total_detail) }}</div>
                    <div class="item-action"><button type="button" data-toggle="modal" data-target="#modalDetail" data-id="{{ $orderHistory->id }}">{{ __('Xem chi tiết') }}</button></div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@include('includes.modal-detail-order-history')
@endsection

@section('js')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script>
    setTimeout(function() {
        $('.alert-block').remove();
    }, 5000);

    $('#modalDetail').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        var urlGetDetail = '/get-order-detail/' + id;

        $.ajax({
            type: "get",
            url: urlGetDetail,
            success: function(result) {
                $('.modal-body').empty();
                for (let i = 0; i < result.length; i++) {
                    let strAppend = `<tr>
                            <td class="column1">` + result[i].date + `</td>
                            <td class="column2">` + result[i].orders.code + `</td>
                            <td class="column3">` + result[i].orders.name + `</td>
                            <td class="column4">` + result[i].price + `</td>
                            <td class="column5">` + result[i].quantity + `</td>
                            <td class="column6">` + (result[i].price * result[i].quantity) + `</td>
                        </tr>`;

                    $('.modal-body').append(strAppend);
                }
            }
        });
    })
</script>
@endsection
