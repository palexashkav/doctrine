<?php
/**
 * @link    https://github.com/nnx-framework/doctrine
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace Nnx\Doctrine\ObjectManager;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Nnx\ModuleOptions\ModuleOptionsPluginManagerInterface;

/**
 * Class ObjectManagerAutoDetectorFactory
 *
 * @package Nnx\Doctrine\ObjectManager
 */
class ObjectManagerAutoDetectorFactory implements FactoryInterface
{
    /**
     * @inheritdoc
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return ObjectManagerAutoDetector
     * @throws \Zend\ServiceManager\Exception\ServiceNotFoundException
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        /** @var ModuleOptionsPluginManagerInterface $moduleOptionsManager */
        $moduleOptionsManager = $serviceLocator->get(ModuleOptionsPluginManagerInterface::class);

        /** @var DoctrineObjectManagerInterface $doctrineObjectManager */
        $doctrineObjectManager = $serviceLocator->get(DoctrineObjectManagerInterface::class);

        return new ObjectManagerAutoDetector($moduleOptionsManager, $doctrineObjectManager);
    }
}
