<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UpdateUserMutation
{
    public function updateUser($rootValue, array $args)
    {
        $user = Auth::user(); // Assuming you are using Laravel's built-in authentication

        if (!$user) {
            throw new \Exception('User not authenticated');
        }

        $user->update([
            'name' => $args['input']['name'],
            // Add other fields you want to update
        ]);

        return $user;
    }
}
