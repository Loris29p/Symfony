<?php

namespace ContainerH8cLa9c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Aiwec0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Aiwec_0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Aiwec_0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'fraisForfait' => ['privates', '.errored..service_locator.Aiwec_0.App\\Entity\\FraisForfait', NULL, 'Cannot autowire service ".service_locator.Aiwec_0": it references class "App\\Entity\\FraisForfait" but no such service exists.'],
        ], [
            'fraisForfait' => 'App\\Entity\\FraisForfait',
        ]);
    }
}