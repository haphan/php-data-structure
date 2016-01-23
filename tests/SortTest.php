<?php

namespace Haphan\InterviewPrep\Tests;

class SortTest extends  \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider sortTestDataProvider
     */
    public function testSortSelection($array, $sortedArray)
    {
        sort_selection($array);
        $this->assertEquals($array, $sortedArray);
    }

    /**
     * @dataProvider sortTestDataProvider
     */
    public function testSortInterchange($array, $sortedArray)
    {
        sort_interchange($array);
        $this->assertEquals($array, $sortedArray);
    }

    function sortTestDataProvider()
    {
        return [
            'happy case' => [
                [5,4,3,2,1], [1,2,3,4,5]
            ],
            'another happy case' => [
                [12, 2, 8, 5, 1, 6, 4, 15], [1,2,4,5,6,8,12,15]
            ]
        ];
    }
}