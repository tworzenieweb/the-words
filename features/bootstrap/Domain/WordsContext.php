<?php

namespace Feature\Domain;

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Words\Domain\Validator\AnswerValidator;
use Words\Domain\Word;
use Words\Domain\Word\Option;

/**
 * Defines application features from the specific context.
 */
class WordsContext implements Context, SnippetAcceptingContext
{

    /**
     * @var Word
     */
    private $word;

    private $wordsCollection;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->wordsCollectionection = [];
    }

    /**
     * @When I want to add new test word named :arg1 with correct answer :arg2
     */
    public function iWantToAddNewTestWordNamedWithCorrectAnswer($word, $correctAnswer)
    {

        $this->word = new Word($word, new Option($correctAnswer));
    }

    /**
     * @When I add option :arg1
     *
     * @param $optionName
     */
    public function iAddOption($optionName)
    {

        $this->word->addOption(new Option($optionName));
    }

    /**
     * @Then I should have :arg1 options
     */
    public function iShouldHaveOptions($count)
    {
        expect(count($this->word->getOptions()))->toBe((int) $count);
    }

    /**
     * @Then Validation of :answerHash should pass
     */
    public function validationOfShouldPass($answerWord)
    {
        $validator = new AnswerValidator($this->word);

        $answer = new Option($answerWord);
        expect($validator->validate($answer))->toBe(true);
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
