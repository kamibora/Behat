Feature: CardManager
  Manager can create a card with valid pattern

  Scenario: We create a valid card with card Manager
    Given A card manager and a new card
    And A center code to 123
    And A card code to 142121
    Then A valid card code is 123-142121-8