<?php

namespace spec\Words\Domain;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Words\Domain\Word;
use Words\Domain\Word\Option;

/**
 * @package spec\Words\Domain
 * @author Luke Adamczewski <luke.adamczewski@phpe.pl>
 */
class WordSpec extends ObjectBehavior
{
    const EXAMPLE_WORD = "Make";
    const EXAMPLE_WORD_ANSWER = "Machen";

    /**
     * @var Option
     */
    private $correctAnswer;

    function let()
    {
        $this->correctAnswer = new Option(self::EXAMPLE_WORD_ANSWER);
        $this->beConstructedWith(self::EXAMPLE_WORD, $this->correctAnswer);
    }

    function it_has_name_set()
    {
        $this->__toString()->shouldReturn(self::EXAMPLE_WORD);
    }

    function it_should_allow_to_add_options()
    {
        $machenOption = new Option(self::EXAMPLE_WORD_ANSWER);
        $mochtenOption = new Option("Möchten");

        $this->addOption($machenOption)->shouldReturn($this);
        $this->addOption($mochtenOption)->shouldReturn($this);

        $this->getOptions()->shouldReturn([
            $machenOption,
            $mochtenOption
        ]);
    }

    function it_should_have_correct_answer()
    {
        $this->getCorrectAnswer()->shouldReturn($this->correctAnswer);
    }
}
