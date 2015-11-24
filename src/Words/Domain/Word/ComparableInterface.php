<?php
/*
 * This file is part of the the-words package.
 *
 * (c) Luke Adamczewski <luke.adamczewski@phpe.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Words\Domain\Word;


/**
 * @package Words\Domain\Word
 * @author Luke Adamczewski <luke.adamczewski@phpe.pl>
 */
interface ComparableInterface
{
    /**
     * @param ComparableInterface $object
     *
     * @return bool
     */
    public function compareTo(ComparableInterface $object);

    /**
     * Get value that can be use for comparison
     * @return string
     */
    public function compare();
}