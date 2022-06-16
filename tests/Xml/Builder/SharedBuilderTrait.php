<?php
/**
 * Created by PhpStorm.
 * User: Giansalex
 * Date: 10/03/2019
 * Time: 23:26
 */

<<<<<<< HEAD
=======
declare(strict_types=1);

>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
namespace Tests\Greenter\Xml\Builder;

use Greenter\Data\GeneratorFactory;
use Greenter\Data\SharedStore;

trait SharedBuilderTrait
{
    private function getShared()
    {
        return new SharedStore();
    }

<<<<<<< HEAD
    private function createDocument($type)
=======
    private function createDocument(string $type)
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
    {
        $factory = new GeneratorFactory();
        $factory->shared = $this->getShared();
        $generator = $factory->create($type);

        return $generator->create();
    }
}