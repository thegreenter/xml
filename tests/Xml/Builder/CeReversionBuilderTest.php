<?php
/**
 * Created by PhpStorm.
 * User: Giansalex
 * Date: 09/08/2017
 * Time: 20:19
 */

declare(strict_types=1);

namespace Tests\Greenter\Xml\Builder;

<<<<<<< HEAD
=======
use DateTime;
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
use Greenter\Data\Generator\ReversionStore;
use Greenter\Model\Voided\Reversion;
use PHPUnit\Framework\TestCase;

/**
 * Class CeReversionBuilderTest
 * @package Tests\Greenter\Xml\Builder
 */
class CeReversionBuilderTest extends TestCase
{
    use CeBuilderTrait;
    use XsdValidatorTrait;

    public function testCreateXmlReversion()
    {
        $reversion = $this->createDocument(ReversionStore::class);

        $xml = $this->build($reversion);

        $this->assertNotEmpty($xml);
        $this->assertSchema($xml);
    }

    public function testReversionFilename()
    {
        /**@var $reversion Reversion */
        $reversion = $this->createDocument(ReversionStore::class);
<<<<<<< HEAD
=======
        $reversion->setFecComunicacion(new DateTime('2021-03-05 00:00:00-05:00'));
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
        $filename = $reversion->getName();

        $this->assertEquals('20123456789-RR-20210305-001', $filename);
    }
}
