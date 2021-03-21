<?php

namespace ContainerXIGc5zI;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder67d44 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer682fc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5a2f7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'getConnection', array(), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'getMetadataFactory', array(), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'getExpressionBuilder', array(), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'beginTransaction', array(), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'getCache', array(), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->getCache();
    }

    public function transactional($func)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'transactional', array('func' => $func), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->transactional($func);
    }

    public function commit()
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'commit', array(), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->commit();
    }

    public function rollback()
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'rollback', array(), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'getClassMetadata', array('className' => $className), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'createQuery', array('dql' => $dql), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'createNamedQuery', array('name' => $name), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'createQueryBuilder', array(), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'flush', array('entity' => $entity), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'clear', array('entityName' => $entityName), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->clear($entityName);
    }

    public function close()
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'close', array(), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->close();
    }

    public function persist($entity)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'persist', array('entity' => $entity), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'remove', array('entity' => $entity), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'refresh', array('entity' => $entity), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'detach', array('entity' => $entity), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'merge', array('entity' => $entity), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'getRepository', array('entityName' => $entityName), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'contains', array('entity' => $entity), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'getEventManager', array(), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'getConfiguration', array(), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'isOpen', array(), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'getUnitOfWork', array(), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'getProxyFactory', array(), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'initializeObject', array('obj' => $obj), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'getFilters', array(), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'isFiltersStateClean', array(), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'hasFilters', array(), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return $this->valueHolder67d44->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer682fc = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder67d44) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder67d44 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder67d44->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, '__get', ['name' => $name], $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        if (isset(self::$publicProperties5a2f7[$name])) {
            return $this->valueHolder67d44->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67d44;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder67d44;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67d44;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder67d44;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, '__isset', array('name' => $name), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67d44;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder67d44;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, '__unset', array('name' => $name), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder67d44;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder67d44;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, '__clone', array(), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        $this->valueHolder67d44 = clone $this->valueHolder67d44;
    }

    public function __sleep()
    {
        $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, '__sleep', array(), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;

        return array('valueHolder67d44');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer682fc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer682fc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer682fc && ($this->initializer682fc->__invoke($valueHolder67d44, $this, 'initializeProxy', array(), $this->initializer682fc) || 1) && $this->valueHolder67d44 = $valueHolder67d44;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder67d44;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder67d44;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
