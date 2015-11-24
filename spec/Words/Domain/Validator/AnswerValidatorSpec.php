<?php

namespace spec\Words\Domain\Validator;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Words\Domain\Word;
use Words\Domain\Word\Option;

/**
 * @package spec\Words\Domain\Validator
 * @author Luke Adamczewski <luke.adamczewski@phpe.pl>
 */
class AnswerValidatorSpec extends ObjectBehavior
{

    function let(Word $examinedWord, Option $answer)
    {
        $examinedWord->getCorrectAnswer()->willReturn($answer);
        $examinedWord->compareTo(Argument::any())->willReturn(true);

        $this->beConstructedWith($examinedWord);
    }

    function it_should_validate_answer(Option $answer)
    {
        $this->validate($answer)->shouldReturn(true);
    }
}
