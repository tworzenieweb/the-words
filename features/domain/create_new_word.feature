Feature: Defining a word
  As a application administrator
  In order to add new word into test
  I need to be able to define a term, available answers and correct option

  Scenario: Create "Make" word definition
    When I want to add new test word named "Make" with correct answer "Machen"
    And I add option "Machen"
    And I add option "Möchten"
    And I add option "Haben"
    And I add option "Gaben"
    Then I should have 4 options
    And Validation of "Machen" should pass

  Scenario: Test getting questions from storage
    When I want to start the test
    And I fetch questions
    Then I should get


  Scenario: Wrong answer for the question
    When I want to test question "Make"
    And I answered "Haben"
    Then Answer is not correct
    And Score is 0