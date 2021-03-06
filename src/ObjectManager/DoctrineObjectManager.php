<?php
/**
 * @link    https://github.com/nnx-framework/doctrine
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace Nnx\Doctrine\ObjectManager;

use Zend\ServiceManager\AbstractPluginManager;
use Doctrine\Common\Persistence\ObjectManager as ObjectManagerInterface;

/**
 * Class DoctrineObjectManager
 *
 * @package Nnx\Doctrine\ObjectManager
 */
class DoctrineObjectManager extends AbstractPluginManager implements DoctrineObjectManagerInterface
{
    /**
     * Имя секции в конфиги приложения отвечающей за настройки менеджера
     *
     * @var string
     */
    const CONFIG_KEY = 'nnx_doctrine_object_manager';

    /**
     * {@inheritDoc}
     *
     * @throws Exception\RuntimeException
     */
    public function validatePlugin($plugin)
    {
        if ($plugin instanceof ObjectManagerInterface) {
            return;
        }

        throw new Exception\RuntimeException(sprintf(
            'Plugin of type %s is invalid; must implement %s',
            (is_object($plugin) ? get_class($plugin) : gettype($plugin)),
            DoctrineObjectManager::class
        ));
    }
}
