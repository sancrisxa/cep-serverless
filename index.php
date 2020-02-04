<?php

declare(strict_types=1);

use Slim\Http\Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require __DIR__.'/vendor/autoload.php';

$slim = new Slim\App();

$slim->get('/cep/{cep}', function (Request $request, Response $response) {
    return $response->withJson([
        'cep' => $request->getAttribute('cep'),
        'rua' => 'Rua do Cruzeiro',
        'bairro' => 'Cruzeiro',
        'cidade' => 'Belo Horizonte',
        'uf' => 'MG',
    ]);
});

$slim->run();
