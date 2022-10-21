<?php

namespace Container1OGaFBx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder27b32 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer85e17 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5e759 = [
        
    ];

    public function getConnection()
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'getConnection', array(), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'getMetadataFactory', array(), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'getExpressionBuilder', array(), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'beginTransaction', array(), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'getCache', array(), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->getCache();
    }

    public function transactional($func)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'transactional', array('func' => $func), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'wrapInTransaction', array('func' => $func), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'commit', array(), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->commit();
    }

    public function rollback()
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'rollback', array(), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'getClassMetadata', array('className' => $className), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'createQuery', array('dql' => $dql), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'createNamedQuery', array('name' => $name), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'createQueryBuilder', array(), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'flush', array('entity' => $entity), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'clear', array('entityName' => $entityName), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->clear($entityName);
    }

    public function close()
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'close', array(), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->close();
    }

    public function persist($entity)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'persist', array('entity' => $entity), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'remove', array('entity' => $entity), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'refresh', array('entity' => $entity), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'detach', array('entity' => $entity), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'merge', array('entity' => $entity), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'getRepository', array('entityName' => $entityName), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'contains', array('entity' => $entity), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'getEventManager', array(), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'getConfiguration', array(), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'isOpen', array(), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'getUnitOfWork', array(), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'getProxyFactory', array(), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'initializeObject', array('obj' => $obj), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'getFilters', array(), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'isFiltersStateClean', array(), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'hasFilters', array(), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return $this->valueHolder27b32->hasFilters();
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

        $instance->initializer85e17 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder27b32) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder27b32 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder27b32->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, '__get', ['name' => $name], $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        if (isset(self::$publicProperties5e759[$name])) {
            return $this->valueHolder27b32->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder27b32;

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

        $targetObject = $this->valueHolder27b32;
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
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder27b32;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder27b32;
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
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, '__isset', array('name' => $name), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder27b32;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder27b32;
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
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, '__unset', array('name' => $name), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder27b32;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder27b32;
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
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, '__clone', array(), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        $this->valueHolder27b32 = clone $this->valueHolder27b32;
    }

    public function __sleep()
    {
        $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, '__sleep', array(), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;

        return array('valueHolder27b32');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer85e17 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer85e17;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer85e17 && ($this->initializer85e17->__invoke($valueHolder27b32, $this, 'initializeProxy', array(), $this->initializer85e17) || 1) && $this->valueHolder27b32 = $valueHolder27b32;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder27b32;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder27b32;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
