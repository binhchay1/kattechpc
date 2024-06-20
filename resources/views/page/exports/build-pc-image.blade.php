<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Export Image</title>
    <style>
        .list_table {
            border-collapse: collapse;
        }

        .list_table td {
            padding: 5px;
            vertical-align: middle;
        }

        .cart_first_tr {
            background-color: #cccccc;
        }

        body,
        form,
        table,
        td,
        span,
        div {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }

        .title a {
            color: #0000FF;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            text-decoration: none;
        }

        .title a:hover {
            color: #0000FF;
            text-decoration: underline;
        }

        #capture {
            width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ebeff5;
        }

        #capture::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: calc(100% - 300px);
            opacity: .1;
            z-index: 1;
            background: url('/images/logo/logo.png') no-repeat;
            background-position: center;
        }

        .p-name {
            font-size: 14px;
            font-weight: bold;
            margin: 0;
        }
    </style>
</head>

<body>
    <div id="capture">
        <table width="800">
            <tbody>
                <tr>
                    <td colspan="5" align="center" style="line-height: 19px;">
                        <b style="color: #007bff;font-size: 20px;">CÔNG TY TNHH MÁY TÍNH KATTECH PC</b><br>
                        Trụ sở chính: Số 17 phố Hà Kế Tấn, P.Phương Liệt, Q.Thanh
                        Xuân, TP.Hà Nội<br>
                        Website: <a style="text-decoration: none;" href="{{ route('home') }}">kattechpc.vn</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="7"></td>
                </tr>
            </tbody>
        </table>

        <table>
            <tbody>
                <tr>
                    <td colspan="7">&nbsp;</td>
                </tr>
            </tbody>
        </table>

        <div style="padding: 10px;"></div>
        <table width="800" class="list_table">
            <tbody>
                <tr style="color: #000;font-weight: bold;">
                    <td>STT</td>
                    <td colspan="2">{{ __('Tên sản phẩm') }}</td>
                    <td width="100">{{ __('Bảo hành') }}</td>
                    <td width="100">{{ __('Đơn giá') }}</td>
                    <td width="120">{{ __('Thành tiền') }}</td>
                </tr>

                @foreach($getProduct as $key => $product)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td colspan="2">
                        <p class="p-name" href="https://nguyencongpc.vn/gia-do-man-hinh-gaming-e-dra-eam7301">{{ $product->name }}</p> <br>
                        Mã sp: {{ $product->code }} <br>
                    </td>
                    <td>{{ $product->status_guarantee }} </td>
                    @if($product->new_price != null)
                    <td>{{ $product->new_price }} đ</td>
                    @else
                    <td>{{ $product->price }} đ</td>
                    @endif

                    @if($product->new_price != null)
                    <td width="120">{{ $product->new_price }} đ</td>
                    @else
                    <td width="120">{{ $product->price }} đ</td>
                    @endif
                </tr>
                @endforeach

            </tbody>
        </table>

        <table>
            <tbody>
                <tr>
                    <td colspan="7">&nbsp;</td>
                </tr>
            </tbody>
        </table>

        <table width="800">
            <tbody>
                <tr>
                    <td colspan="8"><b>{{ __('Quý khách lưu ý:') }}</b> {{ __('Giá bán, khuyến mại của sản phẩm và tình trạng còn hàng có thể bị thay đổi bất cứ lúc nào mà không kịp báo trước') }}</td>
                </tr>
                <tr>
                    <td colspan="7">
                        {{ __('Để biết thêm chi tiết, Quý khách vui lòng liên hệ KATTECH PC qua hotline') }} 097.9999.191 (8h30-18h30 {{ __('tất cả các ngày trong tuần') }}) {{ __('hoặc email') }}: <a href="mailto:info@kattechpc.vn">info@kattechpc.vn</a>
                    </td>
                </tr>
                <tr>
                    <td colspan="7">{{ __('Một lần nữa KATTECH PC cảm ơn quý khách!') }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script>
    $(document).ready(function() {
        capture();

    });

    function capture() {
        const captureElement = document.querySelector('#capture');
        html2canvas(captureElement)
            .then(canvas => {
                canvas.style.display = 'none';
                document.body.appendChild(canvas);
                return canvas;
            })
            .then(canvas => {
                const image = canvas.toDataURL('image/png').replace('image/png', 'image/octet-stream');
                const a = document.createElement('a');
                a.setAttribute('download', 'my-image.png');
                a.setAttribute('href', image);
                a.click();
                canvas.remove();
                console.log(1);
                window.open('', '_self').close();
            })
    }
</script>
