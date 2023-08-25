<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class UpdateProfileMutation
{

    /**
     * @param $rootValue
     * @param array               $args
     * @param GraphQLContext|null $context
     * @param ResolveInfo         $resolveInfo
     *
     * @return array
     */
    public function updateProfile($rootValue, array $args, GraphQLContext $context = null, ResolveInfo $resolveInfo)
    {

        $user = $context->user();

        if (!$user) {
            throw new \Exception('User not authenticated');
        }

        $user->update($args);

        return $user;

    }
}
