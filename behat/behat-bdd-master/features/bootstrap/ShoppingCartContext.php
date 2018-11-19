<?php

/*
 * This file is part of the tdBehat package.
 *
 * (c) Matthieu Mota <matthieu@boxydev.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

class ShoppingCartContext implements Context
{
    private $shoppingCart;

    /**
     * @Given An empty shopping cart
     */
    public function anEmptyShoppingCart()
    {
        $this->shoppingCart = new \AppBundle\Model\ShoppingCart();
    }

    /**
     * @Given Add to cart a product costing :price €
     */
    public function addToCartAProductCostingEur($price)
    {
        $product = new \AppBundle\Model\Product();
        $product->setPrice($price);
        $this->shoppingCart->add($product);
    }

    /**
     * @Then Shopping cart price is :price €
     */
    public function shoppingCartPriceIsEur($price)
    {
        if ($price != $this->shoppingCart->getTotalPrice()) {
            throw new Exception('Shopping cart total price is not correct.');
        }
    }
}