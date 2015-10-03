<?php
/*
 * This file is part of chrisguitarguy/package
 *
 * Copyright (c) COPYRIGHT_HOLDER.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Chrisguitarguy\Package\Bundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

final class AppBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    protected function createContainerExtension()
    {
        return new DependencyInjection\AppExtension();
    }
}
