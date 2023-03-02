<?php

namespace ContainerIrTJ2kI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCHomePageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\c_homePage' shared autowired service.
     *
     * @return \App\Controller\c_homePage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/c_homePage.php';

        $container->services['App\\Controller\\c_homePage'] = $instance = new \App\Controller\c_homePage();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\c_homePage', $container));

        return $instance;
    }
}