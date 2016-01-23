<?php

namespace Haphan\InterviewPrep\Tests;

class ProblemTest extends  \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider mostFrequentUsedIntegerProvider
     */
    public function testMostFrequentUsedInteger($array, $result)
    {
        $this->assertEquals(most_frequent_integer($array), $result);
    }

    public function mostFrequentUsedIntegerProvider()
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


    /**
     * @dataProvider findPairSumProvider
     */
    public function testFindPairSum($array, $sum, $expectedResult)
    {
        $result = find_pairs_sum($array, $sum);
        $this->assertEquals($result, $expectedResult);
    }

    public function findPairSumProvider()
    {
        return [
            'happy case 1' => [
                [5,5], 10, [[0,1]]
            ],
            'happy case 2' => [
                [8,6,4,2], 10, [[0,3],[1,2]]
            ],
            'happy case 3' => [
                [0,1,9,10,5,6], 15, [[2,5], [3,4]]
            ],
        ];
    }
}