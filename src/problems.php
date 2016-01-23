<?php
/**
 * Find the most frequent integer in an array
 *
 * Complexity O(N)
 * Space usage N
 *
 * @return int most frequent integer or -1 if invalid input given
 */
function most_frequent_integer($array)
{
    if(count($array) == 0 || !is_array($array))
        return -1;

    $bucket = array();
    $candidate = 0;

    foreach($array as $i => $value)
    {
        if(!isset($bucket[$value]))
        {
            $bucket[$value] = 1;
        }else{
            $bucket[$value]++;
        }

        if($bucket[$array[$candidate]] < $bucket[$value])
        {
            $candidate = $i;
        }
    }

    return $array[$candidate];
}


/**
 * Given input x and array A
 * If x is found in A, return x
 * Else return first element smaller than x
 *
 * Complexity O(N)
 * Space usage 1
 */
function search_closest_smaller($array, $x)
{
    $candidate = $array[0];

    foreach($array as $i => $value)
    {
        if($x == $value)
        {
            return $x;
        }
        else {
            $candidate = ($candidate < $value && $value < $x) ? $value : $candidate;
        }
    }

    return $candidate;
}

/**
 * Find pairs in an integer array whose sum is equal to K (bonus: do it in linear time)
 * Also not accepting duplicated pair. E.g. [3,6] and [6,3] are consider 1 pair thus only appear once in the result
 */
function find_pairs_sum($array, $k)
{
    $hash = [];
    $result = [];

    foreach($array as $i => $v)
    {
        $hash[$v] = $i;
    }

    foreach($array as $i => $v)
    {
        if(isset($hash[$k - $v]) && $i != $hash[$k - $v] && $i < ($hash[$k - $v]))
        {
            $result[] = [$i, $hash[$k - $v]];
        }
    }

    return $result;
}


/**

Given 2 integer arrays, determine of the 2nd array is a rotated version of the 1st array. Ex. Original Array A={1,2,3,5,6,7,8} Rotated Array B={5,6,7,8,1,2,3}
Write fibbonaci iteratively and recursively (bonus: use dynamic programming)
Find the only element in an array that only occurs once.
Find the common elements of 2 int arrays
Implement binary search of a sorted array of integers
Implement binary search in a rotated array (ex. {5,6,7,8,1,2,3})
Use dynamic programming to find the first X prime numbers
Write a function that prints out the binary form of an int
Implement parseInt
Implement squareroot function
Implement an exponent function (bonus: now try in log(n) time)
Write a multiply function that multiples 2 integers without using *
HARD: Given a function rand5() that returns a random int between 0 and 5, implement rand7()
HARD: Given a 2D array of 1s and 0s, count the number of "islands of 1s" (e.g. groups of connecting 1s)
 */