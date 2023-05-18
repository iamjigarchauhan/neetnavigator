<?php
if (!function_exists('formatNumber')) {
    function formatNumber($num)
    {
        if ($num >= 10000000) {
            // convert to Crores and round to 2 decimal places
            return round($num / 10000000, 2) . ' Cr';
        } elseif ($num >= 100000) {
            // convert to Lakhs and round to 2 decimal places
            return round($num / 100000, 2) . 'L';
        } elseif ($num >= 1000) {
            // convert to Lakhs and round to 2 decimal places
            return round($num / 1000, 2) . 'K';
        } else {
            // return the number as is
            return $num;
        }
    }
}
