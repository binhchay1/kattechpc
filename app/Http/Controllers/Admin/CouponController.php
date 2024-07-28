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

        if (empty($listProducts)) {
            return redirect('/404',);
        }
        return view('admin.coupon.create', compact('listProducts'));
    }

    public function store(Request $request)
    {
        $input = $request->except(['_token']);
        $input = $request->all();
        $input['use_amount'] = 0;
        $input['apply_user_status'] = 0;
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
        return back()->with('success', __('Danh mục sản phẩm  được xóa  thành công'));
    }
}
