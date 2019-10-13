<?php

namespace App\Core;

/**
 * Class Router маршрутизатор
 */
class Router
{
    /**
     * Текущий маршрут
     *
     * @var array
     */
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    /**
     *
     *
     * @param $uri
     * @param $controller
     */
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    /**
     *
     *
     * @param $uri
     * @param $controller
     */
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    /**
     * Направляет трафик с uri, на связанный с ним контроллер
     *
     * @param $uri
     * @param $requestType
     * @return mixed
     * @throws Exception
     */
    public function direct($uri, $requestType)
    {
        if (!array_key_exists($uri, $this->routes[$requestType])) {

//            return $this->callAction(
//                ...explode('@', $this->routes[$requestType][$uri])
//            );

            throw new Exception('Не определен маршрут для этого uri');
        }
        $args = explode('@', $this->routes[$requestType][$uri]);
        return $this->callAction(...$args);

        // throw new Exception('Не определен маршрут для этого uri');
    }

    /**
     * Вызывает action для данного controller
     *
     * @param $controller
     * @param $action
     * @return mixed
     * @throws Exception
     */
    protected function callAction($controller, $action)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (!method_exists($controller, $action)) {
            throw new Exception("{$controller} не отвечает на действия {$action}");
        }

        return $controller->$action();
    }
}