<?php

namespace Words\Domain;

use Words\Domain\Exception\DuplicatedOptionException;
use Words\Domain\Word\ComparableInterface;
use Words\Domain\Word\Option;

/**
 * @package Words\Domain
 * @author Luke Adamczewski <luke.adamczewski@phpe.pl>
 */
class Word implements ComparableInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var Option[]
     */
    private $options;

    /**
     * @var Option
     */
    private $correctAnswer;

    /**
     * @param $name
     * @param Option $correctAnswer
     */
    public function __construct($name, Option $correctAnswer)
    {
        $this->name = $name;
        $this->correctAnswer = $correctAnswer;
        $this->options = [];
    }

    public function __toString()
    {
        return $this->name;
    }

    /**
     * @param Option $option
     *
     * @return $this
     * @throws DuplicatedOptionException
     */
    public function addOption(Option $option)
    {
        if (false !== array_search($option, $this->options)) {
            throw new DuplicatedOptionException(
                sprintf(
                    "Option %s is already on the list of options",
                    $option
                )
            );
        }

        array_push($this->options, $option);
        return $this;
    }

    /**
     * @return Option[]
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @return Option
     */
    public function getCorrectAnswer()
    {
        return $this->correctAnswer;
    }

    /**
     * @param ComparableInterface $object
     *
     * @return bool
     */
    public function compareTo(ComparableInterface $object)
    {
        return $this->compare() === $object->compare();
    }

    /**
     * Get value that can be use for comparison
     * @return string
     */
    public function compare()
    {
       return $this->correctAnswer->compare();
    }
}
