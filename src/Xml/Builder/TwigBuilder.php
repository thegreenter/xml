<?php
/**
 * Created by PhpStorm.
 * User: Giansalex
 * Date: 09/08/2017
 * Time: 19:23.
 */

declare(strict_types=1);

namespace Greenter\Xml\Builder;

<<<<<<< HEAD
use Greenter\Xml\Filter\FormatFilter;
use Twig\Environment;
=======
use Greenter\Model\TimeZonePe;
use Greenter\Xml\Filter\FormatFilter;
use Twig\Environment;
use Twig\Extension\CoreExtension;
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
use Twig\Loader\FilesystemLoader;
use Twig\TwigFilter;

/**
 * Class TwigBuilder.
 */
class TwigBuilder
{
    /**
     * @var Environment
     */
    protected $twig;

    /**
     * TwigBuilder constructor.
     *
     * @param array $options [optional] Recommended: 'cache' => '/dir/cache'
     */
    public function __construct(array $options = [])
    {
        $this->twig = $this->createTwig($options);
    }

    /**
     * Get Content XML from template.
     *
     * @param string $template
     * @param object $doc
     *
     * @return string
     */
    public function render($template, $doc): string
    {
        return $this->twig->render($template, [
            'doc' => $doc,
        ]);
    }

    private function createTwig(array $options)
    {
        $loader = new FilesystemLoader(__DIR__.'/../Templates');

<<<<<<< HEAD
        $twig = new Environment($loader, $options);
        $this->LoadFilterAndFunctions($twig);

        $this->twig = $twig;
    }

    /**
     * @param Environment $twig
     */
    private function LoadFilterAndFunctions(Environment $twig)
    {
        $formatFilter = new FormatFilter();

        $twig->addFilter(new TwigFilter('n_format', [$formatFilter, 'number']));
        $twig->addFilter(new TwigFilter('n_format_limit', [$formatFilter, 'numberLimit']));
    }
=======
        $twigEnv = new Environment($loader, $options);
        $this->loadFilterAndFunctions($twigEnv);
        $this->configureTimezone($twigEnv);

        return $twigEnv;
    }

    private function configureTimezone(Environment $twig)
    {
        $extension = $twig->getExtension(CoreExtension::class);
        if ($extension instanceof CoreExtension) {
            $extension->setTimezone(TimeZonePe::DEFAULT);
        }
    }

    /**
     * @param Environment $twig
     */
    private function loadFilterAndFunctions(Environment $twig)
    {
        $formatFilter = new FormatFilter();

        $twig->addFilter(new TwigFilter('n_format', [$formatFilter, 'number']));
        $twig->addFilter(new TwigFilter('n_format_limit', [$formatFilter, 'numberLimit']));
    }
>>>>>>> 9923f9d29e58499db1b46d478ff62f652e7ade40
}
