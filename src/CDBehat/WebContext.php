<?php

namespace CDBehat;

use Behat\Gherkin\Node\TableNode;
use Behat\Mink\Exception\UnsupportedDriverActionException;
use CDBehat\Sylius\WebContext as BaseWebContext;

class WebContext extends BaseWebContext
{
    protected $applicationName = 'cd';

    /**
     * @When /^I go to the (.+) page with:$/
     */
    public function igoToThePageWith($page, TableNode $node)
    {
        $hash = $node->getRowsHash();

        $this->getSession()->visit($this->generatePageUrl($page, $hash));
    }

    /**
     * @Then /^I should be on the (.+) page with:$/
     */
    public function iShouldBeOnThePageWith($page, TableNode $node)
    {
        $expected = $this->cleanUrl($this->generatePageUrl($page, $node->getRowsHash()));
        $actual = $this->cleanUrl($this->getSession()->getCurrentUrl());

        if ($actual !== $expected) {
            throw new \LogicException(sprintf('Current page is "%s", but "%s" expected.', $actual, $expected));
        }

        try {
            $this->assertStatusCodeEquals(200);
        } catch (UnsupportedDriverActionException $e) {
        }
    }

    protected function cleanUrl($url)
    {
        $parts = parse_url($url);

        $fragment = empty($parts['fragment']) ? '' : '#'.$parts['fragment'];
        $path     = empty($parts['path']) ? '/' : $parts['path'];
        $query    = empty($parts['query']) ? '' : '?' . $parts['query'];

        return preg_replace('/^\/[^\.\/]+\.php/', '', $path) . $query . $fragment;
    }
}
