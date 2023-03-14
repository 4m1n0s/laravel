<?php

namespace Tests;

use Illuminate\Foundation\Application;
use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    public function createApplication(): Application
    {
        $app = require __DIR__.'/../application/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
