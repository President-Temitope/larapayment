<?php

namespace Callmehalpha\Larapayment;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Callmehalpha\Larapayment\Commands\LarapaymentCommand;

class LarapaymentServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('larapayment')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_larapayment_table')
            ->hasCommand(LarapaymentCommand::class);
    }
}
