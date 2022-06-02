<?php

namespace App\Actions\Fortify;

use App\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();
        
        $user = new User();
        $user->name=$input['name'];
        $user->phone =$input['phone'];
        $user->city=$input['city'];
        $user->email=$input['email'];
        $user->password=Hash::make($input['password']);
        $user->assignRole('user');
        $user->save();

        return $user;
        /* return User::create([
            'name' => $input['name'],
            'phone' => $input['phone'],
            'city' => $input['city'],
            'email' => $input['email'],            
            'password' => Hash::make($input['password']),
            'roles'=>assingRole('user'),
        ]); */
        
    }
}
