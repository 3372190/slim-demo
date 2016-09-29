<?php

use Slim\Views\Twig as View;
use Slim\Views\TwigExtension as TwigExtension;
use Interop\Container\ContainerInterface;
use App\Models\User;

return [

  //Create Container callback to Initialize Class Object!!
  View::class => function (ContainerInterface $container){
    $view = new View(__DIR__ .'/../resources/views');

    /**
     * Initialize TwigExtension Helpers Method
     * Eg: path_for()
     */
    $view->addExtension(new TwigExtension(
      $container->get('router'),
      $container->get('request')->getUri()
    ));

    return $view;
  },

  //Initialize User Class with Container CallBack function!
  User::class => function (ContainerInterface $container){
      return new User;
  },

];
