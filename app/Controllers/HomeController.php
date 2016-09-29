<?php

namespace App\Controllers;

use Slim\Views\Twig as View;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
Use App\Models\User;

class HomeController
{
    public function index(Response $response, Request $request, View $view, User $user)
    {
        return $view->render($response, 'index.twig');
    }
}
