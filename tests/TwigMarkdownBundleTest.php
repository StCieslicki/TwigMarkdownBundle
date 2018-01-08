<?php

require_once 'AppKernel.php';

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class TwigMarkdownBundleTest extends WebTestCase
{
    private $container;

    public function setUp()
    {
        $kernel = new AppKernel();
        $kernel->boot();
        $this->container = $kernel->getContainer();
    }

    public function testServices()
    {
        $engine = $this->container->get('stahoos_twig_markdown.engine');
        $this->assertInstanceOf('Aptoma\Twig\Extension\MarkdownEngine\MichelfMarkdownEngine', $engine);

        $extension = $this->container->get('stahoos_twig_markdown.extension');
        $this->assertInstanceOf('Aptoma\Twig\Extension\MarkdownExtension', $extension);
    }

    public function testRendering()
    {
        $twig = $this->container->get('twig');
        $twig->setLoader(new \Twig_Loader_String());
        $this->assertSame("<h1>h1</h1>\n", $twig->render('{% markdown %}# h1 #{% endmarkdown %}'));
    }
}