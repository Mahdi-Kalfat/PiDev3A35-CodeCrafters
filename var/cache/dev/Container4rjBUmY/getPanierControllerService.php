<?php

namespace Container4rjBUmY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPanierControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\PanierController' shared autowired service.
     *
     * @return \App\Controller\PanierController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'PanierController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'PanierServices.php';

        $container->services['App\\Controller\\PanierController'] = $instance = new \App\Controller\PanierController(new \App\Services\PanierServices(($container->services['session'] ?? $container->load('getSessionService')), ($container->privates['App\\Repository\\ProduitRepository'] ?? $container->load('getProduitRepositoryService'))));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\PanierController', $container));

        return $instance;
    }
}
