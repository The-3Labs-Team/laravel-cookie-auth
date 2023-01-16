<?php

namespace The3LabsTeam\LaravelCookieAuth;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use The3LabsTeam\LaravelCookieAuth\Commands\LaravelCookieAuthCommand;

class LaravelCookieAuthServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-cookie-auth')
            ->hasConfigFile();
            //->hasViews()
            //->hasMigration('create_laravel-cookie-auth_table')
            //->hasCommand(LaravelCookieAuthCommand::class);
    }
}
