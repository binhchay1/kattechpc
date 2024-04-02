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
    )
    {
        $this->utility = $utility;
        $this->layoutRepository = $layoutRepository;
    }
    
    public function viewCustomLayout()
    {
        return view('admin.layout.index');
    }
    
    public function storeLayout(Request $request)
    {
        $input = $request->except(['_token']);
        if (isset($input)) {
    
            $this->utility->saveImageLayout($input);
            if(isset($input['big_thumbnail'])) {
                $input['big_thumbnail'] = '/images/upload/post/' . $input['big_thumbnail']->getClientOriginalName();
            }
            if(isset($input['big_banner_thumbnail'])) {
                $input['big_banner_thumbnail'] = '/images/upload/post/' . $input['big_banner_thumbnail']->getClientOriginalName();
    
            }
            if(isset($input['small_thumbnail_1'])) {
                $input['small_thumbnail_1'] = '/images/upload/post/' . $input['small_thumbnail_1']->getClientOriginalName();
    
            }
            if(isset($input['small_thumbnail_2'])) {
                $input['small_thumbnail_2'] = '/images/upload/post/' . $input['small_thumbnail_2']->getClientOriginalName();
    
            }
            if(isset($input['small_thumbnail_3'])) {
                $input['small_thumbnail_3'] = '/images/upload/post/' . $input['small_thumbnail_3']->getClientOriginalName();
    
            }
            if(isset($input['small_thumbnail_4'])) {
                $input['small_thumbnail_4'] = '/images/upload/post/' . $input['small_thumbnail_4']->getClientOriginalName();
    
            }
            if(isset($input['small_thumbnail_5'])) {
                $input['small_thumbnail_5'] = '/images/upload/post/' . $input['small_thumbnail_5']->getClientOriginalName();
    
            }
            if(isset($input['small_thumbnail_6'])) {
                $input['small_thumbnail_6'] = '/images/upload/post/' . $input['small_thumbnail_6']->getClientOriginalName();
    
            }
            if(isset($input['small_banner_thumbnail_1'])) {
                $input['small_banner_thumbnail_1'] = '/images/upload/post/' . $input['small_banner_thumbnail_1']->getClientOriginalName();
    
            }
            if(isset($input['small_banner_thumbnail_2'])) {
                $input['small_banner_thumbnail_2'] = '/images/upload/post/' . $input['small_banner_thumbnail_2']->getClientOriginalName();
    
            }
           
        }
        
        $this->layoutRepository->store($input);
    
        return back()->with('success', __('Ảnh được thêm thành công'));
    }
}
