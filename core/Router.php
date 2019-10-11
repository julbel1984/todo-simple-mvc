<?php

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
    protected $routes = [];

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    /**
     * @param $routes
     */
    public function define($routes)
    {
        $this->routes = $routes;
    }

    /**
     * Направляет трафик с uri, на связанный с ним контроллер
     *
     * @param $uri
     * @return mixed
     * @throws Exception
     */
    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception('Не определен маршрут для этого uri');
    }
}