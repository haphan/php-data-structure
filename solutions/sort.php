<?php


function search_linear($value, $array)
{
    $length = count($array);

    for($i = 0; $i < $length; $i++)
    {
        if($array[$i] == $value)
        {
            return $i;
        }
    }

    return -1;
}

function search_binary($value, $array)
{
    $left = 0;
    $right = count($array) - 1;

    do
    {
        if($value == $array[$left])
            return $left;

        if($value == $array[$right])
        {
            return $right;
        }

        $mid = ceil(($left + $right) / 2);

        if($value > $array[$mid])
        {
            $left = $mid;
        }else{
            $right = $mid;
        }

    } while($left < $right);

    return -1;
}

function sort_selection(&$array)
{
    $length = count($array);

    for($idx = 0; $idx < $length; $idx ++)
    {
        $min = $idx;

        for($cursor = $min; $cursor < $length; $cursor++)
        {
            $min = ($array[$cursor] < $array[$min]) ? $cursor : $min;
        }

        list($array[$idx], $array[$min]) = array($array[$min], $array[$idx]);
    }
}

function sort_interchange(&$array)
{
    $length = count($array);

    for($i = 0; $i < $length - 1; $i++)
    {
        for($j = $i+1; $j < $length; $j++)
        {
            if($array[$j] < $array[$i])
            {
                list($array[$i], $array[$j]) = array($array[$j], $array[$i]);
            }
        }
    }
}

function sort_insertion(&$array)
{

}

function array_print($array)
{
    echo '[' . implode(', ', $array) . ']' . "\r\n";
}