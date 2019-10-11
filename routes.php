<?php

/*
 * Опредеяет маршруты, которые будут добавлены
 * к экземпляру маршрутизатора
 */
$router->define([
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'about/blog' => 'controllers/about-blog.php',
    'contact' => 'controllers/contact.php',
]);