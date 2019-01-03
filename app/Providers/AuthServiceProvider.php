<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerGates();
        //
        Passport::routes();
    }
    
    public function registerGates()
    {
        Gate::define('role-admin', function($user) {
            return $user->inRole('Admin');
        });
        
        Gate::define('role-all', function($user) {
            return $user->inRole('Admin') || $user->inRole('Regular');
        });
    }
}
