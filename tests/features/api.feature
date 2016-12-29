@front
Feature: API

  Background:
    Given there are a bunch of places

  Scenario: Get list of places
    Given I am on the place_index page
    Then I should see "My test church"

  Scenario: Get one place
    When I go to the place_show page with:
      | id | 1 |
    Then I should see "My test church"
