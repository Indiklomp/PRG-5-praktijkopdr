<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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
//        $this->registerPolicies();

//        Gate::define('tasks_create'. fn(User $user) => $user->is_admin);
//        Gate::define('tasks_edit'. fn(User $user) => $user->is_admin);
//        Gate::define('tasks_destroy'. fn(User $user) => $user->is_admin);
    }
}
