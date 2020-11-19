<?php

namespace Suspendmode\Dashboard\Tests;

use Orchestra\Testbench\TestCase;
use Suspendmode\Dashboard\DashboardServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [DashboardServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
