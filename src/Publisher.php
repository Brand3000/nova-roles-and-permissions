<?php

namespace Brand3000\NovaRolesAndPermissions;

use Illuminate\Support\ServiceProvider;

class Publisher extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
    }

    protected function publish(): void
    {
        $this->publishes([
            // migrations
            __DIR__.'/../database/migrations/2024_04_22_100734_add_roles_and_permissions_to_users_table.stub' => database_path('migrations/2024_04_22_100734_add_roles_and_permissions_to_users_table.php'),

            // models
            __DIR__.'/../stubs/app/Models/Admin.stub' => app_path('Models/Admin.php'),
            __DIR__.'/../stubs/app/Models/User.stub' => app_path('Models/User.php'),

            // resources
            __DIR__.'/../stubs/app/Nova/Admin.stub' => app_path('Nova/Admin.php'),
            __DIR__.'/../stubs/app/Nova/User.stub' => app_path('Nova/User.php'),

            // policies
            __DIR__.'/../stubs/app/Policies/AdminPolicy.stub' => app_path('Policies/AdminPolicy.php'),
            __DIR__.'/../stubs/app/Policies/UserPolicy.stub' => app_path('Policies/UserPolicy.php'),
            __DIR__.'/../stubs/app/Policies/CorePermissions.stub' => app_path('Policies/CorePermissions.php'),
        ]);
    }
}
