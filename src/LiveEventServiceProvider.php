<?php

declare(strict_types=1);

namespace ThinkliveId\LiveEvent;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use ThinkliveId\LiveEvent\Commands\LiveEventCommand;

class LiveEventServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('dynamic-ledger')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_migration_table_name_table')
            ->hasCommand(LiveEventCommand::class);
    }
}
