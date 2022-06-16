<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 09/08/2017
 * Time: 03:18 PM
 */

namespace Tests\Greenter\Xml\Builder;

use Greenter\Data\Generator\DespatchStore;
use Greenter\Model\Despatch\Despatch;

/**
 * Class CeDespatchBuilderTest
 * @package Tests\Greenter\Xml\Builder
 */
class CeDespatchBuilderTest extends \PHPUnit_Framework_TestCase
{
    use CeBuilderTrait;
    use XsdValidatorTrait;

    public function testCreateXmlDespatch()
    {
        $despatch = $this->createDocument(DespatchStore::class);

        $xml = $this->build($despatch);

        $this->assertSchema($xml);
    }

    public function testDespatchFilename()
    {
        /**@var $despatch Despatch*/
        $despatch= $this->createDocument(DespatchStore::class);
        $filename = $despatch->getName();

        $this->assertEquals($this->getFilename($despatch), $filename);
    }

    private function getFileName(Despatch $despatch)
    {
        $parts = [
            $despatch->getCompany()->getRuc(),
            '09',
            $despatch->getSerie(),
            $despatch->getCorrelativo(),
        ];

        return join('-', $parts);
    }
}