<?php

namespace Homeful\Notifications\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Homeful\Notifications\Notifications
 */
class Notifications extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Homeful\Notifications\Notifications::class;
    }
}
