<?php

require 'rotas.php';
$request_uri = $_SERVER['REQUEST_URI'];

$rotas = [
    '/' => 'HomeController@index',
    '/ecoturismo' => 'EcoturismoController@index',
    '/trilhas' => 'TrilhasController@index',
];

if(array_key_exists($request_uri, $rotas)){
    list($controller, $action) = explode('@', $rotas[$request_uri]);
    require 'controllers/' . $controller . '.php';
    $controllerInstancia = new $controller();
    $controllerInstancia->$action();
}else{
    header("HTTP/1.0 404 Not Found");
    echo 'Página não encontrada.';
}