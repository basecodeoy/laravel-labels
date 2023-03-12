<?php

declare(strict_types=1);

namespace PreemStudio\Labels;

use PreemStudio\Jetpack\Package\AbstractServiceProvider;
use PreemStudio\Jetpack\Package\Package;

class ServiceProvider extends AbstractServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-labels')
            ->hasConfigFile('laravel-labels')
            ->hasMigration('create_labels_table');
    }
}
