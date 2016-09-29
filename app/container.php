<?php

use Slim\Views\Twig as View;
use Slim\Views\TwigExtension as TwigExtension;
use Interop\Container\ContainerInterface;
use App\Models\User;

return [

  View::class => function (ContainerInterface $container){
    $view = new View(__DIR__ .'/../resources/views');

    $view->addExtension(new TwigExtension(
      $container->get('router'),
      $container->get('request')->getUri()
    ));

    return $view;
  },

  User::class => function (ContainerInterface $container){
      return new User;
  },

];
