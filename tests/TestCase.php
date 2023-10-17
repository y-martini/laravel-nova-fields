<?php

namespace YuriyMartini\Laravel\Nova\Fields\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use YuriyMartini\Laravel\Nova\Fields\ServiceProvider;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class,
        ];
    }
}
