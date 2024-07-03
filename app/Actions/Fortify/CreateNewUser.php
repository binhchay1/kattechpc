<?php

namespace App\Actions\Fortify;

use App\Mail\WelcomeEmail;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use App\Enums\Role;
use App\Jobs\SendMailByGoogle;
use App\Rules\ReCaptcha;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ])->validate();

        return DB::transaction(function () use ($input) {
            $user =  User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
                'role' => Role::USER,
                'title' => Role::USER,
            ]);

            SendMailByGoogle::dispatch(new WelcomeEmail($user), $user->email, $user)->onQueue('email-register');

            return $user;
        });
    }
}
