## Laravel IAM DB Auth

Forked from https://github.com/pixelvide/laravel-iam-db-auth

This is a package to connect Laravel with a AWS RDS instance using IAM authentication.

It includes a service provider that gives the framework our overridden MySQL/PGSQL connector class when it asks
for an MySQL/PGSQL connection.

## Installation

require this package with composer:

```shell
composer require hatchetaustralia/laravel-iam-db-auth
```

Add a missing variables in connection to the config array in config/database.php

```php
<?php [
    'mysql' => [
        'aws_region' => env('AWS_DEFAULT_REGION'),
        'use_iam_auth' => env('DB_USE_IAM_AUTH', true),
    ],
];
```

Obtain the rds-combined-ca-bundle.pem from https://docs.aws.amazon.com/AmazonRDS/latest/UserGuide/UsingWithRDS.SSL.html