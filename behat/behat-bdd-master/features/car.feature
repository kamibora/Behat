Feature: I can create an amazing car
  In order to own a great car
  As a customer
  I need to create my car without problems

  Scenario: Car can be constructed
    Given A new car
    Then Car is constructed

  Scenario: Car must have four weels
    Given A new car
    Then Car has "4" weels

  Scenario: A red car must be a Ferrari
    Given A new car
    When I choose "red" color
    Then It's a "Ferrari"
