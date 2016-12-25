<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CDBehat\PageObjectExtension\Factory;

use Behat\Mink\Mink;
use SensioLabs\Behat\PageObjectExtension\PageObject\Factory;
use SensioLabs\Behat\PageObjectExtension\PageObject\Factory\ClassNameResolver;
use Symfony\Component\Routing\RouterInterface;
use CDBehat\PageObjectExtension\SymfonyPage;

/**
 * @author Arkadiusz Krakowiak <arkadiusz.krakowiak@lakion.com>
 */
final class PageObjectFactory implements Factory
{
    /**
     * @var Factory
     */
    private $decoratedFactory;

    /**
     * @var Mink
     */
    private $mink;

    /**
     * @var ClassNameResolver
     */
    private $classNameResolver;

    /**
     * @var array
     */
    private $pageParameters = array();

    /**
     * @var RouterInterface
     */
    private $router;

    /**
     * @param Factory $decoratedFactory
     * @param Mink $mink
     * @param ClassNameResolver $classNameResolver
     * @param array $pageParameters
     * @param RouterInterface $router
     */
    public function __construct(
        Factory $decoratedFactory,
        Mink $mink,
        ClassNameResolver $classNameResolver,
        array $pageParameters,
        RouterInterface $router
    ) {
        $this->decoratedFactory = $decoratedFactory;
        $this->mink = $mink;
        $this->classNameResolver = $classNameResolver;
        $this->pageParameters = $pageParameters;
        $this->router = $router;
    }

    /**
     * {@inheritdoc}
     */
    public function createPage($name)
    {
        $pageClass = $this->classNameResolver->resolvePage($name);

        return $this->create($pageClass);
    }

    /**
     * {@inheritdoc}
     */
    public function createElement($name)
    {
        return $this->decoratedFactory->createElement($name);
    }

    /**
     * {@inheritdoc}
     */
    public function createInlineElement($selector)
    {
        return $this->decoratedFactory->createInlineElement($selector);
    }

    /**
     * {@inheritdoc}
     */
    public function create($pageObjectClass)
    {
        try {
            return $this->instantiatePage($pageObjectClass);
        } catch (\InvalidArgumentException $exception) {
            return $this->decoratedFactory->create($pageObjectClass);
        }
    }

    /**
     * @param string $pageClass
     *
     * @return SymfonyPage
     */
    private function instantiatePage($pageClass)
    {
        if (!is_subclass_of($pageClass, SymfonyPage::class)) {
            throw new \InvalidArgumentException(sprintf('Invalid page object class: %s, to use this factory you need to extend SymfonyPage', $pageClass));
        }

        return new $pageClass($this->mink->getSession(), $this, $this->pageParameters, $this->router);
    }
}
