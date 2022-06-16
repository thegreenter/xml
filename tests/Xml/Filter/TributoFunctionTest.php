<?php
/**
 * Created by PhpStorm.
 * User: Soporte
 * Date: 5/11/2018
 * Time: 18:37
 */

<<<<<<< HEAD
namespace Tests\Greenter\Xml\Filter;

use Greenter\Xml\Filter\TributoFunction;

class TributoFunctionTest extends \PHPUnit_Framework_TestCase
=======
declare(strict_types=1);

namespace Tests\Greenter\Xml\Filter;

use Greenter\Xml\Filter\TributoFunction;
use PHPUnit\Framework\TestCase;

class TributoFunctionTest extends TestCase
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
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