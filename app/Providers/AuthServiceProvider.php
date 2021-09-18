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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
          // 「管理者」だけに適用
        Gate::define('kanrisya_only', function ($user) {
            return ($user->permission_id == 1);
        });

        // 「管理者」と「企業」に適用
        Gate::define('kanrisya_and_kigyou', function ($user) {
            return ($user->permission_id <= 2);
        });

        // 「管理者」と「企業」と「従業員」全てに適用
        Gate::define('all', function ($user) {
            return ($user->permission_id <= 3);
        });

        //
    }
}
