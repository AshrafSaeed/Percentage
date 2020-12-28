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

namespace  AshrafSaeed\Percentage;

class Percentage
{
    /**
     * @param float $a
     * @param float $b
     * @return float
     *
     * What is the percentage increase or decrease from $a to $b ?
     */
    public function differenceBetween(float $a, float $b, string $sign="%"): float
    {
        return floatval(($b - $a) / $a * 100);
    }

    /**
     * @param float $a
     * @param float $b
     * @return float
     *
     * What is the absolute percentage increase or decrease from $a to $b ?
     */
    public function absoluteDifferenceBetween(float $a, float $b): float
    {
        return floatval(abs(static::differenceBetween($a, $b)));
    }

    /**
     * @param float $a
     * @param float $b
     * @return float
     *
     * How much is $a of $b in percentages?
     */
    public  function calculate(float $a, float $b): float
    {
        return floatval($a * 100 / $b);
    }

    /**
     * @param float $percentage
     * @param float $number
     * @return float
     *
     * Get a percentage return from a number.
     */
    public  function of(float $percentage, float $number): float
    {
        return floatval($number * ($percentage / 100));
    }

    /**
     * @param float $percentage
     * @param float $a
     * @param float $b
     * @return float
     *
     * Get the absolute value if you extend range $a to $b with $percentage.
     */
    public  function extension(float $percentage, float $a, float $b): float
    {
        $movement = abs($a - $b);

        if ($a > $b) {
            return floatval($a - ($movement * $percentage / 100));
        }

        return floatval($a + ($movement * $percentage / 100));
    }
}