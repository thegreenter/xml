<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 19/07/2017
 * Time: 04:14 PM
 */

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
namespace Tests\Greenter\Xml\Builder\v21;

use Greenter\Data\Generator\NoteStore;
use Greenter\Model\Sale\Note;
use Tests\Greenter\Xml\Builder\FeBuilderTrait;
use Tests\Greenter\Xml\Builder\XsdValidatorTrait;
<<<<<<< HEAD
=======
use PHPUnit\Framework\TestCase;
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40

/**
 * Class FeNoteBuilderTest
 * @package tests\Greenter\Xml\Builder
 */
<<<<<<< HEAD
class FeNoteBuilderTest extends \PHPUnit_Framework_TestCase
=======
class FeNoteBuilderTest extends TestCase
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
{
    use FeBuilderTrait;
    use XsdValidatorTrait;

    public function testCreateXmlCreditNote()
    {
        /**@var $note Note*/
        $note = $this->createDocument(NoteStore::class);
        $note->setUblVersion('2.1');

        $xml = $this->build($note);

//        file_put_contents('notecr.xml', $xml);
        $this->assertNotEmpty($xml);
        $this->assertSchema($xml);
    }

    public function testCreateXmlDebitNote()
    {
        /**@var $note Note*/
        $note = $this->createDocument(NoteStore::class);
        $note->setTipoDoc('08');
        $note->setUblVersion('2.1');

        $xml = $this->build($note);

//        file_put_contents('notedb.xml', $xml);
        $this->assertNotEmpty($xml);
        $this->assertSchema($xml);
    }
}