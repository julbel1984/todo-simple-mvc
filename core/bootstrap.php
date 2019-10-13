<?php

/**
 * Создает ключ с именем config, который имеет массив config.php
 * в качестве значения, а затем сохраняет пару ключ-значение
 * в контейнере DI
 */
App::bind('config', require 'config.php');

/**
 * Создает ключ с именем database,
 * значение которого является экземпляром QueryBuilder
 * и сохраняет его в контейнере DI
 */
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));