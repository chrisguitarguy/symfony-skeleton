<?php
/*
 * This file is part of chrisguitarguy/package
 *
 * Copyright (c) COPYRIGHT_HOLDER.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public static function fromEnvironment()
    {
        $debug = filter_var(getenv('APP_DEBUG'), FILTER_VALIDATE_BOOLEAN);
        $env = getenv('APP_ENVIRONMENT') ?: 'prod';

        return new self($env, $debug);
    }

    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new League\Tactician\Bundle\TacticianBundle(),
            new Chrisguitarguy\RequestId\ChrisguitarguyRequestIdBundle(),
            new Chrisguitarguy\Package\Bundle\AppBundle(),
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'])) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(sprintf(
            '%s/config/config_%s.yml',
            __DIR__,
            $this->getEnvironment()
        ));
    }

    public function getLogDir()
    {
        return __DIR__.'/../var/log';
    }

    public function getCacheDir()
    {
        return __DIR__.'/../var/cache/'.$this->getEnvironment();
    }
}
