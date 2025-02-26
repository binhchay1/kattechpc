<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Http;

class ReCaptcha implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $response = Http::get("https://www.google.com/recaptcha/api/siteverify", [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $value
        ]);

        return $response->json()["success"];
    }
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('Recaptcha bắt buộc xác thực');
    }
}
