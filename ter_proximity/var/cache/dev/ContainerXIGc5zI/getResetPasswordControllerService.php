<?php

namespace ContainerXIGc5zI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResetPasswordControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ResetPasswordController' shared autowired service.
     *
     * @return \App\Controller\ResetPasswordController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/Controller/ResetPasswordControllerTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ResetPasswordController.php';

        $container->services['App\\Controller\\ResetPasswordController'] = $instance = new \App\Controller\ResetPasswordController(($container->privates['symfonycasts.reset_password.helper'] ?? $container->load('getSymfonycasts_ResetPassword_HelperService')));

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\ResetPasswordController', $container));

        return $instance;
    }
}
