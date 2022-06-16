<?php
/**
 * Created by PhpStorm.
 * User: Soporte
 * Date: 5/11/2018
 * Time: 18:37
 */

namespace Tests\Greenter\Xml\Filter;

use Greenter\Xml\Filter\TributoFunction;

class TributoFunctionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getCodes
     * @param string $code
     */
    public function testGetAfectacion($code)
    {
        $value = TributoFunction::getByAfectacion($code);

        $this->assertNotNull($value);
    }

    public function testGetTributoNotFound()
    {
        $value = TributoFunction::getByTributo('2');

        $this->assertNull($value);
    }

    public function getCodes()
    {
        return [[10], [17], [20], [30], [40], [11], [21]];
    }
}