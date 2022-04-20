<?php

namespace ContainerOZU4hdu;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder44562 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer35d42 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7b1a6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'getConnection', array(), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'getMetadataFactory', array(), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'getExpressionBuilder', array(), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'beginTransaction', array(), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'getCache', array(), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->getCache();
    }

    public function transactional($func)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'transactional', array('func' => $func), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'wrapInTransaction', array('func' => $func), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'commit', array(), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->commit();
    }

    public function rollback()
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'rollback', array(), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'getClassMetadata', array('className' => $className), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'createQuery', array('dql' => $dql), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'createNamedQuery', array('name' => $name), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'createQueryBuilder', array(), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'flush', array('entity' => $entity), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'clear', array('entityName' => $entityName), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->clear($entityName);
    }

    public function close()
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'close', array(), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->close();
    }

    public function persist($entity)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'persist', array('entity' => $entity), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'remove', array('entity' => $entity), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'refresh', array('entity' => $entity), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'detach', array('entity' => $entity), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'merge', array('entity' => $entity), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'getRepository', array('entityName' => $entityName), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'contains', array('entity' => $entity), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'getEventManager', array(), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'getConfiguration', array(), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'isOpen', array(), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'getUnitOfWork', array(), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'getProxyFactory', array(), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'initializeObject', array('obj' => $obj), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'getFilters', array(), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'isFiltersStateClean', array(), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'hasFilters', array(), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return $this->valueHolder44562->hasFilters();
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

        $instance->initializer35d42 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder44562) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder44562 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder44562->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, '__get', ['name' => $name], $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        if (isset(self::$publicProperties7b1a6[$name])) {
            return $this->valueHolder44562->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44562;

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

        $targetObject = $this->valueHolder44562;
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
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44562;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder44562;
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
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, '__isset', array('name' => $name), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44562;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder44562;
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
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, '__unset', array('name' => $name), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder44562;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder44562;
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
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, '__clone', array(), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        $this->valueHolder44562 = clone $this->valueHolder44562;
    }

    public function __sleep()
    {
        $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, '__sleep', array(), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;

        return array('valueHolder44562');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer35d42 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer35d42;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer35d42 && ($this->initializer35d42->__invoke($valueHolder44562, $this, 'initializeProxy', array(), $this->initializer35d42) || 1) && $this->valueHolder44562 = $valueHolder44562;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder44562;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder44562;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
