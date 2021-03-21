<?php

namespace ContainerXIGc5zI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSymfonycasts_ResetPassword_HelperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'symfonycasts.reset_password.helper' shared service.
     *
     * @return \SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/ResetPasswordHelperInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfonycasts/reset-password-bundle/src/ResetPasswordHelper.php';

        return $container->privates['symfonycasts.reset_password.helper'] = new \SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelper(($container->privates['symfonycasts.reset_password.token_generator'] ?? $container->load('getSymfonycasts_ResetPassword_TokenGeneratorService')), ($container->privates['symfonycasts.reset_password.cleaner'] ?? $container->load('getSymfonycasts_ResetPassword_CleanerService')), ($container->privates['App\\Repository\\ResetPasswordRequestRepository'] ?? $container->load('getResetPasswordRequestRepositoryService')), 3600, 3600);
    }
}
