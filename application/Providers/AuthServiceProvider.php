<?php

namespace Application\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        // 'Application\Models\Model' => 'Application\Policies\ModelPolicy',
    ];

    public function boot(): void
    {
        //
    }
}
