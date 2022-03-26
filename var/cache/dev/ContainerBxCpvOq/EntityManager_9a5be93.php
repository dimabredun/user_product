<?php

namespace ContainerBxCpvOq;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderacdc3 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer84bb0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa8a55 = [
        
    ];

    public function getConnection()
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'getConnection', array(), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'getMetadataFactory', array(), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'getExpressionBuilder', array(), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'beginTransaction', array(), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'getCache', array(), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->getCache();
    }

    public function transactional($func)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'transactional', array('func' => $func), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'wrapInTransaction', array('func' => $func), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'commit', array(), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->commit();
    }

    public function rollback()
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'rollback', array(), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'getClassMetadata', array('className' => $className), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'createQuery', array('dql' => $dql), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'createNamedQuery', array('name' => $name), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'createQueryBuilder', array(), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'flush', array('entity' => $entity), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'clear', array('entityName' => $entityName), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->clear($entityName);
    }

    public function close()
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'close', array(), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->close();
    }

    public function persist($entity)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'persist', array('entity' => $entity), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'remove', array('entity' => $entity), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'refresh', array('entity' => $entity), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'detach', array('entity' => $entity), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'merge', array('entity' => $entity), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'getRepository', array('entityName' => $entityName), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'contains', array('entity' => $entity), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'getEventManager', array(), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'getConfiguration', array(), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'isOpen', array(), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'getUnitOfWork', array(), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'getProxyFactory', array(), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'initializeObject', array('obj' => $obj), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'getFilters', array(), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'isFiltersStateClean', array(), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'hasFilters', array(), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return $this->valueHolderacdc3->hasFilters();
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

        $instance->initializer84bb0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderacdc3) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderacdc3 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderacdc3->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, '__get', ['name' => $name], $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        if (isset(self::$publicPropertiesa8a55[$name])) {
            return $this->valueHolderacdc3->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderacdc3;

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

        $targetObject = $this->valueHolderacdc3;
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
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderacdc3;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderacdc3;
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
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, '__isset', array('name' => $name), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderacdc3;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderacdc3;
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
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, '__unset', array('name' => $name), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderacdc3;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderacdc3;
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
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, '__clone', array(), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        $this->valueHolderacdc3 = clone $this->valueHolderacdc3;
    }

    public function __sleep()
    {
        $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, '__sleep', array(), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;

        return array('valueHolderacdc3');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer84bb0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer84bb0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer84bb0 && ($this->initializer84bb0->__invoke($valueHolderacdc3, $this, 'initializeProxy', array(), $this->initializer84bb0) || 1) && $this->valueHolderacdc3 = $valueHolderacdc3;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderacdc3;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderacdc3;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
