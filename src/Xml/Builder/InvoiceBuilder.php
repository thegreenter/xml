<?php
/**
 * Created by PhpStorm.
 * User: Giansalex
 * Date: 01/10/2017
 * Time: 13:37.
 */

declare(strict_types=1);

namespace Greenter\Xml\Builder;

use Greenter\Builder\BuilderInterface;
use Greenter\Model\DocumentInterface;
use Greenter\Model\Sale\Invoice;
use Greenter\Xml\Filter\TributoFunction;
use Twig\TwigFunction;

/**
 * Class InvoiceBuilder.
 */
class InvoiceBuilder extends TwigBuilder implements BuilderInterface
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
     *
     * @throws \Exception
     */
    public function build(DocumentInterface $document): ?string
    {
<<<<<<< HEAD
        /** @var $document Invoice */
        $template = 'invoice'.$document->getUblVersion().'.xml.twig';
=======
        /** @var Invoice $invoice */
        $invoice = /*.(Invoice).*/ $document;
        $template = 'invoice'.$invoice->getUblVersion().'.xml.twig';
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40

        return $this->render($template, $document);
    }
}
