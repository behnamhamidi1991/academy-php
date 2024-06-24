<?php
require '../helpers.php';

$routes = [
    '/' => 'controllers/home.php',
    '/blog' => 'controllers/blog/index.php',
    '/blog/create' => 'controllers/blog/create.php',
<<<<<<< HEAD
    '404' => 'controllers/error/404.php'
=======
    '404' => 'controllers/error/404.php',
>>>>>>> c9b4d6ccceb0207ea455c750a938fe0710d06494
];


$uri = $_SERVER['REQUEST_URI'];

if (array_key_exists($uri, $routes)) {
    require(basePath($routes[$uri]));
} else {
    require basePath($routes['404']);
}

