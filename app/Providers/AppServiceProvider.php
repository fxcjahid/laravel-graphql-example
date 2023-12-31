<?php

namespace App\Providers;

use App\GraphQL\Mutations\UpdateUserMutation;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->singleton('graphql.mutations', function () {
            return [
                // ...
                'updateUser' => UpdateUserMutation::class,
            ];
        });

    }
}
