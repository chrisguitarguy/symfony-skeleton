<?php
/*
 * This file is part of chrisguitarguy/package
 *
 * Copyright (c) COPYRIGHT_HOLDER.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

date_default_timezone_set('UTC');

$loader = require __DIR__.'/../vendor/autoload.php';

foreach ([__DIR__.'/../.env', '/etc/environment'] as $fn) {
    if (file_exists($fn)) {
        $env = new \Dotenv\Dotenv(dirname($fn), basename($fn));
        $env->load();
    }
}
unset($env);

return $loader;
