<?php

<<<<<<< HEAD
namespace Tests\Greenter\Xml\Filter;

use Greenter\Xml\Filter\FormatFilter;

class FormatFilterTest extends \PHPUnit_Framework_TestCase
=======
declare(strict_types=1);

namespace Tests\Greenter\Xml\Filter;

use Greenter\Xml\Filter\FormatFilter;
use PHPUnit\Framework\TestCase;

class FormatFilterTest extends TestCase
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
{
    /**
     * @var FormatFilter
     */
    private $formatter;

<<<<<<< HEAD
    protected function setUp()
=======
    protected function setUp(): void
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
    {
        $this->formatter = new FormatFilter();
    }

    /**
     * @dataProvider getNumberDecimals
     *
     * @param float $number
     * @param int   $decimals
     */
    public function testNumber($number, $decimals)
    {
        $value = $this->formatter->number($number, $decimals);

        $this->assertEquals($decimals, $this->countDecimals($value));
    }

    public function testNumberLimitMax()
    {
        $value = $this->formatter->numberLimit(10.343434223423423, 10);

        $this->assertEquals(10, $this->countDecimals($value));
    }

    public function testNumberLimitMin()
    {
        $number = 432.23;
        $value = $this->formatter->numberLimit($number, 10);

<<<<<<< HEAD
        $this->assertEquals($this->countDecimals($number), $this->countDecimals($value));
=======
        $this->assertEquals($this->countDecimals((string)$number), $this->countDecimals($value));
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
    }

    public function getNumberDecimals()
    {
        return [[10.4, 2], [17.22111, 1], [20.677722, 3], [30.22, 0]];
    }

<<<<<<< HEAD
    private function countDecimals($number)
    {
        return strlen(substr(strrchr($number, '.'), 1));
=======
    private function countDecimals(string $number)
    {
        $lasPosition = strrchr($number, '.');
        if ($lasPosition === false) {
            return 0;
        }

        return strlen(substr($lasPosition, 1));
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
    }
}
