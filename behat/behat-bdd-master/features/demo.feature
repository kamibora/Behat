Feature: Behat works
  In order to create my BDD project
  As a developper
  I need to see that Behat can see my symfony app

  Scenario: Access to homepage
    Given I am on "/"
    Then I should see "Welcome to Symfony"

  @javascript
  Scenario: Access to documentation
    Given I am on "/"
    When I wait "2"
    And I follow "a"
    Then I should see "Create your First Page in Symfony"
    And I wait "2"
