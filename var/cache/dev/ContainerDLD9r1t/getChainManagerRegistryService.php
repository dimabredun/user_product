<?php

namespace ContainerDLD9r1t;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getChainManagerRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Zenstruck\Foundry\ChainManagerRegistry' shared service.
     *
     * @return \Zenstruck\Foundry\ChainManagerRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/zenstruck/foundry/src/ChainManagerRegistry.php';

        return $container->privates['Zenstruck\\Foundry\\ChainManagerRegistry'] = new \Zenstruck\Foundry\ChainManagerRegistry([0 => ($container->services['doctrine'] ?? $container->getDoctrineService())]);
    }
}
