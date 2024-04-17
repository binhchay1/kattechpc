<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'code' =>'required|max:50|unique:coupons,code',
            'discount_amount' =>'required'
        
        ];
    }
    
    public function messages()
    {
        return [
            'code.required' => __('Mã khuyến mãi không được để trống'),
            'code.unique' => __('Mã sản phẩm phải là duy nhất'),
            'code.max' => __('Mã sản phẩm không vượt quá 50 kí tự'),
            'discount_amount.required' => __('Mã khuyến mãi không được để trống'),
        ];
    }
}
