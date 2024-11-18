<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\Service;
use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void 
    {
        $this->registerPolicies();
        Paginator::defaultView('pagination::bootstrap-4');

        Gate::define('destroy-service', function (User $user, Service $service) {
            return
             $user->is_admin OR 
             $service->price < 1000;
        });

        Gate::define('create-service', function (User $user) {
            return true;
        });
    }
}
