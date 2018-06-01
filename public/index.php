<?php

require_once '../config/app.php';
require_once '../vendor/leziak/mvc/routing.php';
require_once '../vendor/leziak/mvc/db.php';
require_once '../app/Song.php';
require_once '../app/Author.php';


$controller_name = \leziak\mvc\routing\getControllerFromUrl();

$controller_class = ucfirst(strtolower($controller_name)) . 'Controller';

require '../app/Http/controllers/' . $controller_class . '.php';

$controller_class = '\\App\\Http\\controllers\\' . $controller_class;


$controller = new $controller_class();

$controller->index();

