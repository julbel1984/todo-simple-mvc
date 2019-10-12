<?php

require 'core/bootstrap.php';

/**
 * Отправляем маршруты в маршрутизатор, а затем направляем
 * на контроллеры, связанные с uri на основе метода запроса get, post
 */
require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());