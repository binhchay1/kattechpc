<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'category'=> 'required',
            'brand'=> 'required',
            'name' =>'required|max:255',
            'description' =>'required',
            'status' =>'required',
            'code' =>'required|max:255',
            'image' =>'image|mimes:jpeg,png,jpg|max:2048'
        ];
    }

    public function messages()
    {
        return [
            'category.required' => __('validation.required'),
            'name.required' => __('validation.required'),
            'name.max' => __('validation.max'),
            'brand.required' => __('validation.required'),
            'description.required' => __('validation.required'),
            'status.required' => __('validation.required'),
            'code.required' => __('validation.required'),
            'code.max' => __('validation.max'),
            'image.image' => __('validation.image'),
            'image.mimes' => __('validation.mimes'),
            'image.max' => __('validation.max'),
        ];
    }

}
