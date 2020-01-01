<?php

$app = new \Mild\Application(dirname(__DIR__));

$app->bind('config.path', path('config'));

$app->bind('config.cache.path', path('bootstrap/cache/config.php'));

$app->bind('route.cache.path', path('bootstrap/cache/routes.php'));

$app->set(\Mild\Contract\ErrorHandlerInterface::class, \App\ErrorHandler::class);

return $app;