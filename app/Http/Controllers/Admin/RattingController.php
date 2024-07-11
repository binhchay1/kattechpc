<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Repositories\RatingRepository;
use Illuminate\Http\Request;
use function Termwind\renderUsing;

class RattingController extends Controller
{
    
    public $rattingRepository;
    
    public function __construct(
        RatingRepository $rattingRepository
    ) {
        $this->rattingRepository = $rattingRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listRattings = $this->rattingRepository->listRattings();
        $product = [];
        foreach ($listRattings as $item)
        {
            $product[$item->product_id] = $item->product_id;
        }
   
        $products = Product::whereIn('id', $product)->with('ratings')->get();
     
        return view('admin.ratting.index', compact('products'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function deleteRatting( $id)
    {
        dd($id);
        $this->rattingRepository->destroy($id);
        
        return back()->with('success', __('Bình luận  được xóa  thành công'));
    }
}
