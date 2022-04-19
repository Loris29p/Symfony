<?php

namespace ContainerXTALwGU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Go_YzM8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.go.YzM8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.go.YzM8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ligneFraisForfait' => ['privates', '.errored..service_locator.go.YzM8.App\\Entity\\LigneFraisForfait', NULL, 'Cannot autowire service ".service_locator.go.YzM8": it references class "App\\Entity\\LigneFraisForfait" but no such service exists.'],
        ], [
            'ligneFraisForfait' => 'App\\Entity\\LigneFraisForfait',
        ]);
    }
}
