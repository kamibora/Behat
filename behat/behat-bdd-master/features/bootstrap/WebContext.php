<?php

/*
 * This file is part of the tdBehat package.
 *
 * (c) Matthieu Mota <matthieu@boxydev.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Behat\MinkExtension\Context\MinkContext;
use Behat\Symfony2Extension\Context\KernelAwareContext;
use Behat\Symfony2Extension\Driver\KernelDriver;

class WebContext extends MinkContext implements KernelAwareContext
{
    /**
     * @var \Symfony\Component\HttpKernel\KernelInterface
     */
    private $kernel;

    /**
     * Sets Kernel instance.
     *
     * @param \Symfony\Component\HttpKernel\KernelInterface $kernel
     */
    public function setKernel(\Symfony\Component\HttpKernel\KernelInterface $kernel)
    {
        $this->kernel = $kernel;
    }

    /**
     * @When I wait for :time seconds
     */
    public function iWaitForSeconds($time)
    {
        $this->getSession()->wait($time * 1000);
    }


    /**
     * @Given /^Test kernel$/
     */
    public function testKernel()
    {
        $this->kernel->getContainer()->get('profiler')->enable();
        dump($this->getSession()->getDriver()->getClient()->getProfile()->getCollector('swiftmailer'));
    }
}