<?php

use PHPUnit\Framework\TestCase;

require __DIR__ . '/vendor/autoload.php';

/**
 * get the number which occurs odd times in the source array
 *
 * @param $arrValues array
 * @return int
 */
function getOddNumber($srcValues)
{
    foreach (array_count_values($srcValues) as $val => $item) {
        if ($item % 2 != 0) {
            return $val;
        }
    }

    return null;
}

class OddNumberTest extends TestCase
{
    public function testOddNumber()
    {
        $result = getOddNumber([2, 5, 9, 1, 5, 1, 8, 2, 8]);
        $this->assertEquals(9, $result);

        $result = getOddNumber([2, 3, 4, 3, 1, 4, 5, 1, 4, 2, 5]);
        $this->assertEquals(4, $result);
    }
}