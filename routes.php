<?php 



$router->get('/', 'controllers/home.php');
$router->get('/blog', 'controllers/blog/index.php');
$router->get('/blog/create', 'controllers/blog/create.php');
$router->get('/courses', 'controllers/courses/index.php');
$router->get('/courses/create', 'controllers/courses/create.php');