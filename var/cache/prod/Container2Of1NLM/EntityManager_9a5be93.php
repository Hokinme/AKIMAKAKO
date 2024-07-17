<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldercded4 = null;
    private $initializer2f851 = null;
    private static $publicPropertiesc8221 = [
        
    ];
    public function getConnection()
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'getConnection', array(), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'getMetadataFactory', array(), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'getExpressionBuilder', array(), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'beginTransaction', array(), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'getCache', array(), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->getCache();
    }
    public function transactional($func)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'transactional', array('func' => $func), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'wrapInTransaction', array('func' => $func), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'commit', array(), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->commit();
    }
    public function rollback()
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'rollback', array(), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'getClassMetadata', array('className' => $className), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'createQuery', array('dql' => $dql), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'createNamedQuery', array('name' => $name), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'createQueryBuilder', array(), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'flush', array('entity' => $entity), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'clear', array('entityName' => $entityName), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->clear($entityName);
    }
    public function close()
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'close', array(), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->close();
    }
    public function persist($entity)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'persist', array('entity' => $entity), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'remove', array('entity' => $entity), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'refresh', array('entity' => $entity), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'detach', array('entity' => $entity), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'merge', array('entity' => $entity), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'contains', array('entity' => $entity), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'getEventManager', array(), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'getConfiguration', array(), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'isOpen', array(), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'getUnitOfWork', array(), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'getProxyFactory', array(), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'initializeObject', array('obj' => $obj), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'getFilters', array(), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'isFiltersStateClean', array(), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'hasFilters', array(), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return $this->valueHoldercded4->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer2f851 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldercded4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercded4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldercded4->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, '__get', ['name' => $name], $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        if (isset(self::$publicPropertiesc8221[$name])) {
            return $this->valueHoldercded4->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercded4;
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
        $targetObject = $this->valueHoldercded4;
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
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercded4;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldercded4;
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
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, '__isset', array('name' => $name), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercded4;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldercded4;
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
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, '__unset', array('name' => $name), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercded4;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldercded4;
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
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, '__clone', array(), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        $this->valueHoldercded4 = clone $this->valueHoldercded4;
    }
    public function __sleep()
    {
        $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, '__sleep', array(), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
        return array('valueHoldercded4');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2f851 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2f851;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer2f851 && ($this->initializer2f851->__invoke($valueHoldercded4, $this, 'initializeProxy', array(), $this->initializer2f851) || 1) && $this->valueHoldercded4 = $valueHoldercded4;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercded4;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercded4;
    }
}
