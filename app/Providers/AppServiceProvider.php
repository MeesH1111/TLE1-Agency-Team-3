<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\User;
use App\Models\Vacancy;
use Illuminate\Support\Facades\Gate;
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
        Gate::define('edit-company', function (User $user, Company $company) {
            return $user->id === $company->user_id;
        });

        Gate::define('access-vacature', function ($user, $vacature) {
            return $user->id === $vacature->company->user_id;
        });
    }
}
