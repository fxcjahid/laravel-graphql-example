<?php

namespace App\Providers;

use App\GraphQL\Mutations\UpdateProfileMutation;
use Illuminate\Support\ServiceProvider;

class GraphQLServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->singleton('graphql.mutations', function () {
            return [
                'updateProfile' => UpdateProfileMutation::class,
            ];
        });

    }
}
