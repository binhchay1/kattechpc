<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    
    public function rules(): array
    {
//        $age = date("Y-m-d", time() + 86400);
        return [
            'name' => 'required|max:255',
            'email' =>  'required|string|email|max:191|unique:users,email,' . $this->user()->id
,
            'age' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'profile_photo_path' => 'image|mimes:jpeg,png,jpg|max:2048',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => __('validation.required'),
            'name.max' => __('validation.max'),
            'email.required' => __('validation.required'),
            'email.email' => __('validation.email'),
            'age.required|' => __('validation.required'),
            'address.required' => __('validation.required'),
            'phone.required' => __('validation.required'),
            'profile_photo_path.image' => __('validation.image'),
            'profile_photo_path.mimes' => __('validation.mimes'),
            'profile_photo_path.max' => __('validation.max'),
        ];
    }
}
