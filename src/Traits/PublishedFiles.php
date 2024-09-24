<?php

namespace Winex01\BackpackMenu\Traits;

use Generator;
use Illuminate\Support\Str;

trait PublishedFiles
{
    /**
     * Searches migrations and publishes them as assets.
     *
     * @param string $directory
     *
     * @return void
     */
    protected function publishMigrations(string $directory): void
    {
        if ($this->app->runningInConsole()) {
            $generator = function (string $directory): Generator {
                foreach ($this->app->make('files')->allFiles($directory) as $file) {
                    yield $file->getPathname() => $this->app->databasePath(
                        'migrations/' . now()->format('Y_m_d_His') . '_' . Str::after($file->getFilename(), '00_00_00_000000')
                    );
                }
            };

            $this->publishes(iterator_to_array($generator($directory)), 'migrations');
        }
    }

    protected function publishSeeders(string $directory): void
    {
        if ($this->packageDirectoryExistsAndIsNotEmpty('database/seeders')) {
            $this->publishes([
                $directory => base_path('database/seeders'),
            ], 'seeders');
        }
    }
}
