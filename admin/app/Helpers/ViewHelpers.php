<?php

use Illuminate\Support\Collection;

if (!function_exists('checkIssetSelect')) {
    /**
     * Check isset.
     * @param $old == old('')
     * @param $key == $key
     * $param $value == database value
     * @return Boolean
     */
    function checkIssetSelect($old, $key, $value = null)
    {
        if ($old === null && $value == $key) {
            return true;
        }
        if ($old !== null && $old == $key) {
            return true;
        }
        return false;
    }
}

if (!function_exists('isActiveMenu')) {
    /**
     * Check is a menu is active now.
     * @param $prefix
     * @return String
     */
    function isActiveMenu($prefix)
    {
        if (strpos(Route::currentRouteName(), $prefix) !== false) {
            return 'active';
        }
    }
}

if (!function_exists('formatDatetime')) {
    /**
     * Check is a menu is active now.
     * @param $datetime
     * @return String
     */
    function formatDatetime($datetime)
    {
        $datetime = strtotime($datetime);

        return date('Y', $datetime) . '年' . date('m', $datetime) . '月'
            . date('d', $datetime) . '日 '
            . date('H', $datetime) . '時' . date('i', $datetime) . '分';
    }
}

if (!function_exists('formatMoney')) {
    function formatMoney($price)
    {
        return number_format($price, 0, '.', ',');
    }
}

if (!function_exists('calculateTotalPrice')) {
    function calculateTotalPrice($items)
    {
        $items = toCollection($items);

        $total = $items->reduce(function ($total, $item) {
            return $total + $item->price;
        });

        return $total;
    }
}

function toCollection($items)
{
    if (!$items instanceof Collection) {
        $items = collect($items);
    }

    return $items;
}
