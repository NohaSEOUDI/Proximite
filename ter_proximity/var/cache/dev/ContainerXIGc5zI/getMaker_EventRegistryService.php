<?php

namespace ContainerXIGc5zI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_EventRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.event_registry' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\EventRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/maker-bundle/src/EventRegistry.php';

        return $container->privates['maker.event_registry'] = new \Symfony\Bundle\MakerBundle\EventRegistry(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
