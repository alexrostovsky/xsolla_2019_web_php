<?php
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
require 'vendor/autoload.php';
$app = new \Slim\App();
$app->get('/', function (Request $request, Response $response, $args = []) {
    $response->getBody()->write("Well hello");
    return $response;
});

$app->get('/{name}', function (Request $request, Response $response, $args = []) { 
	$name = $args['name'];
	return $response->getBody()->write("Well hello, ${name}");
});

$app->run();