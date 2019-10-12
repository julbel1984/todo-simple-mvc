<?php

/*
 * Опредеяет маршруты, которые будут добавлены
 * к экземпляру маршрутизатора
 */

/*
 * Get routes
 */
$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('about/blog', 'controllers/about-blog.php');
$router->get('contact', 'controllers/contact.php');

/*
 * Post routes
 */
$router->post('names', 'controllers/add-name.php');
