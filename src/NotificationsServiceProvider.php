<?php

namespace Homeful\Notifications;

use Homeful\Notifications\Commands\NotificationsCommand;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

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
            ->hasConfigFile(['data', 'engagespark', 'notifications'])
            ->hasViews('homeful')
            ->hasTranslations()
            ->hasMigration('create_notifications_table')
            ->hasCommand(NotificationsCommand::class);
    }
}
