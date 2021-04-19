<?php

namespace Hatchet\DBAuth\Test;

use Hatchet\DBAuth\Providers\IamDatabaseConnectorProvider;

class TestCase extends Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            IamDatabaseConnectorProvider::class
        ];
    }

}