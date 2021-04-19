<?php

namespace hatchetaustralia\DBAuth\Test;

use hatchetaustralia\DBAuth\Providers\IamDatabaseConnectorProvider;

class TestCase extends Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            IamDatabaseConnectorProvider::class
        ];
    }

}