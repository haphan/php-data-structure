<?php

function search_linear($value, $array)
{
    $length = count($array);

    for ($i = 0; $i < $length; $i++) {
        if ($array[$i] == $value) {
            return $i;
        }
    }

    return -1;
}

function search_binary($value, $array)
{
    $left = 0;
    $right = count($array) - 1;

    do {
        if ($value == $array[$left])
            return $left;

        if ($value == $array[$right]) {
            return $right;
        }

        $mid = ceil(($left + $right) / 2);

        if ($value > $array[$mid]) {
            $left = $mid;
        } else {
            $right = $mid;
        }

    } while ($left < $right);

    return -1;
}