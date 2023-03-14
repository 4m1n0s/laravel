<?php

namespace Application\Foundation;

use Illuminate\Foundation\Application as ApplicationBase;

class Application extends ApplicationBase
{
    protected function bindPathsInContainer(): void
    {
        $this->usePath($this->path());
        $this->useBasePath($this->basePath());
        $this->useConfigPath($this->configPath());
        $this->useDatabasePath($this->databasePath());
        $this->usePublicPath($this->publicPath());
        $this->useResourcePath($this->resourcePath());
        $this->useStoragePath($this->storagePath());
        $this->useBootstrapPath($this->bootstrapPath());
        $this->useLangPath($this->langPath());
    }

    public function usePath($path): Application
    {
        $this->instance('path', $path);

        return $this;
    }

    public function path($path = ''): string
    {
        return $this->joinPaths($this->appPath ?: $this->basePath('application'), $path);
    }

    public function useBasePath($path): Application
    {
        $this->instance('path.base', $path);

        return $this;
    }

    public function basePath($path = ''): string
    {
        return $this->joinPaths($this->basePath, $path);
    }

    public function useConfigPath($path): Application
    {
        $this->instance('path.config', $path);

        return $this;
    }

    public function configPath($path = ''): string
    {
        return $this->joinPaths($this->configPath ?: $this->basePath('config'), $path);
    }

    public function useDatabasePath($path): Application
    {
        $this->instance('path.database', $path);

        return $this;
    }

    public function databasePath($path = ''): string
    {
        return $this->joinPaths($this->databasePath ?: $this->basePath('database'), $path);
    }

    public function usePublicPath($path): Application
    {
        $this->instance('path.public', $path);

        return $this;
    }

    public function publicPath($path = ''): string
    {
        return $this->joinPaths($this->publicPath ?: $this->basePath('public'), $path);
    }

    public function useResourcePath($path): Application
    {
        $this->instance('path.resources', $path);

        return $this;
    }

    public function resourcePath($path = ''): string
    {
        return $this->joinPaths($this->basePath('resources'), $path);
    }

    public function useStoragePath($path): Application
    {
        $this->instance('path.storage', $path);

        return $this;
    }

    public function storagePath($path = ''): string
    {
        return $this->joinPaths($this->storagePath ?: $this->basePath('storage'), $path);
    }

    public function useBootstrapPath($path): Application
    {
        $this->instance('path.bootstrap', $path);

        return $this;
    }

    public function bootstrapPath($path = ''): string
    {
        return $this->joinPaths($this->basePath('application'), $path);
    }

    public function useLangPath($path): Application
    {
        $this->instance('path.lang', $path);

        return $this;
    }

    public function langPath($path = ''): string
    {
        return $this->joinPaths($this->basePath('languages'), $path);
    }

    public function getCachedConfigPath(): string
    {
        return storage_path('framework/cache/config.php');
    }

    public function getCachedRoutesPath(): string
    {
        return storage_path('framework/cache/routes-v7.php');
    }

    public function getCachedEventsPath(): string
    {
        return storage_path('framework/cache/events.php');
    }

    public function getCachedServicesPath(): string
    {
        return storage_path('framework/cache/services.php');
    }

    public function getCachedPackagesPath(): string
    {
        return storage_path('framework/cache/packages.php');
    }
}
