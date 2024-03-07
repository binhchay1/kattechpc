<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
//        $age = date("Y-m-d", time() + 86400);
        return [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'age' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'profile_photo_path' => 'image|mimes:jpeg,png,jpg|max:2048',
            'password' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => __('validation.required'),
            'name.max' => __('validation.max'),
            'email.required' => __('validation.required'),
            'email.email' => __('validation.email'),
            'email.unique' => __('validation.unique'),
            'age.required|' => __('validation.required'),
            'address.required' => __('validation.required'),
            'phone.required' => __('validation.required'),
            'profile_photo_path.image' => __('validation.image'),
            'profile_photo_path.mimes' => __('validation.mimes'),
            'profile_photo_path.max' => __('validation.max'),
            'password.required' => __('validation.required'),
        ];
    }
}
