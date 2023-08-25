<?php

namespace App\GraphQL\Mutations;

use Illuminate\Support\Facades\Auth;

final class Logout
{

    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        /**
         * Revoke user access token
         */
        $user = Auth::user();

        return [
            'status'  => 200,
            'id'      => $user->currentAccessToken()->delete(),
            'message' => 'Logout has successfull',
        ];
    }
}
