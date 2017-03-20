<?php

namespace OrgManager\OrgmanagerCustom;

use Illuminate\Support\ServiceProvider;

class OrgmanagerCustomServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
            InviteToOrgmanager::class,
            ListUsers::class,
            ListOrgs::class,
            GetStats::class,
        ]);
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
