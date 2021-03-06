<?php

/*
 * This file is part of the ForgotPasswordBundle package.
 *
 * (c) Vincent Chalamon <vincent@les-tilleuls.coop>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CoopTilleuls\ForgotPasswordBundle\Manager\Bridge;

/**
 * @author Vincent Chalamon <vincent@les-tilleuls.coop>
 */
interface ManagerInterface
{
    /**
     * @param string $class
     * @param array  $criteria
     *
     * @return null|mixed
     */
    public function findOneBy($class, array $criteria);

    /**
     * @param mixed $object
     */
    public function persist($object);

    /**
     * @param mixed $object
     */
    public function remove($object);
}
