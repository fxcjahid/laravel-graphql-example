<?php

namespace App\GraphQL\Queries;

use App\Models\User;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class FindUserQuery
{
    public function resolve($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {

        $key   = (string) $args['query'][0]['key'];
        $value = (string) $args['query'][0]['value'];

        // Otherwise, assume it's a username
        return User::where($key, $value)->first();
    }
}
