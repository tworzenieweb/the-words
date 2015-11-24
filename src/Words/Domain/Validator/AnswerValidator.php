<?php

namespace Words\Domain\Validator;

use Words\Domain\Word;
use Words\Domain\Word\ComparableInterface;

/**
 * @package Words\Domain\Validator
 * @author Luke Adamczewski <luke.adamczewski@phpe.pl>
 */
class AnswerValidator implements ValidatorInterface
{
    /**
     * @var Word
     */
    private $examinedWord;

    /**
     * @param Word $examinedWord
     */
    public function __construct(Word $examinedWord)
    {
        $this->examinedWord = $examinedWord;
    }

    /**
     * @param ComparableInterface $answer
     *
     * @return true
     */
    public function validate(ComparableInterface $answer)
    {
        return $this->examinedWord->compareTo($answer);
    }

}
