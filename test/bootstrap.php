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

$loader = require __DIR__.'/../vendor/autoload.php';
$loader->addPsr4(__NAMESPACE__.'\\', __DIR__.'/unit');
$loader->addPsr4(__NAMESPACE__.'\\', __DIR__.'/acceptance');
