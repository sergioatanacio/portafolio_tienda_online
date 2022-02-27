<?php
/**
 * Tratando de crear un sistema de rutas
 */
require __DIR__ . './../app_backend/app.php';

$request_uri = isset($_SERVER['REQUEST_URI']) 
    ? explode('?', $_SERVER['REQUEST_URI'])
    : '/';

$route_without_get = is_array($request_uri) 
    ? $request_uri[0]
    : $request_uri;

($route_without_get == '/')
    ? header('Location: '.'/index.html')
    : print($response[$route_without_get] ?? 'Error 404');

