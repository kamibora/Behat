Feature: Google

  @mink:symfony2
  Scenario: Homepage
    Given I am on the homepage
    And Test kernel
    Then I should see "Recherche Google"

  @javascript
  Scenario: A search
    Given I am on the homepage
    When I wait for 1 seconds
    And I fill in "q" with "Boxydev"
    And I press "btnK"
    And I wait for 1 seconds
    Then I should see text matching "Boxydev - Création de site internet et hébergement web, Lens, Arras ..."
