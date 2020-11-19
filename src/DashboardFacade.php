<?php

namespace Suspendmode\Dashboard;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Suspendmode\Dashboard\Skeleton\SkeletonClass
 */
class DashboardFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dashboard';
    }
}
