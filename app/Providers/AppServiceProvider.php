<?php

namespace App\Providers;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;


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
        Model::preventLazyLoading();
        //        Gate::define('edit-job', function (User $user, Job $job) {
//            return $job->employer->user->is($user);
//        });

        // Set Carbon's locale to Estonian
        Carbon::setLocale('et');

        // Set the PHP locale for time functions
        setlocale(LC_TIME, 'et_EE.UTF-8'); // Ensures PHP's native time functions use Estonian
    }
}
