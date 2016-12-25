<?php

namespace CDBehat\PageObjectExtension;

use Behat\Mink\Session;
use SensioLabs\Behat\PageObjectExtension\PageObject\Factory;
use SensioLabs\Behat\PageObjectExtension\PageObject\Page;
use Symfony\Component\Routing\RouterInterface;

abstract class SymfonyPage extends Page
{
    const ROUTE = null;

    /**
     * @var RouterInterface
     */
    protected $router;

    /**
     * @param Session         $session
     * @param Factory         $factory
     * @param array           $parameters
     * @param RouterInterface $router
     */
    public function __construct(Session $session, Factory $factory, array $parameters, RouterInterface $router)
    {
        parent::__construct($session, $factory, $parameters);

        $this->router = $router;
    }

    /**
     * @param string $element
     * @param string $text
     * @return bool
     */
    public function findByText($element, $text)
    {
        return $this->hasElement($element) && $this->getElement($element)->has('named', array('content', $text));
    }

    /**
     * @param array $urlParameters
     *
     * @return string
     */
    protected function getUrl(array $urlParameters = array())
    {
        if (null === static::ROUTE) {
            throw new \RuntimeException('You need to provide route name, null given');
        }

        $url = $this->router->generate(static::ROUTE, $urlParameters);
        $url = $this->makePathAbsoluteWithBehatParameter($url);

        return $url;
    }

    /**
     * @param string $path
     *
     * @return string
     */
    protected function makePathAbsoluteWithBehatParameter($path)
    {
        $baseUrl = rtrim($this->getParameter('base_url'), '/').'/';

        return 0 !== strpos($path, 'http') ? $baseUrl.ltrim($path, '/') : $path;
    }

    /**
     * Not used by Symfony page.
     */
    protected function getPath()
    {
    }
}
