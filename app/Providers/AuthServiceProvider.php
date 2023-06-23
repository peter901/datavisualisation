<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Enums\Role;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('administration', function ($user, $loggedInUser) {

            return $user->role === Role::SuperAdmin || $user->role ===Role::Admin;
        });

        Gate::define('add-payment_agent', function ($user, $loggedInUser) {

            return $user->role === Role::SuperAdmin;
        });

        Gate::define('view-token', function ($user, $loggedInUser) {

            return $user->role === Role::SuperAdmin;
        });


        Gate::define('delete-payment_agent', function ($user, $loggedInUser) {

            return $user->role === Role::SuperAdmin;
        });
    }
}
