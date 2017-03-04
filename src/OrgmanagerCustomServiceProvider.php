<?php

namespace OrgManager\OrgmanagerCustom;

use Illuminate\Support\ServiceProvider;
use OrgManager\OrgmanagerCustom\InviteToOrgmanager;
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
