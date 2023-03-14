<?php

namespace Application\Foundation;

use Illuminate\Foundation\ComposerScripts as BaseComposerScripts;

class ComposerScripts extends BaseComposerScripts
{
    protected static function clearCompiled(): void
    {
        $laravel = new Application(getcwd());

        if (is_file($configPath = $laravel->getCachedConfigPath())) {
            @unlink($configPath);
        }

        if (is_file($servicesPath = $laravel->getCachedServicesPath())) {
            @unlink($servicesPath);
        }

        if (is_file($packagesPath = $laravel->getCachedPackagesPath())) {
            @unlink($packagesPath);
        }
    }
}
