<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductImageRequest extends FormRequest
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
          
            'image.*' =>'required|mimes:jpeg,png,jpg|max:2048'
        ];
    }
    
    public function messages()
    {
        return [
            'image.required' => __('Hình ảnh sản phẩm không được để trống'),
            'image.mine' => __('Hình ảnh sản phẩm không đúng định dạng: jpeg,png,jpg '),
            'image.max' => __('Hình ảnh sản phẩm không vượt quá 2048'),
        ];
    }
}
