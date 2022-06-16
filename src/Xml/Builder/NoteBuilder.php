<?php
/**
 * Created by PhpStorm.
 * User: Giansalex
 * Date: 01/10/2017
 * Time: 13:43.
 */

declare(strict_types=1);

namespace Greenter\Xml\Builder;

use Greenter\Builder\BuilderInterface;
use Greenter\Model\DocumentInterface;
<<<<<<< HEAD
=======
use Greenter\Model\Sale\Note;
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
use Greenter\Xml\Filter\TributoFunction;
use Twig\TwigFunction;

/**
 * Class NoteBuilder.
 */
class NoteBuilder extends TwigBuilder implements BuilderInterface
{
    /**
     * @param array $options
     */
    public function __construct($options = [])
    {
        parent::__construct($options);

        $this->twig->addFunction(new TwigFunction('getTributoAfect', [TributoFunction::class, 'getByAfectacion']));
<<<<<<< HEAD
        $this->twig->addFunction(new TwigFunction('hasIvap', [TributoFunction::class, 'hasIvap']));
=======
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
    }

    /**
     * Create xml for document.
     *
     * @param DocumentInterface $document
     *
     * @return string
     */
    public function build(DocumentInterface $document): string
    {
<<<<<<< HEAD
        /** @var $document \Greenter\Model\Sale\Note */
        $prefix = $document->getTipoDoc() === '07' ? 'notacr' : 'notadb';
        $template = $prefix.$document->getUblVersion().'.xml.twig';
=======
        /** @var Note $note */
        $note = /*.(Note).*/$document;
        $prefix = $note->getTipoDoc() === '07' ? 'notacr' : 'notadb';
        $template = $prefix.$note->getUblVersion().'.xml.twig';
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40

        return $this->render($template, $document);
    }
}
