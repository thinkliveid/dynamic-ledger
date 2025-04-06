<?php

declare(strict_types=1);

namespace ThinkliveId\LiveEvent\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use ThinkliveId\LiveEvent\LiveEventServiceProvider;

class TestCase extends Orchestra
{
  protected function setUp(): void
  {
    parent::setUp();

    Factory::guessFactoryNamesUsing(
      static fn(string $modelName) => 'ThinkliveId\\LiveEvent\\Database\\Factories\\' . class_basename($modelName) . 'Factory'
    );
  }

  protected function getPackageProviders($app): array
  {
    return [
      LiveEventServiceProvider::class,
    ];
  }

  public function getEnvironmentSetUp($app): void
  {
    config()->set('database.default', 'testing');

    /*
     foreach (\Illuminate\Support\Facades\File::allFiles(__DIR__ . '/database/migrations') as $migration) {
        (include $migration->getRealPath())->up();
     }
     */
  }
}
