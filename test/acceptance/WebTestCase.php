<?php
/*
 * This file is part of chrisguitarguy/package
 *
 * Copyright (c) COPYRIGHT_HOLDER.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Chrisguitarguy\Package;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase as SymfonyTestCase;

abstract class WebTestCase extends SymfonyTestCase
{
    /**
     * {@inheritdoc}
     */
    protected static function getKernelClass()
    {
        return \AppKernel::class;
    }
}
