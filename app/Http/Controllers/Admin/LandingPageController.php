<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\LandingPageRepository;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    private $landingPageRepository;

    public function __construct(
        LandingPageRepository $landingPageRepository
    ) {
        $this->landingPageRepository = $landingPageRepository;
    }

    public function index()
    {
        $listLandingPage = $this->landingPageRepository->index();

        return view('admin.landing.page.index', compact('listLandingPage'));
    }

    public function createLandingPage()
    {
        return view('admin.landing.page.create');
    }

    public function storeLandingPage(OrderRequest $request)
    {
        $input = $request->except(['_token']);
        $input = $request->all();
        $this->landingPageRepository->create($input);

        return redirect()->route('admin.landing.page.index')->with('success', __('Trang đích thêm thành công'));
    }

    public function showLandingPage($id)
    {
        $this->landingPageRepository->show($id);
    }

    public function editLandingPage($id)
    {
        $landingPage = $this->landingPageRepository->show($id);
        return view('admin.landing.page.edit', compact('landingPage'));
    }

    public function updateLandingPage(OrderRequest $request,  $id)
    {
        $input = $request->except(['_token']);

        $input = $this->landingPageRepository->update($input, $id);

        return redirect()->route('admin.landing.page.index')->with('success', __('Trang đích cập nhật thành công'));
    }

    public function deleteLandingPage($id)
    {
        $landingPage = $this->landingPageRepository->destroy($id);
        if (empty($landingPage)) {
            abort(404);
        }
        return back()->with('success', __('Trang đích xóa thành công'));
    }
}
