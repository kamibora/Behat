Feature: Shopping Cart
  We check that Shopping cart work :)

  Scenario: We add products to shopping cart
    Given An empty shopping cart
    And Add to cart a product costing 5 €
    And Add to cart a product costing 15 €
    Then Shopping cart price is 20 €