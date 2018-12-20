<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';



session_start();


$settings = require '../src/setting.php';

$app = new \Slim\App($settings);


require '../src/dependencies.php';

// Register middleware
//require __DIR__ . '../src/middleware.php';

// Register routes
require '../src/routes.php';

//$app = new \Slim\App;
//$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
 //   $name = $args['name'];
   // $response->getBody()->write("Hello, $name");

  //  return $response;
//});

$app->run();

?>