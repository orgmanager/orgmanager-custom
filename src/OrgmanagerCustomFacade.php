<?php

namespace OrgManager\OrgmanagerCustom;

use Illuminate\Support\Facades\Facade;

/**
 * @see \OrgManager\Custom\SkeletonClass
 */
class SkeletonFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'orgmanagercustom';
    }
}
