<?php

namespace ContainerSQJLBwL;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere56a0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerccfe8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb31d2 = [
        
    ];

    public function getConnection()
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'getConnection', array(), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'getMetadataFactory', array(), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'getExpressionBuilder', array(), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'beginTransaction', array(), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'getCache', array(), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->getCache();
    }

    public function transactional($func)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'transactional', array('func' => $func), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'wrapInTransaction', array('func' => $func), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'commit', array(), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->commit();
    }

    public function rollback()
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'rollback', array(), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'getClassMetadata', array('className' => $className), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'createQuery', array('dql' => $dql), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'createNamedQuery', array('name' => $name), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'createQueryBuilder', array(), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'flush', array('entity' => $entity), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'clear', array('entityName' => $entityName), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->clear($entityName);
    }

    public function close()
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'close', array(), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->close();
    }

    public function persist($entity)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'persist', array('entity' => $entity), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'remove', array('entity' => $entity), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'refresh', array('entity' => $entity), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'detach', array('entity' => $entity), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'merge', array('entity' => $entity), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'getRepository', array('entityName' => $entityName), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'contains', array('entity' => $entity), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'getEventManager', array(), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'getConfiguration', array(), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'isOpen', array(), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'getUnitOfWork', array(), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'getProxyFactory', array(), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'initializeObject', array('obj' => $obj), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'getFilters', array(), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'isFiltersStateClean', array(), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'hasFilters', array(), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return $this->valueHoldere56a0->hasFilters();
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

        $instance->initializerccfe8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere56a0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere56a0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere56a0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, '__get', ['name' => $name], $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        if (isset(self::$publicPropertiesb31d2[$name])) {
            return $this->valueHoldere56a0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere56a0;

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

        $targetObject = $this->valueHoldere56a0;
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
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere56a0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere56a0;
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
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, '__isset', array('name' => $name), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere56a0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere56a0;
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
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, '__unset', array('name' => $name), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere56a0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere56a0;
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
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, '__clone', array(), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        $this->valueHoldere56a0 = clone $this->valueHoldere56a0;
    }

    public function __sleep()
    {
        $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, '__sleep', array(), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;

        return array('valueHoldere56a0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerccfe8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerccfe8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerccfe8 && ($this->initializerccfe8->__invoke($valueHoldere56a0, $this, 'initializeProxy', array(), $this->initializerccfe8) || 1) && $this->valueHoldere56a0 = $valueHoldere56a0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere56a0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere56a0;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
