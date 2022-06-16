<?php
/**
 * Created by PhpStorm.
 * User: Soporte
 * Date: 11/10/2018
 * Time: 18:05
 */

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
namespace Tests\Greenter\Xml\Builder\v21;

use Greenter\Data\Generator\InvoiceDiscountStore;
use Greenter\Data\Generator\InvoiceFullStore;
use Greenter\Data\Generator\InvoiceIcbperStore;
use Greenter\Data\Generator\InvoiceIvapStore;
<<<<<<< HEAD
use Greenter\Model\Sale\Invoice;
use Tests\Greenter\Xml\Builder\FeBuilderTrait;
use Tests\Greenter\Xml\Builder\XsdValidatorTrait;

class FeInvoiceBuilderTest extends \PHPUnit_Framework_TestCase
=======
use Greenter\Data\Generator\InvoicePagoCreditoStore;
use Greenter\Model\Sale\Invoice;
use Tests\Greenter\Xml\Builder\FeBuilderTrait;
use Tests\Greenter\Xml\Builder\XsdValidatorTrait;
use PHPUnit\Framework\TestCase;

class FeInvoiceBuilderTest extends TestCase
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
{
    use FeBuilderTrait;
    use XsdValidatorTrait;

    public function testGenerate()
    {
        /**@var $invoice Invoice*/
        $invoice = $this->createDocument(InvoiceFullStore::class);
        $invoice->setUblVersion('2.1');

        $xml = $this->build($invoice);

//        file_put_contents('x.xml', $xml);
        $this->assertNotEmpty($xml);
        $this->assertSchema($xml);
    }

    /**
     * @dataProvider storeProvider
     */
    public function testBuilder($invoiceClass)
    {
        $invoice = $this->createDocument($invoiceClass);

        $xml = $this->build($invoice);
        $this->assertNotEmpty($xml);
        $this->assertSchema($xml);
    }

    public function storeProvider()
    {
        return [
<<<<<<< HEAD
          [InvoiceDiscountStore::class],
          [InvoiceIvapStore::class],
          [InvoiceIcbperStore::class]
=======
            [InvoiceDiscountStore::class],
            [InvoiceIvapStore::class],
            [InvoiceIcbperStore::class],
            [InvoicePagoCreditoStore::class]
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
        ];
    }
}