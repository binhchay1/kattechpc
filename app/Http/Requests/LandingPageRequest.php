<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LandingPageRequest extends FormRequest
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
            'title' =>'required',
            'content' =>'required',
       
        ];
    }
    
    public function messages()
    {
        return [
            'title.required' => __('Tiêu đề không được để trống'),
            'content.required' => __('Nội dung không được để trống'),
        
        ];
    }
}
