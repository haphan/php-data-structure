<?php

namespace Haphan\InterviewPrep\Tests;

class GeneralTest extends  \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider mostFrequentUsedIntegerProvider
     */
    public function testMostFrequentUsedInteger($array, $result)
    {
        $this->assertEquals(most_frequent_integer($array), $result);
    }

    function mostFrequentUsedIntegerProvider()
    {
        return [
            'happy case' => [
                [5,4,3,2,1,1,1,1,1], 1
            ],
            'not found case, return first element' => [
                [5,4,3,2,1],5
            ],
            'empty array should return -1' => [
                [],-1
            ],
            'not an array input should return -1' => [
                'foobar', -1
            ]
        ];
    }
}