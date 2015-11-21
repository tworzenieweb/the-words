Feature: Create new word
  As a application administrator
  In order to add new word into test
  I need to be able to define a term, available answers and correct option

  Scenario: Create Make word definition
    When I want to add new word named "Make"
    And I add option "Machen"
    And I add option "Möchten"
    And I add option "Haben"
    And I add option "Gaben"
    And Set The correct answer to "Machen"
    Then Validation of "Make" "Machen" should pass

  Scenario: Testing good answer for the question
    When I want to test question "Make"
    And I answered "Machen"
    Then Answer is correct
    And Score is 1

  Scenario: Wrong answer for the question
    When I want to test question "Make"
    And I answered "Haben"
    Then Answer is not correct
    And Score is 0