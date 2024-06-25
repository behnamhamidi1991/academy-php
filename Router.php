<?php 

// $routes =  require basePath('routes.php');

// if(array_key_exists($uri, $routes)) {
//     require(basePath($routes[$uri]));
// } else {
//     http_response_code(404);
//     require basePath($routes['404']);
// }

class Router {
    protected $routes = [];



/**
 * Add a GET route
 * 
 * @param string $uri
 * @param string $controller
 * @return void
 */
public function get($uri, $controller) {

}

/**
 * Add a POST route
 * 
 * @param string $uri
 * @param string $controller
 * @return void
 */
public function post($uri, $controller) {
    
}

/**
 * Add a PUT route
 * 
 * @param string $uri
 * @param string $controller
 * @return void
 */
public function put($uri, $controller) {
    
}


/**
 * Add a DELETE route
 * 
 * @param string $uri
 * @param string $controller
 * @return void
 */
public function delete($uri, $controller) {
    
}

}