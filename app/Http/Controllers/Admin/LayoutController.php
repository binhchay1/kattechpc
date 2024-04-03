<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Utility;
use App\Repositories\LayoutRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LayoutController extends Controller
{
    private $utility;
    private $layoutRepository;

    public function __construct(
        Utility $utility,
        LayoutRepository $layoutRepository
    ) {
        $this->utility = $utility;
        $this->layoutRepository = $layoutRepository;
    }

    public function viewCustomLayout()
    {
        $layout = $this->layoutRepository->getListLayout();
        if (!empty($layout)) {
            $layout->slide_thumbnail = json_decode($layout->slide_thumbnail, true);
        }

        return view('admin.layout.index', compact('layout'));
    }

    public function storeLayout(Request $request)
    {
        $input = $request->except(['_token']);
        $getLayout = $this->layoutRepository->getListLayout();

        if (isset($input)) {

            // if (isset($input['slide_thumbnail'])) {
            //     $listSlide = [];
            //     foreach ($input['slide_thumbnail'] as $thumbnail) {
            //         $thumbnail->move(public_path('images/upload/layout/'), $thumbnail->getClientOriginalName());
            //         $listSlide[] = '/images/upload/layout/' . $thumbnail->getClientOriginalName();
            //     }

            //     if (!empty($getLayout->slide_thumbnail)) {
            //         $listOldSlide = json_decode($getLayout->slide_thumbnail, true);
            //         $mergeListSlide = array_merge($listOldSlide, $listSlide);
            //         $input['slide_thumbnail'] = json_encode($mergeListSlide);
            //     } else {
            //         $input['slide_thumbnail'] = json_encode($listSlide);
            //     }
            // }

            if (isset($input['big_banner_thumbnail'])) {
                $input['big_banner_thumbnail']->move(public_path('images/upload/layout/'), $input['big_banner_thumbnail']->getClientOriginalName());
                $input['big_banner_thumbnail'] = '/images/upload/layout/' . $input['big_banner_thumbnail']->getClientOriginalName();
            }

            if (isset($input['small_thumbnail_1'])) {
                $input['small_thumbnail_1']->move(public_path('images/upload/layout/'), $input['small_thumbnail_1']->getClientOriginalName());
                $input['small_thumbnail_1'] = '/images/upload/layout/' . $input['small_thumbnail_1']->getClientOriginalName();
            }

            if (isset($input['small_thumbnail_2'])) {
                $input['small_thumbnail_2']->move(public_path('images/upload/layout/'), $input['small_thumbnail_2']->getClientOriginalName());
                $input['small_thumbnail_2'] = '/images/upload/layout/' . $input['small_thumbnail_2']->getClientOriginalName();
            }

            if (isset($input['small_thumbnail_3'])) {
                $input['small_thumbnail_3']->move(public_path('images/upload/layout/'), $input['small_thumbnail_3']->getClientOriginalName());
                $input['small_thumbnail_3'] = '/images/upload/layout/' . $input['small_thumbnail_3']->getClientOriginalName();
            }

            if (isset($input['small_thumbnail_4'])) {
                $input['small_thumbnail_4']->move(public_path('images/upload/layout/'), $input['small_thumbnail_4']->getClientOriginalName());
                $input['small_thumbnail_4'] = '/images/upload/layout/' . $input['small_thumbnail_4']->getClientOriginalName();
            }

            if (isset($input['small_thumbnail_5'])) {
                $input['small_thumbnail_5']->move(public_path('images/upload/layout/'), $input['small_thumbnail_5']->getClientOriginalName());
                $input['small_thumbnail_5'] = '/images/upload/layout/' . $input['small_thumbnail_5']->getClientOriginalName();
            }

            if (isset($input['small_thumbnail_6'])) {
                $input['small_thumbnail_6']->move(public_path('images/upload/layout/'), $input['small_thumbnail_6']->getClientOriginalName());
                $input['small_thumbnail_6'] = '/images/upload/layout/' . $input['small_thumbnail_6']->getClientOriginalName();
            }

            if (isset($input['small_banner_thumbnail_left'])) {
                $input['small_banner_thumbnail_left']->move(public_path('images/upload/layout/'), $input['small_banner_thumbnail_1']->getClientOriginalName());
                $input['small_banner_thumbnail_left'] = '/images/upload/layout/' . $input['small_banner_thumbnail_1']->getClientOriginalName();
            }

            if (isset($input['small_banner_thumbnail_right'])) {
                $input['small_banner_thumbnail_right']->move(public_path('images/upload/layout/'), $input['small_banner_thumbnail_2']->getClientOriginalName());
                $input['small_banner_thumbnail_right'] = '/images/upload/layout/' . $input['small_banner_thumbnail_2']->getClientOriginalName();
            }
        }

        if (!empty($getLayout)) {
            $this->layoutRepository->update($getLayout->id, $input);
        } else {
            $this->layoutRepository->store($input);
        }

        return back()->with('success', __('Ảnh được thêm thành công'));
    }


}
