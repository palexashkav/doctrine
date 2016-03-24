<?php
/**
 * @link    https://github.com/nnx-company/doctrine
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace Nnx\Doctrine;

use Nnx\Doctrine\ObjectManager\DoctrineObjectManager;
use Nnx\Doctrine\EntityManager\EntityManager;

return [
    'service_manager' => [
        'invokables'         => [
            DoctrineObjectManager::class => DoctrineObjectManager::class,
            EntityManager::class => EntityManager::class
        ],
        'factories'          => [

        ],
        'abstract_factories' => [

        ]
    ],
];


