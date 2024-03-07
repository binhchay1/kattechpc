<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WarehouseReuqest extends FormRequest
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
            
            'address' => 'required',
          
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => __('validation.required'),
            'address.required' => __('validation.required'),
        ];
    }
}
