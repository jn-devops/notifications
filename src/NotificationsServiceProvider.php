<?php

namespace Homeful\Notifications;

use Homeful\Notifications\Commands\NotificationsCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class NotificationsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('notifications')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_notifications_table')
            ->hasCommand(NotificationsCommand::class);
    }
}
