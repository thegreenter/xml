<?php
/**
 * Created by PhpStorm.
 * User: Administrador
 * Date: 09/08/2017
 * Time: 01:40 PM
 */

declare(strict_types=1);

namespace Tests\Greenter\Xml\Builder;

use Greenter\Model\Despatch\Despatch;
use Greenter\Model\DocumentInterface;
use Greenter\Model\Perception\Perception;
use Greenter\Model\Retention\Retention;
use Greenter\Model\Voided\Reversion;
use Greenter\Builder\BuilderInterface;
use Greenter\Xml\Builder\DespatchBuilder;
use Greenter\Xml\Builder\PerceptionBuilder;
use Greenter\Xml\Builder\RetentionBuilder;
use Greenter\Xml\Builder\VoidedBuilder;

/**
 * Trait CeBuilderTrait
 * @package Tests\Greenter\Xml\Builder
 */
trait CeBuilderTrait
{
    use SharedBuilderTrait;

    /**
     * @param string $className
     * @return BuilderInterface
     */
    private function getGenerator($className)
    {
        $builders = [
            Despatch::class => DespatchBuilder::class,
            Perception::class => PerceptionBuilder::class,
            Retention::class => RetentionBuilder::class,
            Reversion::class => VoidedBuilder::class,
        ];
        $builder = new $builders[$className]([
            'cache' => false,
            'strict_variables' => true,
            'autoescape' => false,
        ]);

        return $builder;
    }

    /**
     * @param DocumentInterface $document
     * @return string
     */
    private function build(DocumentInterface $document)
    {
        $generator = $this->getGenerator(get_class($document));

        return $generator->build($document);
    }
}