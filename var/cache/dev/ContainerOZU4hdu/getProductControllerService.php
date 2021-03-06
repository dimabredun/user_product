<?php

namespace ContainerOZU4hdu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProductController' shared autowired service.
     *
     * @return \App\Controller\ProductController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ProductController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/UserCrudService.php';
        include_once \dirname(__DIR__, 4).'/src/Service/ProductCrudService.php';

        $container->services['App\\Controller\\ProductController'] = $instance = new \App\Controller\ProductController(new \App\Service\UserCrudService(($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService'))), new \App\Service\ProductCrudService(($container->privates['App\\Repository\\ProductRepository'] ?? $container->load('getProductRepositoryService'))), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\ProductController', $container));

        return $instance;
    }
}
