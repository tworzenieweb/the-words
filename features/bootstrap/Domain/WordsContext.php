<?php

namespace Feature\Domain;

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class WordsContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @When I want to add new word named :arg1
     */
    public function iWantToAddNewWordNamed($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I add option :arg1
     */
    public function iAddOption($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When Set The correct answer to :arg1
     */
    public function setTheCorrectAnswerTo($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then Validation of :arg1 :arg2 should pass
     */
    public function validationOfShouldPass($arg1, $arg2)
    {
        throw new PendingException();
    }

    /**
     * @When I want to test question :arg1
     */
    public function iWantToTestQuestion($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When I answered :arg1
     */
    public function iAnswered($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then Answer is correct
     */
    public function answerIsCorrect()
    {
        throw new PendingException();
    }

    /**
     * @Then Score is :arg1
     */
    public function scoreIs($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then Answer is not correct
     */
    public function answerIsNotCorrect()
    {
        throw new PendingException();
    }
}
