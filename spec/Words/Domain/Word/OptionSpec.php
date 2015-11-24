<?php

namespace spec\Words\Domain\Word;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class OptionSpec extends ObjectBehavior
{
    const EXAMPLE_MACHEN = "Machen";

    function let()
    {
        $this->beConstructedWith(self::EXAMPLE_MACHEN);
    }

    function it_should_have_a_name()
    {
        $this->__toString()->shouldReturn(self::EXAMPLE_MACHEN);
    }

    function it_should_not_be_empty()
    {
        $this->beConstructedWith('');

        $this->shouldThrow('Words\Domain\Exception\EmptyOptionException')->duringInstantiation();
    }
}
