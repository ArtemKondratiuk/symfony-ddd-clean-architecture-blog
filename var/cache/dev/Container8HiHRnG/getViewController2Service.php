<?php

namespace Container8HiHRnG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getViewController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\FrontFeature\Presentation\Controller\Home\ViewController' shared autowired service.
     *
     * @return \App\FrontFeature\Presentation\Controller\Home\ViewController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/FrontFeature/Presentation/Controller/Home/ViewController.php';

        $container->services['App\\FrontFeature\\Presentation\\Controller\\Home\\ViewController'] = $instance = new \App\FrontFeature\Presentation\Controller\Home\ViewController(($container->privates['App\\CategoryFeature\\Application\\ApiService\\CategoryService'] ?? $container->load('getCategoryServiceService')));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\FrontFeature\\Presentation\\Controller\\Home\\ViewController', $container));

        return $instance;
    }
}
