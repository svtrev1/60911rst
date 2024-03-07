<?php

namespace App\Providers;


use App\Models\Session;
use App\Models\User;
use Carbon\Carbon;
use Gate;
use Illuminate\Pagination\Paginator;
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
        Paginator::defaultView('pagination::default');

        Gate::define('destroy-session', function (User $user, Session $session) {
            return $user->is_admin OR $session->created_at < Carbon::now()->subHour();
    });
    }
}
