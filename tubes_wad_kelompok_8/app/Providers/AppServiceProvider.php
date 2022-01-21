<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('admin', function(User $user) {
            return $user->isadmin;
        });
        Gate::define('customer', function(User $user) {
            return $user->iscustomer;
        });
        Gate::define('vendor', function(User $user) {
            return $user->isvendor;
        });
    }
}
