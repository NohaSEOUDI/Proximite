<?php

namespace ContainerXIGc5zI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Migrations_Storage_TableStorageService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'doctrine.migrations.storage.table_storage' shared service.
     *
     * @return \Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Metadata/Storage/MetadataStorageConfiguration.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Metadata/Storage/TableMetadataStorageConfiguration.php';

        return $container->privates['doctrine.migrations.storage.table_storage'] = new \Doctrine\Migrations\Metadata\Storage\TableMetadataStorageConfiguration();
    }
}
