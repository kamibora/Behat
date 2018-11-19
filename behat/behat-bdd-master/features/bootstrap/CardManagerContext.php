<?php

/*
 * This file is part of the tdBehat package.
 *
 * (c) Matthieu Mota <matthieu@boxydev.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use AppBundle\Entity\Card;
use AppBundle\Manager\CardManager;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

class CardManagerContext implements Context
{
    private $card;
    private $cardManager;

    /**
     * @Given A card manager and a new card
     */
    public function aNewCard()
    {
        $this->cardManager = new CardManager();
        $this->card = new Card();
    }

    /**
     * @Given A center code to :centerCode
     */
    public function aCenterCodeTo($centerCode)
    {
        $this->card->setCenterCode($centerCode);
    }

    /**
     * @Given A card code to :cardCode
     */
    public function aCardCodeTo($cardCode)
    {
        $this->card->setCardCode($cardCode);
    }

    /**
     * @Then A valid card code is :centerCode-:cardCode-:checksum
     */
    public function aValidCardCodeIs($centerCode, $cardCode, $checksum)
    {
        $this->cardManager->isValid($this->card);
    }
}