<?php

namespace parzival42codes\LaravelSimpleDashboard;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelSimpleDashboardServiceProvider extends PackageServiceProvider
{
    public const PACKAGE_NAME = 'laravel-simple-dashboard';

    public const PACKAGE_NAME_SHORT = 'simple-dashboard';

    public function configurePackage(Package $package): void
    {
        $package->name(self::PACKAGE_NAME)->hasViews();
    }

    public function registeringPackage(): void
    {
    }
}
