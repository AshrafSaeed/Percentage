<?php

declare(strict_types=1);

/**
 * This file is part of Laravel Persontage.
 *
 * (c) Muhammad Ashraf <avanix.sol@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace AshrafSaeed\Percentage\ServiceProvider;

use Illuminate\Support\ServiceProvider;
use AshrafSaeed\Percentage\Percentage;
/**
 * This is an Laravel Console Menu Service Provider implementation.
 */
class PercentageServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('percentage', function($app) {
            return new Percentage();
        });
    }

    public function boot()
    {


    }
}