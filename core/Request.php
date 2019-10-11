<?php


/**
 * Class Request отвечает за выборку о текущем запросе
 */
class Request
{
    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}