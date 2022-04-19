<?php

namespace ContainerXTALwGU;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf36c6 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer87eef = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa1e19 = [
        
    ];

    public function getConnection()
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'getConnection', array(), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'getMetadataFactory', array(), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'getExpressionBuilder', array(), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'beginTransaction', array(), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'getCache', array(), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->getCache();
    }

    public function transactional($func)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'transactional', array('func' => $func), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'wrapInTransaction', array('func' => $func), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'commit', array(), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->commit();
    }

    public function rollback()
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'rollback', array(), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'getClassMetadata', array('className' => $className), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'createQuery', array('dql' => $dql), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'createNamedQuery', array('name' => $name), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'createQueryBuilder', array(), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'flush', array('entity' => $entity), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'clear', array('entityName' => $entityName), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->clear($entityName);
    }

    public function close()
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'close', array(), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->close();
    }

    public function persist($entity)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'persist', array('entity' => $entity), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'remove', array('entity' => $entity), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'refresh', array('entity' => $entity), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'detach', array('entity' => $entity), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'merge', array('entity' => $entity), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'getRepository', array('entityName' => $entityName), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'contains', array('entity' => $entity), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'getEventManager', array(), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'getConfiguration', array(), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'isOpen', array(), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'getUnitOfWork', array(), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'getProxyFactory', array(), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'initializeObject', array('obj' => $obj), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'getFilters', array(), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'isFiltersStateClean', array(), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'hasFilters', array(), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return $this->valueHolderf36c6->hasFilters();
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

        $instance->initializer87eef = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf36c6) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf36c6 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf36c6->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, '__get', ['name' => $name], $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        if (isset(self::$publicPropertiesa1e19[$name])) {
            return $this->valueHolderf36c6->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf36c6;

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

        $targetObject = $this->valueHolderf36c6;
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
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf36c6;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf36c6;
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
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, '__isset', array('name' => $name), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf36c6;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf36c6;
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
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, '__unset', array('name' => $name), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf36c6;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf36c6;
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
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, '__clone', array(), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        $this->valueHolderf36c6 = clone $this->valueHolderf36c6;
    }

    public function __sleep()
    {
        $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, '__sleep', array(), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;

        return array('valueHolderf36c6');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer87eef = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer87eef;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer87eef && ($this->initializer87eef->__invoke($valueHolderf36c6, $this, 'initializeProxy', array(), $this->initializer87eef) || 1) && $this->valueHolderf36c6 = $valueHolderf36c6;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf36c6;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf36c6;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}