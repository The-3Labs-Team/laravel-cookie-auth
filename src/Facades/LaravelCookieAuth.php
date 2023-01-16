<?php

namespace The3LabsTeam\LaravelCookieAuth\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \The3LabsTeam\LaravelCookieAuth\LaravelCookieAuth
 */
class LaravelCookieAuth extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \The3LabsTeam\LaravelCookieAuth\LaravelCookieAuth::class;
    }
}
