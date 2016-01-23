<?php

function sort_selection(&$array)
{
    $length = count($array);

    for ($idx = 0; $idx < $length; $idx++) {
        $min = $idx;

        for ($cursor = $min; $cursor < $length; $cursor++) {
            $min = ($array[$cursor] < $array[$min]) ? $cursor : $min;
        }

        list($array[$idx], $array[$min]) = array($array[$min], $array[$idx]);
    }
}

function sort_interchange(&$array)
{
    $length = count($array);

    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($array[$j] < $array[$i]) {
                list($array[$i], $array[$j]) = array($array[$j], $array[$i]);
            }
        }
    }
}