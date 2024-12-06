<?php

namespace App\Helpers;

use Carbon\Carbon;

class DateHelper
{
    /**
     * Format a given date to a human-readable format.
     *
     * @param string $date
     * @return string
     */
    public static function humanReadableDate(string $date): string
    {
        return Carbon::parse($date)->diffForHumans();
    }

    /**
     * Format a date into a specific format.
     *
     * @param string $date
     * @param string $format
     * @return string
     */
    public static function formatDate(string $date, string $format = 'Y-m-d'): string
    {
        return Carbon::parse($date)->format($format);
    }
}
