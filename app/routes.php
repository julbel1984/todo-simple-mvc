<?php

/*
 * Опредеяет маршруты, которые будут добавлены
 * к экземпляру маршрутизатора
 */

/*
 * Get routes
 */
$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');

//$router->get('about/blog', 'controllers/about-blog.php');

$router->get('contact', 'PagesController@contact');
$router->get('users', 'UsersController@index');

/*
 * Post routes
 */
$router->post('users', 'UsersController@store');

