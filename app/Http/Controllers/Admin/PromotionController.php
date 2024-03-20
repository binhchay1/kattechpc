<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\promotionRequest;
use App\Repositories\promotionRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PromotionController extends Controller
{
    private $promotionRepository;
    
    public function __construct(
        PromotionRepository $promotionRepository
    )
    {
        $this->promotionRepository = $promotionRepository;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listPromotions = $this->promotionRepository->index();
        
        return view('admin.promotion.index',compact('listPromotions'));
        
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function createPromotion()
    {
        return view('admin.promotion.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function storePromotion(PromotionRequest $request)
    {
        $input = $request->except(['_token']);
        $input = $request->all();
        $input['slug'] =  Str::slug($input['title']);
        $this->promotionRepository->create($input);
        
        return redirect()->route('admin.promotion.index')->with('success',  __('Bài quảng cáo được thêm thành công'));
    }
    
    /**
     * Display the specified resource.
     */
    public function showPromotion( $id)
    {
        $this->promotionRepository->show($id);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function editPromotion( $id)
    {
        $promotion = $this->promotionRepository->show($id);
        if (empty($promotion)) {
            abort(404);
        }
        return view('admin.promotion.edit', compact('promotion'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function updatePromotion(PromotionRequest $request,  $id)
    {
        $input = $request->except(['_token']);
        $input['slug'] =  Str::slug($input['title']);
        
        $input = $this->promotionRepository->update($input, $id);
        
        return redirect()->route('admin.promotion.index')->with('success', __('Bài quảng cáo được thay đổi thành công'));
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function deletePromotion( $id)
    {
        $this->promotionRepository->destroy($id);
        return back()->with('success',  __('Bài quảng cáo được xóa thành công'));
    }
}
