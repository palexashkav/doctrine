<?php
/**
 * @link    https://github.com/nnx-framework/doctrine
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace Nnx\Doctrine;

use Nnx\Doctrine\Options\ModuleOptions;
use Nnx\Doctrine\Options\ModuleOptionsFactory;
use Nnx\ModuleOptions\ModuleOptionsPluginManager;
use Nnx\Doctrine\Options\ModuleOptionsInterface;

return [
    ModuleOptionsPluginManager::CONFIG_KEY => [
        'factories' => [
            ModuleOptionsInterface::class => ModuleOptionsFactory::class
        ],
        'aliases' => [
            ModuleOptions::class => ModuleOptionsInterface::class
        ]
    ]
];