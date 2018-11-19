<?php

use App\Entity\Car;
use Behat\Behat\Context\Context;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Symfony2Extension\Context\KernelDictionary;

class FeatureContext extends MinkContext implements Context
{
    use KernelDictionary;

    private $car;

    /**
     * @When I wait :duration
     */
    public function iWait($duration)
    {
        $this->getSession()->wait($duration * 1000);
    }

    /**
     * @Given A new car
     */
    public function aNewCar()
    {
        $this->car = new Car();
    }

    /**
     * @Then Car is constructed
     */
    public function carIsConstructed()
    {
        if (Car::class !== get_class($this->car)) {
            throw new \Exception('La voiture n\'a pas été construite.');
        }
    }

    /**
     * @Then Car has :wheels weels
     */
    public function carHasWeels($wheels)
    {
        if ($wheels != $this->car->getWheels()) {
            throw new \Exception('La voiture n\'a pas ses '.$wheels.' roues.');
        }
    }

    /**
     * @When I choose :color color
     */
    public function iChooseColor($color)
    {
        $this->car->setColor($color);
    }

    /**
     * @Then It's a :brand
     */
    public function itsA($brand)
    {
        if ($brand !== $this->car->getBrand()) {
            throw new \Exception('La voiture n\'est pas de la bonne marque.');
        }
    }
}
