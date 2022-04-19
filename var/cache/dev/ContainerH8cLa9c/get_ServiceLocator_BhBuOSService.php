<?php

namespace ContainerH8cLa9c;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BhBuOSService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bhBuO_S' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bhBuO_S'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'ficheFrai' => ['privates', '.errored..service_locator.bhBuO_S.App\\Entity\\FicheFrais', NULL, 'Cannot autowire service ".service_locator.bhBuO_S": it references class "App\\Entity\\FicheFrais" but no such service exists.'],
            'ficheFraisRepository' => ['privates', 'App\\Repository\\FicheFraisRepository', 'getFicheFraisRepositoryService', true],
        ], [
            'ficheFrai' => 'App\\Entity\\FicheFrais',
            'ficheFraisRepository' => 'App\\Repository\\FicheFraisRepository',
        ]);
    }
}