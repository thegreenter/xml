<?php
/**
 * Created by PhpStorm.
 * User: Giansalex
 * Date: 16/07/2017
 * Time: 22:54
 */

declare(strict_types=1);

namespace Tests\Greenter\Xml\Builder;

<<<<<<< HEAD
=======
use Greenter\Data\Generator\BoletaStore;
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
use Greenter\Data\Generator\InvoiceFullStore;
use Greenter\Data\Generator\InvoiceStore;
use Greenter\Model\Sale\Invoice;
use PHPUnit\Framework\TestCase;

/**
 * Class FeInvoiceBuilderTest
 * @package Tests\Greenter\Xml\Builder
 */
class FeInvoiceBuilderTest extends TestCase
{
    use FeBuilderTrait;
    use XsdValidatorTrait;

    public function testCreateXmlInvoice()
    {
        $invoice = $this->createDocument(InvoiceFullStore::class);

        $xml = $this->build($invoice);

        $this->assertNotEmpty($xml);
        $this->assertSchema($xml);
<<<<<<< HEAD
=======
    }

    public function testInvoiceFilename()
    {
        /**@var $invoice Invoice*/
        $invoice = $this->createDocument(InvoiceStore::class);
        $filename = $invoice->getName();

        $this->assertEquals($this->getFilename($invoice), $filename);
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
    }

    public function testCreateXmlBoleta()
    {
<<<<<<< HEAD
        /**@var $invoice Invoice*/
        $invoice = $this->createDocument(InvoiceStore::class);
        $filename = $invoice->getName();
=======
        $invoice = $this->createDocument(BoletaStore::class);
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40

        $xml = $this->build($invoice);

        $this->assertNotEmpty($xml);
        $this->assertSchema($xml);
    }

    private function getFileName(Invoice $invoice)
    {
        $parts = [
            $invoice->getCompany()->getRuc(),
            $invoice->getTipoDoc(),
            $invoice->getSerie(),
            $invoice->getCorrelativo(),
        ];

        return join('-', $parts);
    }
}