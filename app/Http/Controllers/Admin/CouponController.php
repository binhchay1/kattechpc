<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CouponUpdateRequest;
use App\Repositories\CouponRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    private $couponRepository;
    private $productRepository;

    public function __construct(
        CouponRepository $couponRepository,
        ProductRepository $productRepository
    ) {
        $this->productRepository = $productRepository;
        $this->couponRepository = $couponRepository;
    }

    public function index()
    {
        $listCoupons = $this->couponRepository->index();

        return view('admin.coupon.index', compact('listCoupons'));
    }

    public function create()
    {
        $listProducts = $this->productRepository->index();

        return view('admin.coupon.create', compact('listProducts'));
    }

    public function store(CouponUpdateRequest $request)
    {
        $input = $request->except(['_token']);

        if ($input['type'] == 'percent') {
            $input['discount_amount'] = $input['discount_amount_percent'];
        } else {
            $input['discount_amount'] = $input['discount_amount_number'];
        }

        if ($input['apply_all_product'] == 'true') {
            $input['list_product_id'] = null;
        } else {
            $input['list_product_id'] = json_encode($input['list_product_id']);
        }

        $data = [
            'code' => $input['code'],
            'time_end' => $input['time_end'],
            'type' => $input['type'],
            'discount_amount' => $input['discount_amount'],
            'total_amount' => $input['total_amount'],
            'list_product_id' => $input['list_product_id'],
            'use_by_user_amount' => $input['use_by_user_amount']
        ];

        $this->couponRepository->store($data);

        return redirect()->route('admin.coupon.index')->with('success',  __('Mã khuyến mãi được thêm thành công'));
    }

    public function edit($id)
    {
        $coupon = $this->couponRepository->show($id);
        $listProducts = $this->productRepository->index();

        return view('admin.coupon.edit', compact('coupon', 'listProducts'));
    }

    public function update(CouponUpdateRequest $request,  $id)
    {
        $input = $request->except(['_token']);

        if ($input['type'] == 'percent') {
            $input['discount_amount'] = $input['discount_amount_percent'];
        } else {
            $input['discount_amount'] = $input['discount_amount_number'];
        }

        if ($input['apply_all_product'] == 'true') {
            $input['list_product_id'] = null;
        } else {
            $input['list_product_id'] = json_encode($input['list_product_id']);
        }

        $data = [
            'code' => $input['code'],
            'time_end' => $input['time_end'],
            'type' => $input['type'],
            'discount_amount' => $input['discount_amount'],
            'total_amount' => $input['total_amount'],
            'list_product_id' => $input['list_product_id'],
            'use_by_user_amount' => $input['use_by_user_amount']
        ];

        $input = $this->couponRepository->update($input, $id);

        return redirect()->route('admin.coupon.index')->with('success',  __('Mã khuyến mãi được thay đổi thành công'));
    }

    public function delete($id)
    {
        $this->couponRepository->destroy($id);
        return back()->with('success', __('Danh mục sản phẩm  được xóa  thành công'));
    }
}
