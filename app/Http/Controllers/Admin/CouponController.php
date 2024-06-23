<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\couponRequest;
use App\Http\Requests\CouponUpdateRequest;
use App\Repositories\CouponRepository;

class CouponController extends Controller
{
    private $couponRepository;

    public function __construct(
        CouponRepository $couponRepository
    ) {
        $this->couponRepository = $couponRepository;
    }

    public function index()
    {
        $listCoupons = $this->couponRepository->index();

        return view('admin.coupon.index', compact('listCoupons'));
    }

    public function create()
    {

        return view('admin.coupon.create');
    }

    public function store(CouponRequest $request)
    {
        $input = $request->except(['_token']);
        $input = $request->all();
        $this->couponRepository->store($input);

        return redirect()->route('admin.coupon.index')->with('success',  __('Mã khuyến mãi được thêm thành công'));
    }

    public function edit($id)
    {
        $coupon = $this->couponRepository->show($id);

        return view('admin.coupon.edit', compact('coupon' ));
    }

    public function update(CouponUpdateRequest $request,  $id)
    {
        $input = $request->except(['_token']);
        $input = $this->couponRepository->update($input, $id);

        return redirect()->route('admin.coupon.index')->with('success',  __('Mã khuyến mãi được thay đổi thành công'));
    }

    public function delete($id)
    {
        $this->couponRepository->destroy($id);
        return back()->with('success', __('Danh mục sản phẩm  được xóa đổi thành công'));
    }
}
