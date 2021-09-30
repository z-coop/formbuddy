<?php

namespace Z\FormBuddy;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Z\FormBuddy\Commands\FormBuddyCommand;

class FormBuddyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('formbuddy')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_formbuddy_table')
            ->hasCommand(FormBuddyCommand::class);
    }
}
