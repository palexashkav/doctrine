<?php
/**
 * @link    https://github.com/nnx-framework/doctrine
 * @author  Malofeykin Andrey  <and-rey2@yandex.ru>
 */
namespace Nnx\Doctrine;

$config = [
    Module::CONFIG_KEY => [
        /**
         * Строка, используемая как разделитель в полном имени класса сущности(или интерфейса), которая разделяет неймспейс
         * на две части: 1) Нейсмпейс в котором расположенные все сущности 2) Постфикс указывающий на кокнетную сущность.
         *
         * (@see \Nnx\Doctrine\Options\ModuleOptions::$entitySeparator)
         *
         */
        'entitySeparator' => '\\Entity\\',

        /**
         *  Паттерн по которому из имени интерфейса можно получить строку, являющеюся заготовкой для формирования имени сущности
         */
        'entityBodyNamePattern' => '/(.+)?Interface$/',

        /**
         * Строка которая добавляется перед  заготовкой имени сущности полученной в результате
         * примерения @see \Nnx\Doctrine\Options\ModuleOptions::$entityBodyNamePattern к имени интерфейса.
         */
        'entityNamePrefix' => '',

        /**
         * Строка которая добавляется после заготовки имени сущности полученной в результате примерения
         * @see \Nnx\Doctrine\Options\ModuleOptions::$entityBodyNamePattern к имени интерфейса.
         */
        'entityNamePostfix' => ''
    ]
];

return array_merge_recursive(
    include __DIR__ . '/moduleOptions.config.php',
    include __DIR__ . '/doctrineObjectManager.config.php',
    include __DIR__ . '/entityManager.config.php',
    include __DIR__ . '/serviceManager.config.php',
    include __DIR__ . '/controllers.config.php',
    include __DIR__ . '/console.config.php',

    $config
);