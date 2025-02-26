<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class YoutubeRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'title' =>'required',
            'thumbnail' =>'required|mimes:jpeg,png,jpg|max:2048',
            'link' =>'required'
        ];
    }
    
    public function messages()
    {
        return [
            'title.required' => __('Tiêu đề không được để trống'),
            'link.required' => __('Đường dẫn không được để trống'),
            'thumbnail.required' => __('Hình ảnh sản phẩm không được để trống'),
            'thumbnail.mine' => __('Hình ảnh sản phẩm không đúng định dạng: jpeg,png,jpg '),
            'thumbnail.max' => __('Hình ảnh sản phẩm không vượt quá 2048'),
        ];
    }
}
