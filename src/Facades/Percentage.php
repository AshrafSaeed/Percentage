<?php

/**
 * This file is part of Laravel Persontage.
 *
 * (c) Muhammad Ashraf <avanix.sol@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */


namespace AshrafSaeed\Percentage\Facades;

use Illuminate\Support\Facades\Facade;

class Percentage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'percentage';
    }
}