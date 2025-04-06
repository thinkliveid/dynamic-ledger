<?php

declare(strict_types=1);

namespace ThinkliveId\LiveEvent\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ThinkliveId\LiveEvent\EventManager
 */
class EventManager extends Facade
{
  protected static function getFacadeAccessor(): string
  {
    return \ThinkliveId\LiveEvent\EventManager::class;
  }
}
