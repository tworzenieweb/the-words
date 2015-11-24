<?php
/*
 * This file is part of the the-words package.
 *
 * (c) Luke Adamczewski <luke.adamczewski@phpe.pl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Words\Domain\Validator;

use Words\Domain\Word\ComparableInterface;

/**
 * Interface ValidatorInterface
 * @package Words\Domain\Validator
 */
interface ValidatorInterface
{
    /**
     * @param ComparableInterface $answer
     *
     * @return true
     */
    public function validate(ComparableInterface $answer);
}