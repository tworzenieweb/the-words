<?php

namespace Words\Domain\Word;

use Words\Domain\Exception\EmptyOptionException;

/**
 * @package Words\Domain\Word
 * @author Luke Adamczewski <luke.adamczewski@phpe.pl>
 */
class Option implements ComparableInterface
{
    /**
     * @param string $name
     *
     * @throws EmptyOptionException
     */
    public function __construct($name)
    {
        if (empty($name)) {
            throw new EmptyOptionException();
        }

        $this->name = $name;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }

    /**
     * @param ComparableInterface $object
     *
     * @return bool
     */
    public function compareTo(ComparableInterface $object)
    {
        return $object->compare() === $this->compare();
    }

    /**
     * Get value that can be use for comparison
     *
     * @return string
     */
    public function compare()
    {
        return $this->name;
    }
}
