<table>
    <tbody>
        <tr>
            @for($i = 0; $i < 5 ; $i++)
            <td></td>
            @endfor
            <td colspan="2" rowspan="11" style="border-left: 1px solid; border-right: 1px solid"><img src="{{ asset('/images/logo/logo.png') }}"></td>
        </tr>
        <tr></tr>
        <tr>
            <td></td>
            <td colspan="2" style="font-size: 18px; font-weight: bold;">CÔNG TY TNHH MÁY TÍNH KATTECH PC</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">Trụ sở chính: Số 17 phố Hà Kế Tấn, P.Phương Liệt, Q.Thanh Xuân, TP.Hà Nội</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2">Hotline: 097.9999.191</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2"><a href="mailto:info@kattechpc.vn">Email: info@kattechpc.vn</a></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2"><a href="https://kattechpc.vn">Website: https://kattechpc.vn</a></td>
        </tr>
        @for($k = 0; $k < 4 ; $k++)
        <tr></tr>
        @endfor
        <tr>
            <td colspan="7" rowspan="2"><h1 style="text-align: center;">BÁO GIÁ CHI TIẾT</h1></td>
        </tr>
        <tr></tr>
        <tr>
            <td></td>
            <td colspan="2" style="font-weight: bold;">Tên khách hàng:</td>
            <td></td>
            <td></td>
            <td colspan="2" style="background-color: #f3070f; color: white; text-align: center;">Ngày</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2" style="font-weight: bold;">Địa chỉ:</td>
            <td></td>
            <td></td>
            <td colspan="2" style="text-align: center;">{{ date('d/m/Y') }}</td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2" style="font-weight: bold;">Mã số thuế:</td>
            <td></td>
            <td></td>
            <td colspan="2" style="text-align: center;">Đơn vị tiền: VNĐ</td>
        </tr>
        <tr></tr>
        <tr>
            <td></td>
            <td style="background-color: #f3070f; border: 1px solid;">STT</td>
            <td style="background-color: #f3070f; border: 1px solid;">Tên sản phẩm</td>
            <td style="background-color: #f3070f; border: 1px solid;">Bảo hành</td>
            <td style="background-color: #f3070f; border: 1px solid;">Số lượng</td>
            <td style="background-color: #f3070f; border: 1px solid;">Đơn giá</td>
            <td style="background-color: #f3070f; border: 1px solid;">Thành tiền</td>
        </tr>
        @foreach($products as $key => $product)
        <tr>
            <td style="border: 1px solid;">{{ $key + 1 }}</td>
            <td style="border: 1px solid;">{{ $product->name }}</td>
            <td style="border: 1px solid;">{{ $product->status_guarantee }}</td>
            <td style="border: 1px solid;">1</td>
            @if($product->new_price != null)
            <td style="border: 1px solid;">{{ $product->new_price }}</td>
            @else
            <td style="border: 1px solid;">{{ $product->price }}</td>
            @endif

            @if($product->new_price != null)
            <td style="border: 1px solid;">{{ $product->new_price }}</td>
            @else
            <td style="border: 1px solid;">{{ $product->price }}</td>
            @endif
        </tr>
        @endforeach

        <tr>
            <td></td>
            @for($m = 0; $m < 6; $m++)
            <td style="border: 1px solid;"></td>
            @endfor
        </tr>
        <tr>
            <td></td>
            @for($h = 0; $h < 6; $h++)
            <td style="border: 1px solid;"></td>
            @endfor
        </tr>
        <tr>
            <td></td>
            <td colspan="3" style="border: 1px solid;"></td>
            <td style="border: 1px solid;"></td>
            <td style="border: 1px solid;"></td>
            <td style="border: 1px solid;"></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="3" rowspan="7">Quý khách lưu ý: Giá bán, khuyến mại của sản phẩm và tình trạng còn hàng có thể bị thay đổi bất cứ lúc nào mà không kịp báo trước
Để biết thêm chi tiết, Quý khách vui lòng liên hệ KATTECH PC qua Hotline: 097.9999.191 (8h30-18h30 tất cả các ngày trong tuần) hoặc email: info@kattechpc.vn
Một lần nữa KATTECH PC cảm ơn quý khách!</td>
            <td style="text-align: center; background-color: #f77e7e;">Phí vận chuyển</td>
            <td>0</td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: center; background-color: #f77e7e;">Chi phí khác</td>
            <td>0</td>
        </tr>
    </tbody>
</table>
