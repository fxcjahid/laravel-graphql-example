<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

final class Login
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, $request)
    {
        /**
         * Filter only accept email & password
         */
        $credentials = array(
            'email'    => $request['email'],
            'password' => $request['password'],
        );

        /**
         * IF request data is valid to next proccess
         */
        if (Auth::attempt($credentials)) {

            /**
             * Check exiting email to next
             */
            $user = User::where('email', $request['email'])->first();

            $token = $user->createToken('userLoginToken')->plainTextToken;

            return [
                'status'  => 200,
                'message' => 'Your authentication was successful.',
                'token'   => $token,
            ];
        }

        return [
            'status'  => 401,
            'message' => 'Please, type valid email and password.',
            'token'   => '',
        ];
    }

}
